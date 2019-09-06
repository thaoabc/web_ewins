<?php

use Illuminate\Database\Seeder;
use App\models\news;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     
        $this->call(role::class);
        $this->call(admin::class);
        $this->call(inforcompany::class);
        $this->call(contact::class);
        $this->call(product::class);
        $this->call(banner::class);
       
        $this->call(talentwins::class);
        $this->call(cateservice::class);
        $this->call(service::class);
        $this->call(introduce::class);
        $this->call(adviser::class);
       
        $this->call(elearning::class);
         $this->call(subelearning::class);

         $this->call(catenew::class);
         $this->call(newss::class);
        
    }
}
