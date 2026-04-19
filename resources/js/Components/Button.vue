<script setup lang="ts">

const props = withDefaults(
    defineProps<{
        type?: 'button' | 'submit' | 'reset';
        title: string;
    }>(),
    {
        type: 'submit',
        title: 'Button'
    }
)

</script>

<template>
    <button
        :type=props.type
        class="rounded-sm bg-blue-600 dark:bg-[#e17100] px-6 py-2.5
        text-sm font-semibold text-white shadow-sm hover:bg-blue-500
        dark:hover:bg-[#e17100] focus-visible:outline
        focus-visible:outline-offset-2 transition-colors cursor-pointer"
    >
        {{ props.title }}
    </button>
</template>
