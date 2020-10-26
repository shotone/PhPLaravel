<?php


namespace App\Http\Controllers;


use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function getEmployee(){
        $employees = Employee::all();
        return view('employee_list')->with('employees', $employees);
    }

    public function edit($id){
        $employee = Employee::findOrfail($id);
        return view('edit')->with('employee',$employee);
    }

    public function update(Request $request, $employee){
        $employee = Employee::findOrfail($employee);

        $employee->update($request->all());


        return redirect()->back();
    }
}
