<?php

namespace App\Http\Controllers;

use App\Mail\SendMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mail()
            {
            $name = 'Kazibwe Julius Juior';
            Mail::to('kazibwejuliusjunior@gmail.com')->send(new SendMailable($name));

            return 'Email was sent';
            }
}
