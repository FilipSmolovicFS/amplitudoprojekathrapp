<script setup lang="ts">

import {computed, ref} from "vue";
import {router} from "@inertiajs/vue3";
import employee from "@/routes/employee";

const props = defineProps<{
    filterData: any;
    query: any;
}>()

const isOpen = ref(false)

const filterKeys = computed(() => {
    return Object.keys(props.filterData)
})

const currentOpenSection = ref([])
function toggleSection(filter: any){

    if (currentOpenSection.value.includes(filter)){
        currentOpenSection.value = currentOpenSection.value.filter((current) => current != filter)
    }else{
        currentOpenSection.value.push(filter)
    }
}

const filterForm = ref({})

for (const key of Object.keys(props.filterData)) {
    filterForm.value[key] = []

    if (Array.isArray(props.query[key])){
        filterForm.value[key] = props.query[key]
    }

}

function filterOptions(filter: any){
    const filteredData = props.filterData[filter]
    if (Array.isArray(filteredData)){
        const result: [string,  string][] = []
        for (let i = 0; i<filteredData.length; i++){
            result.push([
                String(i),
                String(filteredData[i])
            ])
        }
        return result
    }

    const entries = Object.entries(filteredData)
    const result: [string,  string][] = []

    for (const [id, label] of entries){
        result.push([
            String(id),
            String(label)
        ])
    }

    return result
}

function applyFilters(){
    const params: any = {}
    for (const key of filterKeys.value){
        if (filterForm.value[key].length > 0){
            params[key] = filterForm.value[key]
        }
    }

    router.get(employee.index.url(), params)
}

function clearFilters(){
    for (const key of filterKeys.value){
        filterForm.value = []
    }
    router.get(employee.index.url())
}

const total = computed(() => {
    let count = 0

    for (const values of Object.values(filterForm.value)){
        count += values.length
    }

    return count
})

</script>

<template>
    <div class="w-full max-w-xs relative">

        <button
            @click="isOpen = !isOpen"
            type="button"
            id="trigger-btn"
            class="w-full flex items-center justify-between px-4 py-3 rounded-sm bg-white/5 border border-[#3F3F46] hover:bg-white/8 transition-all group"
        >
            <div class="flex items-center gap-2.5">
                <svg class="w-4 h-4 text-body" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 4h18M3 8h18M3 12h10"/>
                </svg>
                <span class="text-body text-base transition-colors">Filters</span>
            </div>
            <div class="flex items-center gap-2">
                <span v-if="total > 0" id="count-badge" class="text-2xs tracking-wide px-1.5 py-0.5 font-bold bg-[#e17100B3]
                text-black dark:text-white rounded-xs"
                >
                    {{ total }}
                </span>
                <svg
                    id="drop-chevron"
                    class="w-3.5 h-3.5 text-[#3F3F46] group-hover:text-[#e17100] transition-all duration-300"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </div>
        </button>


        <div
            v-show="isOpen"
            class="absolute w-full mt-2 z-50 rounded-sm border border-white/10 bg-white dark:bg-[#18181b] shadow-2xl overflow-hidden
             transition-all duration-300 ease-out">


            <div v-for="filter in filterKeys" :key="filter" class="border-b border-white/6">
                <button
                    @click="toggleSection(filter)"
                    type="button"
                    class="w-full flex items-center justify-between px-4 py-3 text-left transition-colors group">

                    <span class="tracking-wide text-body dark:text-heading">
                        {{ filter }}
                    </span>

                    <svg class="w-3 h-3 text-body dark:text-heading transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <div v-show="currentOpenSection.includes(filter)" class="px-4 pb-3 pt-1 flex flex-col gap-2.5">

                    <label v-for="[id, label] in filterOptions(filter)" class="flex items-center gap-2.5 cursor-pointer group/l">
                        <span class="tracking-wide text-body dark:text-heading transition-colors">
                            <input
                                type="checkbox"
                                class="accent-blue-500 w-3.5 h-3.5 cursor-pointer"
                                :value="id"
                                v-model="filterForm[filter]"
                            />

                        <span class="text-shadow-white">
                            {{label}}
                        </span>

                        </span>

                    </label>

                </div>
            </div>

            <!-- Footer -->
            <div class="flex items-center justify-between px-4 py-2.5 border-t border-white/6 bg-white/2">
                <button
                    @click="clearFilters()"
                    type="button"
                    class="text-2xs cursor-pointer uppercase text-body
                    dark:text-heading hover:text-gray-400 transition-colors"
                >
                    Clear
                </button>
                <button
                    @click="applyFilters"
                    type="submit"
                    class="px-3 py-1 cursor-pointer bg-blue-400 dark:bg-[#e17100] hover:bg-blue-300
                    transition-colors text-white text-2xs uppercase font-medium rounded-xs"
                >
                    Apply
                </button>
            </div>

        </div>


    </div>
</template>
