<x-layout>
    <div class="max-w-7xl mx-auto space-y-8 py-8">

        {{-- ===================================================== --}}
        {{-- EMPLOYEE HEADER --}}
        {{-- ===================================================== --}}
        <section class="bg-white dark:bg-[#18181b] border border-default rounded-sm shadow-xs p-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                <div>
                    <h1 class="text-2xl font-bold text-heading">
                        {{ $employee->first_name }} {{ $employee->last_name }}
                    </h1>

                    <p class="text-sm text-body mt-1">
                        {{ $employee->email }}
                    </p>
                </div>

                <span class="inline-flex items-center px-4 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-blue-600 dark:bg-[#e17100] text-white dark:text-black">
                    {{ $employee->status->name }}
                </span>
            </div>
        </section>

        {{-- ===================================================== --}}
        {{-- INFORMATION GRID --}}
        {{-- ===================================================== --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            {{-- PERSONAL INFO --}}
            <section class="bg-white dark:bg-[#18181b] border border-default rounded-sm shadow-xs p-6">
                <h2 class="text-lg font-semibold text-heading mb-6">
                    Personal Information
                </h2>

                <div class="space-y-5 text-sm">
                    <div class="flex justify-between">
                        <span class="text-body">Date of Birth</span>
                        <span class="font-semibold text-heading">
                            {{ $employee->date_of_birth }}
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-body">Gender</span>
                        <span class="font-semibold text-heading">
                            {{ $employee->gender }}
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-body">Phone Number</span>
                        <span class="font-semibold text-heading">
                            {{ $employee->phone_number }}
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-body">Address</span>
                        <span class="font-semibold text-heading">
                            {{ $employee->address }}
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-body">JMBG</span>
                        <span class="font-semibold text-heading">
                            {{ $employee->JMBG }}
                        </span>
                    </div>
                </div>
            </section>

            {{-- EMPLOYMENT INFO --}}
            <section class="bg-white dark:bg-[#18181b] border border-default rounded-sm shadow-xs p-6">
                <h2 class="text-lg font-semibold text-heading mb-6">
                    Employment Details
                </h2>

                <div class="space-y-5 text-sm">
                    <div class="flex justify-between">
                        <span class="text-body">Current Position</span>
                        <span class="font-semibold text-heading">
                            {{ $employee->position->name }}
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-body">Current Salary</span>
                        <span class="font-semibold text-heading">
                            {{ $employee->salary->current_amount }}
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-body">Status</span>
                        <span class="font-semibold text-heading">
                            {{ $employee->status->name }}
                        </span>
                    </div>
                </div>
            </section>
        </div>

        {{-- ===================================================== --}}
        {{-- SALARY HISTORY --}}
        {{-- ===================================================== --}}
        <section class="bg-white dark:bg-[#18181b] border border-default rounded-sm shadow-xs overflow-hidden">
            <div class="px-6 py-5 border-b border-default">
                <h2 class="text-lg font-semibold text-heading">
                    Salary History
                </h2>
            </div>

            <table class="w-full text-sm text-heading">
                <thead>
                <tr class="border-b border-default text-left">
                    <th class="px-6 py-4">Amount</th>
                    <th class="px-6 py-4">Change date</th>
                </tr>
                </thead>

                <tbody class="divide-y divide-default">
                @forelse($salaryHistory as $salary)
                    <tr class="hover:bg-gray-100 dark:hover:bg-[#242427] text-left">
                        <td class="px-6 py-4 font-semibold">
                            {{ $salary->amount }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $salary->created_at->format('m/d/Y') }}
                        </td>
                    </tr>
                @empty
                    <x-empty-state-table-body
                        title="No salary history"
                        colspan="2"
                    />
                @endforelse
                </tbody>
            </table>

            <div class="px-6 py-4">
                {{ $salaryHistory->links() }}
            </div>
        </section>

        {{-- ===================================================== --}}
        {{-- CONTRACTS --}}
        {{-- ===================================================== --}}
        <section class="bg-white dark:bg-[#18181b] border border-default rounded-sm shadow-xs overflow-hidden">
            <div class="px-6 py-5 border-b border-default">
                <h2 class="text-lg font-semibold text-heading">
                    Contracts
                </h2>
            </div>

            <table class="w-full text-sm text-heading">
                <thead class="text-xs uppercase font-bold text-heading bg-gray-50/50 dark:bg-white/5 border-b border-default">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left">Contract Type</th>
                    <th scope="col" class="px-6 py-3 text-left">Contract File</th>
                    <th scope="col" class="px-6 py-3 text-left">Started At</th>
                    <th scope="col" class="px-6 py-3 text-left">Ended At</th>
                    {{-- Align Action to the right for a cleaner finish --}}
                    <th scope="col" class="px-6 py-3 text-left">Action</th>
                </tr>
                </thead>

                <tbody>
                <x-contract-table-row
                    title="Delete"
                    :employee="$employee"
                    :statusesAndPositionsAndContractTypes="$statusesAndPositionsAndContractTypes"
                />
                </tbody>
            </table>
        </section>

        {{-- ===================================================== --}}
        {{-- ACTIONS --}}
        {{-- ===================================================== --}}
        <div class="flex justify-end gap-4">
            <a
                href="{{ route('employee.edit', $employee->id) }}"
                class="text-heading rounded-sm px-4 py-2 bg-gray-200 dark:bg-gray-200/10"
            >
                Edit
            </a>

            <x-modal
                title="Delete Employee"
                name="{{ $employee->first_name }} {{ $employee->last_name }}"
                id="{{ $employee->id }}"
                route="{{ route('employee.destroy', $employee->id) }}"
                class="bg-blue-600 dark:bg-red-600 text-white font-medium cursor-pointer px-4 py-2 rounded-sm"
            />
        </div>

    </div>
</x-layout>
