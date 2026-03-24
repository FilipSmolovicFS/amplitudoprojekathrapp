@props(['title', 'count', 'route'])

<div>
    <div class="p-4 bg-white rounded-xl shadow-md border-2 border-be-green-950">
        <p class="text-gray-900 font-bold text-lg">{{$title}}</p>
        <p class="text-blue-500 font-bold text-3xl mt-2 mb-4">{{$count}} Tracks</p>
        <p>
            <a href="{{$route}}" class="inline-flex items-center font-medium text-fg-brand hover:underline text-blue-800">
                More
                <svg class="w-5 h-5 ms-1 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                </svg>
            </a>
        </p>
    </div>
</div>
