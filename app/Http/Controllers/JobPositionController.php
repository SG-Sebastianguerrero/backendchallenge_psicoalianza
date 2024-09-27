<?php

namespace App\Http\Controllers;

use App\Models\JobPosition;
use Illuminate\Http\Request;
use App\Models\Logs;
use Illuminate\Support\Facades\DB;

class JobPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
        $job_positions = DB::table('job_positions')->select(
            'job_positions.id',
            'job_positions.position_name',
            'job_positions.area_name',
            'employees.name',
            'employees.lastname',
            'employees.identification',
            'roles.role_name',
            'Em.name as bossname',
            'Em.lastname as bosslastname',
        )
        ->leftJoin('employees', 'job_positions.id_employee','=','employees.id')
        ->leftJoin('employees as Em', 'job_positions.id_boss','=','Em.id')
        ->join('roles', 'job_positions.id_role','=','roles.id')
        ->orderBy('employees.id','ASC')
        ->get();

        $roles = DB::table('roles')->select(
            'roles.id',
            'roles.role_name',
        )->get();

        return view('job_position.index', compact(['job_positions', 'roles']));
        } catch (\Exception $e) {
            $log = new Logs();
            $log->file = "JobPositionController/index()";
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
            $newJobPositions = new JobPosition();
            $newJobPositions->position_name = $request->position_name;
            $newJobPositions->area_name = $request->area_name;
            $newJobPositions->id_employee = $request->id_employee;
            $newJobPositions->id_boss = $request->id_boss;
            $newJobPositions->id_role = $request->id_role;
            $newJobPositions->save();

            return $newJobPositions;

        } catch (\Exception $e) {
            $log = new Logs();
            $log->file = "JobPositionController/store()";
            $log->message = $e->getMessage() . " " . $e->getLine();
            $log->save();
            return response()->json('Error: '.$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobPosition  $jobPosition
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $JobPosition = JobPosition::FindOrFail($id);
            return $JobPosition;
        } catch (\Exception $e) {
            $log = new Logs();
            $log->file = "JobPositionController/show()";
            $log->message = $e->getMessage() . " " . $e->getLine();
            $log->save();
            return response()->json('Error: '.$e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobPosition  $jobPosition
     * @return \Illuminate\Http\Response
     */
    public function edit(JobPosition $jobPosition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobPosition  $jobPosition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try{
            $JobPosition = JobPosition::where('id','=', $request->id)
            ->update([
                'position_name' => $request->name,
                'area_name' => $request->lastname,
                'id_employee' => $request->identification,
                'id_boss' => $request->phone,
                'id_role' => $request->city,
            ]);
            
            return $JobPosition;
        } catch (\Exception $e) {
            $log = new Logs();
            $log->file = "JobPositionController/update()";
            $log->message = $e->getMessage() . " " . $e->getLine();
            $log->save();
            return response()->json('Error: '.$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobPosition  $jobPosition
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobPosition $jobPosition)
    {
        try{
            $JobPosition = JobPosition::where('id','=', $id)->delete();
            return $JobPosition;
        } catch (\Exception $e) {
            $log = new Logs();
            $log->file = "JobPositionController/destroy()";
            $log->message = $e->getMessage() . " " . $e->getLine();
            $log->save();
            return response()->json('Error: '.$e->getMessage());
        }
    }
}
