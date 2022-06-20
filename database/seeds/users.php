<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();
        DB::table('users')->insert([
            ['id'=>1,'email'=>'admin@gmail.com','password'=>bcrypt('123456'),'fullname'=>'Phạm quốc phong','address'=>'Hà Nội','phone'=>'098999999','level'=>2],
            ['id'=>2,'email'=>'member@gmail.com','password'=>bcrypt('123456'),'fullname'=>'Hoàng xuân tiến','address'=>'Nghệ An','phone'=>'0978889999','level'=>1],
            ['id'=>3,'email'=>'dovancuong@gmail.com','password'=>bcrypt('123456'),'fullname'=>'Đỗ văn cường','address'=>'Thái bình','phone'=>'0369875412','level'=>1],

        ]);
    }
}
