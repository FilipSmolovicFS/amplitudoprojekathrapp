@props(['title', 'name', 'type', 'options'])

<div class="col-span-full mt-4 space-y-10">
    <fieldset>
        <legend class="text-sm/2 font-semibold text-gray-900">Contract type</legend>

        @foreach($options as $key => $value)

            <div class="mt-6 space-y-6">
                <div class="flex gap-3">
                    <div class="flex h-6 shrink-0 items-center">
                        <div class="group grid size-4 grid-cols-1">
                            <input id="{{$key}}" type="{{$type}}" name="{{$name}}[]" value="{{$key}}" class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto" />
                            <svg viewBox="0 0 14 14" fill="none" class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25">
                                <path d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-0 group-has-checked:opacity-100" />
                                <path d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-0 group-has-indeterminate:opacity-100" />
                            </svg>
                        </div>
                    </div>
                    <div class="text-sm/6">
                        <label for="comments" class="font-medium text-gray-900">{{$value}}</label>
                    </div>
                </div>
            </div>


        @endforeach
    </fieldset>
</div>
