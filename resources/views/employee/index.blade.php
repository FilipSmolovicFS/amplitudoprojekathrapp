<x-layout>

 <div>
{{--    x-data="{
        employee: null,
        edit(employee) {this.employee = employee}
        }">--}}

     <div class="mx-auto max-w-6xl py-12">
         <a href="{{ route('employee.create') }}"
            class="inline-flex items-center justify-center w-40 py-3 bg-indigo-500 text-white text-sm font-medium rounded-lg shadow-md transition hover:bg-indigo-600 hover:scale-105 active:scale-95">
             Add new employee
         </a>
     </div>

     <div class="mx-auto max-w-6xl overflow-visible bg-neutral-primary-soft shadow-xs rounded-md border border-default">
         <div class="p-4 flex items-center justify-between space-x-4">
             <form action="{{route('employee.index')}}" method="GET">
                 <label for="search" class="sr-only">Search</label>
                 <div class="relative">
                     <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                         <svg class="w-4 h-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/></svg>
                     </div>
                     <input type="text" id="search" name="search" class="block w-full max-w-96 ps-9 pe-3 py-2 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand shadow-xs placeholder:text-body" placeholder="Search">
                 </div>
             </form>

             <x-filter-dropdown :filterData="$statusesAndPositionsAndContractTypes" />

         </div>
         <table class="w-full text-sm text-left rtl:text-right text-body">
             <thead class="text-sm text-body bg-neutral-secondary-medium border-b border-t border-default-medium">
             <tr>
                 <th scope="col" class="px-6 py-3 font-medium">
                     Name
                 </th>
                 <th scope="col" class="px-6 py-3 font-medium">
                     Position
                 </th>
                 <th scope="col" class="px-6 py-3 font-medium">
                     Status
                 </th>
                 <th scope="col" class="px-6 py-3 font-medium">
                     Salary
                 </th>
                 <th scope="col" class="px-6 py-3 font-medium">
                     Action
                 </th>
             </tr>
             </thead>
             <tbody>
             @foreach($employees as $employee)

                 <tr id="employee-{{$employee->id}}" class="bg-neutral-primary-soft border-b border-default hover:bg-neutral-secondary-medium">

                     <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                         {{$employee->first_name}} {{ $employee->last_name }}
                     </th>
                     <td class="px-6 py-4">
                         {{$employee->position->name}}
                     </td>
                     <td class="px-6 py-4">
                         <x-status-chip status="{{$employee->status->name}}"/>
                     </td>
                     <td class="px-6 py-4">
                         {{$employee->salary->current_amount}}
                     </td>
                     <td class="px-6 py-4" x-data>
{{--                         <a
                             href="#"
                             class="font-medium text-fg-brand hover:underline"
                             x-on:click="$dispatch('open-modal', 'edit-employee-modal'); edit(@js($employee))"
                         >
                             Edit
                         </a>--}}
                         <a href="{{route('employee.edit', $employee->id)}}" class="text-fg-brand hover:underline">Edit</a>
                     </td>
                 </tr>


             @endforeach
             </tbody>
         </table>
     </div>

{{--     <x-edit-modal id="edit-employee-modal" title="Edit Employee" route="{{route('employee.update')}}" method="PUT">

         <x-form.input label="Name" type="text" name="first_name" x-model="employee.first_name" />

         <x-form.input label="Last Name" type="text" name="last_name" x-model="employee.last_name" />

         <x-form.input label="Email" type="text" name="email" x-model="employee.email" />

     </x-edit-modal>--}}

 </div>

</x-layout>
