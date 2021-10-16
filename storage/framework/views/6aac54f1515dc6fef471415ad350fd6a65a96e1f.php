<h3>Isso é um teste</h3>

<?php echo $__env->make('cookieConsent::index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php if(session()->exists('message')): ?>
    <span <?php echo e((session()->get('type') == 'success' ? 'style="color:green;"' : 'style="color:red;"')); ?>><?php echo e(session()->get('message')); ?></span>
<?php endif; ?>

<form action="<?php echo e(route('newsletter.store')); ?>" method="post">
    <div class="form-group">
        <label for="exampleInputEmail">Email</label>
        <input type="email" name="user_email" id="exampleInputEmail" class="form-control" required>
    </div>
    <?php echo csrf_field(); ?>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php /**PATH C:\xampp\htdocs\boston\resources\views/web/teste.blade.php ENDPATH**/ ?>