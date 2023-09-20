<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //To display blog details page
    public function blogdetails() {
        return view('frontend.pages.blog_details');
    }
}
