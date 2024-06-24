<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestModel;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = TestModel::all(); // Use TestModel to access the 'employees' table
        return view('test', ['employee' => $employee]); // Pass $employees to the view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'phone' => 'required|int|max:20', // Adjust max length as per your needs
            'address' => 'required|string|max:255',
        ]);

        // Create a new instance of TestModel
        $employee = new TestModel();
        
        // Assign values from the validated input
        $employee->first_name = $validatedData['firstname'];
        $employee->last_name = $validatedData['lastname'];
        $employee->gender = $validatedData['gender'];
        $employee->phone_number = $validatedData['phone'];
        $employee->address = $validatedData['address'];
        
        // Save the employee record
        $employee->save();

        // Redirect back or to a success page (you can modify this as per your application flow)
        return redirect()->back()->with('success', 'Employee added successfully!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
