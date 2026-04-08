<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title', 'name', 'options', 'value' => null]));

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

foreach (array_filter((['title', 'name', 'options', 'value' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="col-span-full sm:col-span-3">
    <label for="<?php echo e($name); ?>" class="block text-sm/6 font-medium text-body dark:text-white">
        <?php echo e($title); ?>

    </label>

    <div class="mt-2 grid grid-cols-1">
        <select
            id="<?php echo e($name); ?>"
            name="<?php echo e($name); ?>"
            required
            <?php echo e($attributes->merge([
                'class' => 'col-start-1 row-start-1 w-full appearance-none rounded-md bg-white dark:bg-[#18181b] py-1.5 pr-8 pl-3 text-base text-black dark:text-white outline-1 outline-[#3F3F46] focus:outline-3 focus:-outline-offset-2 dark:focus:outline-[#e17100] sm:text-sm/6'
            ])); ?>

        >

            
            <option value="" disabled
            <?php if (! ($attributes->has('x-model'))): ?>
                <?php echo e(is_null(old($name, $value)) ? 'selected' : ''); ?>

                <?php endif; ?>
            >
                Odaberite opciju
            </option>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionValue => $optionLabel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                <option value="<?php echo e($optionValue); ?>"
                <?php if (! ($attributes->has('x-model'))): ?>
                    <?php echo e((string)$optionValue === (string) old($name, $value) ? 'selected' : ''); ?>

                    <?php endif; ?>
                >
                    <?php echo e($optionLabel); ?>

                </option>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

        </select>
    </div>
</div>
<?php /**PATH C:\Users\fsmol\Herd\amplitudoprojekathrapp\resources\views/components/form/dropdown.blade.php ENDPATH**/ ?>