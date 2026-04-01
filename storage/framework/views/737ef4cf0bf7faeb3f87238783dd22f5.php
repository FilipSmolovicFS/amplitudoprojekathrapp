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

    <div class="max-w-7xl mx-auto space-y-8 py-8">

        
        
        
        <section class="bg-white dark:bg-[#18181b] border border-default rounded-sm shadow-xs p-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                <div>
                    <h1 class="text-2xl font-bold text-heading">
                        <?php echo e($employee->first_name); ?> <?php echo e($employee->last_name); ?>

                    </h1>

                    <p class="text-sm text-body mt-1">
                        <?php echo e($employee->email); ?>

                    </p>
                </div>

                <span class="inline-flex items-center px-4 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-blue-600 dark:bg-[#e17100] text-white dark:text-black">
                    <?php echo e($employee->status->name); ?>

                </span>
            </div>
        </section>

        
        
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            
            <section class="bg-white dark:bg-[#18181b] border border-default rounded-sm shadow-xs p-6">
                <h2 class="text-lg font-semibold text-heading mb-6">
                    Personal Information
                </h2>

                <div class="space-y-5 text-sm">
                    <div class="flex justify-between">
                        <span class="text-body">Date of Birth</span>
                        <span class="font-semibold text-heading">
                            <?php echo e($employee->date_of_birth); ?>

                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-body">Gender</span>
                        <span class="font-semibold text-heading">
                            <?php echo e($employee->gender); ?>

                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-body">Phone Number</span>
                        <span class="font-semibold text-heading">
                            <?php echo e($employee->phone_number); ?>

                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-body">Address</span>
                        <span class="font-semibold text-heading">
                            <?php echo e($employee->address); ?>

                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-body">JMBG</span>
                        <span class="font-semibold text-heading">
                            <?php echo e($employee->JMBG); ?>

                        </span>
                    </div>
                </div>
            </section>

            
            <section class="bg-white dark:bg-[#18181b] border border-default rounded-sm shadow-xs p-6">
                <h2 class="text-lg font-semibold text-heading mb-6">
                    Employment Details
                </h2>

                <div class="space-y-5 text-sm">
                    <div class="flex justify-between">
                        <span class="text-body">Current Position</span>
                        <span class="font-semibold text-heading">
                            <?php echo e($employee->position->name); ?>

                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-body">Current Salary</span>
                        <span class="font-semibold text-heading">
                            <?php echo e($employee->salary->current_amount); ?>

                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-body">Status</span>
                        <span class="font-semibold text-heading">
                            <?php echo e($employee->status->name); ?>

                        </span>
                    </div>
                </div>
            </section>
        </div>

        
        
        
        <section class="bg-white dark:bg-[#18181b] border border-default rounded-sm shadow-xs overflow-hidden">
            <div class="px-6 py-5 border-b border-default">
                <h2 class="text-lg font-semibold text-heading">
                    Salary History
                </h2>
            </div>

            <table class="w-full text-sm text-heading">
                <thead>
                <tr class="border-b border-default">
                    <th class="px-6 py-4">Amount</th>
                    <th class="px-6 py-4">Change date</th>
                </tr>
                </thead>

                <tbody class="divide-y divide-default">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $salaryHistory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                    <tr class="hover:bg-gray-100 dark:hover:bg-[#242427] text-center">
                        <td class="px-6 py-4 font-semibold">
                            <?php echo e($salary->amount); ?>

                        </td>
                        <td class="px-6 py-4">
                            <?php echo e($salary->created_at->format('m/d/Y')); ?>

                        </td>
                    </tr>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginala692982018c601dcf1a80a692b475639 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala692982018c601dcf1a80a692b475639 = $attributes; } ?>
