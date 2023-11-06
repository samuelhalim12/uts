<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('obat160419077')->insert(
            ['nama_obat' => 'OBH Combi',
             'stok' => '10',
             'harga' =>'5000',
             'kategori_obat'=>1
        ]);
        DB::table('obat160419077')->insert(
            ['nama_obat' => 'Siladex',
             'stok' => '40',
             'harga' =>'3000',
             'kategori_obat'=>1
        ]);
        DB::table('obat160419077')->insert(
            ['nama_obat' => 'Laserin',
             'stok' => '25',
             'harga' =>'6500',
             'kategori_obat'=>1
        ]);
        DB::table('obat160419077')->insert(
            ['nama_obat' => 'Bisolvon',
             'stok' => '33',
             'harga' =>'4500',
             'kategori_obat'=>1
        ]);
        DB::table('obat160419077')->insert(
            ['nama_obat' => 'Vicks',
             'stok' => '60',
             'harga' =>'5500',
             'kategori_obat'=>1
        ]);

        DB::table('obat160419077')->insert(
            ['nama_obat' => 'Rohto',
             'stok' => '40',
             'harga' =>'30000',
             'kategori_obat'=>2
        ]);
        DB::table('obat160419077')->insert(
            ['nama_obat' => 'Insto',
             'stok' => '70',
             'harga' =>'45000',
             'kategori_obat'=>2
        ]);
        DB::table('obat160419077')->insert(
            ['nama_obat' => 'Cendo',
             'stok' => '65',
             'harga' =>'35000',
             'kategori_obat'=>2
        ]);
        DB::table('obat160419077')->insert(
            ['nama_obat' => 'Braito',
             'stok' => '44',
             'harga' =>'60000',
             'kategori_obat'=>2
        ]);
        DB::table('obat160419077')->insert(
            ['nama_obat' => 'Visionux',
             'stok' => '100',
             'harga' =>'55000',
             'kategori_obat'=>2
        ]);

        DB::table('obat160419077')->insert(
            ['nama_obat' => 'Rheumacyl',
             'stok' => '30',
             'harga' =>'60000',
             'kategori_obat'=>3
        ]);
        DB::table('obat160419077')->insert(
            ['nama_obat' => 'Oskadon',
             'stok' => '20',
             'harga' =>'23000',
             'kategori_obat'=>3
        ]);
        DB::table('obat160419077')->insert(
            ['nama_obat' => 'Neurobion Forte',
             'stok' => '15',
             'harga' =>'26000',
             'kategori_obat'=>3
        ]);
        DB::table('obat160419077')->insert(
            ['nama_obat' => 'Allopurnol',
             'stok' => '33',
             'harga' =>'54000',
             'kategori_obat'=>3
        ]);
        DB::table('obat160419077')->insert(
            ['nama_obat' => 'Samulinpro',
             'stok' => '65',
             'harga' =>'80000',
             'kategori_obat'=>3
        ]);
    }
}
