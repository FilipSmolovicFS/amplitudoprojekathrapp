<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['id' => 'modal', 'title' => 'Modal', 'route', 'method']));

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

foreach (array_filter((['id' => 'modal', 'title' => 'Modal', 'route', 'method']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div x-data="{ open: false }" x-on:open-modal.window="if($event.detail === '<?php echo e($id); ?>') open = true">

    
    <div
        x-show="open"
        x-transition.opacity
        x-on:click="open = false"
        style="display: none"
        class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900/50">

        
        <div
            x-on:click.stop
            x-transition
            class="relative bg-white rounded-lg shadow-sm w-full max-w-md mx-4">

            <form action="<?php echo e($route); ?>" method="<?php echo e($method); ?>">
                <?php echo csrf_field(); ?>
                <div class="flex items-center justify-between p-5 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900"><?php echo e($title); ?></h3>
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

                <div class="flex items-center justify-end gap-3 p-5 border-t border-gray-200">
                    <button type="button" x-on:click="open = false"
                            class="py-2.5 px-5 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:ring-4 focus:ring-gray-100 outline-none">
                        Cancel
                    </button>
                    <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 outline-none">
                        Save Changes
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
<?php /**PATH C:\Users\fsmol\Herd\amplitudoprojekathrapp\resources\views/components/edit-modal.blade.php ENDPATH**/ ?>