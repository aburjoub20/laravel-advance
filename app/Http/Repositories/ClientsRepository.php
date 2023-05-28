<?php
namespace App\Http\Repositories;
use App\Models\Client;
use Illuminate\Support\Facades\Session;
use App\Http\Interfaces\ClientsInterface;

class ClientsRepository implements ClientsInterface{

    public $clientModel;
    public function __construct(Client $client){
        $this->clientModel = $client;
    }

    public function index(){
        $clinets = $this->clientModel::get();
        return view('clients.index',compact('clinets'));
    }
    public function create(){
        return view('clients.create');
    }

    public function store(  $request){
        $this->clientModel::create([
            'email'=>$request->email,
            'name'=>$request->name,
            'phone'=>$request->phone,
        ]);
         return $this->clientredirect('added successfully');
    }
    

    public function edit($id){
        $client = $this->clientModel::find($id);
        return view('clients.edit',compact('client'));
    }

    public function update( $request){
        $this->clientModel::find($request->client_id)->update([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
        ]);
         return $this->clientredirect('Updated succesfulty');


}

        public function delete( $request){
            $this->clientModel::find($request->client_id)->delete();
            return $this->clientredirect('Deleted succesfulty');
        }

        public function clientredirect($msg){
            Session::flush('msg', $msg);
            // return redirect(route('clients.index'));
            return  view('clients.index');
        }
        }



?>
