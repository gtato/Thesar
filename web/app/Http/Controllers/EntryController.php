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
        $def = array('cat' => '');
        
        $def['cat'] .= '<select id="categories_1" class="form-control categories">';
        $categories = Category::all();
        foreach ($categories as $category) 
            $def['cat'] .= '<option value="'. $category->id.'">'.$category->name.'</option>';
        $def['cat'] .= '</select>';
        
        
        return view('entry', array('edit' => True , 'def' => $def ));
    }
}
