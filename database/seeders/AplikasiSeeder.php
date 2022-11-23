<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AplikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('aplikasi')->insert([
        	
        	[
        		'id' => 1,
        		'nama_aplikasi' => 'PPKIJK',     
        		'slug' =>'ppkijk',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 2,
        		'nama_aplikasi' => 'KEPSEK',     
        		'slug' =>'kepsek',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

                 
            [
        		'id' => 3,
        		'nama_aplikasi' => 'KULINER',     
        		'slug' =>'kuliner',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

            [
        		'id' => 4,
        		'nama_aplikasi' => 'UKT',     
        		'slug' =>'ukt',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],
            [
        		'id' => 5,
        		'nama_aplikasi' => 'SIPPMI',     
        		'slug' =>'sippmi',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],
            [
        		'id' => 6,
        		'nama_aplikasi' => 'SPP',     
        		'slug' =>'spp',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],
            


                
        ]);
    
    }
}
