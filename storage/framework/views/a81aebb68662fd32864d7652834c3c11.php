<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.ts', "resources/js/Pages/{$page['component']}.vue"]); ?>
    <?php $__inertiaSsrResponse = app(\Inertia\Ssr\SsrState::class)->setPage($page)->dispatch();  if ($__inertiaSsrResponse) { echo $__inertiaSsrResponse->head; } ?>
</head>
<body class="bg-[#fafafa] dark:bg-[#09090b]" >
<?php $__inertiaSsrResponse = app(\Inertia\Ssr\SsrState::class)->setPage($page)->dispatch();  if ($__inertiaSsrResponse) { echo $__inertiaSsrResponse->body; } else { ?><script data-page="app" type="application/json"><?php echo json_encode($page); ?></script><div id="app"></div><?php } ?>
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
<?php /**PATH C:\Users\fsmol\Herd\amplitudoprojekathrapp\resources\views/app.blade.php ENDPATH**/ ?>