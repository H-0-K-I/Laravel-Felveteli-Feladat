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
        $answers = Answer::where('question_id', $id)->orderBy('upvotes', 'DESC')->get();

        // returning view and results
        return view('show', ['question' => $question, 'answers' => $answers]);
    }

    // route function to editing page
    public function edit($id){

        // DB query here
        $question = Question::findOrFail($id);

        // returning view and results
        return view('edit_question', ['question' => $question]);
    }

    // route function to save edit
    public function save_edit($id){
        
        // DB query here
        $question = Question::findOrFail($id);

        // requesting data from form
        $userdata = request('question');

        // changing data
        $question->question = $userdata;

        // saving data to DB
        if($question->save()){

            // returning view and results
            return redirect("/questions/$id")->with('message', 'A v??ltoz??sokat sikeresen mentette a rendszer!');
        } else {

            // returning view and results
            return redirect("/questions/$id")->with('message', 'HIBA! K??rj??k pr??b??lkozzon ??jra.');
        }
    }

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
            return redirect('/')->with('message', 'A v??ltoz??sokat sikeresen mentette a rendszer!');
        } else {

            // returning view and results
            return redirect('/')->with('message', 'HIBA! K??rj??k pr??b??lkozzon ??jra.');
        }
    }

    // function to delete a record
    public function destroy($id){

        // DB query here
        $question = Question::findOrFail($id);

        // deleting, returning redirect with message
        if($question->delete()){

            // returning view and results
            return redirect('/questions')->with('message', 'A v??ltoz??sokat sikeresen mentette a rendszer!');
        } else {

            // returning view and results
            return redirect('/questions')->with('message', 'HIBA! K??rj??k pr??b??lkozzon ??jra.');
        }
    }
}
