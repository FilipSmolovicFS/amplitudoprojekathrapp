@props(['label', 'type' => 'text', 'name', 'placeholder' => '', 'colSpan', 'value' => ''])

@php
    $oldValue = old($name, $value);
    $displayValue = is_array($oldValue) ? '' : $oldValue;
@endphp

<div class="{{$colSpan}}">
    <label for="{{$name}}" class="block text-sm/6 font-medium text-body dark:text-white">{{$label}}</label>
    <div class="mt-2">
        <input
            type="{{$type}}"
            name="{{$name}}"
            value="{{ $displayValue }}"
            placeholder="{{$placeholder}}"
            id="{{$name}}"

            {{ $attributes->except('label', 'type', 'name', 'colSpan', 'value') }}
            class="block w-full rounded-md bg-white dark:bg-[#18181b] px-3 py-1.5 text-base text-body
                  placeholder:text-gray-400 border border-gray-300 dark:border-[#3E3E3A]
                  focus:outline-3 focus:-outline-offset-2 focus:outline-blue-600
                  dark:focus:outline-[#e17100] sm:text-sm/6"
            required
        />
    </div>
</div>
