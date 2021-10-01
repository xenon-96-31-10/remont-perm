<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendingEmail;

class EmailController extends Controller
{
  function send(Request $request)
  {
      //dd($request->phone);
      $this->validate($request, [
      'name' => 'required|alpha',
      'phone' => 'required|numeric'
    ],
    [
      'name.required' => 'Напишите свое имя, с которым к Вам можно обратиться',
      'phone.required' => 'Напишите свой телефон, на который можно обратиться',
      'phone.numeric' => 'Напишите свой телефон цифрами'
    ]);

      $data = array(
          'name' => $request->name,
          'phone' => $request->phone
      );


      Mail::to('infostroiperm@ya.ru')->send(new sendingEmail($data));
      return back()->with('success', 'Сегодня у вас будет счастливый день!');
  }
}
