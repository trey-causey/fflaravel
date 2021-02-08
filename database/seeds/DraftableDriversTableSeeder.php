<?php

use Illuminate\Database\Seeder;

class DraftableDriversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $path = public_path('../database/SQL/020721_draftable_drivers_dump_for_Seeder.sql');
        $sql = file_get_contents($path);
        DB::unprepared($sql);
    }
}
