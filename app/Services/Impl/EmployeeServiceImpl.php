<?php
namespace App\Services\Impl;

use App\Models\Employee;
use App\Services\EmployeeService;
use Illuminate\Database\Eloquent\Collection;

class EmployeeServiceImpl implements EmployeeService{

    public function GetEmployeeById(string $id):?Employee{
        $employee = Employee::with('departement')->find($id);
        return $employee;
    }

    public function GetEmployees():Collection{
        $employees = Employee::with('departement')->get();
        return $employees;
    }
}