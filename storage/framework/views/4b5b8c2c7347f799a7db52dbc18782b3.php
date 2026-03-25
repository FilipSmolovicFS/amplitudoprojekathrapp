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


 <div>

     <div class="mx-auto max-w-6xl py-12">
         <a href="<?php echo e(route('employee.create')); ?>"
            class="inline-flex items-center justify-center w-40 py-3 bg-indigo-600 dark:bg-[#e17100] text-white dark:text-black text-sm font-medium rounded-sm shadow-md transition hover:bg-indigo-600 hover:scale-105 active:scale-95">
             Add new employee
         </a>
     </div>

     <div class="mx-auto max-w-6xl overflow-visible bg-white dark:bg-[#18181b] shadow-xs rounded-md border border-default">
         <div class="p-4 flex items-center justify-between space-x-4">
             <form action="<?php echo e(route('employee.index')); ?>" method="GET">
                 <label for="search" class="sr-only">Search</label>
                 <div class="relative">
                     <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                         <svg class="w-4 h-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/></svg>
                     </div>
                     <input type="text" id="search" name="search" class="block w-full max-w-96 ps-9 pe-3 py-2 bg-white dark:bg-[#18181b] border border-[#3F3F46] text-heading text-sm rounded-base focus:ring-brand focus:border-brand shadow-xs placeholder:text-body" placeholder="Search">
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
             <thead class="text-sm text-heading bg-white dark:bg-[#242427] border-b border-t border-[#3F3F46]">
             <tr>
                 <th scope="col" class="px-6 py-3 font-medium">
                     First name
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
             <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>

                 <tr id="employee-<?php echo e($employee->id); ?>" class="     border-b border-default hover:bg-neutral-secondary-medium">

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
                     <td class="px-6 py-4">
                         <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $employee->contract; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contract): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                             <span class="inline-flex items-center px-3 py-1 bg-indigo-50 text-indigo-700 text-xs font-semibold rounded-lg border border-indigo-100">
                            <?php echo e($contract->contractType->name); ?>

                        </span>
                         <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                     </td>
                     <td class="px-6 py-4" x-data>
                         <a href="<?php echo e(route('employee.edit', $employee->id)); ?>" class="dark:text-[#e17100] text-body hover:underline">Edit</a>
                     </td>
                 </tr>
             <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
             </tbody>
         </table>
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