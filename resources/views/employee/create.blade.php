<x-layout>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mx-auto max-w-6xl py-12 px-4 sm:px-6 lg:px-8">
        <form method="POST" action="{{route('employee.store')}}">
            @csrf
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900">Employee Information</h2>

                    <div class="mt-10 grid grid-cols-6 gap-x-6 gap-y-8">
                        <x-form.input label="First Name" type="text" name="first_name" col_span="col-span-3"/>

                        <x-form.input label="Last Name" type="text" name="last_name" col_span="col-span-3"/>

                        <x-form.input label="Email" type="email" name="email" col_span="col-span-full"/>

                        <x-form.dropdown title="Position" name="position" :options="$positions" col_span="col-span-3"/>

                        <x-form.dropdown title="Status" name="status" :options="$employeeStatus" col_span="col-span-3"/>
                        <hr class="col-span-full mt-2">


                        <h2 class="text-base/7 font-semibold text-gray-900 col-span-full" >Contract</h2>

                        <div class="col-span-full grid grid-cols-6 gap-x-6 gap-y-8"
                             x-data="{contracts: [1], addContract() {if (this.contracts.length < 3) this.contracts.push(1); }, removeContract(index) { this.contracts.splice(index, 1); }}">

                            <template x-for="(contract, index) in contracts" :key="index">

                                <div class="col-span-full grid grid-cols-6 gap-x-6 gap-y-8">
                                    <x-form.dropdown title="Contract type" x-bind:name="'contracts[' + index + '][contract_type_id]'" :options="$contractType"/>

                                    <template x-if="contracts.length > 1">
                                        <div class="col-span-full sm:col-span-3 flex items-end justify-end">
                                            <button type="button" @click="removeContract(index)" class="text-sm text-red-500 hover:text-red-700 flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M3 6h18M8 6V4h8v2M19 6l-1 14H6L5 6"/>
                                                </svg>
                                                Remove
                                            </button>
                                        </div>
                                    </template>

                                    <template x-if="contracts.length === 1">
                                        <div class="col-span-full sm:col-span-3"></div>
                                    </template>

                                    <x-form.input label="Starting at:" type="date" x-bind:name="'contracts[' + index + '][started_at]'" col_span="col-span-full sm:col-span-3"/>

                                    <x-form.input label="Ending at:" type="date" x-bind:name="'contracts[' + index + '][ended_at]'" col_span="col-span-full sm:col-span-3"/>
                                </div>

                            </template>

                            <div x-show="contracts.length < 3" @click="addContract" class="col-span-full bg-gray-200 p-2 rounded-2xl text-center hover:bg-slate-100 flex justify-center cursor-pointer mt-4">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14m-7-7v14"/>
                                </svg>

                            </div>

                        </div>


                        <x-form.input label="Salary" type="number" name="salary" col_span="col-span-full sm:col-span-3"/>

                    </div>

                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{route('employee.index')}}"  class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
            </div>
        </form>
    </div>


</x-layout>
