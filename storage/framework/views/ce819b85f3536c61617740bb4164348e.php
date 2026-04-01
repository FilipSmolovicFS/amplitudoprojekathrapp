<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title', 'count', 'route', 'description' => null, 'icon' => null, 'trend' => null]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['title', 'count', 'route', 'description' => null, 'icon' => null, 'trend' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="group relative bg-white dark:bg-[#18181b] block p-7 border border-default rounded-sm shadow-xs overflow-hidden transition-all duration-200 hover:shadow-md hover:border-[#e17100]/40">

    
    <div class="absolute top-0 left-0 right-0 h-[2px] bg-gradient-to-r from-[#e17100]/60 via-[#e17100] to-[#e17100]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

    
    <div class="flex items-center justify-between mb-4">
        <p class="text-sm font-semibold uppercase tracking-widest text-body/60 dark:text-body/50"><?php echo e($title); ?></p>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($icon): ?>
            <div class="w-9 h-9 rounded-sm bg-[#e17100]/10 flex items-center justify-center text-[#e17100]">
                <?php echo $icon; ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>

    
    <p class="text-5xl font-extrabold tracking-tight text-heading mb-1"><?php echo e($count); ?></p>

    
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($description): ?>
        <p class="text-sm text-body/60 dark:text-body/50 mb-5"><?php echo e($description); ?></p>
    <?php else: ?>
        <div class="mb-5"></div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    
    <div class="flex items-center justify-between">
        <a href="<?php echo e($route); ?>" class="inline-flex font-medium items-center text-[#e17100] hover:underline text-sm">
            View details
            <svg class="w-4 h-4 ms-1.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                 width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778"/>
            </svg>
        </a>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($trend): ?>
            <span class="text-xs font-semibold px-2 py-0.5 rounded-full
                <?php echo e(str_starts_with($trend, '+') ? 'bg-emerald-500/10 text-emerald-500' : 'bg-red-500/10 text-red-400'); ?>">
                <?php echo e($trend); ?>

            </span>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>

</div>
<?php /**PATH C:\Users\fsmol\Herd\amplitudoprojekathrapp\resources\views/components/card.blade.php ENDPATH**/ ?>