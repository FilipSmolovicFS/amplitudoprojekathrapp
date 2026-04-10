<script setup lang="ts">

const model = defineModel<string>({
    default: '',
})

const props = withDefaults(
    defineProps <{
        label: string;
        type: string;
        name?: string;
        placeholder?: string;
        isRequired?: boolean;
        minLength?: number;
        maxLength?: number;
    }>(),
    {
        label: '',
        type: 'text',
        name: '',
        placeholder: '',
        isRequired: false,
        minLength: 0,
        maxLength: 255,
    }
)

</script>

<template>

    <label :for="props.label">{{props.label}}</label>
    <input :type="props.type" v-model="model" :required="props.isRequired" :placeholder="props.placeholder"
    class="block w-full rounded-md bg-white dark:bg-[#18181b] px-3 py-1.5 text-base text-body
                  placeholder:text-gray-400 border border-gray-300 dark:border-[#3E3E3A]
                  focus:outline-3 focus:-outline-offset-2 focus:outline-blue-600
                  dark:focus:outline-[#e17100] sm:text-sm/6"
    >

</template>
