<?php

namespace Database\Seeders;

use App\Models\Bingo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BingoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Bingo::firstOrCreate(['text' => 'Hva tenker du om PGS?']);
        Bingo::firstOrCreate(['text' => 'Hva er din NW?']);
        Bingo::firstOrCreate(['text' => 'Kjøpe eller leie egen bolig?']);
        Bingo::firstOrCreate(['text' => 'Er du rik?']);
        Bingo::firstOrCreate(['text' => 'Scam!']);
        Bingo::firstOrCreate(['text' => 'Hva slags klokke har du?']);
        Bingo::firstOrCreate(['text' => 'Burde jeg selge boligen min nå?']);
        Bingo::firstOrCreate(['text' => 'Hvordan bør jeg investere XXX kroner?']);
        Bingo::firstOrCreate(['text' => 'Er det gratis?']);
        Bingo::firstOrCreate(['text' => 'Trader du?']);
        Bingo::firstOrCreate(['text' => 'Hva tenker du om MPCC?']);
        Bingo::firstOrCreate(['text' => 'Hva er prisen for formueforum?']);
        Bingo::firstOrCreate(['text' => 'Har du utdanning']);
        Bingo::firstOrCreate(['text' => 'Bør jeg velge XXX utdanning?']);
    }
}
