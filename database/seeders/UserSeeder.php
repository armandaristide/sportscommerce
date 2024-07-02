<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userObj = new User();
        $userObj->name = 'User Rafi';
        $userObj->username = 'UserRafi_U001';
        $userObj->email = 'userRafi@gmail.com';
        $userObj->phone = '0000000000';
        $userObj->password = Hash::make('123456789');
        $userObj->type = 0;
        $userObj->save();

        $adminObj = new User();
        $adminObj->name = 'Admin Rafi';
        $adminObj->username = 'AdminRafi_S001';
        $adminObj->email = 'adminRafi@gmail.com';
        $adminObj->phone = '0000000001';
        $adminObj->password = Hash::make('seller@12345');
        $adminObj->type = 1;
        $adminObj->save();

        $superAdminObj = new User();
        $superAdminObj->name = 'Super Admin Rafi';
        $superAdminObj->username = 'SuperAdminRafi_SA001';
        $superAdminObj->email = 'superAdminRafi@gmail.com';
        $superAdminObj->phone = '0000000002';
        $superAdminObj->password = Hash::make('superadmin@9876');
        $superAdminObj->type = 2;
        $superAdminObj->save();

    }


}
