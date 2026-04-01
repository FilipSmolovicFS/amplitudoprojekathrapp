<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title' => 'Delete', 'id', 'name', 'route']));

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

foreach (array_filter((['title' => 'Delete', 'id', 'name', 'route']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<button type="button"
        command="show-modal"
        commandfor="delete-modal-<?php echo e($id); ?>"
        <?php echo e($attributes->merge([''])); ?>

        title="Delete"
        class=" cursor-pointer">
    <?php echo e($title); ?>

</button>


<el-dialog>
    <dialog id="delete-modal-<?php echo e($id); ?>" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop class="fixed inset-0 bg-gray-900/80 transition-opacity"></el-dialog-backdrop>

        <div class="flex min-h-full items-center justify-center p-4">
            <el-dialog-panel class="relative transform overflow-hidden rounded-2xl bg-white dark:bg-[#18181b] text-left shadow-2xl border border-white/10 transition-all sm:w-full sm:max-w-lg">
                <div class="p-6">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex size-10 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0">
                            <svg class="size-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg font-semibold text-red-600"><?php echo e($title); ?></h3>
                            <p class="mt-2 text-sm text-heading">
                                Are you sure you want to delete <strong><?php echo e($name); ?></strong>?
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-200 dark:bg-[#18181b] px-6 py-4 gap-3 sm:flex sm:flex-row-reverse">
                    <form action="<?php echo e($route); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="inline-flex w-full justify-center rounded-lg bg-red-600 px-4 py-2 text-sm font-semibold text-white hover:bg-red-500 transition-colors sm:w-auto">
                            Confirm Delete
                        </button>
                    </form>

                    <button type="button" command="close" commandfor="delete-modal-<?php echo e($id); ?>" class="mt-3 inline-flex w-full justify-center rounded-lg  px-4 py-2 text-sm font-semibold text-heading hover:bg-gray-300 dark:hover:bg-white/10 transition-colors sm:mt-0 sm:w-auto cursor-pointer">
                        Cancel
                    </button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>
</el-dialog>

<?php /**PATH C:\Users\fsmol\Herd\amplitudoprojekathrapp\resources\views/components/modal.blade.php ENDPATH**/ ?>