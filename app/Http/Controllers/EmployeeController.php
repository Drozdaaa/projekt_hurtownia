<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\employee;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEmployeeRequest;
class EmployeeController extends Controller
{
    public function index()
    {
        // Pobieranie danych przy użyciu funkcji SQL
        //$employees = DB::select('SELECT * FROM get_order_pickers_with_order_count()');
        //'employees' => employee::orderBy('id')->get()
        // Przekazywanie danych do widoku
        //return view('employees.index', ['employees' => $employees]);

            return view('employees.index',[
                'employees' => employee::orderBy('id')->get()
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
            'salary' => 'required|numeric|min:0',
        ]);

        $employee = employee::findOrFail($id);
        $input = $request->all();
        $employee->update($input);
        return redirect()->route('employees.index');
    }
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index');
    }

    public function create()
    {
        return view('employees.create',[
            'employees' => employee::all(),
        ]);
    }
    public function store(StoreEmployeeRequest $request)
    {
        $input = $request->all();
        employee::create($input);

        return redirect()->route('employees.index'
    );
    }

}
