<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class EntryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $def = '<input type="text"  placeholder="Hyrje e re" name="entry">';
        $def .= '<select>';
        $categories = Category::all();
        foreach ($categories as $category) {
            $def .= '<option value="'. $category->id.'">'.$category->name.'</option>';
            
        }
        $def .= '</select>';

        return view('entry', array('edit' => True , 'def' => $def ));
    }
}
