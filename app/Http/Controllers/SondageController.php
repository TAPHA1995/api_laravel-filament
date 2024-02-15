<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Sondages;


class SondageController extends Controller
{
    public function creatSondage(Request $request)
    {
    //     $request->validate([
    //     'etezvousdeveloppeur'=>'required',
    //     'duree'=>'required',
    //     'moyen'=>'required',
    //     'langages'=>'required',
    //     'frameworks'=>'required',
    //    ]);

       $sondage = new Sondages();
       $sondage->etezvousdeveloppeur= $request->input('etezvousdeveloppeur');
       $sondage->duree= $request->input('duree');
       $sondage->moyen= $request->input('moyen');
       $sondage->langages= $request->input('langages');
       $sondage->frameworks= $request->input('frameworks');
       $sondage->save();
       return  $sondage;
   }

   function affiche_reponse_modul_un()
   {
       return Sondages::all();
   }


}

