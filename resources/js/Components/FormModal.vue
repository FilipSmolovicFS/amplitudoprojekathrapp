<script setup lang="ts">

import {Link} from "@inertiajs/vue3";

const props = defineProps<{
    title: string;
    buttonText: string;
}>()

const emitClose = defineEmits(['close', 'submit'])


</script>

<template>

    <div
        class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900/50">

            <div
                class="relative bg-white dark:bg-[#09090b] rounded-lg shadow-sm w-full max-w-md mx-4">

                <div class="flex items-center justify-between p-5 border-b border-[#3F3F46]">
                    <h3 class="text-lg font-semibold text-heading">{{ props.title }}</h3>
                    <Link
                            @click="emitClose('close')"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </Link>
                </div>

                <div class="p-5 space-y-4">
                    <slot/>
                </div>

                <div class="flex items-center justify-end gap-3 p-5 border-t border-[#3F3F46]">
                    <Link
                        @click="emitClose('close')"
                        type="button"
                        class="py-2.5 px-5 text-sm font-medium text-heading hover:bg-gray-200
                           dark:hover:bg-white/10 cursor-pointer rounded-sm"
                    >
                        Cancel
                    </Link>
                    <Link
                        @click="emitClose('submit')"
                        type="submit"
                        class="text-white dark:text-black bg-blue-600 dark:bg-[#e17100]
                            font-medium rounded-sm text-sm px-5 py-2.5 outline-none"
                    >
                        {{props.buttonText}}
                    </Link>
                </div>

            </div>
        </div>

</template>
