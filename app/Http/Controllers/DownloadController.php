<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDownloadRequest;
use App\Http\Requests\UpdateDownloadRequest;
use App\Models\Download;
use App\Interfaces\DownloadRepositoryInterface;
use App\Classes\ApiResponseClass;
use App\Http\Resources\DownloadResource;
use Illuminate\Support\Facades\DB;

class DownloadController extends Controller
{
    private DownloadRepositoryInterface $downloadRepositoryInterface;

    public function __construct(DownloadRepositoryInterface $downloadRepositoryInterface)
    {
        $this->downloadRepositoryInterface = $downloadRepositoryInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->downloadRepositoryInterface->index();

        return ApiResponseClass::sendResponse(DownloadResource::collection($data),'',200);
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
    public function store(StoreDownloadRequest $request)
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
             $download = $this->downloadRepositoryInterface->store($details);

             DB::commit();
             return ApiResponseClass::sendResponse(new DownloadResource($Download),'Download Create Successful',201);

        }catch(\Exception $ex){
            return ApiResponseClass::rollback($ex);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $download = $this->downloadRepositoryInterface->getById($id);

        return ApiResponseClass::sendResponse(new DownloadResource($download),'',200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Download $download)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDownloadRequest $request, Download $download)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Download $download)
    {
        //
    }
}
