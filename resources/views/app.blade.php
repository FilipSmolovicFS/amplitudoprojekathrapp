<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.ts', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>
<body class="bg-[#fafafa] dark:bg-[#09090b]" >
@inertia
</body>
</html>

<script>

    const theme = localStorage.getItem('theme')
    if (theme === 'light'){
        document.documentElement.classList.remove('dark')
    }else{
        document.documentElement.classList.add('dark')
    }
</script>
