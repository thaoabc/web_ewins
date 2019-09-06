<?php

use Illuminate\Database\Seeder;

class introduce extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('introduce')->delete();
        DB::table('introduce')->insert([
            ['id'=>1,'name'=>'Công ty Talent Wins','content'=>'Đã từ lâu các nhà tâm lý học phát triển các bộ công cụ bằng bảng hỏi để kiểm tra một số khả năng, tiềm năng của con người như khả năng xử lý con số, sử dụng ngôn ngữ, thông minh...','slug'=>'Công-ty-Talent-Wins','status'=>1],
            ['id'=>2,'name'=>'E-Learning','content'=>'Đã từ lâu các nhà tâm lý học phát triển các bộ công cụ bằng bảng hỏi để kiểm tra một số khả năng, tiềm năng của con người như khả năng xử lý con số, sử dụng ngôn ngữ, thông minh...','slug'=>'E-Learning','status'=>1],
            ['id'=>3,'name'=>'Ban cố vấn','content'=>'Đã từ lâu các nhà tâm lý học phát triển các bộ công cụ bằng bảng hỏi để kiểm tra một số khả năng, tiềm năng của con người như khả năng xử lý con số, sử dụng ngôn ngữ, thông minh...','slug'=>'Ban-co-van','status'=>1],
                   
        ]);
    }
}
