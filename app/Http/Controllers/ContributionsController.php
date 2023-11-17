<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationMail;

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

    public function sendMail()
    {   
        //musicboxsystem@outlook.com => login email
        //KeNyAn@2023 => password

           # outlook configs
        // MAIL_DRIVER=smtp
        // MAIL_HOST=smtp-mail.outlook.com
        // MAIL_PORT=587
        // MAIL_USERNAME=tmsmsimamizi@outlook.com
        // MAIL_PASSWORD=Mobimba@2023
        // MAIL_ENCRYPTION=tls
        // MAIL_FROM_ADDRESS=tmsmsimamizi@outlook.com
        // MAIL_FROM_NAME="${APP_NAME}"


        #zohomail configs
        // MAIL_MAILER=smtp
        // MAIL_HOST=smtp.zoho.com
        // MAIL_PORT=465
        // MAIL_USERNAME=briananikayi@zohomail.com
        // MAIL_PASSWORD=Szqc3ZUepbAT
        // MAIL_ENCRYPTION=ssl
        // MAIL_FROM_ADDRESS="briananikayi@zohomail.com"
        // MAIL_FROM_NAME="Music System Admin"





        $fullnames="Brian Anikayi";
        $email="Brianchemo@gmail.com";
        $username="Brianchemo@gmail.com";
        $pass='P@$$W0rd';



        Mail::to($email)->send(new RegistrationMail($fullnames, $username, $pass));

        return "Email sent";
    }
}
