<?php

namespace App\View\Components;

use App\Models\Employee;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class ContractTableRow extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Employee $employee,
        public array $statusesAndPositionsAndContractTypes = []
    )
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contract-table-row');
    }
}
