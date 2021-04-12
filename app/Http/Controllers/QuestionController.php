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

        // returning view and results
        return view('index', ['questions' => $sorted_questions]);
    }

    // route function to a specific question's page
    public function show($id){
        
        // DB query here
        $question = Question::findOrFail($id);
        $answers = Answer::where('question_id', $id)->get();

        // returning view and results
        return view('show', ['question' => $question, 'answers' => $answers]);
    }

    /*public function edit($id){

    }*/

    // route function to the create view
    public function create(){

        // returning view and results
        return view('create_question');
    }


    // route function when creating a new record
    public function store(){

        // requesting data from form
        $userdata = request('question');

        // creating new model instance
        $question = new Question();
        $question->question = $userdata;

        // saving data to DB
        if($question->save()){

            // returning view and results
            return redirect('/')->with('message', 'A változásokat sikeresen mentette a rendszer!');
        } else {

            // returning view and results
            return redirect('/')->with('message', 'HIBA! Kérjük próbálkozzon újra.');
        }
    }
}
