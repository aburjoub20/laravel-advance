<?php
namespace App\Http\Interfaces;

interface ClientsInterface{
    
    public function index();
    public function create();
    public function store($request);
    public function edit($id);
    public function update($id);
    public function delete($request);
}
?>