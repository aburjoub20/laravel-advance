<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateClientRequest;


use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
{
    public function index(){
        $clinets = Client::get();
        return view('Client.index',compact('clinets'));
    }
    public function create(){
        return view('Client.create');
    }
    public function store( CreateClientRequest $request){
        // dd($request);
        return view('Client.create');
    }
}
