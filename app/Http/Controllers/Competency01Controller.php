<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompetency01Request;
use App\Http\Requests\UpdateCompetency01Request;
use App\Models\Competency01;
use App\Interfaces\RepositoryInterface;
use App\Classes\ApiResponseClass;
use App\Http\Resources\Competency01Resource;
use Illuminate\Support\Facades\DB;

class Competency01Controller extends Controller
{
    private RepositoryInterface $RepositoryInterface;

    public function __construct(RepositoryInterface $RepositoryInterface)
    {
        $this->RepositoryInterface = $RepositoryInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->RepositoryInterface->index();

        return ApiResponseClass::sendResponse(Competency01Resource::collection($data),'',200);
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
    public function store(StoreCompetency01Request $request)
    {
        $details =[
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'postal_code' => $request->postal_code,
            'is_consent' => $request->is_consent,
            'course_code' => $request->course_code,
        ];
        DB::beginTransaction();
        try{
             $competency01 = $this->RepositoryInterface->store($details);

             DB::commit();
             return ApiResponseClass::sendResponse(new Competency01Resource($competency01),'Competency Create Successful',201);

        }catch(\Exception $ex){
            return ApiResponseClass::rollback($ex);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Competency01 $competency01)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Competency01 $competency01)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompetency01Request $request, Competency01 $competency01)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Competency01 $competency01)
    {
        //
    }
}
