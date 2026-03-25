<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['label', 'type' => 'text', 'name', 'colSpan', 'value' => '']));

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

foreach (array_filter((['label', 'type' => 'text', 'name', 'colSpan', 'value' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="<?php echo e($colSpan); ?>">
    <label for="first-name" class="block text-sm/6 font-medium text-gray-900"><?php echo e($label); ?></label>
    <div class="mt-2">
        <input type="<?php echo e($type); ?>" name="<?php echo e($name); ?>" value="<?php echo e($value); ?>"

               <?php if($type === 'date'): ?>
                   min="<?php echo e(\Carbon\Carbon::now()->format('Y-m-d')); ?>"
               <?php endif; ?>

               <?php echo e($attributes->except('label', 'type', 'name', 'colSpan', 'value')); ?>

               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1
               -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2
               focus:outline-indigo-600 sm:text-sm/6" required

        />
    </div>
</div>
<?php /**PATH C:\Users\fsmol\Herd\amplitudoprojekathrapp\resources\views/components/form/input.blade.php ENDPATH**/ ?>