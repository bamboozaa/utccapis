<?php

namespace App\Repositories;

use App\Models\Competency02;
use App\Interfaces\Competency02RepositoryInterface;

class Competency02Repository implements Competency02RepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function index(){
        return Competency02::all();
    }

    public function getById($id){
       return Competency02::findOrFail($id);
    }

    public function store(array $data){
       return Competency02::create($data);
    }

    public function update(array $data,$id){
       return Competency02::whereId($id)->update($data);
    }

    public function delete($id){
       return Competency02::destroy($id);
    }
}
