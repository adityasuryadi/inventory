<?php

namespace App\Http\Controllers;

use App\Services\EmployeeService;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    private EmployeeService $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    public function getEmployee($id){
        return $this->employeeService->GetEmployeeById($id);
    }

    public function getEmployees(){
        $employees = $this->employeeService->GetEmployees();
        return response()->ok($employees);
    }
}
