<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Navbar;
use Illuminate\Auth\Access\HandlesAuthorization;

class NavbarPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Navbar');
    }

    public function view(AuthUser $authUser, Navbar $navbar): bool
    {
        return $authUser->can('View:Navbar');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Navbar');
    }

    public function update(AuthUser $authUser, Navbar $navbar): bool
    {
        return $authUser->can('Update:Navbar');
    }

    public function delete(AuthUser $authUser, Navbar $navbar): bool
    {
        return $authUser->can('Delete:Navbar');
    }

    public function restore(AuthUser $authUser, Navbar $navbar): bool
    {
        return $authUser->can('Restore:Navbar');
    }

    public function forceDelete(AuthUser $authUser, Navbar $navbar): bool
    {
        return $authUser->can('ForceDelete:Navbar');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Navbar');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Navbar');
    }

    public function replicate(AuthUser $authUser, Navbar $navbar): bool
    {
        return $authUser->can('Replicate:Navbar');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Navbar');
    }

}