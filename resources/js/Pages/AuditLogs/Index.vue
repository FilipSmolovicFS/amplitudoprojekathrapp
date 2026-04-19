<script setup lang="ts">

import AppLayout from "@/Layouts/AppLayout.vue";
import Pagination from "@/Components/Pagination.vue";
import type {Paginator} from "@/types/common/paginator.ts";

defineOptions({
    layout:AppLayout
})

const props = defineProps<{
    logs: Paginator<{

    }>
}>()

</script>

<template>
    <div class="mx-auto max-w-6xl overflow-visible bg-white dark:bg-[#18181b] rounded-sm border border-default mb-8">
        <table class="w-full  border-[#3F3F46]  text-sm text-left rtl:text-right text-heading">

            <thead class="text-sm text-heading">
            <tr class="border-b border-gray-200 dark:border-[#3E3E3A]">
                <th scope="col" class="px-6 py-3 font-medium w-xs">
                    User
                </th>

                <th scope="col" class="px-6 py-3 font-medium w-xs">
                    Method
                </th>
                <th class="w-2xs">
                    Path
                </th>
                <th class="w-2xs">
                    Status Code
                </th>
                <th class="w-2xs">
                    IP Address
                </th>
            </tr>
            </thead>
            <tbody>

            <tr v-for="log in logs.data"  class="border-b border-default hover:bg-neutral-secondary-medium rounded-sm">

                <td scope="row" class="px-6 py-4 rounded-sm font-medium text-heading whitespace-nowrap">
                    <span v-if="log.user">

                        {{ log.user.name }} ({{ log.user.id }})

                    </span>

                    <span v-else>
                        Null
                    </span>
                </td>

                <td scope="row" class="px-6 py-4 rounded-sm font-medium text-heading whitespace-nowrap">
                    {{log.method}}
                </td>

                <td>
                    {{log.path}}
                </td>

                <td>
                    {{log.status_code}}
                </td>

                <td>
                    {{log.ip_address}}
                </td>

            </tr>

            </tbody>
        </table>

        <div class="px-2 py-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

            <Pagination :links="props.logs.links" />
        </div>
    </div>
</template>
