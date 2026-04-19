<script setup lang="ts">

import AppLayout from "@/Layouts/AppLayout.vue";
import Pagination from "@/Components/Pagination.vue";
import contractRoute from "@/routes/contract";
import employeeRoute from "@/routes/employee";
import DeleteModal from "@/Components/DeleteModal.vue";
import {ref} from "vue";
import type {RouteDefinition} from "@/wayfinder";
import EmptyTableState from "@/Components/EmptyTableState.vue";
import FormModal from "@/Components/FormModal.vue";
import FormDropdown from "@/Components/FormDropdown.vue";
import Input from "@/Components/Input.vue";
import {Link, useForm} from "@inertiajs/vue3";
import type {Paginator} from "@/types/common/paginator.ts";
import type {Employee} from "@/types/employee/employee.ts";
import type {Contract} from "@/types/contract/contract.ts";

defineOptions({
    layout: AppLayout
})

const props = defineProps<{
    employee: Employee
    salaryHistory: Paginator<{
        id: number;
        amount: number;
        salary_id: number;
        created_at: string;
    }>
    statusesAndPositionsAndContractTypes: {
        statuses: Record<string, string>,
        positions: Record<string, string>,
        contractTypes: Record<string, string>,
        expireContract: number[]
    }

}>()

const deleteModalInfo = ref<{
    id: number | null
    name: string,
    route: string
}>({
    id: null,
    name: "",
    route: ""
})

const editContractInfo = ref<{
    id:number | null
    contractType: number | null,
    started_at: string,
    ended_at: string,
    documentName: string
}>({
    id: null,
    position: null,
    started_at: "",
    ended_at: "",
    documentName: ""
})

const currentFileName = ref<string>('');

const editModalForm = useForm({
    id: null as number | null,
    contract_type_id: null as number | null,
    started_at: '',
    ended_at: '',
    document: null as File | null
})

function openEditModal(contract: Contract) {
    editModalForm.id = contract.id
    editModalForm.contract_type_id = contract.contract_type_id
    editModalForm.started_at = contract.started_at.split('T')[0]
    editModalForm.ended_at = contract.ended_at ? contract.ended_at.split('T')[0] : ''

    currentFileName.value = contract.document.file_name

}

function openDeleteModal(id: number, name: string, route: RouteDefinition<"delete">) {
    deleteModalInfo.value.id = id
    deleteModalInfo.value.name = name
    deleteModalInfo.value.route = route
}

function closeDeleteModal() {
    deleteModalInfo.value.id = null
}

function onFileUpload(event: Event){
    const file = (event.target as HTMLInputElement).files?.[0] || null

    if (file){
        if (file?.size > 5 * 1024 * 1024 || file?.type !== 'application/pdf') {
            alert('Please upload a PDF file smaller than 5MB.')
            (event.target as HTMLInputElement).value = ''
            return
        }
        editModalForm.document = file
    }
}

</script>

<template>

    <div class="max-w-7xl mx-auto space-y-8 py-8">

<!--    Employee Header    -->
        <section class="bg-white dark:bg-[#18181b] border border-default rounded-sm shadow-xs p-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                <div>
                    <h1 class="text-2xl font-bold text-heading">
                        {{props.employee.first_name}} {{props.employee.last_name}}
                    </h1>

                    <p class="text-sm text-body mt-1">
                        {{ props.employee.email }}
                    </p>
                </div>

                <span class="inline-flex items-center px-4 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-blue-600 dark:bg-[#e17100] text-white dark:text-black">
                    {{ props.employee.status.name }}
                </span>
            </div>
        </section>

<!--  Information Grid    -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <section class="bg-white dark:bg-[#18181b] border border-default rounded-sm shadow-xs p-6">
                <h2 class="text-lg font-semibold text-heading mb-6">
                    Personal Information
                </h2>

                <div class="space-y-5 text-sm">
                    <div class="flex justify-between">
                        <span class="text-body">Date of Birth</span>
                        <span class="font-semibold text-heading">
                            {{ props.employee.date_of_birth }}
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-body">Gender</span>
                        <span class="font-semibold text-heading">
                            {{ props.employee.gender }}
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-body">Phone Number</span>
                        <span class="font-semibold text-heading">
                            {{ props.employee.phone_number }}
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-body">Address</span>
                        <span class="font-semibold text-heading">
                            {{ props.employee.address }}
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-body">JMBG</span>
                        <span class="font-semibold text-heading">
                            {{ props.employee.JMBG }}
                        </span>
                    </div>
                </div>
            </section>

<!-- Employment Info -->
            <section class="bg-white dark:bg-[#18181b] border border-default rounded-sm shadow-xs p-6">
                <h2 class="text-lg font-semibold text-heading mb-6">
                    Employment Details
                </h2>

                <div class="space-y-5 text-sm">
                    <div class="flex justify-between">
                        <span class="text-body">Current Position</span>
                        <span class="font-semibold text-heading">
                            {{ props.employee.position.name }}
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-body">Current Salary</span>
                        <span class="font-semibold text-heading">
                            {{ props.employee.salary.current_amount }}
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-body">Status</span>
                        <span class="font-semibold text-heading">
                            {{ props.employee.status.name }}
                        </span>
                    </div>
                </div>
            </section>
        </div>

