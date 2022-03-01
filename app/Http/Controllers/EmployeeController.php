<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function ViewEmployee(){

        $data['allData'] = Employee::all();
        return view ('viewemployee', $data);

    }

    public function AddEmployee(){
        return view ('addemployee');

    }

    public function StoreEmployee(Request $request){

        $data = new Employee();
        $data->name = $request->get('name');
        $data->designation = $request->get('designation');
        $data->division = $request->get('division');
        $data->days = $request->get('days');
        $data->reason = $request->get('reason');
        $data->save();
        return redirect ('viewemployee');

    }

    public function EditEmployee($id){

        $editData = Employee::find($id);
        return view ('editemployee', compact('editData'));

    }

    public function UpdateEmployee(Request $request, $id){

        $data = Employee::find($id);
        $data->name = $request->get('name');
        $data->designation = $request->get('designation');
        $data->division = $request->get('division');
        $data->days = $request->get('days');
        $data->reason = $request->get('reason');
        $data->save();
        return redirect ('viewemployee');

    }

    public function DeleteEmployee($id){
        $data = Employee::find($id);
        $data->delete();
       
    }
}
