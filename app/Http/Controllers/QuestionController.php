<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;

class QuestionController extends Controller
{

    public function index(){

        // DB query
        $questions = Question::all();

        // adding number of answers attribute
        foreach ($questions as $question) {
            $question->no_of_answers = 0;
         }

        // counting the number of answers to each question
        foreach ($questions as $question){
            $Answers = Answer::where('question_id', $question["id"])->get();
            $noOfAnswers = $Answers->count();
            $question["no_of_answers"] = $noOfAnswers;
        }

    return view('questions', ['questions' => $questions]);
    }


    public function show($id){
        
        // DB query here

        return view('question', ['id' => $id]);
    }
}
