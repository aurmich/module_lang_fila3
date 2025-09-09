<?php

declare(strict_types=1);

namespace Modules\Lang\Models\Policies;

use Modules\Lang\Models\Post;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 1e3d805 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 5ad6943 (.)

class PostPolicy extends LangBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('post.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('post.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1e3d805 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('post.viewAny');
>>>>>>> 5ad6943 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.view');
=======
    public function view(ProfileContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1e3d805 (.)
=======
    public function view(UserContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.view');
>>>>>>> 5ad6943 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('post.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('post.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1e3d805 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('post.create');
>>>>>>> 5ad6943 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.update');
=======
    public function update(ProfileContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1e3d805 (.)
=======
    public function update(UserContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.update');
>>>>>>> 5ad6943 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.delete');
=======
    public function delete(ProfileContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1e3d805 (.)
=======
    public function delete(UserContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.delete');
>>>>>>> 5ad6943 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.restore');
=======
    public function restore(ProfileContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1e3d805 (.)
=======
    public function restore(UserContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.restore');
>>>>>>> 5ad6943 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.forceDelete');
    }
}
=======
    public function forceDelete(ProfileContract $user, Post $post): bool
=======
    public function forceDelete(UserContract $user, Post $post): bool
>>>>>>> 5ad6943 (.)
    {
        return $user->hasPermissionTo('post.forceDelete');
    }
<<<<<<< HEAD
}
>>>>>>> 1e3d805 (.)
=======
}
>>>>>>> 5ad6943 (.)
