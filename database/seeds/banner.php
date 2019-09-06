<?php

use Illuminate\Database\Seeder;

class banner extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banner')->delete();
        DB::table('banner')->insert([
            ['id'=>1,'image'=>'panner-1.png','status'=>1],
            ['id'=>2,'image'=>'panner-2.png','status'=>1],
            ['id'=>3,'image'=>'panner-3.png','status'=>1],
                  
        ]);
    }
}
