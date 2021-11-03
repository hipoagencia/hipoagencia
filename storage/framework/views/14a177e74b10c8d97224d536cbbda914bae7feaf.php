<article class="blog-post">
    <div class="blog-post-title" style="background-color: <?php echo e($post->princ->color); ?>;">
        <h5 class="font-light"><img
                src="<?php echo e(url($post->princ->iconWhite)); ?>" width="37" class="ico-img"> <?php echo e($post->princ->name); ?>

        </h5>
    </div>

    <img src="<?php echo e(url($post->cover)); ?>" style="height:280px;" alt="<?php echo e($post->title); ?>"/>
    <h3 class="mt-3" style="color: <?php echo e($post->princ->color); ?>;"><?php echo e($post->title); ?></h3>

    <p><?php echo $post->preview(); ?></p>

    <div class="row read-more">
        <a href="<?php echo e(route('web.article', ['slug' =>  $post->slug ])); ?>"
           class="text-right">Continue lendo</a>
    </div>

</article>

<?php /**PATH C:\xampp\htdocs\boston\resources\views/web/components/post.blade.php ENDPATH**/ ?>