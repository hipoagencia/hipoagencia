<div>

    <div class="container">
        <div class="row mb-5">

            <?php if(\Gloudemans\Shoppingcart\Facades\Cart::count()): ?>
                Seu carrinho (<?php echo e(\Gloudemans\Shoppingcart\Facades\Cart::count()); ?>)
            <?php else: ?>
                Nenhum item no carrinho
            <?php endif; ?>

        </div>
        <div class="row">


            <?php if(!empty($products)): ?>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-sm-4">
                        <h3><?php echo e($product->name); ?></h3>
                        <h5>R$<?php echo e($product->price); ?></h5>

                        <?php if($product->recurrent == 'Assinatura' && $product->typePayment == 'Mensal'): ?>
                            <form action="<?php echo e(route('user.cartAdd', ['product' => $product->id, 'tipo' => 'mensal'])); ?>"
                                  method="POST">
                                <?php echo csrf_field(); ?>
                                <button class="btn btn-success mt-3">Assinar</button>
                            </form>
                        <?php elseif($product->recurrent == 'Assinatura'  && $product->typePayment == 'Pacote Meses'): ?>
                            <form action="<?php echo e(route('user.cartAdd', ['product' => $product->id, 'tipo' => 'pacote'])); ?>"
                                  method="POST">
                                <?php echo csrf_field(); ?>
                                <button class="btn btn-success mt-3">Comprar Período</button>
                            </form>
                        <?php endif; ?>


                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>


        </div>

    </div>

</div>
<?php /**PATH C:\xampp\htdocs\HipoPainel\resources\views/livewire/user/home.blade.php ENDPATH**/ ?>