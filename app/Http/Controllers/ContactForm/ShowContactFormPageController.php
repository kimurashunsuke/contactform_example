<?php

namespace App\Http\Controllers\ContactForm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

final class ShowContactFormPageController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('contact_form.form');
    }
}