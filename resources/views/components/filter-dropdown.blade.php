@vite('resources/css/filter-dropdown.css')


<div class="w-full max-w-xs relative" id="dropdown-root">

    <!-- Trigger Button -->
    <button
        onclick="toggleDropdown()"
        id="trigger-btn"
        class="w-full flex items-center justify-between px-4 py-3 rounded-lg bg-white/5 border border-blue-500 hover:bg-white/8 transition-all group"
    >
        <div class="flex items-center gap-2.5">
            <svg class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 4h18M3 8h18M3 12h10"/>
            </svg>
            <span class="text-blue-600 text-base transition-colors">Filters</span>
        </div>
        <div class="flex items-center gap-2">
            <span id="count-badge" class="hidden text-2xs tracking-wide px-1.5 py-0.5 rounded bg-blue-600 text-white"></span>
            <svg
                id="drop-chevron"
                class="w-3.5 h-3.5 text-blue-600 group-hover:text-blue-600 transition-all duration-300"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
            >
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
            </svg>
        </div>
    </button>

    <!-- Dropdown -->
    <form action="">
        <div
            id="dropdown-menu"
            class="absolute w-full mt-2 z-50 rounded-lg border border-white/10 bg-white shadow-2xl overflow-hidden
             transition-all duration-300 ease-out
             opacity-0 -translate-y-2 pointer-events-none scale-[0.98]">

            @foreach($filterData as $key => $categoryFilter)
                <div class="border-b border-white/6">
                    <button type="button" onclick="togglePanel('{{$key}}')" class="w-full flex items-center justify-between px-4 py-3 text-left transition-colors group">
                        <div class="flex items-center gap-2.5">
                            <span class=" tracking-wide text-black capitalize">{{$key}}</span>
                        </div>
                        <svg id="chevron-{{$key}}" class="w-3 h-3 text-black transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <div class="panel-body" id="panel-{{$key}}">
                        <div class="panel-inner">
                            <div class="px-4 pb-3 pt-1 flex flex-col gap-2.5">
                                @foreach($categoryFilter as $category_id => $category)
                                    <label class="flex items-center gap-2.5 cursor-pointer group/l">
                                        <input type="checkbox" name="{{$key}}[]" value="{{$category_id}}" class="accent-blue-500 w-3.5 h-3.5 cursor-pointer" onchange="updateCount()"/>
                                        <span class="tracking-wide text-black transition-colors">{{$category}}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


            <!-- Footer -->
            <div class="flex items-center justify-between px-4 py-2.5 border-t border-white/6 bg-white/2">
                <button type="button" onclick="clearAll()" class="text-2xs cursor-pointer uppercase text-black hover:text-gray-400 transition-colors">Clear</button>
                <button type="submit" onclick="toggleDropdown()" class="px-3 py-1 cursor-pointer bg-blue-400 hover:bg-blue-300 transition-colors text-white text-2xs uppercase font-medium rounded">Apply</button>
            </div>

        </div>
    </form>

</div>

<script>
    let dropdownOpen = false;
    const openPanels = new Set();

    function toggleDropdown() {
        dropdownOpen = !dropdownOpen;
        const menu = document.getElementById('dropdown-menu');
        const chevron = document.getElementById('drop-chevron');
        const btn = document.getElementById('trigger-btn');

        if (dropdownOpen) {
            menu.classList.remove('opacity-0', '-translate-y-2', 'pointer-events-none', 'scale-[0.98]');
            menu.classList.add('opacity-100', 'translate-y-0', 'pointer-events-auto', 'scale-100');
            chevron.classList.add('rotate-180');
        } else {
            menu.classList.add('opacity-0', '-translate-y-2', 'pointer-events-none', 'scale-[0.98]');
            menu.classList.remove('opacity-100', 'translate-y-0', 'pointer-events-auto', 'scale-100');
            chevron.classList.remove('rotate-180');
            btn.classList.remove('border-yellow-500/40');
        }
    }

    function togglePanel(id) {
        const panel = document.getElementById(`panel-${id}`);
        const chevron = document.getElementById(`chevron-${id}`);
        const isOpen = openPanels.has(id);
        panel.classList.toggle('open', !isOpen);
        chevron.classList.toggle('rotate-180', !isOpen);
        isOpen ? openPanels.delete(id) : openPanels.add(id);
    }

    function updateCount() {
        const checked = document.querySelectorAll('input[type=checkbox]:checked').length;
        const badge = document.getElementById('count-badge');
        badge.textContent = checked;
        badge.classList.toggle('hidden', checked === 0);
    }

    function clearAll() {
        document.querySelectorAll('input[type=checkbox]').forEach(cb => cb.checked = false);
        updateCount();
    }

    document.addEventListener('click', (e) => {
        if (dropdownOpen && !document.getElementById('dropdown-root').contains(e.target)) {
            dropdownOpen = true;
            toggleDropdown();
        }
    });
</script>
