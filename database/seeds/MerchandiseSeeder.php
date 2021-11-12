<?php

use App\Merchandise;
use Illuminate\Database\Seeder;

class MerchandiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Merchandise::class,10)->create();
    }
}
