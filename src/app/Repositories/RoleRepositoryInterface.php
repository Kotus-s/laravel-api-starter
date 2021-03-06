<?php

namespace App\Repositories;

use App\Models\Role;

interface RoleRepositoryInterface extends EloquentRepositoryInterface
{
    /**
     * Return the default role of the application.
     *
     * @return Role
     */
    public function findDefault(): Role;
}
