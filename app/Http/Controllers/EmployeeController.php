<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view('employees.index',[
            'employees'=>employee::all()
        ]);
    }
    public function edit($id)
    {
        $employee = employee::findOrFail($id);
        return view('employees.edit', [
            'employee' => $employee,
            'employees' => employee::all()
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'position' => 'required|string',
            'phone_number' => 'required|integer',
            'email' => 'required|string',
        ]);

        $employee = employee::findOrFail($id);
        $input = $request->all();
        $employee->update($input);
        return redirect()->route('employees.index');
    }
}
