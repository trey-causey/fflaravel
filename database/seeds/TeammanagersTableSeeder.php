<?php

use Illuminate\Database\Seeder;

class TeammanagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teamOwner = new App\Models\Clients\TeamManager([
            'teamOwnerId' => 1,
            'firstName' => "Nick",
            'lastName' => "Lematrie",
            'dob' => "1999-12-31",
            'handle' => "nicklemaitre"
        ]);
        $teamOwner->save();

        $teamOwner = new App\Models\Clients\TeamManager([
            'teamOwnerId' => 2,
            'firstName' => "Philippe",
            'lastName' => "Lematrie",
            'dob' => "1999-12-31",
            'handle' => "olivierlouis"
        ]);
        $teamOwner->save();

        $teamOwner = new App\Models\Clients\TeamManager([
            'teamOwnerId' => 3,
            'firstName' => "Trey",
            'lastName' => "Causey",
            'dob' => "1981-03-27",
            'handle' => "tomato"
        ]);
        $teamOwner->save();

        $teamOwner = new App\Models\Clients\TeamManager([
            'teamOwnerId' => 4,
            'firstName' => "Casey",
            'lastName' => "Tuggle",
            'dob' => "1982-08-30",
            'handle' => "caseytuggle"
        ]);
        $teamOwner->save();

        $teamOwner = new App\Models\Clients\TeamManager([
            'teamOwnerId' => 5,
            'firstName' => "Olivier",
            'lastName' => "LeMaitre",
            'dob' => "1999-12-31",
            'handle' => "oliviverlemaitre"
        ]);
        $teamOwner->save();

        $teamOwner = new App\Models\Clients\TeamManager([
            'teamOwnerId' => 6,
            'firstName' => "Andrew",
            'lastName' => "Fox",
            'dob' => "1992-07-23",
            'handle' => "andrewfox"
        ]);
        $teamOwner->save();

        $teamOwner = new App\Models\Clients\TeamManager([
            'teamOwnerId' => 7,
            'firstName' => "George",
            'lastName' => "Nelson",
            'dob' => "1999-12-31",
            'handle' => "babyface"
        ]);
        $teamOwner->save();
    }
}
