<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.min.js"></script>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>



    <!-- Initialize theme from localStorage -->
    <script>
        (function() {
            const savedTheme = localStorage.getItem('theme');

            if (savedTheme === 'light') {
                document.documentElement.classList.remove('dark');
            } else {
                document.documentElement.classList.add('dark');
            }
        })();

    </script>

    <title>Document</title>



</head>
<body class="bg-[#fafafa] dark:bg-[#09090b]">

<button  data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar" aria-controls="separator-sidebar" type="button" class="text-black dark:text-white bg-transparent box-border border border-transparent hover:bg-neutral-secondary-medium focus:ring-4 focus:ring-neutral-tertiary font-medium leading-5 rounded-base ms-3 mt-3 text-sm p-2 focus:outline-none inline-flex sm:hidden">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10"/>
    </svg>
</button>

<aside id="separator-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-4 py-6 overflow-y-auto bg-[#fafafa] dark:bg-[#09090b] border-r  flex flex-col">

        <div class="flex items-center mb-10 px-2">
            <span class="text-xl font-bold tracking-tight text-blue-600 dark:text-white">Employee Management</span>
        </div>

        <ul class="space-y-1.5 font-medium flex-1">
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest px-3 mb-2">General</p>

            <li>
                <a href="<?php echo e(route('dashboard.index')); ?>"
                   class="flex items-center px-3 py-2.5 rounded-sm transition-all duration-200 group
              <?php echo e(request()->routeIs('dashboard.index')
                 ? 'bg-blue-600 dark:bg-[#242427] text-white font-semibold'
                 : 'text-black dark:text-white hover:bg-gray-200 dark:hover:bg-gray-400/10'); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="7" height="7"/>
                        <rect x="14" y="3" width="7" height="7"/>
                        <rect x="14" y="14" width="7" height="7"/>
                        <rect x="3" y="14" width="7" height="7"/>
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="<?php echo e(route('employee.index')); ?>"
                   class="flex items-center px-3 py-2.5 rounded-sm transition-all duration-200 group
              <?php echo e(request()->routeIs('employee.*')
                 ? 'bg-blue-600 dark:bg-[#242427] text-white font-semibold'
                 : 'text-black dark:text-white hover:bg-gray-200 dark:hover:bg-gray-400/10'); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                    <span class="ms-3">Employees</span>
                </a>
            </li>

            <li>
                <a href="<?php echo e(route('position.index')); ?>"
                   class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 group
              <?php echo e(request()->routeIs('position.*')
                 ? 'bg-blue-600 dark:bg-[#242427] text-white font-semibold'
                 : 'text-black dark:text-white hover:bg-gray-200 dark:hover:bg-gray-400/10'); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="16" rx="2"/>
                        <circle cx="9" cy="10" r="2"/>
                        <path d="M15 8h2"/><path d="M15 12h2"/><path d="M7 16h4"/>
                    </svg>
                    <span class="flex-1 ms-3">Positions</span>
                </a>
            </li>

            <li>
                <a href="<?php echo e(route('contract-type.index')); ?>"
                   class="flex items-center px-3 py-2.5 rounded-sm transition-all duration-200 group
              <?php echo e(request()->routeIs('contract-type.*')
                 ? 'bg-blue-600 dark:bg-[#242427] text-white font-semibold'
                 : 'text-black dark:text-white hover:bg-gray-200 dark:hover:bg-gray-400/10'); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <line x1="16" y1="13" x2="8" y2="13"/>
                        <line x1="16" y1="17" x2="8" y2="17"/>
                        <line x1="10" y1="9" x2="8" y2="9"/>
                    </svg>
                    <span class="flex-1 ms-3">Contract Types</span>
                </a>
            </li>

            <li>
                <a href="<?php echo e(route('status.index')); ?>"
                   class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 group
              <?php echo e(request()->routeIs('status.*')
                 ? 'bg-blue-600 dark:bg-[#242427] text-white font-semibold'
                 : 'text-black dark:text-white hover:bg-gray-200 dark:hover:bg-gray-400/10'); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                    </svg>
                    <span class="flex-1 ms-3">Status</span>
                </a>
            </li>
        </ul>

        <button id="theme-toggle" class="px-4 py-2 rounded-sm bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-200 transition-colors">
            Switch Theme
        </button>

        <div class="pt-4 mt-4 border-t border-gray-50">
            <form method="POST" action="<?php echo e(route('logout')); ?>" id="logout-form">
                <?php echo csrf_field(); ?>
            </form>
            <button type="button" onclick="document.getElementById('logout-form').submit()" class="flex items-center w-full px-3 py-2.5 text-slate-500 rounded-xl hover:bg-red-50 hover:text-red-600 transition-all group">
                <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                <span class="ms-3">Logout</span>
            </button>
        </div>
    </div>
</aside>




<div class="mt-8 sm:ml-64">
    <?php echo e($slot); ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const themeToggleBtn = document.getElementById('theme-toggle');

        if (!themeToggleBtn) {
            console.warn('Theme toggle button not found');
            return;
        }

        themeToggleBtn.addEventListener('click', function(e) {
            e.preventDefault();

            // Toggle the 'dark' class on the html element
            document.documentElement.classList.toggle('dark');

            // Save to localStorage
            if (document.documentElement.classList.contains('dark')) {
                localStorage.setItem('theme', 'dark');
            } else {
                localStorage.setItem('theme', 'light');
            }

            console.log('✓ Theme toggled', {
                isDark: document.documentElement.classList.contains('dark'),
                saved: localStorage.getItem('theme'),
                htmlClass: document.documentElement.className
            });
        });
    });
</script>

</body>
</html>

<?php /**PATH C:\Users\fsmol\Herd\amplitudoprojekathrapp\resources\views/components/layout.blade.php ENDPATH**/ ?>