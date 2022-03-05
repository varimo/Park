<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function submit(FeedbackRequest $req) {
        $feedback = new Feedback();
        $feedback->name = $req->input('user_name');
        $feedback->phone = $req->input('user_phone');
        $feedback->email = $req->input('user_email');
        $feedback->message = $req->input('user_message');
        $feedback->save();

        $name = $req->input('user_name');
        $phone = $req->input('user_phone');
        $email = $req->input('user_email');
        $message = $req->input('user_message');
        $token = "1011222133:AAEgGrbpCy80dfKuAG3rNAjJsePCKdi-cxw";
        $chat_id = "-284943047";
        $txt = '';
        $arr = array(
          'Имя пользователя: ' => $name,
          'Телефон: ' => $phone,
          'Email: ' => $email,
          'Сообщение: ' => $message
        );
        
        foreach($arr as $key => $value) {
          $txt .= "<b>".$key."</b> ".$value."%0A";
        };
        
        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

        return redirect()->route('home')->with('success', 'Сообщение было отправлено!');
    }
}
