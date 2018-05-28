<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Inscriptioncpc;
use Validator;

class InscriptionsCPC_Controller extends Controller
{
    public function submit(Request $request){
      $rules=[
        'teamname' => 'required',
        'university' => 'required',
        'Participant1Name' => 'required',
        'Participant1Mail' => 'required|email',
        'CoachName' => 'required',
        'CoachMail' => 'required|email',
        'CoachPhone' => 'required'
      ];

      $validator = Validator::make($request->all(),$rules );

        if ($validator->fails()) {
            return redirect('Ensat_CD#InscriptionComp')
                        ->withErrors($validator)
                        ->withInput();
        }

        //Create New Message
        $inscription= new Inscriptioncpc;
        $inscription->teamname         = $request->input('teamname'        );
        $inscription->university         = $request->input('university'      );

        $inscription->Participant1Name = $request->input('Participant1Name');
        $inscription->Participant1Mail = $request->input('Participant1Mail');

        $inscription->Participant2Name = $request->input('Particiapnt2Name');
        $inscription->Participant2Mail = $request->input('Particiapnt2Mail');

        $inscription->Participant3Name = $request->input('Participant3Name');
        $inscription->Participant3Mail = $request->input('Participant3Mail');

        $inscription->CoachName        = $request->input('CoachName'       );
        $inscription->CoachMail        = $request->input('CoachMail'       );
        $inscription->CoachPhone       = $request->input('CoachPhone'      );

        $inscription->save();
        return redirect('/Ensat_CD#InscriptionComp')->withInput()->with('success','Inscription Reussie!');
    }

    function getData(){
        $data = Inscriptioncpc::get();
        return view('/ECC_Home')->with('data',$data);
    }
}

/*

$this->validate($request,[
  'teamname' => 'required',
  'Participant1Name' => 'required',
  'Participant1Mail' => 'required',
  'CoachName' => 'required',
  'CoachMail' => 'required',
  'CoachPhone' => 'required'
]);*/
