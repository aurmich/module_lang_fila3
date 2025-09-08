<?php

declare(strict_types=1);

namespace Modules\Lang\Models\Policies;

use Modules\Lang\Models\TranslationFile;
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 5f569bd (.)

class TranslationFilePolicy extends LangBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.viewAny'); /** @phpstan-ignore method.nonObject */
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.viewAny');
>>>>>>> 5f569bd (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(ProfileContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.view'); /** @phpstan-ignore method.nonObject */
=======
    public function view(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.view');
>>>>>>> 5f569bd (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.create'); /** @phpstan-ignore method.nonObject */
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.create');
>>>>>>> 5f569bd (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(ProfileContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.update'); /** @phpstan-ignore method.nonObject */
=======
    public function update(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.update');
>>>>>>> 5f569bd (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(ProfileContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.delete'); /** @phpstan-ignore method.nonObject */
=======
    public function delete(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.delete');
>>>>>>> 5f569bd (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(ProfileContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.restore'); /** @phpstan-ignore method.nonObject */
=======
    public function restore(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.restore');
>>>>>>> 5f569bd (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
    public function forceDelete(ProfileContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.forceDelete'); /** @phpstan-ignore method.nonObject */
    }
}
=======
    public function forceDelete(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.forceDelete');
    }
}
>>>>>>> 5f569bd (.)
