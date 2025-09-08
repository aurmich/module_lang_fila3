<?php

declare(strict_types=1);

namespace Modules\Lang\Models\Policies;

use Modules\Lang\Models\Post;
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 5f569bd (.)

class PostPolicy extends LangBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('post.viewAny'); /** @phpstan-ignore method.nonObject */
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('post.viewAny');
>>>>>>> 5f569bd (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(ProfileContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.view'); /** @phpstan-ignore method.nonObject */
=======
    public function view(UserContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.view');
>>>>>>> 5f569bd (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('post.create'); /** @phpstan-ignore method.nonObject */
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('post.create');
>>>>>>> 5f569bd (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(ProfileContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.update'); /** @phpstan-ignore method.nonObject */
=======
    public function update(UserContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.update');
>>>>>>> 5f569bd (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(ProfileContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.delete'); /** @phpstan-ignore method.nonObject */
=======
    public function delete(UserContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.delete');
>>>>>>> 5f569bd (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(ProfileContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.restore'); /** @phpstan-ignore method.nonObject */
=======
    public function restore(UserContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.restore');
>>>>>>> 5f569bd (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
    public function forceDelete(ProfileContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.forceDelete'); /** @phpstan-ignore method.nonObject */
    }
}
=======
    public function forceDelete(UserContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.forceDelete');
    }
}
>>>>>>> 5f569bd (.)
