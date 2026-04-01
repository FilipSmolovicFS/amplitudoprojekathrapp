<x-layout>

    <x-toast type="success" :message="session('success')" />
    <x-toast type="error" :message="session('error')" />

    <div x-data class="mx-auto max-w-6xl py-12">
            <span
                x-on:click="$dispatch('open-modal', 'add-position-modal')"
                class="inline-flex items-center justify-center w-40 py-3 cursor-pointer bg-indigo-500
                dark:bg-[#e17100] text-white dark:text-black text-sm font-medium rounded-sm
                transition hover:bg-indigo-600">
                Add new position
            </span>
    </div>

    <x-edit-modal id="add-position-modal" route="{{route('position.store')}}" method="POST"
                  :open="$errors->has('position')">

        <x-form.input label="Position" type="text" name="position" value="{{ old('position') }}"/>

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
            @foreach($positions as $position)

                <tr class="border-b border-default hover:bg-neutral-secondary-medium rounded-sm">

                    <td scope="row" class="px-6 py-4 rounded-sm font-medium text-heading whitespace-nowrap">
                        {{$position->name}}
                    </td>
                    <td class="px-6 py-4 text-red-600 rounded-sm">
                        <x-modal title="Delete Position" name="{{$position->name}}" id="{{$position->id}}"
                                 route="{{route('position.destroy', $position->id)}}"/>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>
</x-layout>

