<script setup lang="ts">

import {onMounted} from "vue";

const model = defineModel({
})

const props = defineProps<{
    label: string;
    name: string;
    options: []
    preselected?: number | string
    useValue?: boolean
}>()

onMounted(() => {
    if (props.preselected !== undefined) {
        model.value = props.preselected;
    }
})
</script>

<template>

    <div>

        <div>

            <label :for="props.name" class="text-heading">
                {{props.label}}
            </label>

            <div class="grid grid-cols-1">

                <select
                    v-model.number="model"
                    :name="props.name"
                    class="block w-full rounded-md bg-white dark:bg-[#18181b] px-3 py-1.5 text-base text-body
                  placeholder:text-gray-400 border border-gray-300 dark:border-[#3E3E3A]
                  focus:outline-3 focus:-outline-offset-2 focus:outline-blue-600
                  dark:focus:outline-[#e17100] sm:text-sm/6"
                >
                    <option value="" disabled selected hidden>Choose Option</option>
                    <option v-for="(option, index) in options" :value="useValue ? option : index">{{option}}</option>

                </select>

            </div>

        </div>

    </div>

</template>
