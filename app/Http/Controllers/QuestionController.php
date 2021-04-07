<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{

    public function index(){

        $questions = Question::all();
        // DB query

        return view('questions', ['questions' => $questions]);
    }


    public function show($id){
        
        // DB query here

        return view('question', ['id' => $id]);
    }
}
