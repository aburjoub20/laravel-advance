<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateClientRequest;
use App\Http\Requests\ClientDeleteRequest;
use App\Http\Requests\ClientUpdateRequest;
use App\Http\Interfaces\ClientsInterface;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
{
    public $clientinterface;
    public function __construct(ClientsInterface $clientinterface){
        $this->clientinterface = $clientinterface;
    }

    public function add(){
        return view('clients.create');
    }

    public function index(){
        return $this->clientinterface->index();
    }

    public function create(){
        return view('clients.create');
    }

    public function store( CreateClientRequest $request){
        Client::create([
            'email'=>$request->email,
            'name'=>$request->name,
            'phone'=>$request->phone,
        ]);
        $request->session()->flash('msg', 'added successfully');
         return redirect(route('clients.index'));
    }
    

    public function edit($id){
        $client = Client::find($id);
        return view('clients.edit',compact('client'));
    }

    public function update(ClientUpdateRequest $request){
        Client::find($request->client_id)->update([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
        ]);
        $request->session()->flash('msg', 'Updated succesfulty');
         return redirect(route('clients.index'));

}

        public function delete(ClientDeleteRequest $request){
            Client::find($request->client_id)->delete();
            $request->session()->flash('msg', 'Deleted succesfulty');
            return redirect(route('clients.index'));
        }

}
