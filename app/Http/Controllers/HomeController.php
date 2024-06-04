<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        // Fetch all employees from the database
        $employees = Employee::all();

        // Pass the employees to the view
        return view('home', compact('employees'));
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


}
