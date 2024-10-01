<?php

namespace App\Repositories;

use App\Models\Competency01;
use App\Interfaces\RepositoryInterface;

class Competency01Repository implements RepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function index(){
        return Competency01::all();
    }

    public function getById($id){
       return Competency01::findOrFail($id);
    }

    public function store(array $data){
       return Competency01::create($data);
    }

    public function update(array $data,$id){
       return Competency01::whereId($id)->update($data);
    }

    public function delete($id){
       return Competency01::destroy($id);
    }
}
