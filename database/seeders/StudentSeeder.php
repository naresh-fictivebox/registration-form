<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //****************use for single data ***********/
         Student::create(
            [
             'name' => 'naresh',
             'email'=> 'naresh@gmail.com',
             'percentage'=>'70.10',
             'city'=>'',
             'age'=>'18'
             
         ]
        );
                 
    // ********use for multiple data***********/ 

    $student=collect([



        [
             'name'=> 'deepak',
             'email'=> 'deepak@gmail.com',
             'percentage'=>'80.10',
             'city'=>'Bulandshshr',
             'age'=>'26'
        ],
     
       [
             'name'=> 'ritik',
             'email'=> 'ritik@gmail.com',
             'percentage'=>'80.10',
             'city'=>'ghaziabad',
             'age'=>'26'
       ],

       [
            'name'=> 'deepanshu',
             'email'=> 'deepanshu@gmail.com',
             'percentage'=>'85.10',
             'city'=>'noida',
             'age'=>'24'
       ],

         [ 
          'name'=> 'naveen',
          'email'=> 'naeen@gmail.com',
          'percentage'=>'90',
          'city'=>'jahangirabad',
          'age'=>'23'
         ],

      [
        'name'=>'raju',
        'email'=>'raju@gmail.com',
        'percentage'=>'90',
        'city'=>'jahangirabad',
        'age'=>'30'


      ],
      ]
    );

      $student->each(function($student)
      {
        Student::insert($student);
      }
    ); 
    }
}
                              