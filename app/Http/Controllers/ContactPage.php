<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactPage extends Controller
{

    public function __construct()
    {
//        $this->middleware(['auth', 'checkDay'])->except('about');
    }

    public function index(){

        $articles = Article::take(3)->orderBy('id', 'DESC')->get();
        return view('index', compact('articles'));
    }

    //Contact page
    public function contact(){
        $massage = __('Please fill in the form');
        $info = '<small class="text-muted">we work only Monday</small>';
        $user = \Auth::user();

        $options = [
          '1' => 'Problem',
          '2' => 'Suggestion',
          '3' => 'Consultation',
          '4' => 'Personal issue',
        ];

        return view('contact-us', compact('massage', 'info', 'user', 'options'));
    }

    //store session
    public function storeSession(Request $request){

        $dataValidation = $request->validate([
            'name' => 'required|max:10',
            'massage' => 'required|min:20|max:50'
        ]);

        $request->session()->put('user_name' , $request->name);
        return 'done';
    }

    //about page
    public function about(Request $request){

        return view('about-us', ['userName' => $request->session()->get('user_name' , 'Username')]);
    }

    public function removeName(Request $request){

        //$request->session()->forget('user_name');

        $request->session()->flush();
        return redirect()->back();

    }
}
