<?php

use Illuminate\Database\Seeder;

class talentwins extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('talent_wins')->delete();
        DB::table('talent_wins')->insert([
            ['id'=>1,'title'=>'Talent Wins Technology','summary'=>'Bài học kinh doanh sâu sắc rút ra từ cuốn sách được cả Bill Gates và Warren Buffett khen là tuyệt vời nhất','content'=>'E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp ','status'=>1,'slug'=>'Talent-Wins-Technology'],
            ['id'=>2,'title'=>'Talent Wins Solution','summary'=>'Bài học kinh doanh sâu sắc rút ra từ cuốn sách được cả Bill Gates và Warren Buffett khen là tuyệt vời nhất','content'=>'E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp ','status'=>1,'slug'=>'Talent-Wins-Solution'],
            ['id'=>3,'title'=>'Talent Wins Academy','summary'=>'Bài học kinh doanh sâu sắc rút ra từ cuốn sách được cả Bill Gates và Warren Buffett khen là tuyệt vời nhất','content'=>'E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp ','status'=>1,'slug'=>'Talent-Wins-Academy'],
                   
        ]);
    }
}
