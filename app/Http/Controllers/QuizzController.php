<?php


namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class QuizzController
{
    public function quizz(Request $request){
        $id = Auth::id();
        $questions = User::find($id);
        $forms = Questions::all();
//        dd($forms);

        return view('quizz', ['forms'=>$forms]);
    }



    public function view_create_quiz(){
        return view('createquizz');
    }

    public function result(Request  $request){
        $id = Auth::id();
        $forms = Questions::all();
        $counter = 0;
        foreach ($forms as $form){
            $answer = $request->input($form->id);
            if ($answer == $form->correct){
                $counter++;
            }
        }echo "<h1> თქვენი სწორი პასუხების რაოდენობა არის $counter</h1>";

    }

    public function Createquizz(Request $request){
        $id = Auth::id();
        $permission = Roles::find(1);

        if($permission->user_id != $id){
            echo ' you have not permissions to do this action ';


        }else {
            $question = $request->input('question');
            $answera = $request->input('answera');
            $answerb = $request->input('answerb');
            $answerc = $request->input('answerc');
            $answerd = $request->input('answerd');
            $correct = $request->input('correct');
           $form = new Questions();
            $form->question = $question;
            $form->answera = $answera;
            $form->answerb = $answerb;
            $form->answerc = $answerc;
            $form->answerd = $answerd;
            $form->user_id = $id;
            $form->correct = $correct;
            $form->save();
        }


        return redirect('quizz');
    }
}
