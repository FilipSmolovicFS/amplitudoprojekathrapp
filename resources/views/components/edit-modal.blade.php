@props(['id' => 'modal', 'title' => 'Modal', 'route', 'method'])

<div x-data="{ open: false }" x-on:open-modal.window="if($event.detail === '{{ $id }}') open = true">

    {{-- Backdrop --}}
    <div
        x-show="open"
        x-transition.opacity
        x-on:click="open = false"
        style="display: none"
        class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900/50">

        {{-- Modal Box --}}
        <div
            x-on:click.stop
            x-transition
            class="relative bg-white rounded-lg shadow-sm w-full max-w-md mx-4">

            <form action="{{$route}}" method="{{$method}}">
                @csrf
                <div class="flex items-center justify-between p-5 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900">{{ $title }}</h3>
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

                <div class="flex items-center justify-end gap-3 p-5 border-t border-gray-200">
                    <button type="button" x-on:click="open = false"
                            class="py-2.5 px-5 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:ring-4 focus:ring-gray-100 outline-none">
                        Cancel
                    </button>
                    <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 outline-none">
                        Save Changes
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
