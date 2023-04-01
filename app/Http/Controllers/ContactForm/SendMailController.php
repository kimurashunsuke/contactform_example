<?php

namespace App\Http\Controllers\ContactForm;

use App\Http\Requests\ContactForm\SendMailRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

final class SendMailController extends Controller
{
    public function __invoke(SendMailRequest $request)
    {
        $validated = $request->validated();

        Mail::send(['text' => 'email.contact_form'], $request->validated(), function($message) {
            $message->to(config('mail.from.address'))
                    ->subject('New Contact Form Submission');
        });

        return redirect()->back()->with('flash_message', 'メールを送信しました。折り返しご連絡をお待ち下さい。');
    }
}