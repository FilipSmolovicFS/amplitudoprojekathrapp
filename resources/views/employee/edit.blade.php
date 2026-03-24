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

    <div class="mx-auto max-w-6xl py-12">
        <form method="POST" action="{{route('employee.update', $employee->id)}}">
            @csrf
            @method('PATCH')
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900">Edit Employee Information</h2>


                    <div class="mt-10 grid grid-cols-6 gap-x-6 gap-y-8">
                        <x-form.input label="First Name" type="text" name="first_name" value="{{$employee->first_name}}" col_span="sm:col-span-3"/>

                        <x-form.input label="Last Name" type="text" name="last_name" value="{{$employee->last_name}}" col_span="sm:col-span-3"/>

                        <x-form.input label="Email" type="email" name="email" value="{{$employee->email}}" col_span="col-span-full"/>

                        <x-form.dropdown title="Position" name="position" value="{{$employee->position->id}}" :options="$statusesAndPositionsAndContractTypes['positions']"/>

                        <x-form.dropdown title="Status" name="status" value="{{$employee->status->id}}" :options="$statusesAndPositionsAndContractTypes['statuses']"/>

                        <h3 class="col-span-full">Contracts</h3>

                        @if(!$employee->contract->isNotEmpty())
                            <h3 class="py-2 col-span-3">There are no contracts for this employee</h3>

                            <div class="col-span-3"></div>
                        @endif

                        @foreach($employee->contract as $index => $contract)

                            <x-form.dropdown title="Contract type" value="{{$contract->contractType->id}}" name="contracts[{{$contract->id}}][contract_type_id]" :options="$statusesAndPositionsAndContractTypes['contractTypes']"/>

                            <div class="col-span-3"></div>

                            <x-form.input label="Starting at:" type="date" name="contracts[{{$contract->id}}][started_at]" value="{{$contract->started_at ?? $employee->started_at}}" col_span="sm:col-span-3"/>

                            <x-form.input label="Ending at:" type="date" name="contracts[{{$contract->id}}][ended_at]" value="{{$employee->contract[0]->ended_at}}" col_span="sm:col-span-3"/>

                        @endforeach

                        <x-form.input label="Salary" type="number" name="salary" value="{{$employee->salary->current_amount}}" col_span="sm:col-span-3"/>

                        <div class="sm:col-span-3"></div>

                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{route('employee.index')}}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
            </div>
        </form>
    </div>

</x-layout>
