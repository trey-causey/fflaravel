<?php

use Illuminate\Database\Seeder;

class  DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(TeammanagersTableSeeder::class);
        $this->call(ConstructorsTableSeeder::class);
        $this->call(DriversTableSeeder::class);
        $this->call(DraftpicksTableSeeder::class);
        $this->call(DraftableDriversTableSeeder::class);
        $this->call(RacesTableSeeder::class);

    }
}
