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
        
        $def['cat'] .= '<select onchange="onCategoryChange(event)" class="form-control categories">';
        $categories = Category::all();
        foreach ($categories as $category) 
            $def['cat'] .= '<option value="'. $category->id.'">'.$category->name.'</option>';
        $def['cat'] .= '</select>';
        
        $conjugs = $this->conjugations();
        
        return view('entry', array('edit' => True , 'def' => $def, 'conjugs' => $conjugs ));
    }

    public function conjugations(){
        $pronouns = array('Unë', 'Ti', 'Ajo/Ai', 'Ne', 'Ju', 'Ato/Ata');
        $tenses = array('E tashme', 'E pakryer', 'E kryer e thjeshtë', 'E kryer', 'Më se e kryer', 'E kryer e tejshkuar', 'E ardhme', 'E ardhme e përparme'); 
        $forms_names = array('dëftore', 'lidhore','kushtore','habitore','dëshirore','urdhërore');        
        $forms = array();
        $implicit_forms = array('Pjesore', 'Paskajore', 'Përcjellore', 'Mohore');        

        foreach ($forms_names as $form) 
            $forms[$form] = array();
        

        foreach ($tenses as $tense) 
            array_push($forms['dëftore'] , $tense);
        
        array_push($forms['lidhore'] , $tenses[0], $tenses[1], $tenses[3], $tenses[4]);
        array_push($forms['kushtore'] , $tenses[0], $tenses[3]);
        array_push($forms['habitore'] , $tenses[0], $tenses[1], $tenses[3], $tenses[4]);
        array_push($forms['dëshirore'] , $tenses[0], $tenses[3]);
        array_push($forms['urdhërore'] , $tenses[0]);
        
        $aux = array($forms_names[0].'|'.$tenses[3]=>'kam,ke,ka,kemi,keni,kanë',
                $forms_names[0].'|'.$tenses[4]=>'kisha,kishe,kishte,kishim,kishit,kishin', 
                $forms_names[0].'|'.$tenses[5]=>'pata,pate,pati,patëm,patët,patën', 
                $forms_names[0].'|'.$tenses[6]=>'do të,do të,do të,do të,do të,do të', 
                $forms_names[0].'|'.$tenses[7]=>'do të kem,do të kesh,do të ketë,do të kemi,do të keni,do të kenë', 

                $forms_names[1].'|'.$tenses[0]=>'të,të,të,të,të,të', 
                $forms_names[1].'|'.$tenses[1]=>'të,të,të,të,të,të', 
                $forms_names[1].'|'.$tenses[3]=>'të kem,të kesh,të ketë,të kemi,të keni,të kenë', 
                $forms_names[1].'|'.$tenses[4]=>'të kisha,të kishe,të kishte,të kishim,të kishit,të kishin', 

                $forms_names[2].'|'.$tenses[0]=>'do të,do të,do të,do të,do të,do të', 
                $forms_names[2].'|'.$tenses[3]=>'do të kisha,do të kishe,do të kishte,do të kishim,do të kishit,do të kishin',

                $forms_names[3].'|'.$tenses[3]=>'paskam,paske,paska,paskemi,paskeni,paskan', 
                $forms_names[3].'|'.$tenses[4]=>'paskësha,paskëshe,paskësh,paskëshim,paskëshit,paskëshin', 

                $forms_names[4].'|'.$tenses[3]=>'paça,paç,pastë,paçim,paçi,paçin'
                    );

        $html = '';
        foreach ($forms as $form=>$tenses) {
            
            $html .='<div class="panel panel-info">';
            $html .='<div class="panel-heading">Mënyra '. $form .'</div>';
            
            if(strcmp($form,"dëftore")==0){
                $html .= $this->createConjTable($pronouns, $form, array_slice($tenses, 0,4) , $aux);
                $html .= '<br>';
                $html .= $this->createConjTable($pronouns, $form, array_slice($tenses, 4) , $aux);
            }else{
                $html .= $this->createConjTable($pronouns, $form, $tenses , $aux);
            }
            
            $html .='</div>';
            // break;
        }


        $html .='<div class="panel panel-info">';
        $html .='<div class="panel-heading">Format e pashtjelluara</div>';
        $html .= $this->createConjTable(array(''), '', $implicit_forms , $aux);
        $html .='</div>';
        // return print_r($aux);
        return $html;
    }

    public function createConjTable($pronouns, $form, $tenses, $aux){
        $html = '';
        $html .='<table class="table table-striped table-condensed"><thead><tr><th class="col-md-1"></th>';
        foreach($tenses as $tense)
            $html .= '<th>'.$tense.'</th>';
        $html .= '</tr></thead><tbody>';

        foreach($pronouns as $pronoun){
            if(strcmp($form,"urdhërore")==0 && strcmp($pronoun,"Ti")!=0 && strcmp($pronoun,"Ju")!=0) continue;
            $html .= '<tr><td>'.$pronoun.'</td>';
            foreach($tenses as $tense){
                $html .= '<td>'.'-'.'</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</tbody></table>';

        return $html;

    }
}
