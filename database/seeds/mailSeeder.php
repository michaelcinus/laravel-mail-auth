<?php

use App\mail;
use Illuminate\Database\Seeder;

class mailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(mail::class, 10) -> create();
    }
}
