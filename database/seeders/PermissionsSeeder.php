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
        $eventRequestCanCreate = Permission::create([
            'name' => 'event-can-create'
        ]);
        $eventRequestCanCancel = Permission::create([
            'name' => 'event-can-cancel'
        ]);
        $eventRequestCanEdit = Permission::create([
            'name' => 'event-can-edit'
        ]);

        // For user
        $permissionRequestCanCreate = Permission::create([
            'name' => 'request-can-create'
        ]);

        // Give permission for roles
        // For moderator
        $moderatorRole->givePermissionTo($permissionEventCanFullControl);
        $moderatorRole->givePermissionTo($permissionRequestCanFullControl);

        // For organizer
        $organizerRole->givePermissionTo($eventRequestCanCreate);
        $organizerRole->givePermissionTo($eventRequestCanCreate);
        $organizerRole->givePermissionTo($eventRequestCanEdit);

        // For user
        $userRole->givePermissionTo($permissionRequestCanCreate);
    }
}
