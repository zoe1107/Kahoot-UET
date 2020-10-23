<?php

use Illuminate\Database\Seeder;
use App\Rooms;

class FakeRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberRecord = 1000;
        factory(Rooms::class, $numberRecord)->create();
    }
}