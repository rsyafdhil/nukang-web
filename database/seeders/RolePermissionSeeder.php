<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mitra Permission
        Permission::create(['name' => 'tambah-pegawai']);
        Permission::create(['name' => 'edit-pegawai']);
        Permission::create(['name' => 'update-pegawai']);
        Permission::create(['name' => 'hapus-pegawai']);

        Permission::create(['name' => 'tambah-post']);
        Permission::create(['name' => 'edit-post']);
        Permission::create(['name' => 'update-post']);
        Permission::create(['name' => 'hapus-post']);

        // Admin Permission
        Permission::create(['name' => 'tambah-mitra']);
        Permission::create(['name' => 'edit-mitra']);
        Permission::create(['name' => 'update-mitra']);
        Permission::create(['name' => 'hapus-mitra']);

        Role::create(['name' => 'mitra'])->givePermissionTo([
            'tambah-pegawai',
            'edit-pegawai',
            'update-pegawai',
            'hapus-pegawai',
            'tambah-post',
            'edit-post',
            'update-post',
            'hapus-post',
        ]);

        Role::create(['name' => 'admin'])->givePermissionTo([
            'tambah-mitra',
            'edit-mitra',
            'update-mitra',
            'hapus-mitra',
        ]);
    }
}
