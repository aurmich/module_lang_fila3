<?php

declare(strict_types=1);

namespace Modules\Lang\Models\Policies;

use Modules\Lang\Models\Translation;
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 5f569bd (.)

class TranslationPolicy extends LangBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('translation.viewAny'); /** @phpstan-ignore method.nonObject */
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation.viewAny');
>>>>>>> 5f569bd (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(ProfileContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.view'); /** @phpstan-ignore method.nonObject */
=======
    public function view(UserContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.view');
>>>>>>> 5f569bd (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('translation.create'); /** @phpstan-ignore method.nonObject */
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation.create');
>>>>>>> 5f569bd (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(ProfileContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.update'); /** @phpstan-ignore method.nonObject */
=======
    public function update(UserContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.update');
>>>>>>> 5f569bd (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(ProfileContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.delete'); /** @phpstan-ignore method.nonObject */
=======
    public function delete(UserContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.delete');
>>>>>>> 5f569bd (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(ProfileContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.restore'); /** @phpstan-ignore method.nonObject */
=======
    public function restore(UserContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.restore');
>>>>>>> 5f569bd (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
    public function forceDelete(ProfileContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.forceDelete'); /** @phpstan-ignore method.nonObject */
    }
}
=======
    public function forceDelete(UserContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.forceDelete');
    }
}
>>>>>>> 5f569bd (.)
