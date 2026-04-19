<script setup lang="ts">

import {Link, useForm} from "@inertiajs/vue3";
import Input from "@/Components/Input.vue";
import FormDropdown from "@/Components/FormDropdown.vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import employeeRoutes from "@/routes/employee";
import Button from "@/Components/Button.vue";
import UserInformationFormContainer from "@/Components/UserInformationFormContainer.vue";


defineOptions({
    layout: AppLayout
})

const props = defineProps<{
    contractType: any[];
    positions: any[];
    employeeStatus: any[];
}>()

const createEmployeeForm = useForm({
    first_name: '',
    last_name: '',
    email: '',
    phone_number: '',
    date_of_birth: '',
    jmbg: '',
    gender: '',
    address: '',
    status: '',
    position: '',
    salary: 0,
    contracts: [{
        id: Date.now() + Math.random(),
        started_at: new Date().toISOString().split('T')[0],
        ended_at: '',
        contract_type_id: '',
        document: null,
    }],
})

function createEmployee(){
    createEmployeeForm.post(employeeRoutes.store.url())
}

function addContract(){
    if(createEmployeeForm.contracts.length < 3){
        createEmployeeForm.contracts.push({
            id: Date.now() + Math.random(),
            started_at: '',
            ended_at: '',
            contract_type_id: '',
            document: null,
        })
    }
}

function removeContract(index: number){
    if(createEmployeeForm.contracts.length > 1){
        createEmployeeForm.contracts.splice(index, 1)
    }
}

function onFileUpload(event: Event, index: number){
    const file = (event.target as HTMLInputElement).files?.[0] || null

    if (file){
        if (file?.size > 5 * 1024 * 1024 || file?.type !== 'application/pdf') {
            alert('Please upload a PDF file smaller than 5MB.')
            (event.target as HTMLInputElement).value = ''
            return
        }
        createEmployeeForm.contracts[index].document = file
    }
}

</script>

<template>

    <div class="mx-auto max-w-5xl py-12 px-4 sm:px-6 lg:px-8">

        <div class="mb-8 flex items-center justify-between">
            <h1 class="font-bold text-2xl text-gray-900 dark:text-white">Create Employee</h1>
        </div>

        <form @submit.prevent="createEmployee">


            <UserInformationFormContainer
                title="Personal Information"
                header-text="Basic details and contact information for the new employee."
                :form="createEmployeeForm"
            />



            <div class="bg-white dark:bg-[#18181b] ring-1 ring-gray-900/5 dark:ring-white/10 rounded-xl shadow-sm overflow-hidden my-8">
                <div class="px-6 py-5 border-b border-gray-900/5 dark:border-white/10">
                    <h2 class="text-base font-semibold leading-6 text-gray-900 dark:text-white">Employment Details</h2>
                    <p class="mt-1 text-sm text-gray-500 dark:text-zinc-400">Assign the role, status, and compensation.</p>
                </div>

                <div class="px-6 py-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-3">

                    <FormDropdown
                    v-model="createEmployeeForm.status"
                    name="Status"
                    label="Status"
                    :options=props.employeeStatus
                    />

                    <FormDropdown
                        v-model="createEmployeeForm.position"
                        name="Position"
                        label="Position"
                        :options=props.positions
                    />

                    <div>
                        <Input label="Salary"
                               type="number"
                               v-model= createEmployeeForm.salary
                               name="salary"
                               placeholder="Salary"
                               isRequired
                               :error="createEmployeeForm.errors.salary"
                        />
                    </div>

                </div>

            </div>

            <div class="bg-white dark:bg-[#18181b] ring-1 ring-gray-900/5 dark:ring-white/10 rounded-xl shadow-sm overflow-hidden">

                <div class="px-6 py-5 border-b border-gray-900/5 dark:border-white/10 flex justify-between items-center">
                    <div>
                        <h2 class="text-base font-semibold leading-6 text-gray-900 dark:text-white">Contracts</h2>
                        <p class="mt-1 text-sm text-gray-500 dark:text-zinc-400">Upload up to 3 PDF contract documents.</p>
                    </div>
                    <button type="button" @click="addContract" class="text-sm font-medium text-blue-600 dark:text-[#e17100] hover:underline">
                        + Add another contract
                    </button>
                </div>

                <div class="px-6 py-6 space-y-6">

                    <template v-for="(contract, index) in createEmployeeForm.contracts">

                        <div class="relative rounded-lg border border-gray-200 dark:border-zinc-700/50 bg-gray-50 dark:bg-[#202024] p-5">

                            <div class="flex items-center justify-between mb-4 pb-3 border-b border-gray-200 dark:border-zinc-700/50">

                                <span class="text-sm font-medium text-gray-700 dark:text-zinc-300">Contract #{{index + 1}}</span>

                                <template v-if="createEmployeeForm.contracts.length > 1">
                                    <button type="button" @click="removeContract(index)" class="text-sm text-red-500 hover:text-red-600 flex items-center gap-1 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 6h18M8 6V4h8v2M19 6l-1 14H6L5 6"/>
                                        </svg>
                                        Remove
                                    </button>
                                </template>

                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                                <div class="sm:col-span-2">
                                    <FormDropdown
                                        v-model="contract.contract_type_id"
                                        label="Contract Type"
                                        name="contractType"
                                        :options="props.contractType"
                                    />
                                </div>

                                <div>
                                    <Input label="Start Date"
                                           type="date"
                                           v-model="contract.started_at"
                                           name="started_at"
                                           placeholder="Start Date"
                                           isRequired
                                    />
                                </div>

                                <div>
                                    <Input label="End Date"
                                           type="date"
                                           v-model="contract.ended_at"
                                           name="ended_at"
                                           placeholder="End Date"
                                           isRequired
                                           :minLength="contract.started_at"
                                    />
                                </div>

                                <div class="sm:col-span-2 pt-2">
                                    <Input label="File"
                                           type="file"
                                           @change="onFileUpload($event, index)"
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
                                </div>

                            </div>

                        </div>

                    </template>

                </div>

            </div>



            <div class="flex items-center justify-end gap-x-4 pt-4">
                <Link :href="employeeRoutes.index.url()" class="text-sm font-semibold leading-6 text-gray-900 dark:text-zinc-300 hover:text-gray-700 dark:hover:text-white transition-colors">
                    Cancel
                </Link>
                <Button
                    title="Create Employee"
                    @submit="createEmployeeForm.post(employeeRoutes.store.url())"
                />
            </div>

        </form>

    </div>

</template>
