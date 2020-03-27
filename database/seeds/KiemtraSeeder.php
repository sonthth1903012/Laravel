<?php

use Illuminate\Database\Seeder;

class KiemtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Student::class,10)->create();
    }
}
