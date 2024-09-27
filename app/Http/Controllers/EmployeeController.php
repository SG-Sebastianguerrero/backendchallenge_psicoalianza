<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Logs;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $employees = DB::table('employees')->select(
                'employees.id',
                'employees.name',
                'employees.lastname',
                'employees.identification',
                'employees.billing_address',
                'employees.phone',
                'cities.city_name',
                'cities.departament',
            )->join('cities', 'employees.city_id','=','cities.id')
            ->orderBy('employees.id','ASC')
            ->get();
    
            $cities = DB::table('cities')->select(
                'cities.id',
                'cities.city_name',
                'cities.departament',
            )->get();

            return view('employee.index', compact(['employees', 'cities']));
        } catch (\Exception $e) {
            $log = new Logs();
            $log->file = "EmployeeController/index()";
            $log->message = $e->getMessage() . " " . $e->getLine();
            $log->save();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $newEmployee = new Employee();
            $newEmployee->name = $request->name;
            $newEmployee->lastname = $request->lastname;
            $newEmployee->city_id = $request->city;
            $newEmployee->billing_address = $request->address;
            $newEmployee->identification = $request->identification;
            $newEmployee->phone = $request->phone;
            $newEmployee->save();

            return $newEmployee;

        } catch (\Exception $e) {
            $log = new Logs();
            $log->file = "EmployeeController/store()";
            $log->message = $e->getMessage() . " " . $e->getLine();
            $log->save();
            return response()->json('Error: '.$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $employee = Employee::FindOrFail($id);
            return $employee;
        } catch (\Exception $e) {
            $log = new Logs();
            $log->file = "EmployeeController/show()";
            $log->message = $e->getMessage() . " " . $e->getLine();
            $log->save();
            return response()->json('Error: '.$e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try{
            $result = Employee::where('id','=', $request->id)
            ->update([
                'name' => $request->name,
                'lastname' => $request->lastname,
                'identification' => $request->identification,
                'phone' => $request->phone,
                'city_id' => $request->city,
                'billing_address' => $request->address,
            ]);

            return $request;
        } catch (\Exception $e) {
            $log = new Logs();
            $log->file = "EmployeeController/update()";
            $log->message = $e->getMessage() . " " . $e->getLine();
            $log->save();
            return response()->json('Error: '.$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $result = Employee::where('id','=', $id)->delete();  
            return $result;

        } catch (\Exception $e) {
            $log = new Logs();
            $log->file = "EmployeeController/destroy()";
            $log->message = $e->getMessage() . " " . $e->getLine();
            $log->save();
            return response()->json('Error: '.$e->getMessage());
        }
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function employees_all()
    // {
    //     try{
    //         $employees = DB::table('employees')->select(
    //             'employees.id',
    //             'employees.name',
    //             'employees.lastname',
    //             'employees.identification',
    //             'employees.billing_address',
    //             'employees.phone',
    //             'cities.city_name',
    //             'cities.departament',
    //         )->join('cities', 'employees.city_id','=','cities.id')
    //         ->orderBy('employees.id','ASC')
    //         ->get();
    
    //         return $employees;
    //     } catch (\Exception $e) {
    //         $log = new Logs();
    //         $log->file = "EmployeeController/allemployees()";
    //         $log->message = $e->getMessage() . " " . $e->getLine();
    //         $log->save();
    //     }
    // }
}
