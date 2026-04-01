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


    <?php if (isset($component)) { $__componentOriginal49115d54aa597d93edb47e0b269dd843 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal49115d54aa597d93edb47e0b269dd843 = $attributes; } ?>
<?php $component = App\View\Components\Toast::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('toast'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Toast::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'success','message' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('success'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal49115d54aa597d93edb47e0b269dd843)): ?>
<?php $attributes = $__attributesOriginal49115d54aa597d93edb47e0b269dd843; ?>
<?php unset($__attributesOriginal49115d54aa597d93edb47e0b269dd843); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49115d54aa597d93edb47e0b269dd843)): ?>
<?php $component = $__componentOriginal49115d54aa597d93edb47e0b269dd843; ?>
<?php unset($__componentOriginal49115d54aa597d93edb47e0b269dd843); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal49115d54aa597d93edb47e0b269dd843 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal49115d54aa597d93edb47e0b269dd843 = $attributes; } ?>
<?php $component = App\View\Components\Toast::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('toast'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Toast::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'error','message' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('error'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal49115d54aa597d93edb47e0b269dd843)): ?>
<?php $attributes = $__attributesOriginal49115d54aa597d93edb47e0b269dd843; ?>
<?php unset($__attributesOriginal49115d54aa597d93edb47e0b269dd843); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49115d54aa597d93edb47e0b269dd843)): ?>
<?php $component = $__componentOriginal49115d54aa597d93edb47e0b269dd843; ?>
<?php unset($__componentOriginal49115d54aa597d93edb47e0b269dd843); ?>
<?php endif; ?>

 <div>

     <div class="mx-auto max-w-6xl py-12">
         <a href="<?php echo e(route('employee.create')); ?>"
            class="inline-flex items-center justify-center w-40 py-3 bg-indigo-600 dark:bg-[#e17100]
            text-white dark:text-black text-sm font-medium rounded-sm
            hover:bg-indigo-600">
             Add new employee
         </a>
     </div>

     <div class="mx-auto max-w-6xl overflow-visible bg-white dark:bg-[#18181b] rounded-sm border border-default mb-8">
         <div class="p-4 flex items-center justify-between space-x-4">
             <form action="<?php echo e(route('employee.index')); ?>" method="GET">

                 <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = request()->except('search'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                     <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(is_array($value)): ?>
                         <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arrayValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                             <input type="hidden" name="<?php echo e($key); ?>[]" value="<?php echo e($arrayValue); ?>">
                         <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                     <?php else: ?>
                         <input type="hidden" name="<?php echo e($key); ?>" value="<?php echo e($value); ?>">
                     <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                 <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

                 <label for="search" class="sr-only">Search</label>
                 <div class="relative">
                     <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                         <svg class="w-4 h-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/></svg>
                     </div>
                     <input type="text" id="search" name="search" value="<?php echo e(request('search')); ?>" class="block w-full max-w-96 ps-9 pe-3 py-2 bg-white dark:bg-[#18181b] border border-[#3F3F46] text-heading text-sm rounded-sm focus:ring-brand focus:border-brand shadow-xs placeholder:text-body" placeholder="Search">
                 </div>
             </form>

             <?php if (isset($component)) { $__componentOriginal43c2db0684ac398405cc89b1e9a0b1bd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43c2db0684ac398405cc89b1e9a0b1bd = $attributes; } ?>
<?php $component = App\View\Components\FilterDropdown::resolve(['filterData' => $statusesAndPositionsAndContractTypes] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filter-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\FilterDropdown::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal43c2db0684ac398405cc89b1e9a0b1bd)): ?>
<?php $attributes = $__attributesOriginal43c2db0684ac398405cc89b1e9a0b1bd; ?>
<?php unset($__attributesOriginal43c2db0684ac398405cc89b1e9a0b1bd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal43c2db0684ac398405cc89b1e9a0b1bd)): ?>
<?php $component = $__componentOriginal43c2db0684ac398405cc89b1e9a0b1bd; ?>
<?php unset($__componentOriginal43c2db0684ac398405cc89b1e9a0b1bd); ?>
<?php endif; ?>

         </div>

         <table class="w-full bg-white border-[#3F3F46] dark:bg-[#18181b]  text-sm text-left rtl:text-right text-heading">
             <thead class="text-sm text-heading bg-white dark:bg-[#242427] border border-[#3F3F46]">
             <tr>
                 <th scope="col" class="px-6 py-3 font-medium">
                     First Name
                 </th>
                 <th scope="col" class="px-6 py-3 font-medium">
                     Last name
                 </th>
                 <th scope="col" class="px-6 py-3 font-medium">
                     Email
                 </th>
                 <th scope="col" class="px-6 py-3 font-medium">
                     Status
                 </th>
                 <th scope="col" class="px-6 py-3 font-medium">
                     Position
                 </th>
                 <th scope="col" class="px-6 py-3 font-medium">
                     Contracts
                 </th>
                 <th scope="col" class="px-6 py-3 font-medium">
                     Action
                 </th>
             </tr>
             </thead>
             <tbody>
             <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>

                 <tr id="employee-<?php echo e($employee->id); ?>" class="border-b border-default hover:bg-neutral-secondary-medium">

                     <td class="px-6 py-4">
                         <?php echo e($employee->first_name); ?>

                     </td>
                     <td class="px-6 py-4">
                         <?php echo e($employee->last_name); ?>

                     </td>
                     <td class="px-6 py-4">
                         <?php echo e($employee->email); ?>

                     </td>
                     <td class="px-6 py-4">
                         <?php echo e($employee->status->name); ?>

                     </td>
                     <td class="px-6 py-4">
                         <?php echo e($employee->position->name); ?>

                     </td>
                     <td class="px-6 py-4 max-w-[160px]">
                         <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $employee->contract->unique('contract_type_id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contract): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                             <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($contract->contractType): ?>
                                 <span class="inline-block items-center px-3 py-1 bg-indigo-50 dark:bg-[#18181b] text-heading mb-1 text-xs font-semibold rounded-lg border border-[#3F3F46]">
                                    <?php echo e($contract->contractType->name); ?>

                                </span>
                             <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                         <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                     </td>
                     <td class="px-6 py-4" x-data>
                         <a href="<?php echo e(route('employee.show', $employee->id)); ?>" class="dark:text-[#e17100] text-body hover:underline">View</a>

                         <a href="<?php echo e(route('employee.edit', $employee->id)); ?>" class="dark:text-[#e17100] text-body hover:underline">Edit</a>
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
<?php $component->withAttributes(['title' => 'No employees','text' => 'Create an employee to get started.','colspan' => '7']); ?>
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

         <div class="px-2 py-4">
             <form id="perPageForm" method="GET" action="<?php echo e(url()->current()); ?>">

                 <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = request()->except('per_page', 'page'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                     <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(is_array($value)): ?>
                         <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                             <input type="hidden" name="<?php echo e($key); ?>[]" value="<?php echo e($v); ?>">
                         <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                     <?php else: ?>
                         <input type="hidden" name="<?php echo e($key); ?>" value="<?php echo e($value); ?>">
                     <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                 <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

                 <label for="per_page" class="text-heading mr-4">Items per page:</label>

                 <select
                     name="per_page" id="per_page"
                     onchange="document.getElementById('perPageForm').submit();"
                     class="rounded-sm dark:bg-[#18181b] bg-white text-heading border-[#3F3F46]"
                 >
                     <option value="5" <?php if(request('per_page') == 5): echo 'selected'; endif; ?>>5</option>
                     <option value="10" <?php if(request('per_page') == 10 || !request()->has('per_page')): echo 'selected'; endif; ?>>10</option>
                     <option value="20" <?php if(request('per_page') == 20): echo 'selected'; endif; ?>>20</option>
                 </select>
             </form>



             <?php echo e($employees->appends(request()->query())->links()); ?>

         </div>
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
<?php /**PATH C:\Users\fsmol\Herd\amplitudoprojekathrapp\resources\views/employee/index.blade.php ENDPATH**/ ?>