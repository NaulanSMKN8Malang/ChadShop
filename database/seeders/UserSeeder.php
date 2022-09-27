<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            $inputan['name'] = 'Utara';
            $inputan['email'] = 'utara@gmail.com';//ganti pake emailmu
            $inputan['password'] = Hash::make('123258');//passwordnya 123258
            $inputan['phone'] = '085852527575';
            $inputan['alamat'] = 'malang';
            $inputan['role'] = 'admin';//kita akan membuat akun atau users in dengan role admin
            User::create($inputan);


    }
}
