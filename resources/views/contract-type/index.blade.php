<x-layout>

    <x-toast type="success" :message="session('success')" />
    <x-toast type="error" :message="session('error')" />

        <div x-data class="mx-auto max-w-6xl py-12">
            <span
                x-on:click="$dispatch('open-modal', 'add-contract-modal')"
                class="inline-flex items-center justify-center w-40 py-3 cursor-pointer bg-indigo-500
                dark:bg-[#e17100] text-white dark:text-black text-sm font-medium rounded-sm
                transition hover:bg-indigo-600">
                Add new contract type
            </span>
        </div>

        <x-edit-modal id="add-contract-modal" route="{{route('contract-type.store')}}" method="POST" :open="$errors->has('contractType')">

            <x-form.input label="Contract Type" type="text" name="contractType" value="{{ old('contractType') }}" />
            @error('contractType')
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
            @foreach($contractType as $type)

                <tr class="border-b border-default hover:bg-neutral-secondary-medium rounded-sm">

                    <td scope="row" class="px-6 py-4 rounded-sm font-medium text-heading whitespace-nowrap">
                        {{$type->name}}
                    </td>
                    <td class="px-6 py-4 text-red-600 rounded-sm">
                        <x-modal title="Delete Contract Type" name="{{$type->name}}" id="{{$type->id}}" route="{{route('contract-type.destroy', $type->id)}}"/>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>




</x-layout>
