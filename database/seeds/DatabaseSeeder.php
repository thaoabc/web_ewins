<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         DB::table('role')->insert([
         [
             'id'=> 1,
             'name' => 'Quản trị viên',
         ],
         [
             'id'=> 2,
             'name' => 'Cộng tác viên',
         ],
        [
            'id'=> 3,
             'name' => 'Người dùng',
         ],

         ]);

         DB::table('admin')->insert([
             [
                 'id' => 1,
                 'name' =>'admin',
                'email' =>'admin@gmail.com',
                 'password' =>bcrypt(123456),
                 'phone' => '012345678',
                'level' =>1,
                 'status' =>1,
             ],
             [
                 'id' => 2,
                 'name' =>'editor',
                 'email' =>'editor@gmail.com',
                 'password' =>bcrypt(123456),
                 'phone' => '012345698',
                 'level' =>2,
                 'status' =>1,
             ],
             [
                 'id' => 3,
                 'name' =>'user',
                 'email' =>'user@gmail.com',
                 'password' =>bcrypt(123456),
                 'phone' => '012435678',
                 'level' =>3,
                'status' =>1,
            ],
    
         ]);
        DB::table('infor_company')->insert([
            [
                'id'=> 1,
                'name' => 'Công ty Công nghệ và Dịch vụ Talent Wins',
                'address' => 'Tòa CT2, khu đô thị Thái Hà Constrexim, 43 Phạm Văn Đồng, Hà Nội',
                'masothue' => '0108134425',
                'phone' => '0927151535',
                'email' => 'contact@talentwins.co',
            ]
    
        ]);
    }
}
