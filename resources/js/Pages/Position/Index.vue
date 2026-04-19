<script setup lang="ts">

import AppLayout from "@/Layouts/AppLayout.vue";
import DeleteModal from "@/Components/DeleteModal.vue";
import positionRoutes from '@/routes/position'
import {ref} from "vue";
import FormModal from "@/Components/FormModal.vue";
import {useForm} from "@inertiajs/vue3";
import Input from "@/Components/Input.vue";
import type {Position} from "@/types/employee/position.ts";

defineOptions({
    layout: AppLayout
})

const props = defineProps<{
    positions: Position[]
}>()

const currentPosition = ref<Position | null>(null)

function onDeletePosition(position: Position){
    currentPosition.value = position
}

function closeDeletePositionModal(){
    currentPosition.value = null
}

const positionForm = useForm({
    position: ''
})

const isAddPositionModalVisible = ref(false)

</script>

<template>
    <div class="mx-auto max-w-6xl py-12">
            <span
                @click="isAddPositionModalVisible = true"
                class="inline-flex items-center justify-center w-40 py-3 cursor-pointer bg-indigo-500
                dark:bg-[#e17100] text-white dark:text-black text-sm font-medium rounded-sm
                transition hover:bg-indigo-600">
                Add new contract type
            </span>
    </div>

    <div class="mx-auto max-w-6xl overflow-visible bg-white dark:bg-[#18181b] rounded-sm border border-default mb-8">
        <table class="w-full  border-[#3F3F46]  text-sm text-left rtl:text-right text-heading">

            <thead class="text-sm text-heading">
            <tr class="border-b border-gray-200 dark:border-[#3E3E3A]">
                <th scope="col" class="px-6 py-3 font-medium">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>

            <tr v-for="position in props.positions" class="border-b border-default hover:bg-neutral-secondary-medium rounded-sm">

                <td scope="row" class="px-6 py-4 rounded-sm font-medium text-heading whitespace-nowrap">
                    {{position.name}}
                </td>
                <td class="px-6 py-4 text-red-600 rounded-sm">

                    <button class="cursor-pointer" @click="onDeletePosition(position)">
                        Delete
                    </button>

                </td>
            </tr>

            </tbody>
        </table>
    </div>


    <DeleteModal
        v-if="currentPosition"
        title="Delete Contract Type"
        :name="currentPosition.name"
        :route="positionRoutes.destroy.url(currentPosition.id)"
        @close="onDeletePosition"
    />

    <FormModal
        @submit="positionForm.post(positionRoutes.store.url())"
        v-if="isAddPositionModalVisible"
        title="Add Contract Type"
        button-text="Add Contract Type">

        <Input
            label="Contract Type"
            name="contract_type"
            type="text"
            v-model="positionForm.position"
        />

    </FormModal>

</template>
