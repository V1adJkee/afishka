<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create basic roles
        $moderatorRole = Role::create([
            'name' => 'Модератор'
        ]);
        $organizerRole = Role::create([
            'name' => 'Оргазинатор'
        ]);
        $userRole = Role::create([
            'name' => 'Пользователь'
        ]);

        // Create basic permissions
        // For moderator
        $permissionRequestCanFullControl = Permission::create([
            'name' => 'request-can-full-control'
        ]);

        $permissionEventCanFullControl = Permission::create([
            'name' => 'event-can-full-control'
        ]);

        // For organizer
        $permissionRequestCanCreate = Permission::create([
            'name' => 'request-can-create'
        ]);
        $permissionRequestCanCancel = Permission::create([
            'name' => 'request-can-cancel'
        ]);
        $permissionRequestCanEdit = Permission::create([
            'name' => 'request-can-edit'
        ]);

        // Give permission for roles
        // For moderator
        $moderatorRole->givePermissionTo($permissionEventCanFullControl);
        $moderatorRole->givePermissionTo($permissionRequestCanFullControl);

        // For organizer
        $organizerRole->givePermissionTo($permissionRequestCanCreate);
        $organizerRole->givePermissionTo($permissionRequestCanCancel);
        $organizerRole->givePermissionTo($permissionRequestCanEdit);
    }
}
