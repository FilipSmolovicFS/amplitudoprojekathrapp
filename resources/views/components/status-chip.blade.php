@props(['status'])

@if($status == 'Active')
    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
  {{$status}}
    </span>
@elseif($status == 'Terminated')
    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-300 text-green-800">
  {{$status}}
    </span>
@else
    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-green-800">
  {{$status}}
    </span>
@endif
