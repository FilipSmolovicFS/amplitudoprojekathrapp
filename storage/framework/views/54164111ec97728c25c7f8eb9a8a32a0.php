<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['id' => 'modal', 'title' => 'Modal', 'route', 'method', 'hasFile' => false, 'open' => false]));

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

foreach (array_filter((['id' => 'modal', 'title' => 'Modal', 'route', 'method', 'hasFile' => false, 'open' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div x-data="{ open: <?php echo e($open ? 'true' : 'false'); ?>, fileError: '' }"
     x-on:open-modal.window="if($event.detail === '<?php echo e($id); ?>') open = true">

    <div
        x-show="open"
        x-transition.opacity
        x-on:click="open = false"
        style="display: none"
        class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900/50">

        <div
            x-on:click.stop
            x-transition
            class="relative bg-white dark:bg-[#09090b] rounded-lg shadow-sm w-full max-w-md mx-4">

            <form action="<?php echo e($route); ?>" method="POST" <?php if($hasFile): ?> enctype="multipart/form-data" <?php endif; ?>>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(strtoupper($method) !== 'POST' ): ?>
                    <?php echo method_field(strtoupper($method)); ?>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php echo csrf_field(); ?>
                <div class="flex items-center justify-between p-5 border-b border-[#3F3F46]">
                    <h3 class="text-lg font-semibold text-heading"><?php echo e($title); ?></h3>
                    <button type="button" x-on:click="open = false"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>

                <div class="p-5 space-y-4">
                    <?php echo e($slot); ?>


                </div>

                <div class="flex items-center justify-end gap-3 p-5 border-t border-[#3F3F46]">
                    <a type="button" x-on:click="open = false"
                            class="py-2.5 px-5 text-sm font-medium text-heading hover:bg-gray-200 dark:hover:bg-white/10 cursor-pointer rounded-sm">
                        Cancel
                    </a>
                    <button type="submit"
                            class="text-white dark:text-black bg-blue-600 dark:bg-[#e17100] font-medium rounded-sm text-sm px-5 py-2.5 outline-none">
                        Save Changes
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
<?php /**PATH C:\Users\fsmol\Herd\amplitudoprojekathrapp\resources\views/components/edit-modal.blade.php ENDPATH**/ ?>