<?php

declare(strict_types=1);

namespace Modules\Lang\Models\Policies;

use Modules\Lang\Models\TranslationFile;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 1e3d805 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 5ad6943 (.)

class TranslationFilePolicy extends LangBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1e3d805 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.viewAny');
>>>>>>> 5ad6943 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.view');
=======
    public function view(ProfileContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1e3d805 (.)
=======
    public function view(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.view');
>>>>>>> 5ad6943 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1e3d805 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.create');
>>>>>>> 5ad6943 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.update');
=======
    public function update(ProfileContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1e3d805 (.)
=======
    public function update(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.update');
>>>>>>> 5ad6943 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.delete');
=======
    public function delete(ProfileContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1e3d805 (.)
=======
    public function delete(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.delete');
>>>>>>> 5ad6943 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.restore');
=======
    public function restore(ProfileContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1e3d805 (.)
=======
    public function restore(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.restore');
>>>>>>> 5ad6943 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.forceDelete');
    }
}
=======
    public function forceDelete(ProfileContract $user, TranslationFile $translation_file): bool
=======
    public function forceDelete(UserContract $user, TranslationFile $translation_file): bool
>>>>>>> 5ad6943 (.)
    {
        return $user->hasPermissionTo('translation_file.forceDelete');
    }
<<<<<<< HEAD
}
>>>>>>> 1e3d805 (.)
=======
}
>>>>>>> 5ad6943 (.)
