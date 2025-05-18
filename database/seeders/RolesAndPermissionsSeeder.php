<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
        $ArrayOfPermissionName = [
            'عرض إدارة بريد التواصل' , 'الرد على رسائل بريد التواصل' , 'حذف بريد التواصل',
            'عرض الإعدادات العامة', 'تعديل الإعدادات العامة' , 
            'عرض إعدادات بيانات التواصل' , 'إضافة إعدادات بيانات التواصل' , 'تعديل إعدادات بيانات التواصل' , 'حذف إعدادات بيانات التواصل',
            'عرض الأدوار والصلاحيات' , 'إضافة الأدوار والصلاحيات' , 'تعديل الأدوار والصلاحيات' ,  'حذف الأدوار والصلاحيات',
            'عرض المستخدمين' , 'إضافة مستخدمين' , 'تعديل المستخدمين' , 'حذف المستخدمين',
        ];

        $permission = collect($ArrayOfPermissionName)->map(function($permission){
            return ['name' => $permission , 'guard_name' => 'web'];
        });

        Permission::insert($permission->toArray());

        $role = Role::create(['name' => 'super_admin'])->givepermissionTo($ArrayOfPermissionName);
    }
}
