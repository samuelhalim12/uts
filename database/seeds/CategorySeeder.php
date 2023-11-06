<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoriobat160419077')->insert(['nama' => 'Batuk']);
        DB::table('kategoriobat160419077')->insert(['nama' => 'Mata']);
        DB::table('kategoriobat160419077')->insert(['nama' => 'Nyeri Otot']);
    }
}
