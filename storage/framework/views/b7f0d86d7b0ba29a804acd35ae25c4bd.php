<?php if (isset($component)) { $__componentOriginalf0f35864a5300ca88c8cd5b64aa6587e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf0f35864a5300ca88c8cd5b64aa6587e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.noauth-layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('noauth-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <section class="bg-white dark:bg-[#09090b]">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

            <div class="w-full rounded-lg border md:mt-0 sm:max-w-md xl:p-0 bg-white border-[#3F3F46] dark:bg-[#18181b]">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-heading md:text-2xl ">
                        Sign in to your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="<?php echo e(route('auth-login')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-heading">Your email</label>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="block w-full rounded-md bg-white dark:bg-[#18181b] px-3 py-1.5 text-base text-heading outline-1
                                        -outline-offset-1 outline-[#3F3F46]  placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-1
                                        dark:focus:outline-[#e17100] sm:text-sm/6"
                                placeholder="name@company.com"
                                required=""
                            >

                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-heading">Password</label>
                            <input
                                type="password"
                                name="password"
                                id="password"
                                placeholder="••••••••"
                                class="block w-full rounded-md bg-white dark:bg-[#18181b] px-3 py-1.5 text-base text-heading outline-1
                                        -outline-offset-1 outline-[#3F3F46]  placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-1
                                        dark:focus:outline-[#e17100] sm:text-sm/6"
                                required=""
                            >
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-sm text-red-600 mt-2"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <button type="submit" class="w-full text-white bg-blue-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>

                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-sm text-red-600 mt-2"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </form>
                </div>
            </div>
        </div>
    </section>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf0f35864a5300ca88c8cd5b64aa6587e)): ?>
<?php $attributes = $__attributesOriginalf0f35864a5300ca88c8cd5b64aa6587e; ?>
<?php unset($__attributesOriginalf0f35864a5300ca88c8cd5b64aa6587e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf0f35864a5300ca88c8cd5b64aa6587e)): ?>
<?php $component = $__componentOriginalf0f35864a5300ca88c8cd5b64aa6587e; ?>
<?php unset($__componentOriginalf0f35864a5300ca88c8cd5b64aa6587e); ?>
<?php endif; ?>
<?php /**PATH C:\Users\fsmol\Herd\amplitudoprojekathrapp\resources\views/auth/login.blade.php ENDPATH**/ ?>