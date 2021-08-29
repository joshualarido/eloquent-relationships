<?php

namespace Database\Seeders;

use App\Models\Users;
use App\Models\UsersNumbers;
use Illuminate\Database\Seeder;

class UsersNumbersTableSeeder extends Seeder
{
    protected $defaultUsersNumbers = [
        [
            'number' => '203710273180',
            'user_id' => '1',
        ],
        [
            'number' => '927130189023',
            'user_id' => '2',
        ],
        [
            'number' => '593083590909',
            'user_id' => '3',
        ],
    ];

    public function run()
    {
        UsersNumbers::truncate();

        foreach ($this->defaultUsersNumbers as $defaultUserNumber) {
            $userNumber = UsersNumbers::create([
                'number' => $defaultUserNumber['number'],
                'user_id' => $defaultUserNumber['user_id'],
            ]);
        }
    }
}
