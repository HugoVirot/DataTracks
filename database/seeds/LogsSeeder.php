<?php

use Illuminate\Database\Seeder;
use App\Log;

class LogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Log::create(['message' => 'Erreur : Borne 0600 injoingnable']);
        Log::create(['message' => 'Erreur : Récupération du client depuis la base Damokles impossible']);
        Log::create(['message' => 'Erreur : Campagne inexistante']);
        Log::create(['message' => 'Erreur : Scanneur borne 0605 inaccessible']);
    }
}
