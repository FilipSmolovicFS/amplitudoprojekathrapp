<x-layout>

    <x-toast type="success" :message="session('success')" />
    <x-toast type="error" :message="session('error')" />

    <div x-data class="mx-auto max-w-6xl py-12">
            <span
                x-on:click="$dispatch('open-modal', 'add-status-modal')"
                class="inline-flex items-center justify-center w-40 py-3 cursor-pointer bg-indigo-500
                dark:bg-[#e17100] text-white dark:text-black text-sm font-medium rounded-sm
                transition hover:bg-indigo-600">
                Add new status
            </span>
    </div>

    <x-edit-modal id="add-status-modal" route="{{route('status.store')}}" method="POST" :open="$errors->has('status')">

        <x-form.input label="Status" type="text" name="status" value="{{ old('status') }}" />
        @error('status')
        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror

    </x-edit-modal>

    <div class="mx-auto max-w-6xl overflow-visible bg-white dark:bg-[#18181b] rounded-sm border border-default mb-8">
        <table class="w-full  border-[#3F3F46]  text-sm text-left rtl:text-right text-heading">

            <thead class="text-sm text-heading">
            <tr class="border-b border-gray-200 dark:border-[#3E3E3A]">
                <th scope="col" class="px-6 py-3 font-medium">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($employeeStatuses as $type)

                <tr class="border-b border-default hover:bg-neutral-secondary-medium rounded-sm">

                    <td scope="row" class="px-6 py-4 rounded-sm font-medium text-heading whitespace-nowrap">
                        {{$type->name}}
                    </td>
                    <td class="px-6 py-4 text-red-600 rounded-sm">
                        <x-modal title="Delete Status" name="{{$type->name}}" id="{{$type->id}}" route="{{route('status.destroy', $type->id)}}"/>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>




</x-layout>
