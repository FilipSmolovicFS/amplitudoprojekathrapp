<x-layout>

    <div class="max-w-6xl mb-8 m-auto">
        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">

            <div class="px-8 py-6 border-b border-gray-100 bg-gray-50/50">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900 leading-tight">
                            {{ $employee->first_name }} {{ $employee->last_name }}
                        </h1>
                        <p class="text-sm text-gray-500 font-medium mt-1">{{ $employee->email }}</p>
                    </div>

                    <div>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-green-100 text-green-700 border border-green-200">
                        {{ $employee->status->name }}
                    </span>
                    </div>
                </div>
            </div>

            <div class="px-8 py-6 grid grid-cols-1 md:grid-cols-2 gap-8">

                <div class="space-y-1">
                    <label class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Current Position</label>
                    <div class="flex items-center text-gray-700">
{{--                        <x-icon name="position" class="w-5 h-5 text-indigo-500 mr-2" />--}}
                        <span class="font-semibold">{{ $employee->position->name }}</span>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Active Contracts</label>
                    <div class="flex flex-wrap gap-2">
                        @foreach($employee->contract as $contract)
                            <span class="inline-flex items-center px-3 py-1 bg-indigo-50 text-indigo-700 text-xs font-semibold rounded-lg border border-indigo-100">
                            {{ $contract->contractType->name }}
                        </span>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="mx-auto max-w-6xl">
        <div class="overflow-hidden rounded-xl border border-gray-200 shadow-sm">
            <table class="w-full text-sm text-left text-gray-600">
                <thead class="bg-gray-50 text-gray-900 uppercase text-xs font-semibold tracking-wider">
                <tr>
                    <th scope="col" class="px-6 py-4">Amount</th>
                    <th scope="col" class="px-6 py-4">Change date</th>
                </tr>
                </thead>

                <tbody class="divide-y divide-gray-200 bg-white">
                @foreach($salaryHistory as $salary)

                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{$salary->amount}}
                        </td>
                        <td class="px-6 py-4">
                            {{$salary->created_at->format('m/d/Y')}}
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>

</x-layout>
