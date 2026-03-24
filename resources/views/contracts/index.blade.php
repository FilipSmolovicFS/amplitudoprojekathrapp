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




        <div x-data class="mx-auto max-w-6xl py-12">
            <span
                x-on:click="$dispatch('open-modal', 'add-contract-modal')"
                class="inline-flex items-center justify-center w-40 py-3 cursor-pointer bg-indigo-500 text-white text-sm font-medium rounded-lg shadow-md transition hover:bg-indigo-600 hover:scale-105 active:scale-95">
                Add new contract type
            </span>
        </div>

        <x-edit-modal id="add-contract-modal" route="{{route('contract.store')}}" method="POST">

            <x-form.input label="Contract Type" type="text" name="contractType" />

        </x-edit-modal>

        <div class="mx-auto max-w-6xl overflow-visible bg-neutral-primary-soft shadow-xs rounded-md border border-default">

            <table class="w-full text-sm text-left rtl:text-right text-body">
                <thead class="text-sm text-body bg-neutral-secondary-medium border-b border-t border-default-medium">
                <tr>
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

                    <tr class="bg-neutral-primary-soft border-b border-default hover:bg-neutral-secondary-medium">

                        <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                            {{$type->name}}
                        </th>
                        <td class="px-6 py-4 text-red-600">
                            <x-modal title="Delete Contract Type" name="{{$type->name}}" id="{{$type->id}}" route="{{route('contract.destroy', $type->id)}}"/>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>




</x-layout>
