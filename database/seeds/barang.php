<?php

use Illuminate\Database\Seeder;

class barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang=[['Kode_ticket'=>'123','Nama_penonton'=>'Timur','Harga'=>'50000'],
        		 ['Kode_ticket'=>'1234','Nama_penonton'=>'Selatan','Harga'=>'50000'],
                 ['Kode_ticket'=>'1234','Nama_penonton'=>'Barat','Harga'=>'75000'],
                 ['Kode_ticket'=>'1234','Nama_penonton'=>'Utara','Harga'=>'50000'],
                 ['Kode_ticket'=>'1234','Nama_penonton'=>'Vip','Harga'=>'250000']
        		];
        		DB::table('barangs')->insert($barang);
    }
}
