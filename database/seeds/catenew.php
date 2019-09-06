<?php

use Illuminate\Database\Seeder;

class catenew extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cate_new')->delete();
        DB::table('cate_new')->insert([
            ['id'=>1,'name'=>'Kinh Doanh'],
            ['id'=>2,'name'=>'Giải Trí'],
            ['id'=>3,'name'=>'Đời Sống'],
            ['id'=>4,'name'=>'Pháp Luật'],
                   
        ]);
    }
}
