<script setup lang="ts">

import AppLayout from "@/Layouts/AppLayout.vue";
import Card from "@/Components/Card.vue";
import {onMounted, ref} from "vue";
import {Chart} from "chart.js/auto";

defineOptions({
    layout: AppLayout
})

const props = defineProps<{
    employeeCount: number;
    activeCount: number;
    onLeaveCount: number;
    terminatedCount: number;
    expiringContractsCount: number;
    activeStatus: number[];
    positionNames: string[];
    positionCounts: number[];
}>()

const statusPieRef = ref<HTMLCanvasElement | null>(null)
const positionBarRef = ref<HTMLCanvasElement | null>(null)

onMounted(() => {
    if (statusPieRef.value) {
        new Chart(statusPieRef.value, {
            type: "pie",
            data: {
                labels: ["Active", "On Leave", "Terminated"],
                datasets: [{
                    data: [
                        props.activeCount,
                        props.onLeaveCount,
                        props.terminatedCount
                    ],
                    backgroundColor: ["#4f7ce1", "#c1a946", "#ef4444"],
                    borderColor: ["#c8c8c8"],
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: "bottom"
                    }
                }
            }
        })
    }

    if (positionBarRef.value) {
        new Chart(positionBarRef.value, {
            type: "bar",
            data: {
                labels: props.positionNames,
                datasets: [{
                    label: "Number of Employees",
                    data: props.positionCounts,
                    backgroundColor: "#e17100",
                    borderRadius: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: { stepSize: 1 }
                    }
                },
                plugins: {
                    legend: { display: false }
                }
            }
        })
    }
})

</script>

<template>

    <div class="mx-auto max-w-6xl px-4 py-12">

        <div class="mb-8">
            <h1 class="text-2xl font-extrabold tracking-tight text-heading">Workforce overview</h1>
            <p class="text-sm text-body/60 dark:text-body/50 mt-1">A real-time snapshot of your organisation's headcount and status.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-5">

            <Card title="Total Employees" :count="props.employeeCount" description="across all departments" route="/employee" icon="👥"/>
            <Card title="Active Employees" :count="props.activeCount" description="currently on active duty" route="/employee?statuses=1" icon="✅"/>
            <Card title="On Leave" :count="props.onLeaveCount" description="approved absences today" route="/employee?statuses=2" icon="🌴"/>
            <Card title="Terminated Employees" :count="props.terminatedCount" description="expiring within 30 days" route="/employee?statuses=3" icon="❌"/>

        </div>

        <div class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-5">

            <div class="bg-white dark:bg-[#18181b] rounded-xl shadow-sm p-6">
                <h2 class="text-base font-semibold text-heading mb-6 text-center">Status Distribution</h2>
                <div class="relative h-64">
                    <canvas ref="statusPieRef"></canvas>
                </div>
            </div>
            <div class="lg:col-span-2 bg-white dark:bg-[#18181b] rounded-xl shadow-sm p-6">
                <h2 class="text-base font-semibold text-heading mb-6">Employees per Position</h2>
                <div class="relative h-64">
                    <canvas ref="positionBarRef"></canvas>
                </div>
            </div>

        </div>
    </div>

</template>
