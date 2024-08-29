<?php

namespace Tests\Feature;

use App\Services\EmployeeService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmployeeServiceTest extends TestCase
{
    private EmployeeService $employeeService;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function setUp():void{
        parent::setUp();
        $this->employeeService = $this->app->make(EmployeeService::class);
    }

    public function testSample(){
        self::assertTrue(true);
    }
}
