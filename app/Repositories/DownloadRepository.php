<?php

namespace App\Repositories;

use App\Models\Download;
use App\Interfaces\DownloadRepositoryInterface;

class DownloadRepository implements DownloadRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function index(){
        return Download::all();
    }

    public function getById($id){
       return Download::findOrFail($id);
    }

    public function store(array $data){
       return Download::create($data);
    }

    public function update(array $data,$id){
       return Download::whereId($id)->update($data);
    }

    public function delete($id){
       return Download::destroy($id);
    }
}
