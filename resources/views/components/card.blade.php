@props(['title', 'count', 'route'])


<div class="bg-white dark:bg-[#18181b] block max-w-sm p-6 border border-default rounded-base shadow-xs">

    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-heading">{{$title}}</h5>

    <p class="mb-3 text-body font-bold text-xl">{{$count}}</p>
    <a href="{{$route}}" class="inline-flex font-medium items-center text-[#e17100] hover:underline">
        More
        <svg class="w-4 h-4 ms-2 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
             width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778"/>
        </svg>
    </a>
</div>



