<script setup lang="ts">

import employeeRoutes from "@/routes/employee";
import type {Paginator} from "@/types/models.ts";
import AppLayout from "@/Layouts/AppLayout.vue";
import {Link, router, useForm} from "@inertiajs/vue3";
import EmployeeController from "@/actions/App/Http/Controllers/EmployeeController.ts";
import SearchInput from "@/Components/SearchInput.vue";
import PerPageSelect from "@/Components/PerPageSelect.vue";
import Pagination from "@/Components/Pagination.vue";
import FilterDropdown from "@/Components/FilterDropdown.vue";

defineOptions({
    layout: AppLayout
})

const props = defineProps<{
    employees: Paginator<{
        id: number;
        first_name: string;
        last_name: string;
        email: string;
        position: {
            id: number;
            name: string;
        };
        status: {
            id: number;
            name: string;
        };
        contract: [
            {
                id: number;
                contract_type: {
                    id: number;
                    name: string;
                }
            }
        ];
    }>;
    query: any;
    perPageOptions: [5, 10, 20];
    statusesAndPositionsAndContractTypes: any[]

}>()


const searchForm = useForm({
    search: props.query.search || '',
})

function submitSearch() {
    searchForm.get(employeeRoutes.index.url())
}

function onPerPageSelect(value: number) {
    router.get(employeeRoutes.index.url(), {per_page: value})
}
</script>


<template>


    <div>
        <div class="mx-auto max-w-6xl py-12">
            <Link :href="employeeRoutes.create.url()"
               class="inline-flex items-center justify-center w-40 py-3 bg-indigo-600 dark:bg-[#e17100]
            text-white dark:text-black text-sm font-medium rounded-sm
            hover:bg-indigo-600">
                Add new employee
            </Link>
        </div>
    </div>

    <div class="mx-auto max-w-6xl overflow-visible bg-white dark:bg-[#18181b] rounded-sm border border-default mb-8">

        <div class="p-4 flex items-center justify-between space-x-4">

            <label for="search" class="sr-only">Search</label>
            <form @submit.prevent="submitSearch">

                <SearchInput v-model="searchForm.search"/>

            </form>

            <FilterDropdown
                :filter-data="props.statusesAndPositionsAndContractTypes"
                :query="props.query"/>

        </div>

        <table
            class="w-full bg-white border-[#3F3F46] dark:bg-[#18181b]  text-sm text-left rtl:text-right text-heading">
            <thead class="text-sm text-heading bg-white dark:bg-[#242427] border border-[#3F3F46]">
            <tr>
                <th scope="col" class="px-6 py-3 font-medium">
                    First Name
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Last name
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Email
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Status
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Position
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Contracts
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>

            <tr v-for="employee in props.employees.data" id="employee-{{employee.id}}" class="border-b
            border-default hover:bg-neutral-secondary-medium">

                <td class="px-6 py-4">
                    {{ employee.first_name }}
                </td>
                <td class="px-6 py-4">
                    {{ employee.last_name }}
                </td>
                <td class="px-6 py-4">
                    {{ employee.email }}
                </td>
                <td class="px-6 py-4">
                    {{ employee.status.name }}
                </td>
                <td class="px-6 py-4">
                    {{ employee.position.name }}
                </td>
                <td class="px-6 py-4 max-w-40">

                    <span v-if="employee.contract" v-for="contract in employee.contract"
                          class="inline-block items-center px-3 py-1 bg-indigo-50 dark:bg-[#18181b] text-heading mb-1 text-xs font-semibold rounded-lg border border-[#3F3F46]">
                        {{ contract.contract_type.name }}
                    </span>

                </td>
                <td class="px-6 py-4" x-data>
                    <Link :href="employeeRoutes.show(employee.id).url"
                       class="dark:text-[#e17100] text-body hover:underline pr-2">View</Link>

                    <Link :href="employeeRoutes.edit.url(employee.id)"
                       class="dark:text-[#e17100] text-body hover:underline">Edit</Link>
                </td>
            </tr>
            </tbody>

        </table>

        <div class="px-2 py-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <PerPageSelect
                :perPageOptions="perPageOptions"
                @update:model-value="onPerPageSelect"
                :model-value="props.query.per_page ?? 10"
            />

            <Pagination :links="props.employees.links" />
        </div>

    </div>

</template>
