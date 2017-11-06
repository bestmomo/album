<?php

namespace App\Listeners;

use App\Events\ImageSaving as EventImageSaving;

class ImageSaving
{
    /**
     * Handle the event.
     *
     * @param EventImageSaving|object $event
     * @return void
     */
    public function handle(EventImageSaving $event)
    {
        $event->model->slug = str_slug(request()->name, '-');
    }
}
