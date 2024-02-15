<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\model_un;

class Model_Controller extends Controller
{
    public function creatSondageform(Request $request)
    {

        $request->validate([
        'titre_sondage'=>'required',
        'question1'=>'required',
        'reponse_opt_1'=>'required',
        'reponse_opt_2'=>'required',
        'question2'=>'required',
        'question3'=>'required',
        'reponse_opt_3'=>'required',
        'reponse_opt_4'=>'required',
        'reponse_opt_5'=>'required',
        'question4'=>'required',
        'question5'=>'required',
       ]);

       $Model_un = new model_un();
       $Model_un->titre_sondage = $request->input('titre_sondage');
       $Model_un->question1 = $request->input('question1');
       $Model_un->reponse_opt_1 = $request->input('reponse_opt_1');
       $Model_un->reponse_opt_2 = $request->input('reponse_opt_2');
       $Model_un->question2 = $request->input('question2');
       $Model_un->question3 = $request->input('question3');
       $Model_un->reponse_opt_3 = $request->input('reponse_opt_3');
       $Model_un->reponse_opt_4 = $request->input('reponse_opt_4');
       $Model_un->reponse_opt_5 = $request->input('reponse_opt_5');
       $Model_un->question4 = $request->input('question4');
       $Model_un->question5 = $request->input('question5');
       $Model_un->save();
       return $Model_un;

   }
   function affiche_modul_un()
   {
       return model_un::all();
   }

   //supprimé un model_sondage
   public function destroy($id)
   {
       $supprime = model_un::find($id);
       $supprime->delete();
       return $supprime;
   }

}
