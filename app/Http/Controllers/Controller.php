<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Auth;
use Config;
use SendGrid;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getAppConfig() {
        $Response = array('success' => 1, 'domainUrl' => Config::get('constants.config.URL'));
        return $Response;
    }

    public function sendMail($from,$subject,$to,$content){
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        $apiKey = base64_decode(Config::get('constants.keys.sendgrid'));
        $sg = new \SendGrid($apiKey);
        $response = $sg->client->mail()->send()->post($mail);
        // echo $response->statusCode();
        // print_r($response->headers());
        // echo $response->body();
    }

    public function sendFCM($key,$to,$title,$body){
        $url = 'https://fcm-push.herokuapp.com/sendPush';
        $fields = array(
            'key' => $key,
            'to' => $to,
            'title' => $title,
            'body' => $body
        );
        $fields_string = '';
        foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
        rtrim($fields_string, '&');
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, count($fields));
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        $result = curl_exec($ch);
        curl_close($ch);
        //$arr = json_decode($result);
        //echo $arr['success'];
        //$Response = array('success' => 1, 'domainUrl' => Config::get('constants.config.URL'));
        //return $Response;
    }

    #Logout Function
    
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
