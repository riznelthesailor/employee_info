<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'job_title' => 'required'
        ]);

        Employee::create($request->only('name','job_title'));

        return back();
    }
}
