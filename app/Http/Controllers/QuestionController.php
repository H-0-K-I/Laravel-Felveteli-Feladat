<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;

class QuestionController extends Controller
{

    // route function to index page with all questions listed
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

        // ordering questions by number of answers
        $sorted_questions = $questions->sortByDesc('no_of_answers');

    return view('index', ['questions' => $sorted_questions]);
    }

    // route function to a specific question's page
    public function show($id){
        
        // DB query here

        return view('show', ['id' => $id]);
    }

    /*public function edit($id){

    }*/

    public function create(){
        return view('create_question');
    }
}
