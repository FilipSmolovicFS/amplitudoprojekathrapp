<script setup lang="ts">

import AppLayout from "@/Layouts/AppLayout.vue";
import type {ContractType, Position, Role, Status, User} from "@/types/models.ts";
import DeleteModal from "@/Components/DeleteModal.vue";
import userRoutes from '@/routes/user'
import {ref} from "vue";
import FormModal from "@/Components/FormModal.vue";
import {useForm} from "@inertiajs/vue3";
import Input from "@/Components/Input.vue";
import FormDropdown from "@/Components/FormDropdown.vue";
import contractRoute from "@/routes/contract";

defineOptions({
    layout: AppLayout
})

const props = defineProps<{
    'users': User[];
    'roles': Role[];
}>()

console.log(props.users)

const currentUser = ref<User | null>(null)
const currentUserId = ref(null)
function onDeleteUser(user: User){
    currentUser.value = user
}

function closeDeleteUserModal(){
    currentUser.value = null
}

const userForm = useForm({
    username: '',
    email: '',
    password: '',
    role: '',
})

const editUserForm = useForm({
    username: '',
    email: '',
    password: '',
    role: null,
})

const isEditUserModalVisible = ref(false)

function editUserModalData(user: User){
    console.log(user)

    editUserForm.username = user.name;
    editUserForm.email = user.email;
    editUserForm.password = user.password;
    editUserForm.role = user.roles[0].id

    isEditUserModalVisible.value = true

    currentUserId.value = user.id
}

const isAddUserModalVisible = ref(false)


</script>

<template>
    <div class="mx-auto max-w-6xl py-12">
            <span
                @click="isAddUserModalVisible = true"
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
                <th>
                    Email
                </th>
                <th>
                    Role
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>

            <tr v-for="user in props.users" class="border-b border-default hover:bg-neutral-secondary-medium rounded-sm">

                <td scope="row" class="px-6 py-4 rounded-sm font-medium text-heading whitespace-nowrap">
                    {{user.name}}
                </td>

                <td>
                    {{user.email}}
                </td>

                <td>
                    <p v-for="role in user.roles">
                        {{role.name}}
                    </p>
                </td>

                <td class="px-6 py-4 text-red-600 rounded-sm">

                    <button
                        @click="editUserModalData(user)"
                        class="text-sm text-blue-600 dark:text-blue-400 hover:underline cursor-pointer"
                    >Edit
                    </button>
                    <button
                        @click="onDeleteUser(user)"
                        class="text-sm text-red-600 dark:text-red-400 hover:underline ml-2"
                    >
                        Delete
                    </button>
                </td>
            </tr>

            </tbody>
        </table>
    </div>


    <DeleteModal
        v-if="currentUser"
        title="Delete Contract Type"
        :name="currentUser.name"
        :route="userRoutes.destroy.url(currentUser.id)"
        @close="onDeleteUser"
    />

    <FormModal
        @submit="userForm.post(userRoutes.store.url())"
        v-if="isAddUserModalVisible"
        title="Add User"
        button-text="Add User">

        <Input
            label="Username"
            name="username"
            type="text"
            v-model="userForm.username"
            isRequired
        />

        <Input
            label="Email"
            name="email"
            type="email"
            v-model="userForm.email"
            isRequired
        />

        <Input
            label="Password"
            name="password"
            type="password"
            v-model="userForm.password"
            isRequired
        />

        <FormDropdown
            v-model="userForm.role"
            label="Role"
            name="role"
            :options="props.roles"
        />

    </FormModal>

    <FormModal
        @submit="editUserForm.put(userRoutes.update.url(currentUserId))"
        v-if="currentUserId"
        title="Edit User"
        button-text="Edit User">

        <Input
            label="Username"
            name="username"
            type="text"
            v-model="editUserForm.username"
            isRequired
        />

        <Input
            label="Email"
            name="email"
            type="email"
            v-model="editUserForm.email"
            isRequired
        />

        <FormDropdown
            v-model="editUserForm.role"
            label="Role"
            name="role"
            :options="props.roles"
        />

    </FormModal>

</template>
