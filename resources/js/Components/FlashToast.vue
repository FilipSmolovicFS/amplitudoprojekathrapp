<script setup lang="ts">
import { usePage } from '@inertiajs/vue3';
import { computed, ref, watch } from 'vue';

const page = usePage<{
    flash: { success?: string | null; error?: string | null };
    errors?: Record<string, string> | undefined;
}>();

const success = computed(() => page.props.flash?.success);
const error = computed(() => page.props.flash?.error);
const errors = computed(() => page.props.errors ?? {});
const firstValidationError = computed(() => Object.values(errors.value)[0]);

const showSuccess = ref(false);
const showError = ref(false);
const showValidation = ref(false);
const successWidth = ref(100);
const errorWidth = ref(100);
const validationWidth = ref(100);

watch(
    success,
    (msg) => {
        if (msg) {
            showSuccess.value = true;
            successWidth.value = 100;
            requestAnimationFrame(() => {
                successWidth.value = 0;
            });
            window.setTimeout(() => {
                showSuccess.value = false;
            }, 4000);
        }
    },
    { immediate: true },
);

watch(
    error,
    (msg) => {
        if (msg) {
            showError.value = true;
            errorWidth.value = 100;
            requestAnimationFrame(() => {
                errorWidth.value = 0;
            });
            window.setTimeout(() => {
                showError.value = false;
            }, 4000);
        }
    },
    { immediate: true },
);

watch(
    firstValidationError,
    (msg) => {
        if (msg) {
            showValidation.value = true;
            validationWidth.value = 100;
            requestAnimationFrame(() => {
                validationWidth.value = 0;
            });
            window.setTimeout(() => {
                showValidation.value = false;
            }, 5000);
        }
    },
    { immediate: true },
);
</script>

<template>
    <Teleport to="body">
        <Transition
            enter-active-class="transition ease-out duration-300"
            enter-from-class="opacity-0 translate-y-4"
            enter-to-class="opacity-100 translate-y-0"
            leave-active-class="transition ease-in duration-200"
            leave-from-class="opacity-100 translate-y-0"
            leave-to-class="opacity-0 translate-y-4"
        >
            <div v-if="showSuccess && success" class="fixed bottom-5 right-5 z-[100] w-full max-w-sm">
                <div
                    class="relative flex items-start gap-3 overflow-hidden rounded-2xl border border-emerald-200/90 bg-white px-4 py-3.5 shadow-xl shadow-slate-900/10 dark:border-emerald-900/50 dark:bg-zinc-900"
                >
                    <div class="mt-0.5 shrink-0">
                        <svg class="size-5 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div class="min-w-0 flex-1">
                        <p class="text-sm font-semibold text-emerald-800 dark:text-emerald-300">Success</p>
                        <p class="mt-0.5 text-sm text-slate-600 dark:text-zinc-300">{{ success }}</p>
                    </div>
                    <button
                        type="button"
                        class="shrink-0 cursor-pointer text-slate-400 transition hover:text-slate-600 dark:text-zinc-500 dark:hover:text-zinc-300"
                        @click="showSuccess = false"
                    >
                        <svg class="size-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <div
                        class="absolute bottom-0 left-0 h-0.5 rounded-full bg-emerald-500"
                        :style="{ width: `${successWidth}%`, transition: 'width 4000ms linear' }"
                    />
                </div>
            </div>
        </Transition>

        <Transition
            enter-active-class="transition ease-out duration-300"
            enter-from-class="opacity-0 translate-y-4"
            enter-to-class="opacity-100 translate-y-0"
            leave-active-class="transition ease-in duration-200"
            leave-from-class="opacity-100 translate-y-0"
            leave-to-class="opacity-0 translate-y-4"
        >
            <div v-if="showError && error" class="fixed bottom-5 right-5 z-[100] w-full max-w-sm">
                <div
                    class="relative flex items-start gap-3 overflow-hidden rounded-2xl border border-rose-200/90 bg-white px-4 py-3.5 shadow-xl shadow-slate-900/10 dark:border-rose-900/50 dark:bg-zinc-900"
                >
                    <div class="mt-0.5 shrink-0">
                        <svg class="size-5 text-rose-600 dark:text-rose-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 9v3.75m0 3.75h.007M12 3a9 9 0 100 18A9 9 0 0012 3z"
                            />
                        </svg>
                    </div>
                    <div class="min-w-0 flex-1">
                        <p class="text-sm font-semibold text-rose-800 dark:text-rose-300">Error</p>
                        <p class="mt-0.5 text-sm text-slate-600 dark:text-zinc-300">{{ error }}</p>
                    </div>
                    <button
                        type="button"
                        class="shrink-0 cursor-pointer text-slate-400 transition hover:text-slate-600 dark:text-zinc-500 dark:hover:text-zinc-300"
                        @click="showError = false"
                    >
                        <svg class="size-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <div
                        class="absolute bottom-0 left-0 h-0.5 rounded-full bg-rose-500"
                        :style="{ width: `${errorWidth}%`, transition: 'width 4000ms linear' }"
                    />
                </div>
            </div>
        </Transition>

        <Transition
            enter-active-class="transition ease-out duration-300"
            enter-from-class="opacity-0 translate-y-4"
            enter-to-class="opacity-100 translate-y-0"
            leave-active-class="transition ease-in duration-200"
            leave-from-class="opacity-100 translate-y-0"
            leave-to-class="opacity-0 translate-y-4"
        >
            <div v-if="showValidation && firstValidationError" class="fixed bottom-5 right-5 z-[100] w-full max-w-sm">
                <div
                    class="relative flex items-start gap-3 overflow-hidden rounded-2xl border border-amber-200/90 bg-white px-4 py-3.5 shadow-xl shadow-slate-900/10 dark:border-amber-900/50 dark:bg-zinc-900"
                >
                    <div class="mt-0.5 shrink-0">
                        <svg class="size-5 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"
                            />
                        </svg>
                    </div>
                    <div class="min-w-0 flex-1">
                        <p class="text-sm font-semibold text-amber-900 dark:text-amber-200">Please check the form</p>
                        <p class="mt-0.5 text-sm text-slate-600 dark:text-zinc-300">{{ firstValidationError }}</p>
                    </div>
                    <button
                        type="button"
                        class="shrink-0 cursor-pointer text-slate-400 transition hover:text-slate-600 dark:text-zinc-500 dark:hover:text-zinc-300"
                        @click="showValidation = false"
                    >
                        <svg class="size-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <div
                        class="absolute bottom-0 left-0 h-0.5 rounded-full bg-amber-500"
                        :style="{ width: `${validationWidth}%`, transition: 'width 5000ms linear' }"
                    />
                </div>
            </div>
        </Transition>
    </Teleport>
</template>
