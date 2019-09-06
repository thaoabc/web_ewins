<?php

use Illuminate\Database\Seeder;

class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->delete();
        DB::table('product')->insert([
            ['id'=>1,'name'=>'Phần mềm quản lý cấp phát văn bằng chứng chỉ','link'=>'https://www.kiotviet.vn/dang-ky/?refcode=568&gclid=Cj0KCQjwwb3rBRDrARIsALR3XeaNL_r6IFGWdpqBs3kdh5fX0qWnyZnmHiaNLbZClUANxw8dUeBi87EaAnj3EALw_wcB','slug'=>'Phan-mem-quan-ly-cap-phat-van-bang-chung-chi'],
            ['id'=>2,'name'=>'Phần mềm quản lý cấp phát văn bằng chứng chỉ','link'=>'https://www.kiotviet.vn/dang-ky/?refcode=568&gclid=Cj0KCQjwwb3rBRDrARIsALR3XeaNL_r6IFGWdpqBs3kdh5fX0qWnyZnmHiaNLbZClUANxw8dUeBi87EaAnj3EALw_wcB','slug'=>'Phan-mem-quan-ly-cap-phat-van-bang-chung-chi'],
            ['id'=>3,'name'=>'Phần mềm quản lý cấp phát văn bằng chứng chỉ','link'=>'https://www.kiotviet.vn/dang-ky/?refcode=568&gclid=Cj0KCQjwwb3rBRDrARIsALR3XeaNL_r6IFGWdpqBs3kdh5fX0qWnyZnmHiaNLbZClUANxw8dUeBi87EaAnj3EALw_wcB','slug'=>'Phan-mem-quan-ly-cap-phat-van-bang-chung-chi'],
            ['id'=>4,'name'=>'Phần mềm quản lý cấp phát văn bằng chứng chỉ','link'=>'https://www.kiotviet.vn/dang-ky/?refcode=568&gclid=Cj0KCQjwwb3rBRDrARIsALR3XeaNL_r6IFGWdpqBs3kdh5fX0qWnyZnmHiaNLbZClUANxw8dUeBi87EaAnj3EALw_wcB','slug'=>'Phan-mem-quan-ly-cap-phat-van-bang-chung-chi'],
            ['id'=>5,'name'=>'Phần mềm quản lý cấp phát văn bằng chứng chỉ','link'=>'https://www.kiotviet.vn/dang-ky/?refcode=568&gclid=Cj0KCQjwwb3rBRDrARIsALR3XeaNL_r6IFGWdpqBs3kdh5fX0qWnyZnmHiaNLbZClUANxw8dUeBi87EaAnj3EALw_wcB','slug'=>'Phan-mem-quan-ly-cap-phat-van-bang-chung-chi'],
            ['id'=>6,'name'=>'Phần mềm quản lý cấp phát văn bằng chứng chỉ','link'=>'https://www.kiotviet.vn/dang-ky/?refcode=568&gclid=Cj0KCQjwwb3rBRDrARIsALR3XeaNL_r6IFGWdpqBs3kdh5fX0qWnyZnmHiaNLbZClUANxw8dUeBi87EaAnj3EALw_wcB','slug'=>'Phan-mem-quan-ly-cap-phat-van-bang-chung-chi'],
            ['id'=>7,'name'=>'Phần mềm quản lý cấp phát văn bằng chứng chỉ','link'=>'https://www.kiotviet.vn/dang-ky/?refcode=568&gclid=Cj0KCQjwwb3rBRDrARIsALR3XeaNL_r6IFGWdpqBs3kdh5fX0qWnyZnmHiaNLbZClUANxw8dUeBi87EaAnj3EALw_wcB','slug'=>'Phan-mem-quan-ly-cap-phat-van-bang-chung-chi'],
            ['id'=>8,'name'=>'Phần mềm quản lý cấp phát văn bằng chứng chỉ','link'=>'https://www.kiotviet.vn/dang-ky/?refcode=568&gclid=Cj0KCQjwwb3rBRDrARIsALR3XeaNL_r6IFGWdpqBs3kdh5fX0qWnyZnmHiaNLbZClUANxw8dUeBi87EaAnj3EALw_wcB','slug'=>'Phan-mem-quan-ly-cap-phat-van-bang-chung-chi'],
            ['id'=>9,'name'=>'Phần mềm quản lý cấp phát văn bằng chứng chỉ','link'=>'https://www.kiotviet.vn/dang-ky/?refcode=568&gclid=Cj0KCQjwwb3rBRDrARIsALR3XeaNL_r6IFGWdpqBs3kdh5fX0qWnyZnmHiaNLbZClUANxw8dUeBi87EaAnj3EALw_wcB','slug'=>'Phan-mem-quan-ly-cap-phat-van-bang-chung-chi'],
            ['id'=>10,'name'=>'Phần mềm quản lý cấp phát văn bằng chứng chỉ','link'=>'https://www.kiotviet.vn/dang-ky/?refcode=568&gclid=Cj0KCQjwwb3rBRDrARIsALR3XeaNL_r6IFGWdpqBs3kdh5fX0qWnyZnmHiaNLbZClUANxw8dUeBi87EaAnj3EALw_wcB','slug'=>'Phan-mem-quan-ly-cap-phat-van-bang-chung-chi'],

                   
        ]);
    }
}
