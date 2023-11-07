<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    public function index()
    {
        $article_to_check = Article::where('is_accepted', null)->first();
        return view('revisor.index', compact('article_to_check'));
    }

    public function acceptArticle(Article $article)
    {
        $article->setAccepted(true);
        return redirect()->back()->with('message', 'Annuncio accettato.');
    }
    public function rejectArticle(Article $article)
    {
        $article->setAccepted(false);
        return redirect()->back()->with('message', 'Annuncio rifiutato.');
    }
    public function becomeRevisor(){
        return view('auth.formRevisor');
    }

    public function submit(){

        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));

        return redirect(route('welcome'))->with('message', 'Grazie per averci contattato');
    }
}
