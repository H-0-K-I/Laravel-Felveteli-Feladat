<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function index(){

        // DB query

        return view('questions');
    }


    public function show($id){
        
        // DB query here

        return view('question', ['id' => $id]);
    }
}
