<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompetency02Request;
use App\Http\Requests\UpdateCompetency02Request;
use App\Models\Competency02;
use App\Interfaces\RepositoryInterface;
use App\Classes\ApiResponseClass;
use App\Http\Resources\Competency02Resource;
use Illuminate\Support\Facades\DB;

class Competency02Controller extends Controller
{
    private RepositoryInterface $competency02RepositoryInterface;

    public function __construct(RepositoryInterface $competency02RepositoryInterface)
    {
        $this->competency02RepositoryInterface = $competency02RepositoryInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->competency02RepositoryInterface->index();

        return ApiResponseClass::sendResponse(Competency02Resource::collection($data),'',200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompetency02Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Competency02 $competency02)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Competency02 $competency02)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompetency02Request $request, Competency02 $competency02)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Competency02 $competency02)
    {
        //
    }
}
