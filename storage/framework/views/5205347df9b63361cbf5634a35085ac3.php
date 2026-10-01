<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b = $attributes; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\GuestLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="auth-heading">
        <h1>Create Account</h1>
        <p>Join SOUND and discover music & videos</p>
    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->any()): ?>
        <div class="auth-errors">
            <strong>Please fix the following:</strong>
            <ul style="margin:7px 0 0 18px;padding:0;">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><li><?php echo e($error); ?></li><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </ul>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <form method="POST" action="<?php echo e(route('register')); ?>">
        <?php echo csrf_field(); ?>
        <div class="auth-field">
            <label class="auth-label" for="name">Name <span class="auth-required">*</span></label>
            <input id="name" class="auth-input" type="text" name="name" value="<?php echo e(old('name')); ?>" required autofocus autocomplete="name" placeholder="Your full name">
        </div>

        <div class="auth-field">
            <label class="auth-label" for="username">User ID <span class="auth-required">*</span></label>
            <input id="username" class="auth-input" type="text" name="username" value="<?php echo e(old('username')); ?>" required autocomplete="username" placeholder="Choose a unique user ID">
        </div>

        <div class="auth-field">
            <label class="auth-label" for="address">Address <span class="auth-required">*</span></label>
            <input id="address" class="auth-input" type="text" name="address" value="<?php echo e(old('address')); ?>" required autocomplete="street-address" placeholder="Your address">
        </div>

        <div class="auth-field">
            <label class="auth-label" for="phone">Phone Number <span class="auth-required">*</span></label>
            <input id="phone" class="auth-input" type="text" name="phone" value="<?php echo e(old('phone')); ?>" required autocomplete="tel" placeholder="03XX XXXXXXX">
        </div>

        <div class="auth-field">
            <label class="auth-label" for="email">Email <span class="auth-required">*</span></label>
            <input id="email" class="auth-input" type="email" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="you@example.com">
        </div>

        <div class="auth-field">
            <label class="auth-label" for="password">Password <span class="auth-required">*</span></label>
            <input id="password" class="auth-input" type="password" name="password" required autocomplete="new-password" placeholder="Create a password">
        </div>

        <div class="auth-field">
            <label class="auth-label" for="password_confirmation">Confirm Password <span class="auth-required">*</span></label>
            <input id="password_confirmation" class="auth-input" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat your password">
        </div>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature()): ?>
            <label class="auth-check" style="align-items:flex-start;">
                <input type="checkbox" name="terms" id="terms" required style="margin-top:3px;">
                <span>I agree to the <a class="auth-link" target="_blank" href="<?php echo e(route('terms.show')); ?>">Terms of Service</a> and <a class="auth-link" target="_blank" href="<?php echo e(route('policy.show')); ?>">Privacy Policy</a>.</span>
            </label>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <div class="auth-row">
            <a class="auth-link" href="<?php echo e(route('login')); ?>">Already registered?</a>
            <button class="auth-button" type="submit"><i class="fa fa-user-plus"></i>&nbsp; Register</button>
        </div>
    </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php /**PATH C:\Users\LAPVY\Downloads\E-Project-Sound-COMPLETE\resources\views/auth/register.blade.php ENDPATH**/ ?>