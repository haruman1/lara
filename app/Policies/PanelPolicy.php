<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Navbar;
use Illuminate\Auth\Access\HandlesAuthorization;

class PanelPolicy
{
    use HandlesAuthorization;

    public function accessPanel(AuthUser $authUser): bool
    {
        return $authUser->can('access_panel');
    }
}