<!--  Salary History     -->
        <section class="bg-white dark:bg-[#18181b] border border-default rounded-sm shadow-xs overflow-hidden">
            <div class="px-6 py-5 border-b border-default">
                <h2 class="text-lg font-semibold text-heading">
                    Salary History
                </h2>
            </div>

            <table class="w-full text-sm text-heading">
                <thead>
                <tr class="border-b border-default text-left">
                    <th class="px-6 py-4">Amount</th>
                    <th class="px-6 py-4">Change date</th>
                </tr>
                </thead>

                <tbody v-if="props.salaryHistory.data.length" class="divide-y divide-default">

                    <tr v-if="props.salaryHistory.data.length" v-for="salary in props.salaryHistory.data" class="hover:bg-gray-100 dark:hover:bg-[#242427] text-left">
                        <td class="px-6 py-4 font-semibold">
                            {{ salary.amount }}
                        </td>
                        <td class="px-6 py-4">
                            {{ salary.created_at.split('T')[0] }}
                        </td>
                    </tr>
                </tbody>

                <EmptyTableState v-else title="No salary history" text=""/>
            </table>

            <div class="px-6 py-4 flex justify-end">
                <Pagination :links="props.salaryHistory.links" />
            </div>
        </section>

<!--   Contracts     -->
        <section class="bg-white dark:bg-[#18181b] border border-default rounded-sm shadow-xs overflow-hidden">
            <div class="px-6 py-5 border-b border-default">
                <h2 class="text-lg font-semibold text-heading">
                    Contracts
                </h2>
            </div>

            <table class="w-full text-sm text-heading">
                <thead class="text-xs uppercase font-bold text-heading bg-gray-50/50 dark:bg-white/5 border-b border-default">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left">Contract Type</th>
                    <th scope="col" class="px-6 py-3 text-left">Contract File</th>
                    <th scope="col" class="px-6 py-3 text-left">Started At</th>
                    <th scope="col" class="px-6 py-3 text-left">Ended At</th>
                    <th scope="col" class="px-6 py-3 text-left">Action</th>
                </tr>
                </thead>

                <tbody v-if="props.employee.contract">
                    <tr v-for="contract in props.employee.contract" class="border-b border-default hover:bg-gray-100 dark:hover:bg-[#242427]">
                        <td class="px-6 py-4">
                            {{ contract.contract_type.name }}
                        </td>
                        <td class="px-6 py-4">
                            <a :href="contractRoute.download.url(contract.document.id)" >{{ contract.document.file_name }}</a>
                        </td>
                        <td class="px-6 py-4">
                            {{ contract.started_at.split('T')[0] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ contract.ended_at ? contract.ended_at.split('T')[0] : 'N/A' }}
                        </td>

                        <td class="px-6 py-4">
                            <button
                                @click="openEditModal(contract)"
                                class="text-sm text-blue-600 dark:text-blue-400 hover:underline cursor-pointer"
                            >Edit
                            </button>
                            <button
                                class="text-sm text-red-600 dark:text-red-400 hover:underline ml-2"
                                @click="openDeleteModal(
                                    contract.id,
                                    contract.contract_type.name,
                                    contractRoute.destroy(contract.id)
                                    )"
                            >
                                Delete
                            </button>
                        </td>

                    </tr>
                </tbody>

                <EmptyTableState v-else title="Empty Contracts" text=""/>
            </table>
        </section>

        <div class="flex justify-end gap-4">
            <Link
                :href="employeeRoute.edit.url(props.employee.id)"
                class="text-heading rounded-sm px-4 py-2 bg-gray-200 dark:bg-gray-200/10 cursor-pointer"
            >
                Edit
            </Link>

            <button
                @click="openDeleteModal(props.employee.id, props.employee.first_name + ' ' + props.employee.last_name, employeeRoute.destroy(props.employee.id))"
                class="bg-blue-600 dark:bg-red-600 text-white font-medium cursor-pointer px-4 py-2 rounded-sm"
            >
                Delete Employee
            </button>
        </div>

    </div>


    <FormModal
        v-if="editModalForm.id"
        title="Edit Contract"
        button-text="Save Changes"
        @submit="editModalForm.put(contractRoute.update.url(editModalForm.id))"
    >
        <FormDropdown
            label="Contract Type"
            name="contractType"
            :options="props.statusesAndPositionsAndContractTypes.contractTypes"
            :preselected="editModalForm.contract_type_id"
            v-model="editModalForm.contract_type_id"
        />

        <Input
            label="Started At"
            type="date"
            name="Started At"
            isRequired
            v-model="editModalForm.started_at"
        />

        <Input
            label="Ended At"
            type="date"
            name="Ended At"
            isRequired
            v-model="editModalForm.ended_at"
        />

        <div v-if="currentFileName">
            <div class="mb-2 text-sm">
                <span class="text-gray-500 dark:text-gray-400">Current document:</span>
                <span class="font-semibold text-heading">{{ currentFileName }}</span>
            </div>
            <p class="text-xs text-gray-500 mb-2">Upload a new file below to replace the current one.</p>
        </div>

        <Input label="File"
               type="file"
               @change="onFileUpload($event)"
               name="contract_file"
               placeholder="Contract File"
               isRequired
               additionalClasses="block w-full text-sm text-gray-900 dark:text-zinc-300
                                           file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm
                                           file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100
                                           dark:file:bg-[#e17100]/10 dark:file:text-[#e17100]
                                           dark:hover:file:bg-[#e17100]/20 transition-colors"
               accept=".pdf"
        />

    </FormModal>


    <DeleteModal
        v-if="deleteModalInfo.id"
        :name="deleteModalInfo.name"
        :route="deleteModalInfo.route"
        @close="closeDeleteModal"
     title="Delete Contract"/>

</template>
