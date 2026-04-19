<script setup lang="ts">

const model = defineModel<number>({
})

const props = withDefaults(
    defineProps<{
        perPageOptions?: number[];
    }>(),
    {
        perPageOptions:() => [5, 10, 20],
    }
)

const emit = defineEmits<{
    (e: "update:modelValue", value: number): void;
}>()

function onSelect(event: Event) {
    const value = Number((event.target as HTMLSelectElement).value)
    emit("update:modelValue", value)
}

</script>

<template>

    <select
        @change="onSelect"
        v-model="model"
        name="per_page" id="per_page"
        class="rounded-sm dark:bg-[#18181b] bg-white text-heading border-[#3F3F46]"
    >
        <option
            v-for="option in props.perPageOptions"
            :value="option"
        >
            {{option}}
        </option>
    </select>
</template>
