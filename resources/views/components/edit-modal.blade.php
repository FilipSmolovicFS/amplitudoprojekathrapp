@props(['id' => 'modal', 'title' => 'DeleteModal.vue', 'route', 'method', 'hasFile' => false, 'open' => false])

<div x-data="{ open: {{ $open ? 'true' : 'false' }}, fileError: '' }"
     x-on:open-modal.window="if($event.detail === '{{ $id }}') open = true">

    <div
        x-show="open"
        x-transition.opacity
        x-on:click="open = false"
        style="display: none"
        class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900/50">

        <div
            x-on:click.stop
            x-transition
            class="relative bg-white dark:bg-[#09090b] rounded-lg shadow-sm w-full max-w-md mx-4">

            <form action="{{$route}}" method="POST" @if($hasFile) enctype="multipart/form-data" @endif>
                @if(strtoupper($method) !== 'POST' )
                    @method(strtoupper($method))
                @endif
                @csrf
                <div class="flex items-center justify-between p-5 border-b border-[#3F3F46]">
                    <h3 class="text-lg font-semibold text-heading">{{ $title }}</h3>
                    <button type="button" x-on:click="open = false"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>

                <div class="p-5 space-y-4">
                    {{ $slot }}

                </div>

                <div class="flex items-center justify-end gap-3 p-5 border-t border-[#3F3F46]">
                    <a type="button" x-on:click="open = false"
                            class="py-2.5 px-5 text-sm font-medium text-heading hover:bg-gray-200 dark:hover:bg-white/10 cursor-pointer rounded-sm">
                        Cancel
                    </a>
                    <button type="submit"
                            class="text-white dark:text-black bg-blue-600 dark:bg-[#e17100] font-medium rounded-sm text-sm px-5 py-2.5 outline-none">
                        Save Changes
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
