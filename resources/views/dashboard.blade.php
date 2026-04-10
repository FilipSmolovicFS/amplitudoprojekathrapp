<x-layout>
{{--    @vite('resources/css/app.css')--}}

    <div class="mx-auto max-w-6xl px-4 py-12">

        {{-- Section header --}}
        <div class="mb-8">
            <h1 class="text-2xl font-extrabold tracking-tight text-heading">Workforce overview</h1>
            <p class="text-sm text-body/60 dark:text-body/50 mt-1">A real-time snapshot of your organisation's headcount and status.</p>
        </div>

        {{-- Stat Cards Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-5">
            {{-- Total Employees - Users Icon --}}
            <x-card
                title="Total employees"
                :count="$employeeCount"
                description="across all departments"
                :route="route('employee.index')"
                icon='<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" /></svg>'
            />

            {{-- Active - Check Badge Icon --}}
            <x-card
                title="Active"
                :count="$activeCount"
                description="currently on active duty"
                :route="route('employee.index') . '?statuses[]=' . $activeStatus[0]"
                icon='<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" /></svg>'
            />

            {{-- On Leave - Sun/Away Icon --}}
            <x-card
                title="On leave"
                :count="$onLeaveCount"
                description="approved absences today"
                :route="route('employee.index') . '?statuses[]=' . $activeStatus[1]"
                icon='<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" /></svg>'
            />

            {{-- Expiring Contracts - Document Alert Icon --}}
            <x-card
                title="Expiring contracts"
                :count="$expiringContractsCount"
                description="expiring within 30 days"
                :route="route('employee.index') . '?expireContract[]=30'"
                icon='<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m6.75 12-3-3m0 0-3 3m3-3v6m-1.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" /></svg>'
            />
        </div>

        {{-- Charts Section --}}
        <div class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-5">

            <div class="bg-white dark:bg-[#18181b] ring-1 ring-gray-900/5 dark:ring-white/10 rounded-xl shadow-sm p-6">
                <h2 class="text-base font-semibold text-gray-900 dark:text-white mb-6 text-center">Status Distribution</h2>
                <div class="relative h-64">
                    <canvas id="statusPieChart"></canvas>
                </div>
            </div>

            <div class="lg:col-span-2 bg-white dark:bg-[#18181b] ring-1 ring-gray-900/5 dark:ring-white/10 rounded-xl shadow-sm p-6">
                <h2 class="text-base font-semibold text-gray-900 dark:text-white mb-6">Employees per Position</h2>
                <div class="relative h-64">
                    <canvas id="positionBarChart"></canvas>
                </div>
            </div>

        </div>

    </div>

    {{-- Chart.js Script --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('statusPieChart');

            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Active', 'On Leave', 'Terminated'],
                    datasets: [{
                        // Passing your PHP variables directly into the JS array
                        data: [
                            {{ $activeCount ?? 0 }},
                            {{ $onLeaveCount ?? 0 }},
                            {{ $terminatedCount ?? 0 }}
                        ],
                        backgroundColor: [
                            '#4f7ce1', // Blue for Active
                            '#c1a946', // Yellow for On Leave
                            '#ef4444'  // Red for Terminated
                        ],
                        borderColor: [
                            '#c8c8c8',
                            '#c8c8c8',
                            '#c8c8c8'
                        ],
                        borderWidth: 2,
                        hoverOffset: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                // Adjust text color for dark mode compatibility if needed
                                color: document.documentElement.classList.contains('dark') ? '#a1a1aa' : '#3f3f46',
                                padding: 20,
                                font: {
                                    family: "'Inter', sans-serif", // Matches standard Tailwind fonts
                                    size: 13
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const barCtx = document.getElementById('positionBarChart');

            new Chart(barCtx, {
                type: 'bar',
                data: {
                    labels: {!! json_encode($positionNames) !!},
                    datasets: [{
                        label: 'Number of Employees',
                        data: {!! json_encode($positionCounts) !!},
                        backgroundColor: '#e17100', // Filament Orange
                        borderRadius: 4,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1,
                                color: document.documentElement.classList.contains('dark') ? '#bfbfbf' : '#000000'
                            },
                            grid: {
                                display: false
                            }
                        },
                        x: {
                            ticks: {
                                color: document.documentElement.classList.contains('dark') ? '#a1a1aa' : '#3f3f46'
                            },
                            grid: {
                                display: false
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false // Hide legend for single-dataset bar charts for a cleaner look
                        }
                    }
                }
            });
        });
    </script>
</x-layout>
