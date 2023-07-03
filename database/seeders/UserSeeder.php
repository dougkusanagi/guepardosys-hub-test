<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()
            ->for(Tenant::first())
            ->create([
                'name' => 'Test User',
                'email' => 'example@email.com',
                'password' => bcrypt('password'),
                'tenant_id' => null,
            ]);

        Tenant::all()
            ->each(function (Tenant $tenant) {
                User::factory(2)
                    ->for($tenant)
                    ->create([
                        'password' => bcrypt('password'),
                    ]);
            });
    }
}
