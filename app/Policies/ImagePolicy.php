<?php

namespace App\Policies;

use App\Models\ { User, Image };
use Illuminate\Auth\Access\HandlesAuthorization;

class ImagePolicy
{
    use HandlesAuthorization;

    /**
     * Grant all abilities to administrator.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function before(User $user)
    {
        if ($user->role === 'admin') {
            return true;
        }
    }

    /**
     * Determine whether the user can delete the image.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Image $image
     * @return mixed
     */
    public function delete(User $user, Image $image)
    {
        return $user->id === $image->user_id;
    }
}
