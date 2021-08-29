<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    protected $defaultUsers = [
        [
            'name' => 'Joshua1',
            'email' => 'joshua@example.com1',
            'role_id' => '1',
        ],
        [
            'name' => 'Joshua2',
            'email' => 'joshua@example.com2',
            'role_id' => '2',
        ],
        [
            'name' => 'Joshua3',
            'email' => 'joshua@example.com3',
            'role_id' => '3',
        ],
    ];

    public function run()
    {
        Users::truncate();

        foreach ($this->defaultUsers as $defaultUser) {
            $user = Users::create([
                'name' => $defaultUser['name'],
                'email' => $defaultUser['email'],
                'role_id' => $defaultUser['role_id'],
            ]);
        }
    }
}
