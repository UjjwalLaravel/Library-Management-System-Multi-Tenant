<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TenantAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tenants = Tenant::all();
        foreach ($tenants as $tenant) {
            User::create([
                'name' => $tenant->name . ' Admin',
                'email' => $tenant->email,
                'password' => Hash::make('password'), // Change before production!
                'role' => 'admin',
                'tenant_id' => $tenant->id,
            ]);
        }
    }
}
