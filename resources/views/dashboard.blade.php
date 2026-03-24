<x-layout>
    @vite('resources/css/app.css')
    <div class="mx-auto max-w-6xl px-4 py-12">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <x-card title="Employee count" :count="$employeeCount" route="{{route('employee.index')}}" />

            <x-card title="Active" :count="$activeCount" route="#" />

            <x-card title="On Leave" :count="$onLeaveCount" route="#" />

            <x-card title="Contract" :count="$expiringContractsCount" route="#" />

        </div>
    </div>

</x-layout>
