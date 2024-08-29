<?php

namespace App\Repositories;

interface EmployeeRepository
{
    public function Insert(array $payload);
    public function GetEmployeeByDepartement(int $departementId);
}