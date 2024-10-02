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
    private RepositoryInterface $competency01RepositoryInterface;

    public function __construct(RepositoryInterface $competency01RepositoryInterface)
    {
        $this->competency01RepositoryInterface = $competency01RepositoryInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->competency01RepositoryInterface->index();

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
            'username' => $request->username,
            'department' => $request->department,
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
            'comment3' => $request->comment3,
            'option4_1' => $request->option4_1,
            'option4_2' => $request->option4_2,
            'option4_3' => $request->option4_3,
            'comment4' => $request->comment4,
            'option5_1' => $request->option5_1,
            'option5_2' => $request->option5_2,
            'comment5' => $request->comment5,
            'option6_1' => $request->option6_1,
            'option6_2' => $request->option6_2,
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
            'comment10' => $request->comment10
        ];
        // $details = parent::toArray($request);
        DB::beginTransaction();
        try{
             $competency01 = $this->competency01RepositoryInterface->store($details);

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
