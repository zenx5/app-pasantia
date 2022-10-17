<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('paises')->insert([

                [
                    'id' => 1,
                    'name' => 'Canada',
                ],

                 [
                    'id' => 2,
                    'name' => 'Estados Unidos',

                ],

                 [  
                    'id' => 3,
                    'name' => 'Mexico',
                
                ],

                [  
                    'id' => 4,
                    'name' => 'Antigua y Barbuda',
                
                ],

                [  
                    'id' => 5,
                    'name' => 'Barbados',
                
                ],
                [  
                    'id' => 6,
                    'name' => 'Bahamas',
                
                ],
                [  
                    'id' => 7,
                    'name' => 'Belice',
                
                ],
                [  
                    'id' => 8,
                    'name' => 'Costa Rica',
                
                ],
                [  
                    'id' => 9,
                    'name' => 'Cuba',
                
                ],
                [  
                    'id' => 10,
                    'name' => 'Dominicana',
                
                ],
                [  
                    'id' => 11,
                    'name' => 'El Salvador',
                
                ],
                [  
                    'id' => 12,
                    'name' => 'Grenada',
                
                ],
                
                [  
                    'id' => 13,
                    'name' => 'Haiti',
                
                ],
                [  
                    'id' => 14,
                    'name' => 'Honduras',
                
                ],
                [  
                    'id' => 15,
                    'name' => 'Jamaica',
                
                ],
                [  
                    'id' => 16,
                    'name' => 'Nicaragua',
                
                ],
                [  
                    'id' => 17,
                    'name' => 'Panama',
                
                ],
                [  
                    'id' => 18,
                    'name' => 'Puerto Rico',
                
                ],
                [  
                    'id' => 19,
                    'name' => 'Republica Dominicana',
                
                ],
                [  
                    'id' => 20,
                    'name' => 'San Cristobal y Nevis',
                
                ],
                [  
                    'id' => 21,
                    'name' => 'San Vicente y Granadinas',
                
                ],
                [  
                    'id' => 22,
                    'name' => 'Santa Lucia',
                
                ],
                [  
                    'id' => 23,
                    'name' => 'Trinidad y Tobago',
                
                ],
                [  
                    'id' => 24,
                    'name' => 'Argentina',
                
                ],
                [  
                    'id' => 25,
                    'name' => 'Bolivia',
                
                ],
                [  
                    'id' => 26,
                    'name' => 'Brasil',
                
                ],
                [  
                    'id' => 27,
                    'name' => 'Chile',
                
                ],
                [  
                    'id' => 28,
                    'name' => 'Colombia',
                
                ],
                [  
                    'id' => 29,
                    'name' => 'Ecuador',
                
                ],
                [  
                    'id' => 30,
                    'name' => 'Guyana',
                
                ],
                [  
                    'id' => 31,
                    'name' => 'Guayana Francesa',
                
                ],
                [  
                    'id' => 32,
                    'name' => 'Paraguay',
                
                ],
                [  
                    'id' => 33,
                    'name' => 'Peru',
                
                ],
                [  
                    'id' => 34,
                    'name' => 'Surinam',
                
                ],
                [  
                    'id' => 35,
                    'name' => 'Uruguay',
                
                ],
                [  
                    'id' => 36,
                    'name' => 'Venezuela',
                
                ],
                [  
                    'id' => 37,
                    'name' => 'Guatemala',
                
                ],

                
               

            ]);  
    }
}
