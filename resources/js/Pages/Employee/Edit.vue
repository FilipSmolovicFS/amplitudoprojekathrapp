<script setup lang="ts">

import type {Contract, Employee, ReferenceData} from "@/types/models.ts";
import AppLayout from "@/Layouts/AppLayout.vue";
import {type InertiaForm, Link, useForm} from "@inertiajs/vue3";
import UserInformationFormContainer from "@/Components/UserInformationFormContainer.vue";
import FormDropdown from "@/Components/FormDropdown.vue";
import Input from "@/Components/Input.vue";
import Button from "@/Components/Button.vue";
import EmptyTableState from "@/Components/EmptyTableState.vue";
import contractRoute from "@/routes/contract";
import employeeRoutes from "@/routes/employee";
import DeleteModal from "@/Components/DeleteModal.vue";
import {ref} from "vue";
import type {RouteDefinition} from "@/wayfinder";
import FormModal from "@/Components/FormModal.vue";

defineOptions({
    layout: AppLayout
})

const props = defineProps<{
    employee: Employee,
    statusesAndPositionsAndContractTypes: ReferenceData
}>()

const employeeInfoForm = useForm({
    first_name: props.employee.first_name ?? '',
    last_name: props.employee.last_name ?? '',
    email: props.employee.email ?? '',
    phone_number: props.employee.phone_number ?? '',
    date_of_birth: props.employee.date_of_birth ?? '',
    jmbg: props.employee.JMBG ?? '',
    gender: props.employee.gender ?? '',
    address: props.employee.address ?? '',
    status: props.employee.status ?? '',
    position: props.employee.position ?? '',
    salary: props.employee.salary.current_amount ?? ''
})

const deleteModalInfo = ref<{
    id: number | null
    name: string,
    route: string
}>({
    id: null,
    name: "",
    route: ""
})

function openDeleteModal(id: number, name: string, route: RouteDefinition<"delete">) {
    deleteModalInfo.value.id = id
    deleteModalInfo.value.name = name
    deleteModalInfo.value.route = route
}

function closeDeleteModal() {
    deleteModalInfo.value.id = null
}

const currentFileName = ref<string>('');

const editModalForm = useForm({
    contract_type_id: null as number | null,
    started_at: '',
    ended_at: '',
    document: null as  File | null
})

const contractId = ref(null)

function openEditModal(contract: Contract) {
    editModalForm.contract_type_id = contract.contract_type_id
    editModalForm.started_at = contract.started_at.split('T')[0]
    editModalForm.ended_at = contract.ended_at ? contract.ended_at.split('T')[0] : ''

    contractId.value = contract.id
    currentFileName.value = contract.document.file_name

}

const addContractForm = useForm({
    employee_id: props.employee.id,
    contract_type_id: null,
    started_at: '',
    ended_at: '',
    document: File | null
})

function onFileUpload(event: Event, form: InertiaForm<any>){
    const file = (event.target as HTMLInputElement).files?.[0] || null

    if (file){
        if (file?.size > 5 * 1024 * 1024 || file?.type !== 'application/pdf') {
            alert('Please upload a PDF file smaller than 5MB.')
            (event.target as HTMLInputElement).value = ''
            return
        }
        form.document = file
    }
}

const isAddContractModalVisible = ref(false)

</script>

