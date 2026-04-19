<script setup lang="ts">

const model = defineModel<string>({
})

const props = withDefaults(
    defineProps <{
        label: string;
        type: string;
        name?: string;
        placeholder?: string;
        isRequired?: boolean;
        minLength?: string | number;
        maxLength?: string | number;
        additionalClasses?: string;
        accept?: string;
        error?: string;
    }>(),
    {
        label: '',
        type: 'text',
        name: '',
        placeholder: '',
        isRequired: false,
    }
)

const emit = defineEmits<{
    (e: "change", value: Event): void;
}>()

function onInput(event: Event) {
    emit("change", event)
}

</script>

<template>

    <label :for="props.label" class="text-heading">{{props.label}}</label>
    <input
        :type="props.type"
        v-model="model"
        :required="props.isRequired"
        :placeholder="props.placeholder"
        :min="props.minLength"
        :max="props.maxLength"
        class="block w-full rounded-md bg-white dark:bg-[#18181b] px-3 py-1.5 text-base text-body
                  placeholder:text-gray-400 border border-gray-300 dark:border-[#3E3E3A]
                  focus:outline-3 focus:-outline-offset-2 focus:outline-blue-600
                  dark:focus:outline-[#e17100] sm:text-sm/6 "
        :class="props.additionalClasses"
        :accept="props.accept"
        @change="onInput"
    >
    <p v-if="props.error" class="text-red-500 text-sm mt-1">{{props.error}}</p>

</template>
