<?php use Carbon\Carbon; ?>
<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <div class="mx-auto max-w-5xl py-12 px-4 sm:px-6 lg:px-8">

        <div class="mb-8 flex items-center justify-between">
            <h1 class="font-bold text-2xl text-gray-900 dark:text-white">Create Employee</h1>
        </div>

        <form method="POST" action="<?php echo e(route('employee.store')); ?>" enctype="multipart/form-data" class="space-y-8">
            <?php echo csrf_field(); ?>

            <div class="bg-white dark:bg-[#18181b] ring-1 ring-gray-900/5 dark:ring-white/10 rounded-xl shadow-sm overflow-hidden">
                <div class="px-6 py-5 border-b border-gray-900/5 dark:border-white/10">
                    <h2 class="text-base font-semibold leading-6 text-gray-900 dark:text-white">Personal Information</h2>
                    <p class="mt-1 text-sm text-gray-500 dark:text-zinc-400">Basic details and contact information for the new employee.</p>
                </div>

                <div class="px-6 py-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-2">
                    <div>
                        <?php if (isset($component)) { $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96 = $attributes; } ?>
<?php $component = App\View\Components\Form\Input::resolve(['label' => 'First Name','type' => 'text','name' => 'first_name'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['minlength' => '4']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $attributes = $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $component = $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="mt-1 text-sm text-red-500"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    <div>
                        <?php if (isset($component)) { $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96 = $attributes; } ?>
<?php $component = App\View\Components\Form\Input::resolve(['label' => 'Last Name','type' => 'text','name' => 'last_name'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $attributes = $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $component = $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="mt-1 text-sm text-red-500"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    <div>
                        <?php if (isset($component)) { $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96 = $attributes; } ?>
<?php $component = App\View\Components\Form\Input::resolve(['label' => 'Email','type' => 'email','name' => 'email'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['pattern' => '[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $attributes = $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $component = $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="mt-1 text-sm text-red-500"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    <div>
                        <?php if (isset($component)) { $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96 = $attributes; } ?>
<?php $component = App\View\Components\Form\Input::resolve(['label' => 'Phone Number','type' => 'tel','name' => 'phone_number'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $attributes = $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $component = $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="mt-1 text-sm text-red-500"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    <div>
                        <?php if (isset($component)) { $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96 = $attributes; } ?>
<?php $component = App\View\Components\Form\Input::resolve(['label' => 'Date of Birth','type' => 'date','name' => 'date_of_birth'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['min' => '13']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $attributes = $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $component = $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['date_of_birth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="mt-1 text-sm text-red-500"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    <div>
                        <?php if (isset($component)) { $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96 = $attributes; } ?>
<?php $component = App\View\Components\Form\Input::resolve(['label' => 'JMBG','type' => 'text','name' => 'jmbg'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'min' => '13']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $attributes = $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $component = $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['jmbg'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="mt-1 text-sm text-red-500"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    <div>
                        <?php if (isset($component)) { $__componentOriginal2601ab0d5d31d3fae6ed0d222682b9fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2601ab0d5d31d3fae6ed0d222682b9fe = $attributes; } ?>
<?php $component = App\View\Components\Form\Dropdown::resolve(['title' => 'Gender','name' => 'gender','options' => ['Male', 'Female']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Dropdown::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2601ab0d5d31d3fae6ed0d222682b9fe)): ?>
<?php $attributes = $__attributesOriginal2601ab0d5d31d3fae6ed0d222682b9fe; ?>
<?php unset($__attributesOriginal2601ab0d5d31d3fae6ed0d222682b9fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2601ab0d5d31d3fae6ed0d222682b9fe)): ?>
<?php $component = $__componentOriginal2601ab0d5d31d3fae6ed0d222682b9fe; ?>
<?php unset($__componentOriginal2601ab0d5d31d3fae6ed0d222682b9fe); ?>
<?php endif; ?>
                    </div>

                    <div class="sm:col-span-2">
                        <?php if (isset($component)) { $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96 = $attributes; } ?>
<?php $component = App\View\Components\Form\Input::resolve(['label' => 'Address','type' => 'text','name' => 'address'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $attributes = $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $component = $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="mt-1 text-sm text-red-500"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-[#18181b] ring-1 ring-gray-900/5 dark:ring-white/10 rounded-xl shadow-sm overflow-hidden">
                <div class="px-6 py-5 border-b border-gray-900/5 dark:border-white/10">
                    <h2 class="text-base font-semibold leading-6 text-gray-900 dark:text-white">Employment Details</h2>
                    <p class="mt-1 text-sm text-gray-500 dark:text-zinc-400">Assign the role, status, and compensation.</p>
                </div>

                <div class="px-6 py-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-3">
                    <div>
                        <?php if (isset($component)) { $__componentOriginal2601ab0d5d31d3fae6ed0d222682b9fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2601ab0d5d31d3fae6ed0d222682b9fe = $attributes; } ?>
<?php $component = App\View\Components\Form\Dropdown::resolve(['title' => 'Status','name' => 'status','options' => $employeeStatus] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Dropdown::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2601ab0d5d31d3fae6ed0d222682b9fe)): ?>
<?php $attributes = $__attributesOriginal2601ab0d5d31d3fae6ed0d222682b9fe; ?>
<?php unset($__attributesOriginal2601ab0d5d31d3fae6ed0d222682b9fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2601ab0d5d31d3fae6ed0d222682b9fe)): ?>
<?php $component = $__componentOriginal2601ab0d5d31d3fae6ed0d222682b9fe; ?>
<?php unset($__componentOriginal2601ab0d5d31d3fae6ed0d222682b9fe); ?>
<?php endif; ?>
                    </div>

                    <div>
                        <?php if (isset($component)) { $__componentOriginal2601ab0d5d31d3fae6ed0d222682b9fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2601ab0d5d31d3fae6ed0d222682b9fe = $attributes; } ?>
<?php $component = App\View\Components\Form\Dropdown::resolve(['title' => 'Position','name' => 'position','options' => $positions] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Dropdown::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2601ab0d5d31d3fae6ed0d222682b9fe)): ?>
<?php $attributes = $__attributesOriginal2601ab0d5d31d3fae6ed0d222682b9fe; ?>
<?php unset($__attributesOriginal2601ab0d5d31d3fae6ed0d222682b9fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2601ab0d5d31d3fae6ed0d222682b9fe)): ?>
<?php $component = $__componentOriginal2601ab0d5d31d3fae6ed0d222682b9fe; ?>
<?php unset($__componentOriginal2601ab0d5d31d3fae6ed0d222682b9fe); ?>
<?php endif; ?>
                    </div>

                    <div>
                        <?php if (isset($component)) { $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96 = $attributes; } ?>
<?php $component = App\View\Components\Form\Input::resolve(['label' => 'Salary','type' => 'number','name' => 'salary'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $attributes = $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $component = $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-[#18181b] ring-1 ring-gray-900/5 dark:ring-white/10 rounded-xl shadow-sm overflow-hidden"
                 x-data='{
    contracts: [],

    init() {
        let oldContracts = <?php echo json_encode(old("contracts", []), 512) ?>;

        if (oldContracts.length) {
            this.contracts = oldContracts.map((c, i) => ({
                id: Date.now() + i,
                started_at: c.started_at ?? "",
                ended_at: c.ended_at ?? "",
                contract_type_id: c.contract_type_id ?? ""
            }));
        } else {
            this.contracts = [{
                id: Date.now(),
                started_at: "",
                ended_at: "",
                contract_type_id: ""
            }];
        }
    },

    addContract() {
        if (this.contracts.length < 3) {
            this.contracts.push({
                id: Date.now() + Math.random(),
                started_at: "",
                ended_at: "",
                contract_type_id: ""
            });
        }
    },

    removeContract(index) {
        this.contracts.splice(index, 1);
    }
}'>

                <div class="px-6 py-5 border-b border-gray-900/5 dark:border-white/10 flex justify-between items-center">
                    <div>
                        <h2 class="text-base font-semibold leading-6 text-gray-900 dark:text-white">Contracts</h2>
                        <p class="mt-1 text-sm text-gray-500 dark:text-zinc-400">Upload up to 3 PDF contract documents.</p>
                    </div>
                    <button type="button" x-show="contracts.length < 3" @click="addContract" class="text-sm font-medium text-blue-600 dark:text-[#e17100] hover:underline">
                        + Add another contract
                    </button>
                </div>

                <div class="px-6 py-6 space-y-6">
                    <template x-for="(contract, index) in contracts" :key="contract.id">
                        <div class="relative rounded-lg border border-gray-200 dark:border-zinc-700/50 bg-gray-50 dark:bg-[#202024] p-5">

                            <div class="flex items-center justify-between mb-4 pb-3 border-b border-gray-200 dark:border-zinc-700/50">
                                <span class="text-sm font-medium text-gray-700 dark:text-zinc-300" x-text="'Contract #' + (index + 1)"></span>

                                <template x-if="contracts.length > 1">
                                    <button type="button" @click="removeContract(index)" class="text-sm text-red-500 hover:text-red-600 flex items-center gap-1 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 6h18M8 6V4h8v2M19 6l-1 14H6L5 6"/>
                                        </svg>
                                        Remove
                                    </button>
                                </template>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div class="sm:col-span-2">
                                    <?php if (isset($component)) { $__componentOriginal2601ab0d5d31d3fae6ed0d222682b9fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2601ab0d5d31d3fae6ed0d222682b9fe = $attributes; } ?>
<?php $component = App\View\Components\Form\Dropdown::resolve(['title' => 'Contract type','name' => 'contractType','options' => $contractType] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Dropdown::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-bind:name' => '\'contracts[\' + index + \'][contract_type_id]\'','x-model' => 'contract.contract_type_id']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2601ab0d5d31d3fae6ed0d222682b9fe)): ?>
<?php $attributes = $__attributesOriginal2601ab0d5d31d3fae6ed0d222682b9fe; ?>
<?php unset($__attributesOriginal2601ab0d5d31d3fae6ed0d222682b9fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2601ab0d5d31d3fae6ed0d222682b9fe)): ?>
<?php $component = $__componentOriginal2601ab0d5d31d3fae6ed0d222682b9fe; ?>
<?php unset($__componentOriginal2601ab0d5d31d3fae6ed0d222682b9fe); ?>
<?php endif; ?>
                                </div>

                                
                                <div>
                                    <?php if (isset($component)) { $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96 = $attributes; } ?>
<?php $component = App\View\Components\Form\Input::resolve(['label' => 'Starting at:','type' => 'date'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-bind:name' => '\'contracts[\' + index + \'][started_at]\'','x-model' => 'contract.started_at','x-bind:min' => 'new Date().toISOString().split(\'T\')[0]']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $attributes = $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $component = $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
                                </div>

                                
                                <div>
                                    <?php if (isset($component)) { $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96 = $attributes; } ?>
<?php $component = App\View\Components\Form\Input::resolve(['label' => 'Ending at:','type' => 'date'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-bind:name' => '\'contracts[\' + index + \'][ended_at]\'','x-model' => 'contract.ended_at','x-bind:min' => 'contract.started_at']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $attributes = $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $component = $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
                                </div>

                                <div class="sm:col-span-2 pt-2">
                                    <label class="block text-sm font-medium leading-6 text-gray-900 dark:text-white mb-2">Upload Document</label>
                                    <input
                                        type="file"
                                        :name="`contracts[${index}][document]`"
                                        required
                                        accept=".pdf"
                                        class="block w-full text-sm text-gray-900 dark:text-zinc-300 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 dark:file:bg-[#e17100]/10 dark:file:text-[#e17100] dark:hover:file:bg-[#e17100]/20 transition-colors"
                                        @change="
                                            contract.fileError = '';
                                            const file = $event.target.files[0];
                                            if (file) {
                                                if (file.type !== 'application/pdf') {
                                                    contract.fileError = 'Only PDF files are allowed';
                                                    $event.target.value = '';
                                                } else if (file.size > 2 * 1024 * 1024) {
                                                    contract.fileError = 'File must not exceed 2MB';
                                                    $event.target.value = '';
                                                }
                                            }
                                        "
                                    >
                                    <p x-show="contract.fileError" x-text="contract.fileError" class="text-sm text-red-500 mt-2"></p>
                                </div>
                            </div>
                        </div>
                    </template>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(collect($errors->keys())->filter(fn($k) => str_contains($k, 'contracts.'))->isNotEmpty()): ?>
                        <div class="mt-4 p-4 rounded-md bg-red-50 dark:bg-red-900/20">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = collect($errors->keys())->filter(fn($k) => str_contains($k, 'contracts.')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                                <p class="text-sm text-red-600 dark:text-red-400"><?php echo e($errors->first($key)); ?></p>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>

            <div class="flex items-center justify-end gap-x-4 pt-4">
                <a href="<?php echo e(route('employee.index')); ?>" class="text-sm font-semibold leading-6 text-gray-900 dark:text-zinc-300 hover:text-gray-700 dark:hover:text-white transition-colors">
                    Cancel
                </a>
                <button type="submit" class="rounded-sm bg-blue-600 dark:bg-[#e17100] px-6 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 dark:hover:bg-[#e17100] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 transition-colors cursor-pointer">
                    Create Employee
                </button>
            </div>

        </form>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\fsmol\Herd\amplitudoprojekathrapp\resources\views/employee/create.blade.php ENDPATH**/ ?>