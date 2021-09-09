<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $employees = Employee::get();

        return view('layouts.dashboard',[
            'employees' => $employees
        ]);
    }
}
