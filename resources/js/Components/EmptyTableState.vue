<script setup lang="ts">

const props = defineProps<{
    title: string;
    text: string;
}>()

</script>

<template>
    <tbody class="divide-y divide-default">
        <tr>
            <td colspan="2" class="py-20">
                <div class="flex flex-col items-center justify-center text-center">
                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-white dark:bg-[#27272a] border border-[#3F3F46] mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>

                    <h3 class="text-lg font-semibold text-heading">{{props.title}}</h3>
                    <p class="text-sm text-heading mt-1">{{props.text}}</p>
                </div>
            </td>
        </tr>
    </tbody>
</template>
