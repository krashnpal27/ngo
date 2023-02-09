<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cause;

class CauseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cause::factory()->count(50)->create();
    }
}
