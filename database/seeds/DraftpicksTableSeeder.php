<?php

use Illuminate\Database\Seeder;

class DraftpicksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $path = public_path('../database/SQL/020721_draftpicks_dump_for_Seeder.sql');
        $sql = file_get_contents($path);
        DB::unprepared($sql);
        //$dp = DB::table('draftpicks')->insertGetId([]);
/*        DB::table('draftpicks')->update([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ])->where('id',$dp);*/
        /*$dp =  new \App\Models\DraftPicks;

        $dp->update(['updated_at' => now()]);*/

    }
}
