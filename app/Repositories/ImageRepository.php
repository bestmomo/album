<?php

namespace App\Repositories;

use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;

class ImageRepository
{
    /**
     * Store image.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function store($request)
    {
        // Save image
        $path = Storage::disk('images')->put('', $request->file('image'));

        // Save thumb
        $image = InterventionImage::make($request->file('image'))->widen(500);
        Storage::disk('thumbs')->put($path, $image->encode());

        // Save in base
        $image = new Image;
        $image->description = $request->description;
        $image->category_id = $request->category_id;
        $image->name = $path;
        $image->user_id = auth()->id();
        $image->save();
    }

    /**
     * Get images for category.
     *
     * @param  string  $slug
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function getImagesForCategory($slug)
    {
        return Image::latestWithUser()->whereHas('category', function ($query) use ($slug) {
            $query->whereSlug($slug);
        })->paginate(config('app.pagination'));
    }

    /**
     * Get images for user.
     *
     * @param  integer  $id
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function getImagesForUser($id)
    {
        return Image::latestWithUser()->whereHas('user', function ($query) use ($id) {
            $query->whereId($id);
        })->paginate(config('app.pagination'));
    }

    /**
     * Get all orphans images.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getOrphans()
    {
        $files = collect(Storage::disk('images')->files());
        $images = Image::select('name')->get()->pluck('name');
        return $files->diff($images);
    }

    /**
     * Destroy orphans images.
     *
     * @return \Illuminate\Support\Collection
     */
    public function destroyOrphans()
    {
        $orphans = $this->getOrphans ();

        foreach($orphans as $orphan) {
            Storage::disk('images')->delete($orphan);
            Storage::disk('thumbs')->delete($orphan);
        }
    }
}