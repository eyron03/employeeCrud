<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $employees = employee::all();
        return view('employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'FirstName' => 'required|string|max:255',
            'LastName' => 'required|string|max:255',
            'dob' => 'required|string|max:255',
            'age' => 'required|integer|max:255',

        ]);
        Employee::create($request->only(['FirstName', 'LastName', 'dob', 'age']));
    //    Employee::create([

    //    ])
       return redirect()->route('employee.index')->with('success','Employee create successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(employee $employee)
    {
        //
        return view('employee.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(employee $employee)
    {
        //
        return view('employee.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, employee $employee)
    {
        //
        $request->validate([
            'FirstName' => 'required|string|max:255',
            'LastName' => 'required|string|max:255',
            'dob' => 'required|string|max:255',
            'age' => 'required|integer|max:255',

        ]);
        $employee->update($request->only(['FirstName', 'LastName', 'dob', 'age']));
        return redirect()->route('employee.index')->with('success','Employeee Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employee $employee)
    {
        //
        $employee->delete();
        return redirect()->route('employee.index')->with('success','Deleted Successfully');
    }
}
