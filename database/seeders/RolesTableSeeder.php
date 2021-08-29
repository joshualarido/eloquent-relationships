<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    protected $defaultRoles = [
        [
            'role_name' => 'author',
        ],
        [
            'role_name' => 'editor',
        ],
        [
            'role_name' => 'manager',
        ],
    ];

    public function run()
    {
        Roles::truncate();

        foreach ($this->defaultRoles as $defaultRole) {
            $role = Roles::create([
                'role_name' => $defaultRole['role_name'],
            ]);
        }
    }
}

