<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    private $student;

    public static function getAllStudent(){
        return [

            0=>[
                'id' =>  1,
                'name' =>  'Ahsen Habib',
                'Class' =>  '10',
                'age' => '24',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, sequi!',
                'image' => 'img/Students/s1.jpg',
            ],
            1=>[
                'id' =>  2,
                'name' =>  'Tanvir Hasan Nahid',
                'Class' =>  '10',
                'age' => '25',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, tenetur?',
                'image' => 'img/Students/s2.jpeg',
            ],
            2=>[
                'id' =>  3,
                'name' =>  'Nupur Rahman',
                'Class' =>  '10',
                'age' => '22',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, quaerat!',
                'image' => 'img/Students/s3.jpg',
            ],
            3=>[
                'id' =>  4,
                'name' =>  'Rifat Khan',
                'Class' =>  '10',
                'age' => '23',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, soluta.',
                'image' => 'img/Students/s4.jpg',
            ],
            4=>[
                'id' =>  5,
                'name' =>  'Arnob Khan',
                'Class' =>  '10',
                'age' => '27',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, porro.',
                'image' => 'img/Students/s5.jpg',
            ],
        ];
    }
    public static function getStudentById($id){
        foreach (self::getAllStudent() as $student){
            if ($student['id'] == $id){
                return $student;
            }
        }
    }
}
