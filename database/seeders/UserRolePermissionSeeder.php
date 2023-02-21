<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultUser = [
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
        DB::beginTransaction();
        try {
            $it = User::create(array_merge([
                'email' => 'it@gmail.com',
                'name'  => 'it'
            ], $defaultUser));

            $staff = User::create(array_merge([
                'email' => 'staff@gmail.com',
                'name'  => 'staff'
            ], $defaultUser));

            $guru = User::create(array_merge([
                'email' => 'guru@gmail.com',
                'name'  => 'guru'
            ], $defaultUser));

            $role_it = Role::create(['name' => 'it']);
            $role_staff = Role::create(['name' => 'staff']);
            $role_guru = Role::create(['name' => 'guru']);

            $permission = Permission::create(['name' => 'read role']);
            $permission = Permission::create(['name' => 'create role']);
            $permission = Permission::create(['name' => 'update role']);
            $permission = Permission::create(['name' => 'delete role']);

            $role_it->givePermissionTo('read role');
            $role_it->givePermissionTo('create role');
            $role_it->givePermissionTo('update role');
            $role_it->givePermissionTo('delete role');

            $it->assignRole('it');
            $staff->assignRole('staff');
            $guru->assignRole('guru');

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}
