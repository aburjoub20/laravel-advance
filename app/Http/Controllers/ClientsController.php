<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateClientRequest;
use App\Http\Requests\ClientDeleteRequest;
use App\Http\Requests\ClientUpdateRequest;
use App\Http\Interfaces\ClientsInterface;
// use app\Http\Interfaces\ClientsInterface;

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
        // return view('clients.create');
        $this->clientinterface->create(); 
       }

    public function store( CreateClientRequest  $request ){
        $this->clientinterface->store($request);
    }
    

    public function edit($id){
        $this->clientinterface->edit($id);
    }

    public function update(ClientUpdateRequest $request){
        $this->clientinterface->update($request);

}

        public function delete(ClientDeleteRequest $request){
            $this->clientinterface->delete($request);
        }

}
