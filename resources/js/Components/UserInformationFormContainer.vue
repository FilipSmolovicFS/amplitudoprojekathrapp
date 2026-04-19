<script setup lang="ts">

import Input from "@/Components/Input.vue";
import FormDropdown from "@/Components/FormDropdown.vue";
import type {InertiaForm} from "@inertiajs/vue3";
import type {EmployeeForm} from "@/types/employee/employee-form.ts";

const props = defineProps<{
    title: string,
    headerText?: string,
    form: InertiaForm<EmployeeForm>;
}>()

</script>

<template>
    <div class="bg-white dark:bg-[#18181b] ring-1 ring-gray-900/5 dark:ring-white/10 rounded-xl shadow-sm overflow-hidden">
        <div class="px-6 py-5 border-b border-gray-900/5 dark:border-white/10">
            <h2 class="text-base font-semibold leading-6 text-gray-900 dark:text-white">{{ props.title }}</h2>
            <p class="mt-1 text-sm text-gray-500 dark:text-zinc-400">{{ props.headerText }}</p>
        </div>

        <div class="px-6 py-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-2">

            <div>
                <Input label="Fist Name"
                       type="text"
                       v-model="props.form.first_name"
                       name="first_name"
                       placeholder="Fist Name"
                       isRequired
                       :minLength="2"
                       :maxLength="255"
                       :error="form.errors.first_name"
                />
            </div>

            <div>
                <Input label="Last Name"
                       type="text"
                       v-model="props.form.last_name"
                       name="last_name"
                       placeholder="Last Name"
                       isRequired
                       :minLength="2"
                       :maxLength="255"
                       :error="form.errors.last_name"
                />
            </div>

            <div>
                <Input label="Email Name"
                       type="Email"
                       v-model="props.form.email"
                       name="email"
                       placeholder="Email"
                       isRequired
                       :minLength="2"
                       :maxLength="255"
                       :error="form.errors.email"
                />
            </div>

            <div>
                <Input label="Phone Number"
                       type="tel"
                       v-model="props.form.phone_number"
                       name="phone_number"
                       placeholder="Phone Number"
                       isRequired
                       :minLength="2"
                       :maxLength="255"
                       :error="form.errors.phone_number"
                />
            </div>

            <div>
                <Input label="Date of Birth"
                       type="date"
                       v-model="props.form.date_of_birth"
                       name="date_of_birth"
                       placeholder="Date of Birth"
                       isRequired
                       :minLength="2"
                       :maxLength="255"
                       :error="form.errors.date_of_birth"
                />
            </div>

            <div>
                <Input label="JMBG"
                       type="text"
                       v-model="props.form.jmbg"
                       name="jmbg"
                       placeholder="JMBG"
                       isRequired
                       :minLength="2"
                       :maxLength="255"
                       :error="form.errors.jmbg"


                />
            </div>

            <div>
                <FormDropdown
                    v-model="props.form.gender"
                    :preselected="props.form.gender"
                    name="Gender"
                    label="Gender"
                    :options= "['Male', 'Female']"
                    useValue
                />
            </div>

            <div>
                <Input label="Address"
                       type="text"
                       v-model="props.form.address"
                       name="address"
                       placeholder="Address"
                       isRequired
                       :minLength="2"
                       :maxLength="255"
                       :error="form.errors.address"
                />
            </div>

        </div>

    </div>
</template>
