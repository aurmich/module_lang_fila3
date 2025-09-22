<?php

declare(strict_types=1);

namespace Modules\Lang\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 1e3d805 (.)
=======
use Modules\Xot\Contracts\ProfileContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 5f569bd (.)
>>>>>>> b9bd552 (.)
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 76523cd (.)
use Modules\Xot\Datas\XotData;

abstract class LangBasePolicy
{
    use HandlesAuthorization;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function before(UserContract $user, string $_ability): null|bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')) {
=======
=======
>>>>>>> b9bd552 (.)
=======
>>>>>>> 76523cd (.)
    public function before(ProfileContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')/** @phpstan-ignore method.nonObject */) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1e3d805 (.)
=======
=======
    public function before(UserContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')) {
>>>>>>> 5f569bd (.)
>>>>>>> b9bd552 (.)
=======
>>>>>>> 76523cd (.)
            return true;
        }

        return null;
    }
}
