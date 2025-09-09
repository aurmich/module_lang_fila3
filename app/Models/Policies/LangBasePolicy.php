<?php

declare(strict_types=1);

namespace Modules\Lang\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 1e3d805 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 5ad6943 (.)
use Modules\Xot\Datas\XotData;

abstract class LangBasePolicy
{
    use HandlesAuthorization;

<<<<<<< HEAD
<<<<<<< HEAD
    public function before(UserContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')) {
=======
    public function before(ProfileContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')/** @phpstan-ignore method.nonObject */) {
>>>>>>> 1e3d805 (.)
=======
    public function before(UserContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')) {
>>>>>>> 5ad6943 (.)
            return true;
        }

        return null;
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> 1e3d805 (.)
=======
}
>>>>>>> 5ad6943 (.)