<?php $component = App\View\Components\EmptyStateTableBody::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('empty-state-table-body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\EmptyStateTableBody::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'No salary history','colspan' => '2']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala692982018c601dcf1a80a692b475639)): ?>
<?php $attributes = $__attributesOriginala692982018c601dcf1a80a692b475639; ?>
<?php unset($__attributesOriginala692982018c601dcf1a80a692b475639); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala692982018c601dcf1a80a692b475639)): ?>
<?php $component = $__componentOriginala692982018c601dcf1a80a692b475639; ?>
<?php unset($__componentOriginala692982018c601dcf1a80a692b475639); ?>
<?php endif; ?>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </tbody>
            </table>

            <div class="px-6 py-4">
                <?php echo e($salaryHistory->links()); ?>

            </div>
        </section>

        
        
        
        <section class="bg-white dark:bg-[#18181b] border border-default rounded-sm shadow-xs overflow-hidden">
            <div class="px-6 py-5 border-b border-default">
                <h2 class="text-lg font-semibold text-heading">
                    Contracts
                </h2>
            </div>

            <table class="w-full text-sm text-heading">
                <thead class="text-xs uppercase font-bold text-heading bg-gray-50/50 dark:bg-white/5 border-b border-default">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left">Contract Type</th>
                    <th scope="col" class="px-6 py-3 text-left">Contract File</th>
                    <th scope="col" class="px-6 py-3 text-left">Started At</th>
                    <th scope="col" class="px-6 py-3 text-left">Ended At</th>
                    
                    <th scope="col" class="px-6 py-3 text-left">Action</th>
                </tr>
                </thead>

                <tbody>
                <?php if (isset($component)) { $__componentOriginalb1cba78f36bb787c775e1be4f72d07ea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb1cba78f36bb787c775e1be4f72d07ea = $attributes; } ?>
<?php $component = App\View\Components\ContractTableRow::resolve(['employee' => $employee,'statusesAndPositionsAndContractTypes' => $statusesAndPositionsAndContractTypes] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('contract-table-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ContractTableRow::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Delete']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb1cba78f36bb787c775e1be4f72d07ea)): ?>
<?php $attributes = $__attributesOriginalb1cba78f36bb787c775e1be4f72d07ea; ?>
<?php unset($__attributesOriginalb1cba78f36bb787c775e1be4f72d07ea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb1cba78f36bb787c775e1be4f72d07ea)): ?>
<?php $component = $__componentOriginalb1cba78f36bb787c775e1be4f72d07ea; ?>
<?php unset($__componentOriginalb1cba78f36bb787c775e1be4f72d07ea); ?>
<?php endif; ?>
                </tbody>
            </table>
        </section>

        
        
        
        <div class="flex justify-end gap-4">
            <a
                href="<?php echo e(route('employee.edit', $employee->id)); ?>"
                class="text-heading rounded-sm px-4 py-2 bg-gray-200 dark:bg-gray-200/10"
            >
                Edit
            </a>

            <?php if (isset($component)) { $__componentOriginale6a555649da86b3de44465cdfe004aa4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6a555649da86b3de44465cdfe004aa4 = $attributes; } ?>
<?php $component = App\View\Components\Modal::resolve(['title' => 'Delete Employee','name' => ''.e($employee->first_name).' '.e($employee->last_name).'','id' => ''.e($employee->id).'','route' => ''.e(route('employee.destroy', $employee->id)).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Modal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-blue-600 dark:bg-red-600 text-white font-medium cursor-pointer px-4 py-2 rounded-sm']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale6a555649da86b3de44465cdfe004aa4)): ?>
<?php $attributes = $__attributesOriginale6a555649da86b3de44465cdfe004aa4; ?>
<?php unset($__attributesOriginale6a555649da86b3de44465cdfe004aa4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6a555649da86b3de44465cdfe004aa4)): ?>
<?php $component = $__componentOriginale6a555649da86b3de44465cdfe004aa4; ?>
<?php unset($__componentOriginale6a555649da86b3de44465cdfe004aa4); ?>
<?php endif; ?>
        </div>

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
<?php /**PATH C:\Users\fsmol\Herd\amplitudoprojekathrapp\resources\views/employee/show.blade.php ENDPATH**/ ?>