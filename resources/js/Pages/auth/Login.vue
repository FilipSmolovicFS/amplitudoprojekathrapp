<script setup lang="ts">

import Input from "@/Components/Input.vue";
import {useForm} from "@inertiajs/vue3";
import {authLogin} from "@/routes";

const form = useForm({
    email: '',
    password: '',
})

function submit() {
    form.post(authLogin.url())
}

</script>


<template>
    <div
        class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 bg-white dark:bg-[#09090b]">
        <div class="w-full rounded-lg border md:mt-0 sm:max-w-md xl:p-0 bg-white border-[#3F3F46] dark:bg-[#18181b]">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-black dark:text-white md:text-2xl ">
                    Sign in to your account
                </h1>

                <form @submit.prevent="submit">

                    <Input label="Email"
                           type="email"
                           v-model="form.email"
                           name="Email"
                           placeholder="Email"
                           isRequired
                           :minLength= "5"
                           :maxLength= "255"
                    />

                    <Input label="Password"
                           type="password"
                           v-model="form.password"
                           name="Password"
                           placeholder="Password"
                           isRequired
                           :minLength= "8"
                           :maxLength= "255"
                    />


                    <button class="w-full text-white bg-blue-600 hover:bg-primary-700 focus:ring-4 focus:outline-none
                    focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-4 text-center dark:bg-primary-600
                    dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                    >
                        Sign in
                    </button>


                </form>

            </div>
        </div>
    </div>

</template>
