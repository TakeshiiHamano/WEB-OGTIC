<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function getNosotros(){
    	$name = "company";
    	$records = 1;
    	 return view('pages.nosotros')
    	 ->with("name",$name)
    	 ->with("records",$records)
    	 ;
    }

    public function getDesarrollo(){
    	$name = "company";
    	$records = 1;
    	 return view('pages.desarrollo')
    	 ->with("name",$name)
    	 ->with("records",$records)
    	 ;
    }

    public function getSoporte(){
    	$name = "company";
    	$records = 1;
    	 return view('pages.soporte')
    	 ->with("name",$name)
    	 ->with("records",$records)
    	 ;
    }

    public function getGestion(){
    	$name = "company";
    	$records = 1;
    	 return view('pages.gestion')
    	 ->with("name",$name)
    	 ->with("records",$records)
    	 ;
    }
    public function getProyecto(){
        $name = "company";
        $records = 1;
         return view('pages.proyecto')
         ->with("name",$name)
         ->with("records",$records)
         ;
    }
}
