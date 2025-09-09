<?php

declare(strict_types=1);

namespace Modules\Lang\Models\Policies;

<<<<<<< HEAD
use Modules\Xot\Models\Policies\XotBasePolicy;

abstract class LangBasePolicy extends XotBasePolicy {}
=======
use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Datas\XotData;

abstract class LangBasePolicy
{
    use HandlesAuthorization;

    public function before(ProfileContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')/** @phpstan-ignore method.nonObject */) {
            return true;
        }

        return null;
    }
}
>>>>>>> ff3bb05 (.)
