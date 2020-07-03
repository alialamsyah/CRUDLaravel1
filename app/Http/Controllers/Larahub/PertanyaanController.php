<?php

namespace App\Http\Controllers\Larahub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Larahub\PertanyaanModel;

class PertanyaanController extends Controller
{
    //
    public function index(){
        $asks = PertanyaanModel::get_all();
        return view('larahub.asks.index', compact('asks'));
    }

    public function create(){
        return view('larahub.asks.create');
    }

    public function store(Request $request){
        $data = $request->all();
        unset($data["_token"]);
        $saveAsks = PertanyaanModel::save($data);
        if($saveAsks){
            return redirect('/pertanyaan');
        }
    }
}
