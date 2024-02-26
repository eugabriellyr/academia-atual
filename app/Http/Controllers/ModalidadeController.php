<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalidadeController extends Controller
{
    public function index(){
        return view('site.modalidade');
    }

    public function musculacao(){
        return view('modalidade.musculacao');
    }

    public function cardiovascular(){
        return view('modalidade.cardiovascular');
    }

    public function crossfit(){
        return view('modalidade.crossfit');
    }

    public function pilates(){
        return view('modalidade.pilates');
    }

    public function yoga(){
        return view('modalidade.yoga');
    }

    public function zumba(){
        return view('modalidade.zumba');
    }

    public function box(){
        return view('modalidade.box');
    }

    public function artes_marciais(){
        return view('modalidade.artes_marciais');
    }

    public function judo(){
        return view('modalidade.judo');
    }

}
