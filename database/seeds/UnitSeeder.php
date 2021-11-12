<?php

use App\Unit;
use Illuminate\Database\Seeder;


class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Unit::class,10)->create();
    }
}
