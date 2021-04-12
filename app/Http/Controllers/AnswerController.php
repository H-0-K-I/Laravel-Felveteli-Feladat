<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;

class AnswerController extends Controller
{
    // route function to the create view
    public function create($id){

        // getting the question from DB
        $question = Question::findOrFail($id);

        // returning view and results
        return view('create_answer', ['question' => $question]);
    }

    // route function when creating a new record
    public function store($id){

        // requesting data from form
        $userdata = request('answer');

        // creating new model instance
        $answer = new Answer();
        $answer->answer = $userdata;
        $answer->question_id = $id;
        $answer->upvotes = 0;

        // save data to DB
        if($answer->save()){

            // returning view and results
            return redirect("/questions/$id")->with('message', 'A változásokat sikeresen mentette a rendszer!');
        } else {

            // returning view and results
            return redirect("/questions/$id")->with('message', 'HIBA! Kérjük próbálkozzon újra.');
        }
    }
}
