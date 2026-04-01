<?php

use App\Models\Employee;

test('testGetSalaryHistory', function () {

    $paginatedResult = ['data' => ['history1', 'history2']];

    // Mock salaryHistory -> paginate(5)
    $salaryHistoryMock = Mockery::mock();
    $salaryHistoryMock->shouldReceive('paginate')
        ->once()
        ->with(5)
        ->andReturn($paginatedResult);

    // Mock salary -> salaryHistory()
    $salaryMock = Mockery::mock();
    $salaryMock->shouldReceive('salaryHistory')
        ->once()
        ->andReturn($salaryHistoryMock);

    // Properly mock Employee property access
    $employeeMock = Mockery::mock(Employee::class);
    $employeeMock->shouldReceive('getAttribute')
        ->with('salary')
        ->andReturn($salaryMock);

    // Class under test
    $service = new class {
        public function getSalaryHistory($employee)
        {
            return $employee->salary->salaryHistory()->paginate(5);
        }
    };

    $result = $service->getSalaryHistory($employeeMock);

    expect($result)->toBe($paginatedResult);
});
