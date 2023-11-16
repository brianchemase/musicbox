<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContributionsController extends Controller
{
    //
    public function showContribution()
    {
        $contributions = [
            'DENNIS LIHANDA' => 300,
            'CAROLINE ISIMALE' => 300,
            'HILDAH MUNYASA' => 300,
            'ALVINE ALULU' => 300,
            'HILDAH LUNG\'ATSO' => 300,
            'CYRUS INDOMBERO' => '❌',
            'JOHN IHAJI' => 300,
            'WYCLIFFE MAKADO' => '❌',
            'ABRAHAM INDECHE' => '❌',
            'GODFREY WINDALA' => 300,
            'BONFACE SHIHACHI' => 300,
            // Add more contributions as needed
        ];

       $description=" CONTRIBUTION TOWARDS LINET ADUVUKHA'S MUM";
       $contributions_channel=" MPESA NO. 0717263933";
       $contributions_receiver="NAME LINET INDIAZI KADENGE";

        $data=[
            'contributions' => $contributions,
            'description' => $description,
            'contributions_channel' => $contributions_channel,
            'contributions_receiver' => $contributions_receiver,

        ];

        return view('contribution')->with($data);;
    }
}
