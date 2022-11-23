<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BahasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('bahasa')->insert([
        	
        	[
        		'id' => 1,
        		'bahasa_program' => 'LARAVEL',     
        		'slug' =>'laravel',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 2,
        		'bahasa_program' => 'VUEJS',     
        		'slug' =>'vuejs',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],
                 
            [
        		'id' => 3,
        		'bahasa_program' => 'PHP NATIVE',     
        		'slug' =>'phpnative',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

            [
        		'id' => 4,
        		'bahasa_program' => 'REACTJS',     
        		'slug' =>'reactjs',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],                
                
        ]);
    
    }
}
