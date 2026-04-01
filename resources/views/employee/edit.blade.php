<x-layout>
    <div class="mx-auto max-w-5xl py-12 px-4 sm:px-6 lg:px-8">

        <div class="mb-8 flex items-center justify-between">
            <h1 class="font-bold text-2xl text-gray-900 dark:text-white">Edit Employee: {{ $employee->first_name }}</h1>
        </div>

        <form method="POST" action="{{ route('employee.update', $employee->id) }}" enctype="multipart/form-data" class="space-y-8">
            @csrf
            @method('PATCH')

            <div class="bg-white dark:bg-[#18181b] ring-1 ring-gray-900/5 dark:ring-white/10 rounded-xl shadow-sm overflow-hidden">
                <div class="px-6 py-5 border-b border-gray-900/5 dark:border-white/10 bg-gray-50/50 dark:bg-white/5">
                    <h2 class="text-base font-semibold leading-6 text-gray-900 dark:text-white">Personal Information</h2>
                    <p class="mt-1 text-sm text-gray-500 dark:text-zinc-400">Update the basic contact and identity details.</p>
                </div>

                <div class="px-6 py-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-2">
                    <div>
                        <x-form.input label="First Name" type="text" name="first_name" value="{{ $employee->first_name }}" />
                        @error('first_name') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <x-form.input label="Last Name" type="text" name="last_name" value="{{ $employee->last_name }}" />
                        @error('last_name') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <x-form.input label="Email" type="email" name="email" value="{{ $employee->email }}" />
                        @error('email') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <x-form.input label="Phone Number" type="tel" name="phone_number" value="{{ $employee->phone_number }}" />
                        @error('phone_number') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <x-form.input label="Date of Birth" type="date" name="date_of_birth" value="{{ $employee->date_of_birth }}" />
                        @error('date_of_birth') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <x-form.input label="JMBG" type="text" name="jmbg" value="{{ $employee->JMBG }}" />
                        @error('jmbg') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <x-form.dropdown title="Gender" name="gender" :options="['Male', 'Female']" value="{{ $employee->gender }}" />
                    </div>

                    <div class="sm:col-span-2">
                        <x-form.input label="Address" type="text" name="address" value="{{ $employee->address }}" />
                        @error('address') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-[#18181b] ring-1 ring-gray-900/5 dark:ring-white/10 rounded-xl shadow-sm overflow-hidden">
                <div class="px-6 py-5 border-b border-gray-900/5 dark:border-white/10 bg-gray-50/50 dark:bg-white/5">
                    <h2 class="text-base font-semibold leading-6 text-gray-900 dark:text-white">Employment Details</h2>
                    <p class="mt-1 text-sm text-gray-500 dark:text-zinc-400">Manage organizational placement and compensation.</p>
                </div>

                <div class="px-6 py-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-3">
                    <x-form.dropdown title="Status" name="status"
                                     value="{{ $employee->status->id }}"
                                     :options="$statusesAndPositionsAndContractTypes['statuses']" />

                    <x-form.dropdown title="Position" name="position"
                                     value="{{ $employee->position->id }}"
                                     :options="$statusesAndPositionsAndContractTypes['positions']" />

                    <x-form.input label="Salary" type="number" name="salary"
                                  value="{{ $employee->salary->current_amount }}" />
                </div>
            </div>

            <div class="flex items-center justify-end gap-x-4 pt-4">
                <a href="{{ route('employee.index') }}" class="text-sm font-semibold leading-6 text-gray-900 dark:text-zinc-300 hover:text-gray-700 dark:hover:text-white transition-colors">
                    Cancel
                </a>
                <button type="submit" class="rounded-lg bg-blue-600 dark:bg-[#e17100] px-6 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 dark:hover:bg-[#ff8c1a] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 transition-colors">
                    Update Employee
                </button>
            </div>
        </form>

        <div class="mt-12">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white">Active Contracts</h2>
                <button
                    x-data x-on:click="$dispatch('open-modal', 'add-contract-modal')"
                    class="inline-flex items-center rounded-lg px-4 py-2 text-sm font-semibold bg-blue-600 dark:bg-[#e17100] text-white dark:text-black shadow-sm hover:opacity-90 transition-opacity"
                >
                    + Add new contract
                </button>
            </div>

            <div class="bg-white dark:bg-[#18181b] ring-1 ring-gray-900/5 dark:ring-white/10 rounded-xl shadow-sm overflow-hidden">
                <table class="w-full text-sm text-left text-gray-900 dark:text-white">
                    <thead class="bg-gray-50 dark:bg-white/5 text-xs uppercase text-gray-500 dark:text-zinc-400">
                    <tr>
                        <th class="px-6 py-4 font-bold">Contract Type</th>
                        <th class="px-6 py-4 font-bold">File</th>
                        <th class="px-6 py-4 font-bold">Started At</th>
                        <th class="px-6 py-4 font-bold">Ended At</th>
                        <th class="px-6 py-4 font-bold">Action</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-[#3E3E3A]">
                    <x-contract-table-row title="Delete" :employee="$employee" :statusesAndPositionsAndContractTypes="$statusesAndPositionsAndContractTypes"/>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <x-edit-modal id="add-contract-modal" route="{{route('contract.store')}}" method="POST" :hasFile="true">
        <input type="hidden" value="{{$employee->id}}" name="employee_id"/>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="sm:col-span-2">
                <x-form.dropdown title="Contract type"
                                 name="contract_type_id"
                                 :options="$statusesAndPositionsAndContractTypes['contractTypes']"/>
            </div>

            <div x-data="{ startDate: '' }" class="sm:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-6">
                <x-form.input label="Starting at:" type="date"
                              name="started_at"
                              x-model="startDate"
                              x-bind:min="new Date().toISOString().split('T')[0]"
                />

                <x-form.input label="Ending at:" type="date"
                              name="ended_at"
                              x-bind:min="startDate"
                />
            </div>

            <div class="sm:col-span-2 pt-2" x-data="{ fileError: '' }">
                <label class="block text-sm font-medium text-gray-900 dark:text-white mb-2">Upload Document (PDF)</label>
                <input type="file"
                       name="contracts_document"
                       accept="application/pdf"
                       @change="
                            fileError = '';
                            const file = $event.target.files[0];
                            if (file) {
                                if (file.type !== 'application/pdf') {
                                    fileError = 'Only PDF files are allowed';
                                    $event.target.value = '';
                                } else if (file.size > 2 * 1024 * 1024) {
                                    fileError = 'File must not exceed 2MB';
                                    $event.target.value = '';
                                }
                            }
                        "
                       class="block w-full text-sm text-gray-900 dark:text-zinc-300 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 dark:file:bg-[#e17100]/10 dark:file:text-[#e17100] dark:hover:file:bg-[#e17100]/20 transition-colors">
                <p x-show="fileError" x-text="fileError" class="text-sm text-red-500 mt-2"></p>
            </div>
        </div>
    </x-edit-modal>
</x-layout>