<template>
    <div class="mx-auto max-w-5xl py-12 px-4 sm:px-6 lg:px-8">

        <div class="mb-8 flex items-center justify-between ">
            <h1 class="font-bold text-2xl text-gray-900 dark:text-white">Edit Employee: {{ props.employee.first_name + ' ' + props.employee.last_name}}</h1>
        </div>

        <form action="">
            <UserInformationFormContainer
                title="Personal Information"
                header-text="Update the basic contact and identity details."
                :form="employeeInfoForm"
            />

            <div class="bg-white dark:bg-[#18181b] ring-1 ring-gray-900/5 dark:ring-white/10 rounded-xl shadow-sm overflow-hidden my-8">
                <div class="px-6 py-5 border-b border-gray-900/5 dark:border-white/10 bg-gray-50/50 dark:bg-white/5">
                    <h2 class="text-base font-semibold leading-6 text-gray-900 dark:text-white">Employment Details</h2>
                    <p class="mt-1 text-sm text-gray-500 dark:text-zinc-400">Manage organizational placement and compensation.</p>
                </div>

                <div class="px-6 py-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-3">

                    <div>
                        <FormDropdown
                            v-model="employeeInfoForm.status"
                            label="Status"
                            name="Status"
                            :options="props.statusesAndPositionsAndContractTypes['statuses']"
                            :preselected="props.employee.status_id"
                        />
                    </div>

                    <div>
                        <FormDropdown
                            v-model="employeeInfoForm.position"
                            label="Position"
                            name="Position"
                            :options="props.statusesAndPositionsAndContractTypes['positions']"
                            :preselected="props.employee.position_id"
                        />
                    </div>

                    <div>
                        <Input
                            label="Salary"
                            type="number"
                            v-model="employeeInfoForm.salary"
                            name="salary"
                        />
                    </div>
                </div>
            </div>
        </form>

        <div class="flex items-center justify-end gap-x-4 pt-4">
            <Link :href="employeeRoutes.show.url(props.employee.id)" class="text-sm font-semibold leading-6 text-gray-900 dark:text-zinc-300 hover:text-gray-700 dark:hover:text-white transition-colors">
                Cancel
            </Link>
            <Button type="submit" title="Update Employee" @click="employeeInfoForm.put(employeeRoutes.update.url(employee.id))"/>
        </div>

        <div class="mt-12">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white">Active Contracts</h2>
                <button
                    @click="isAddContractModalVisible = true"
                    class="inline-flex items-center rounded-sm px-4 py-2 text-sm font-semibold
                    bg-blue-600 dark:bg-[#e17100] text-white dark:text-black shadow-sm
                    hover:opacity-90 transition-opacity"
                >
                    + Add new contract
                </button>
            </div>

            <div class="bg-white dark:bg-[#18181b] ring-1 ring-gray-900/5 dark:ring-white/10 rounded-xl shadow-sm overflow-hidden">
                <table class="w-full text-sm text-left text-gray-900 dark:text-white">
                    <thead class="bg-gray-50 dark:bg-white/5 text-xs uppercase text-gray-500 dark:text-zinc-400">
                    <tr>
                        <th class="px-6 py-4 font-bold">Contract Type</th>
                        <th class="px-6 py-4 font-bold">Documets</th>
                        <th class="px-6 py-4 font-bold">Started At</th>
                        <th class="px-6 py-4 font-bold">Ended At</th>
                        <th class="px-6 py-4 font-bold">Action</th>
                    </tr>
                    </thead>
                    <tbody v-if="props.employee.contract" class="divide-y divide-gray-200 dark:divide-[#3E3E3A]">

                        <tr v-for="contract in props.employee.contract"
                            class="border-b border-default hover:bg-gray-100 dark:hover:bg-[#242427]"
                        >
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
            </div>
        </div>

    </div>

    <FormModal
        v-if="contractId"
        title="Edit Contract"
        button-text="Save Changes"
        @submit="editModalForm.put(contractRoute.update.url(contractId))"
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
               @change="onFileUpload($event, editModalForm)"
               name="contract_file"
               placeholder="Contract File"
               additionalClasses="block w-full text-sm text-gray-900 dark:text-zinc-300
                                           file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm
                                           file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100
                                           dark:file:bg-[#e17100]/10 dark:file:text-[#e17100]
                                           dark:hover:file:bg-[#e17100]/20 transition-colors"
               accept=".pdf"
        />

    </FormModal>

    <FormModal
        v-if="isAddContractModalVisible"
        title="Add Contract"
        button-text="Add Changes"
        @submit="addContractForm.post(contractRoute.store.url())"
    >
        <FormDropdown
            label="Contract Type"
            name="contractType"
            :options="props.statusesAndPositionsAndContractTypes.contractTypes"
            v-model="addContractForm.contract_type_id"
        />

        <Input
            label="Started At"
            type="date"
            name="Started At"
            isRequired
            v-model="addContractForm.started_at"
        />

        <Input
            label="Ended At"
            type="date"
            name="Ended At"
            isRequired
            v-model="addContractForm.ended_at"
        />

        <Input label="File"
               type="file"
               @change="onFileUpload($event, addContractForm)"
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
