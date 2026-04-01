<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['type' => 'success', 'message' => '']));

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

foreach (array_filter((['type' => 'success', 'message' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($message): ?>
    <div
        x-data="{ show: true }"
        x-show="show"
        x-init="setTimeout(() => show = false, 4000)"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-4"
        class="fixed bottom-4 right-4 z-50 flex items-start gap-3 px-4 py-3 rounded-sm shadow-lg border max-w-sm w-full
        <?php echo e($type === 'success'
            ? 'bg-white dark:bg-[#18181b] border-green-500 text-heading'
            : 'bg-white dark:bg-[#18181b] border-red-500 text-heading'); ?>"
    >
        
        <div class="shrink-0 mt-0.5">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($type === 'success'): ?>
                <svg class="size-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            <?php else: ?>
                <svg class="size-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3.75m0 3.75h.007M12 3a9 9 0 100 18A9 9 0 0012 3z"/>
                </svg>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>

        
        <div class="flex-1">
            <p class="text-sm font-semibold <?php echo e($type === 'success' ? 'text-green-600' : 'text-red-600'); ?>">
                <?php echo e($type === 'success' ? 'Success' : 'Error'); ?>

            </p>
            <p class="text-sm text-heading mt-0.5"><?php echo e($message); ?></p>
        </div>

        
        <button @click="show = false" class="shrink-0 text-gray-400 hover:text-gray-600 cursor-pointer">
            <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        
        <div class="absolute bottom-0 left-0 h-0.5 rounded-full <?php echo e($type === 'success' ? 'bg-green-500' : 'bg-red-500'); ?>"
             x-data="{ width: 100 }"
             x-init="setTimeout(() => width = 0, 50)"
             :style="`width: ${width}%; transition: width 4000ms linear`">
        </div>
    </div>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\fsmol\Herd\amplitudoprojekathrapp\resources\views/components/toast.blade.php ENDPATH**/ ?>