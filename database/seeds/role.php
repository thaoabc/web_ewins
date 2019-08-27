<?php

use Illuminate\Database\Seeder;

class role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->delete();
        DB::table('role')->insert([
            ['id'=>1,'name'=>'Quản Trị Viên'],
            ['id'=>2,'name'=>'Cộng tác viên'],
            ['id'=>3,'name'=>'Người Dùng'],          
        ]);
    }
}
