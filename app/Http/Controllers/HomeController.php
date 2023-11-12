<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $fullName;
    private $seriesResult;
    private $even;
    private $odd;
    private $add;
    private $sub;
    private $mul;
    private $div;
    private $pass;
    private $n;
    public function index(){
        return view('home',['students' => Student::getAllStudent()]);
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function details($id){
        return view('details',['student' => Student::getStudentById($id)]);
    }
    public function makeFullName(Request $request){
        $this->fullName = $request->first_name.' '.$request->last_name;
        return back()->with([
            'full_name' =>$this->fullName,
            'first_name' =>$request->first_name,
            'last_name' =>$request->last_name,
        ]);
    }

    public function numbers(Request $request){
        switch ($request->choice){
            case 'even':
                $this->result = ' Even: '.$this->even($request);
                break;
            case 'odd':
                $this->result = 'Odd: '.$this->odd($request);
                break;
            case 'all':

                $this->result = 'Series: '.$this->Series($request);
                break;
            case 'add':

                $this->result = 'Series: '.$this->Add($request);
                break;
            case 'sub':

                $this->result = 'Series: '.$this->Sub($request);
                break;
            case 'mul':

                $this->result = 'Series: '.$this->Mul($request);
                break;
            case 'div':

                $this->result = 'Series: '.$this->Div($request);
                break;


        }
        return back()->with([
            'result'        =>  $this->result,
            'start_number'  =>  $request->start_number,
            'end_number'    =>  $request->end_number,
        ]);
    }


    public function Series(Request $request){



        if ($request->start_number<$request->end_number){
            for( $this->i= $request->start_number; $this->i<=$request->end_number; $this->i++)
            {
                $this->seriesResult = $this->seriesResult.$this->i.' ';
            }

        }
        else {
            for( $this->i= $request->start_number; $this->i>=$request->end_number; $this->i--)
            {
                $this->seriesResult = $this->seriesResult.$this->i.' ';
            }
        }
        return $this->seriesResult;


    }

    public function even(Request $request){

        if ($request->start_number<$request->end_number){
            for ($this->i=$request->start_number;$this->i<=$request->end_number; $this->i++) {
                if ($this->i %2 == 0){
                    $this->even = $this->even.$this->i.' ';
                }
            }
        }
        else{
            for ($this->i=$request->start_number;$this->i>=$request->end_number; $this->i--) {
                if ($this->i %2 == 0){
                    $this->even = $this->even.$this->i.' ';
                }
            }
        }

        return $this->even.' ';
    }
    public function odd(Request $request){
        if ($request->start_number<$request->end_number){
            for ($this->i=$request->start_number;$this->i<=$request->end_number; $this->i++) {
                if ($this->i % 2 != 0){
                    $this->odd =$this->odd.$this->i.' ';
                }
            }
        }
        else{

            for ($this->i=$request->start_number;$this->i>=$request->end_number; $this->i--) {
                if ($this->i % 2 != 0){
                    $this->odd =$this->odd.$this->i.' ';
                }
            }
        }

        return $this->odd.' ';


    }
    public function Add(Request $request){
                $this->add = $request->start_number + $request->end_number;
                return $this->add.' ';

    }
    public function Sub(Request $request){
                $this->sub = $request->start_number - $request->end_number;
                return $this->sub.' ';

    }
    public function Mul(Request $request){
                $this->mul = $request->start_number * $request->end_number;
                return $this->mul.' ';

    }
    public function Div(Request $request){
                $this->div = $request->start_number / $request->end_number;
                return $this->div.' ';

    }

    public function passwordGenerator(Request $request){

                return view('password-Generator');

    }
    public function randomPassword(Request $request) {

//        return "HOME";
        $this->value = ['a','A','b','B','1','7','9','n','@','#','$','&','5','z','i','x','u','p','r','s','q',];
        $this->pass = '';
        for ($this->i = 0; $this->i < $request->password_length; $this->i++) {
            $this->random = rand(0,count($this->value)-1);
            $this->item = $this->value[$this->random];
            $this->pass = $this->pass.$this->item;
        }
        return back()->with([
            'result'        =>  $this->pass,
            'password_length'        =>  $request->password_length,
        ]);
    }
    public function studentInfo(){

        return view('student-info');
    }
    public function studentInformation(Request $request){
        return back()->with([
           'name' => $request->student_name ,
           'subject' => $request->subject ,
        ]);
    }





}
