<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return response()->json([

        'status'=>true,

        'message'=>'Employees retrieved successfully',

        'data'=>EmployeeResource::collection(
            Employee::latest()->paginate(2)
        )

    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        $employee = Employee::create($request->validated());

    return response()->json([
        'status'=>true,
        'message'=>'Employee created successfully',
        'data'=>new EmployeeResource($employee)
    ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
         return response()->json([

        'status'=>true,

        'message'=>'Employee retrieved successfully',

        'data'=>new EmployeeResource($employee)

    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request,Employee $employee)
    {
         $employee->update($request->validated());

    return response()->json([

        'status'=>true,

        'message'=>'Employee updated successfully',

        'data'=>new EmployeeResource($employee)

    ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

    return response()->json([

        'status'=>true,

        'message'=>'Employee deleted successfully',

        'data'=>null

    ]);
    }
}
