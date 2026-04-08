<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['label', 'type' => 'text', 'name', 'placeholder' => '', 'colSpan', 'value' => '']));

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

foreach (array_filter((['label', 'type' => 'text', 'name', 'placeholder' => '', 'colSpan', 'value' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $oldValue = old($name, $value);
    $displayValue = is_array($oldValue) ? '' : $oldValue;
?>

<div class="<?php echo e($colSpan); ?>">
    <label for="<?php echo e($name); ?>" class="block text-sm/6 font-medium text-body dark:text-white"><?php echo e($label); ?></label>
    <div class="mt-2">
        <input
            type="<?php echo e($type); ?>"
            name="<?php echo e($name); ?>"
            value="<?php echo e($displayValue); ?>"
            placeholder="<?php echo e($placeholder); ?>"
            id="<?php echo e($name); ?>"

            <?php echo e($attributes->except('label', 'type', 'name', 'colSpan', 'value')); ?>

            class="block w-full rounded-md bg-white dark:bg-[#18181b] px-3 py-1.5 text-base text-body
                  placeholder:text-gray-400 border border-gray-300 dark:border-[#3E3E3A]
                  focus:outline-3 focus:-outline-offset-2 focus:outline-blue-600
                  dark:focus:outline-[#e17100] sm:text-sm/6"
            required
        />
    </div>
</div>
<?php /**PATH C:\Users\fsmol\Herd\amplitudoprojekathrapp\resources\views/components/form/input.blade.php ENDPATH**/ ?>