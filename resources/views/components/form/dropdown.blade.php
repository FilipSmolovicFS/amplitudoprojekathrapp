@props(['title', 'name', 'options', 'value' => null])

<div class="col-span-full sm:col-span-3">
    <label for="{{ $name }}" class="block text-sm/6 font-medium text-body dark:text-white">
        {{ $title }}
    </label>

    <div class="mt-2 grid grid-cols-1">
        <select
            id="{{ $name }}"
            name="{{ $name }}"
            required
            {{ $attributes->merge([
                'class' => 'col-start-1 row-start-1 w-full appearance-none rounded-md bg-white dark:bg-[#18181b] py-1.5 pr-8 pl-3 text-base text-heading outline-1 outline-[#3F3F46] focus:outline-3 focus:-outline-offset-2 dark:focus:outline-[#e17100] sm:text-sm/6'
            ]) }}
        >

            {{-- Placeholder --}}
            <option value="" disabled
            @unless($attributes->has('x-model'))
                {{ is_null(old($name, $value)) ? 'selected' : '' }}
                @endunless
            >
                Odaberite opciju
            </option>

            @foreach($options as $optionValue => $optionLabel)
                <option value="{{ $optionValue }}"
                @unless($attributes->has('x-model'))
                    {{ (string)$optionValue === (string) old($name, $value) ? 'selected' : '' }}
                    @endunless
                >
                    {{ $optionLabel }}
                </option>
            @endforeach

        </select>
    </div>
</div>
