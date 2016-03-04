<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    protected $request;
    /**
     * BlogController constructor.
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function getIndex()
    {
        return view('/blog/index');
    }
    public function getNew()
    {
        return view('/blog/new');
    }
    public function postConfirm()
    {
        $formData = $request -> all ();
        $request->session()->put("$formData");
        return view('/blog/confirm');
    }
    public function getComplete()
    {
        return view('/blog/complete');
    }
    public function postComplete()
    {

        return redirect('/blog/complete');
    }

}
