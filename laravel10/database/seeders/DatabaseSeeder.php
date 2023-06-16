<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $groupAdmin = \App\Models\AppUserGroup::firstOrCreate(['id' => 1 ], [
            'id' => 1,
            'slug' => 'admin',
            'name' => 'Admin',
        ]);

        $userAdmin = \App\Models\AppUser::firstOrCreate(['id' => 1 ], [
            'id' => 1,
            'name' => 'Admin',
            'email' => 'main@grr.la',
            'password' => \Hash::make('main@grr.la'),
            'group_id' => 1,
        ]);
    }
}
