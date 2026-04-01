@php use Carbon\Carbon; @endphp
<x-layout>
    <div class="mx-auto max-w-5xl py-12 px-4 sm:px-6 lg:px-8">

        <div class="mb-8 flex items-center justify-between">
            <h1 class="font-bold text-2xl text-gray-900 dark:text-white">Create Employee</h1>
        </div>

        <form method="POST" action="{{ route('employee.store') }}" enctype="multipart/form-data" class="space-y-8">
            @csrf

            <div class="bg-white dark:bg-[#18181b] ring-1 ring-gray-900/5 dark:ring-white/10 rounded-xl shadow-sm overflow-hidden">
                <div class="px-6 py-5 border-b border-gray-900/5 dark:border-white/10">
                    <h2 class="text-base font-semibold leading-6 text-gray-900 dark:text-white">Personal Information</h2>
                    <p class="mt-1 text-sm text-gray-500 dark:text-zinc-400">Basic details and contact information for the new employee.</p>
                </div>

                <div class="px-6 py-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-2">
                    <div>
                        <x-form.input label="First Name" type="text" name="first_name" minlength="4" />
                        @error('first_name') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <x-form.input label="Last Name" type="text" name="last_name" />
                        @error('last_name') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <x-form.input label="Email" type="email" name="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" />
                        @error('email') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <x-form.input label="Phone Number" type="tel" name="phone_number" />
                        @error('phone_number') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <x-form.input label="Date of Birth" type="date" name="date_of_birth" min="13" />
                        @error('date_of_birth') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <x-form.input label="JMBG" type="text" name="jmbg" required min="13" />
                        @error('jmbg') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <x-form.dropdown title="Gender" name="gender" :options="['Male', 'Female']" />
                    </div>

                    <div class="sm:col-span-2">
                        <x-form.input label="Address" type="text" name="address" />
                        @error('address') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-[#18181b] ring-1 ring-gray-900/5 dark:ring-white/10 rounded-xl shadow-sm overflow-hidden">
                <div class="px-6 py-5 border-b border-gray-900/5 dark:border-white/10">
                    <h2 class="text-base font-semibold leading-6 text-gray-900 dark:text-white">Employment Details</h2>
                    <p class="mt-1 text-sm text-gray-500 dark:text-zinc-400">Assign the role, status, and compensation.</p>
                </div>

                <div class="px-6 py-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-3">
                    <div>
                        <x-form.dropdown title="Status" name="status" :options="$employeeStatus" />
                    </div>

                    <div>
                        <x-form.dropdown title="Position" name="position" :options="$positions" />
                    </div>

                    <div>
                        <x-form.input label="Salary" type="number" name="salary" />
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-[#18181b] ring-1 ring-gray-900/5 dark:ring-white/10 rounded-xl shadow-sm overflow-hidden"
                 x-data='{
    contracts: [],

    init() {
        let oldContracts = @json(old("contracts", []));

        if (oldContracts.length) {
            this.contracts = oldContracts.map((c, i) => ({
                id: Date.now() + i,
                started_at: c.started_at ?? "",
                ended_at: c.ended_at ?? "",
                contract_type_id: c.contract_type_id ?? ""
            }));
        } else {
            this.contracts = [{
                id: Date.now(),
                started_at: "",
                ended_at: "",
                contract_type_id: ""
            }];
        }
    },

    addContract() {
        if (this.contracts.length < 3) {
            this.contracts.push({
                id: Date.now() + Math.random(),
                started_at: "",
                ended_at: "",
                contract_type_id: ""
            });
        }
    },

    removeContract(index) {
        this.contracts.splice(index, 1);
    }
}'>

                <div class="px-6 py-5 border-b border-gray-900/5 dark:border-white/10 flex justify-between items-center">
                    <div>
                        <h2 class="text-base font-semibold leading-6 text-gray-900 dark:text-white">Contracts</h2>
                        <p class="mt-1 text-sm text-gray-500 dark:text-zinc-400">Upload up to 3 PDF contract documents.</p>
                    </div>
                    <button type="button" x-show="contracts.length < 3" @click="addContract" class="text-sm font-medium text-blue-600 dark:text-[#e17100] hover:underline">
                        + Add another contract
                    </button>
                </div>

                <div class="px-6 py-6 space-y-6">
                    <template x-for="(contract, index) in contracts" :key="contract.id">
                        <div class="relative rounded-lg border border-gray-200 dark:border-zinc-700/50 bg-gray-50 dark:bg-[#202024] p-5">

                            <div class="flex items-center justify-between mb-4 pb-3 border-b border-gray-200 dark:border-zinc-700/50">
                                <span class="text-sm font-medium text-gray-700 dark:text-zinc-300" x-text="'Contract #' + (index + 1)"></span>

                                <template x-if="contracts.length > 1">
                                    <button type="button" @click="removeContract(index)" class="text-sm text-red-500 hover:text-red-600 flex items-center gap-1 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 6h18M8 6V4h8v2M19 6l-1 14H6L5 6"/>
                                        </svg>
                                        Remove
                                    </button>
                                </template>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div class="sm:col-span-2">
                                    <x-form.dropdown
                                        title="Contract type"
                                        name="contractType"
                                        x-bind:name="'contracts[' + index + '][contract_type_id]'"
                                        x-model="contract.contract_type_id"
                                        :options="$contractType"
                                    />
                                </div>

                                {{-- Starting Date --}}
                                <div>
                                    <x-form.input
                                        label="Starting at:"
                                        type="date"
                                        x-bind:name="'contracts[' + index + '][started_at]'"
                                        x-model="contract.started_at"
                                        x-bind:min="new Date().toISOString().split('T')[0]"
                                    />
                                </div>

                                {{-- Ending Date --}}
                                <div>
                                    <x-form.input
                                        label="Ending at:"
                                        type="date"
                                        x-bind:name="'contracts[' + index + '][ended_at]'"
                                        x-model="contract.ended_at"
                                        x-bind:min="contract.started_at"
                                    />
                                </div>

                                <div class="sm:col-span-2 pt-2">
                                    <label class="block text-sm font-medium leading-6 text-gray-900 dark:text-white mb-2">Upload Document</label>
                                    <input
                                        type="file"
                                        :name="`contracts[${index}][document]`"
                                        required
                                        accept=".pdf"
                                        class="block w-full text-sm text-gray-900 dark:text-zinc-300 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 dark:file:bg-[#e17100]/10 dark:file:text-[#e17100] dark:hover:file:bg-[#e17100]/20 transition-colors"
                                        @change="
                                            contract.fileError = '';
                                            const file = $event.target.files[0];
                                            if (file) {
                                                if (file.type !== 'application/pdf') {
                                                    contract.fileError = 'Only PDF files are allowed';
                                                    $event.target.value = '';
                                                } else if (file.size > 2 * 1024 * 1024) {
                                                    contract.fileError = 'File must not exceed 2MB';
                                                    $event.target.value = '';
                                                }
                                            }
                                        "
                                    >
                                    <p x-show="contract.fileError" x-text="contract.fileError" class="text-sm text-red-500 mt-2"></p>
                                </div>
                            </div>
                        </div>
                    </template>

                    @if(collect($errors->keys())->filter(fn($k) => str_contains($k, 'contracts.'))->isNotEmpty())
                        <div class="mt-4 p-4 rounded-md bg-red-50 dark:bg-red-900/20">
                            @foreach(collect($errors->keys())->filter(fn($k) => str_contains($k, 'contracts.')) as $key)
                                <p class="text-sm text-red-600 dark:text-red-400">{{ $errors->first($key) }}</p>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            <div class="flex items-center justify-end gap-x-4 pt-4">
                <a href="{{ route('employee.index') }}" class="text-sm font-semibold leading-6 text-gray-900 dark:text-zinc-300 hover:text-gray-700 dark:hover:text-white transition-colors">
                    Cancel
                </a>
                <button type="submit" class="rounded-sm bg-blue-600 dark:bg-[#e17100] px-6 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 dark:hover:bg-[#e17100] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 transition-colors cursor-pointer">
                    Create Employee
                </button>
            </div>

        </form>
    </div>
</x-layout>
