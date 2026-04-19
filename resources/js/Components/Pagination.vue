<script setup lang="ts">

import {Link} from "@inertiajs/vue3";

const props = defineProps<{
   links: [
       {
           active: boolean;
           label: string;
           page?: number | null;
           url?: string | null;
       }
   ]
}>()

</script>

<template>
    <div class="flex items-center justify-between py-4">

        <div class="flex gap-1">
            <Link
                v-for="link in links"
                :key="link.label"
                :href="link.url ?? '#'"
                class="px-3 py-1 rounded-sm border cursor-pointer text-heading"
                :class="link.active
                    ? 'bg-[#e17100] text-white border-[#e17100]'
                    : 'border-[#3F3F46] hover:bg-neutral-100 dark:hover:bg-[#242427]'"
                v-html="link.label"
            />
        </div>

    </div>
</template>
