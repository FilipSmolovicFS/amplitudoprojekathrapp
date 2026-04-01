<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Employee;
use App\Models\Contract;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EmployeeUpdateTest extends TestCase
{
    use RefreshDatabase;

    public function test_employee_can_be_updated(): void
    {
        $user = User::factory()->create();

        $employee = Employee::create([
            'first_name' => 'Petar',
            'last_name' => 'Petrović',
            'email' => 'petar@test.com',
            'position_id' => 1,
            'status_id' => 1,
            'started_at' => '2025-01-01',
        ]);

        $salary = $employee->salary()->create([
            'current_amount' => 1000,
        ]);

        $payload = [
            'first_name' => 'Novo Ime',
            'last_name' => 'Petrović',
            'email' => 'petar@test.com',
            'position' => 1,
            'status' => 1,
            'salary' => 1500,
            'started_at' => '2025-01-01',
        ];

        $response = $this->actingAs($user)
            ->put("/employee/{$employee->id}", $payload);

        $response->assertRedirect();

        $this->assertDatabaseHas('employees', [
            'id' => $employee->id,
            'first_name' => 'Novo Ime',
        ]);

        $this->assertDatabaseHas('salaries', [
            'id' => $salary->id,
            'current_amount' => 1500,
        ]);
    }
}
