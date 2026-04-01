@props(['employee', 'statusesAndPositionsAndContractTypes', 'title'])

@forelse(
    $employee->contract
        ->filter(fn ($contract) => $contract->document && $contract->contractType)
    as $contract
)


    <tr id="employee-{{$employee->id}}" class="border-b border-gray-200 dark:border-[#3E3E3A] hover:bg-gray-50 dark:hover:bg-[#242427] transition-colors">
        {{-- Added text-left and whitespace-nowrap to keep it clean --}}
        <td class="px-6 py-4 text-left whitespace-nowrap font-medium text-heading">
            {{$contract->contractType->name}}
        </td>

        <td class="px-6 py-4 text-left">
            <a href="{{ route('contract.download', $contract->document->id) }}"
               class="text-blue-600 dark:text-[#e17100] hover:underline font-medium">
                {{ $contract->document->file_name }}
            </a>
        </td>

        <td class="px-6 py-4 text-left text-body/80 whitespace-nowrap">
            {{ \Carbon\Carbon::parse($contract->started_at)->format('M d, Y') }}
        </td>

        <td class="px-6 py-4 text-left text-body/80 whitespace-nowrap">
            {{ $contract->ended_at ? \Carbon\Carbon::parse($contract->ended_at)->format('M d, Y') : 'Permanent' }}
        </td>

        <td class="px-6 py-4 text-left">
            <div class="flex items-center gap-4">
                <button
                    x-data
                    x-on:click="$dispatch('open-modal', 'edit-contract-{{$contract->id}}-modal')"
                    class="text-sm font-semibold text-blue-600 dark:text-[#e17100] hover:underline cursor-pointer">
                    Edit
                </button>

                <form action="{{ route('contract.destroy', $contract->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    {{-- Assuming your x-modal handles the trigger --}}
                    <x-modal
                        title="{{$title}}"
                        name="{{$contract->contractType->name}}"
                        id="{{$contract->id}}"
                        route="{{route('contract.destroy', $contract->id)}}"
                        class="text-sm font-semibold text-red-600 cursor-pointer hover:underline"
                    />
                </form>
            </div>
        </td>
    </tr>

    <x-edit-modal id="edit-contract-{{$contract->id}}-modal" route="{{route('contract.update', $contract->id)}}" method="PATCH" :hasFile="true">

        <x-form.dropdown title="Contract type"
                         value="{{$contract->contract_type_id}}"
                         name="contract_type_id"
                         :options="$statusesAndPositionsAndContractTypes['contractTypes']"/>

        <div x-data="{ startDate: '{{ $contract->started_at }}', endDate: '{{ $contract->ended_at }}' }">

            <x-form.input label="Starting at:" type="date"
                          value="{{ $contract->started_at }}"
                          name="started_at"
                          col_span="col-span-full sm:col-span-3"
                          x-model="startDate"
            />

            <x-form.input label="Ending at:" type="date"
                          value="{{ $contract->ended_at }}"
                          name="ended_at"
                          col_span="col-span-full sm:col-span-3"
                          x-bind:min="startDate"
            />

        </div>


        @if($contract->document)
            <div class="mb-2 text-sm">
                <span class="text-gray-500 dark:text-gray-400">Current document:</span>
                <span class="font-semibold text-heading">{{ $contract->document->file_name }}</span>
            </div>
            <p class="text-xs text-gray-500 mb-2">Upload a new file below to replace the current one.</p>
        @endif

        <div x-data="{ fileError: '' }">
            <input
                type="file"
                name="contract-document"
                accept=".pdf"
                class="file:bg-blue-600 dark:file:bg-[#e17100] file:text-white text-heading rounded-sm w-full py-2"
                @change="
            fileError = '';
            const file = $event.target.files[0];
            if (file) {
                if (file.type !== 'application/pdf') {
                    fileError = 'Only PDF files are allowed';
                    $event.target.value = '';
                } else if (file.size > 2 * 1024 * 1024) {
                    fileError = 'File must not exceed 2MB';
                    $event.target.value = '';
                }
            }
        "
            >
            <p x-show="fileError" x-text="fileError" class="text-sm text-red-500 mt-1"></p>
        </div>
    </x-edit-modal>
@empty

    <x-empty-state-table-body title="No contracts" text="Create a contract to get started." colspan="5"/>
@endforelse
