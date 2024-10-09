<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompetency02Request;
use App\Http\Requests\UpdateCompetency02Request;
use App\Models\Competency02;
// use App\Interfaces\RepositoryInterface;
use App\Interfaces\Competency02RepositoryInterface;
use App\Classes\ApiResponseClass;
use App\Http\Resources\Competency02Resource;
use Illuminate\Support\Facades\DB;

class Competency02Controller extends Controller
{
    private Competency02RepositoryInterface $competency02RepositoryInterface;

    public function __construct(Competency02RepositoryInterface $competency02RepositoryInterface)
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
        $details =[
            'username' => $request->username,
            'dep_id' => $request->dep_id,
            'section_id' => $request->section_id,
            'round' => $request->round,
            'option1_1' => $request->option1_1,
            'option1_2' => $request->option1_2,
            'option1_3' => $request->option1_3,
            'comment1' => $request->comment1,
            'option2_1' => $request->option2_1,
            'option2_2' => $request->option2_2,
            'option2_3' => $request->option2_3,
            'comment2' => $request->comment2,
            'option3_1' => $request->option3_1,
            'option3_2' => $request->option3_2,
            'option3_3' => $request->option3_3,
            'comment3' => $request->comment3,
            'option4_1' => $request->option4_1,
            'option4_2' => $request->option4_2,
            'option4_3' => $request->option4_3,
            'comment4' => $request->comment4,
            'option5_1' => $request->option5_1,
            'option5_2' => $request->option5_2,
            'option5_3' => $request->option5_3,
            'comment5' => $request->comment5,
            'option6_1' => $request->option6_1,
            'option6_2' => $request->option6_2,
            'option6_3' => $request->option6_3,
            'comment6' => $request->comment6,
            'option7_1' => $request->option7_1,
            'option7_2' => $request->option7_2,
            'option7_3' => $request->option7_3,
            'comment7' => $request->comment7,
            'option8_1' => $request->option8_1,
            'option8_2' => $request->option8_2,
            'option8_3' => $request->option8_3,
            'comment8' => $request->comment8,
            'option9_1' => $request->option9_1,
            'option9_2' => $request->option9_2,
            'option9_3' => $request->option9_3,
            'comment9' => $request->comment9,
            'option10_1' => $request->option10_1,
            'option10_2' => $request->option10_2,
            'option10_3' => $request->option10_3,
            'comment10' => $request->comment10,
            'option11_1' => $request->option11_1,
            'option11_2' => $request->option11_2,
            'option11_3' => $request->option11_3,
            'option11_4' => $request->option11_4,
            'comment11' => $request->comment11,
            'option12_1' => $request->option12_1,
            'option12_2' => $request->option12_2,
            'option12_3' => $request->option12_3,
            'comment12' => $request->comment12,
            'option13_1' => $request->option13_1,
            'option13_2' => $request->option13_2,
            'option13_3' => $request->option13_3,
            'comment13' => $request->comment13,
            'status' => $request->status
        ];
        DB::beginTransaction();
        try{
             $competency02 = $this->competency02RepositoryInterface->store($details);

             DB::commit();
             return ApiResponseClass::sendResponse(new Competency02Resource($competency02),'Competency Create Successful',201);

        }catch(\Exception $ex){
            return ApiResponseClass::rollback($ex);
        }
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
