<?php
namespace App\Services;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Collection;

interface EmployeeService {
    public function GetEmployeeById(string $id):?Employee;
    public function GetEmployees():?Collection;
} 