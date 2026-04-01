<x-layout>

    <x-toast type="success" :message="session('success')" />
    <x-toast type="error" :message="session('error')" />

 <div>

     <div class="mx-auto max-w-6xl py-12">
         <a href="{{ route('employee.create') }}"
            class="inline-flex items-center justify-center w-40 py-3 bg-indigo-600 dark:bg-[#e17100]
            text-white dark:text-black text-sm font-medium rounded-sm
            hover:bg-indigo-600">
             Add new employee
         </a>
     </div>

     <div class="mx-auto max-w-6xl overflow-visible bg-white dark:bg-[#18181b] rounded-sm border border-default mb-8">
         <div class="p-4 flex items-center justify-between space-x-4">
             <form action="{{route('employee.index')}}" method="GET">

                 @foreach(request()->except('search') as $key => $value)
                     @if(is_array($value))
                         @foreach($value as $arrayValue)
                             <input type="hidden" name="{{ $key }}[]" value="{{ $arrayValue }}">
                         @endforeach
                     @else
                         <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                     @endif
                 @endforeach

                 <label for="search" class="sr-only">Search</label>
                 <div class="relative">
                     <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                         <svg class="w-4 h-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/></svg>
                     </div>
                     <input type="text" id="search" name="search" value="{{ request('search') }}" class="block w-full max-w-96 ps-9 pe-3 py-2 bg-white dark:bg-[#18181b] border border-[#3F3F46] text-heading text-sm rounded-sm focus:ring-brand focus:border-brand shadow-xs placeholder:text-body" placeholder="Search">
                 </div>
             </form>

             <x-filter-dropdown :filterData="$statusesAndPositionsAndContractTypes" />

         </div>

         <table class="w-full bg-white border-[#3F3F46] dark:bg-[#18181b]  text-sm text-left rtl:text-right text-heading">
             <thead class="text-sm text-heading bg-white dark:bg-[#242427] border border-[#3F3F46]">
             <tr>
                 <th scope="col" class="px-6 py-3 font-medium">
                     First Name
                 </th>
                 <th scope="col" class="px-6 py-3 font-medium">
                     Last name
                 </th>
                 <th scope="col" class="px-6 py-3 font-medium">
                     Email
                 </th>
                 <th scope="col" class="px-6 py-3 font-medium">
                     Status
                 </th>
                 <th scope="col" class="px-6 py-3 font-medium">
                     Position
                 </th>
                 <th scope="col" class="px-6 py-3 font-medium">
                     Contracts
                 </th>
                 <th scope="col" class="px-6 py-3 font-medium">
                     Action
                 </th>
             </tr>
             </thead>
             <tbody>
             @forelse($employees as $employee)

                 <tr id="employee-{{$employee->id}}" class="border-b border-default hover:bg-neutral-secondary-medium">

                     <td class="px-6 py-4">
                         {{$employee->first_name}}
                     </td>
                     <td class="px-6 py-4">
                         {{ $employee->last_name }}
                     </td>
                     <td class="px-6 py-4">
                         {{$employee->email}}
                     </td>
                     <td class="px-6 py-4">
                         {{$employee->status->name}}
                     </td>
                     <td class="px-6 py-4">
                         {{$employee->position->name}}
                     </td>
                     <td class="px-6 py-4 max-w-[160px]">
                         @foreach($employee->contract->unique('contract_type_id') as $contract)
                             @if($contract->contractType)
                                 <span class="inline-block items-center px-3 py-1 bg-indigo-50 dark:bg-[#18181b] text-heading mb-1 text-xs font-semibold rounded-lg border border-[#3F3F46]">
                                    {{ $contract->contractType->name }}
                                </span>
                             @endif
                         @endforeach
                     </td>
                     <td class="px-6 py-4" x-data>
                         <a href="{{route('employee.show', $employee->id)}}" class="dark:text-[#e17100] text-body hover:underline">View</a>

                         <a href="{{route('employee.edit', $employee->id)}}" class="dark:text-[#e17100] text-body hover:underline">Edit</a>
                     </td>
                 </tr>

                 @empty

                 <x-empty-state-table-body title="No employees" text="Create an employee to get started." colspan="7"/>


             @endforelse
             </tbody>

         </table>

         <div class="px-2 py-4">
             <form id="perPageForm" method="GET" action="{{ url()->current() }}">

                 @foreach(request()->except('per_page', 'page') as $key => $value)
                     @if(is_array($value))
                         @foreach($value as $v)
                             <input type="hidden" name="{{ $key }}[]" value="{{ $v }}">
                         @endforeach
                     @else
                         <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                     @endif
                 @endforeach

                 <label for="per_page" class="text-heading mr-4">Items per page:</label>

                 <select
                     name="per_page" id="per_page"
                     onchange="document.getElementById('perPageForm').submit();"
                     class="rounded-sm dark:bg-[#18181b] bg-white text-heading border-[#3F3F46]"
                 >
                     <option value="5" @selected(request('per_page') == 5)>5</option>
                     <option value="10" @selected(request('per_page') == 10 || !request()->has('per_page'))>10</option>
                     <option value="20" @selected(request('per_page') == 20)>20</option>
                 </select>
             </form>



             {{ $employees->appends(request()->query())->links() }}
         </div>
     </div>

 </div>

</x-layout>
