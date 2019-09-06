<?php

use Illuminate\Database\Seeder;

class newss extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('new')->delete();
        DB::table('new')->insert([
            ['id'=>1,'title'=>'Soobin Hoàng Sơn chia tay bạn gái','summary'=>'Soobin Hoàng Sơn chia tay bạn gái ','content'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.','image'=>'img_1.jpg','slug'=>'Soobin-Hoang-Son-chia-tay-ban-gai','status'=>'1','id_admin'=>'1','cate_new'=>'1'],
            ['id'=>2,'title'=>'Soobin Hoàng Sơn chia tay bạn gái','summary'=>'Soobin Hoàng Sơn chia tay bạn gái ','content'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.','image'=>'img_2.jpg','slug'=>'Soobin-Hoang-Son-chia-tay-ban-gai','status'=>'1','id_admin'=>'1','cate_new'=>'2'],
            ['id'=>3,'title'=>'Soobin Hoàng Sơn chia tay bạn gái','summary'=>'Soobin Hoàng Sơn chia tay bạn gái ','content'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.','image'=>'img_3.jpg','slug'=>'Soobin-Hoang-Son-chia-tay-ban-gai','status'=>'1','id_admin'=>'2','cate_new'=>'3'],
            ['id'=>4,'title'=>'Soobin Hoàng Sơn chia tay bạn gái','summary'=>'Soobin Hoàng Sơn chia tay bạn gái ','content'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.','image'=>'img_3.jpg','slug'=>'Soobin-Hoang-Son-chia-tay-ban-gai','status'=>'1','id_admin'=>'3','cate_new'=>'4'],
            ['id'=>5,'title'=>'Soobin Hoàng Sơn chia tay bạn gái','summary'=>'Soobin Hoàng Sơn chia tay bạn gái ','content'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.','image'=>'img_1.jpg','slug'=>'Soobin-Hoang-Son-chia-tay-ban-gai','status'=>'1','id_admin'=>'1','cate_new'=>'1'],
                    
        ]);
    }
}
