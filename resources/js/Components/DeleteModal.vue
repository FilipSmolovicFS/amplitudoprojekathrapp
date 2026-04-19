<script setup lang="ts">

import {router, useForm} from "@inertiajs/vue3";
import {ref} from "vue";

const props =defineProps<{
        title: string;
        name: string;
        route: string;
    }>()


const emit = defineEmits(['close'])

function confirmDelete() {
    router.delete(props.route, {
        onFinish: () => emit("close")
    })
}


</script>

<template>

    <div class="fixed inset-0 z-50 flex items-center justify-center p-4">
        <div class="fixed inset-0 bg-gray-900/80 transition-opacity"></div>

        <div class="relative w-full max-w-lg transform overflow-hidden rounded-2xl bg-white dark:bg-[#18181b] text-left shadow-2xl border border-white/10 transition-all">
            <div class="p-6">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex size-10 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0">
                        <svg class="size-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg font-semibold text-red-600">{{ props.title }}</h3>
                        <p class="mt-2 text-sm text-heading">
                            Are you sure you want to delete <strong>{{ props.name }}</strong>?
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-gray-100 dark:bg-[#18181b] px-6 py-4 flex flex-col-reverse sm:flex-row-reverse gap-3">
                <button @click="confirmDelete" type="submit" class="w-full inline-flex justify-center rounded-lg bg-red-600 px-4 py-2 text-sm font-semibold text-white hover:bg-red-500 transition-colors">
                    Confirm Delete
                </button>

                <button type="button" @click="emit('close')" class="w-full inline-flex justify-center rounded-lg px-4 py-2 text-sm font-semibold text-heading hover:bg-gray-300 dark:hover:bg-white/10 transition-colors sm:w-auto">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</template>
