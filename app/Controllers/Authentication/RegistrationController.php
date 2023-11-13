<?php

namespace App\Controllers\Authentication;

use App\Controllers\BaseController;

class RegistrationController extends BaseController
{
    public function index()
    {

        return view("authentication/registration/index");
    }

    public function createData(){
        $email = $this->request->getPost("email");
        $first_name = $this->request->getPost("first_name");
        $last_name = $this->request->getPost("last_name");  
        $password = $this->request->getPost("password");    
        $password_confirmation = $this->request->getPost("confirm_password");


        if($password !== $password_confirmation){
            return redirect()->back()->with("error","Password Tidak Sesuai");
        }

        $dataToSend = [
            'email' => $email,
            'first_name'=> $first_name,
            'last_name'=> $last_name,
            'password'=> $password,
        ];

        $client = \Config\Services::curlrequest();
        $response = $client->request('POST', "https://take-home-test-api.nutech-integrasi.app/registration", [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'json' => $dataToSend,   
        ]);

        $apiResponse = json_decode($response->getBody(), true);

        if ($apiResponse['status'] == 0){
            echo $apiResponse['message'];
            return redirect()->to('/login');   
        }else{
            echo $apiResponse['message'];
            return redirect()->to('/registration');
        }


        


    }
}
