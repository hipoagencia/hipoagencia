

<?php $__env->startSection('content'); ?>


    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Usuários</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Início</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.users.index')); ?>">Usuários Cadastrados</a>
                        </li>
                        <li class="breadcrumb-item active">Novo</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">

                <?php if($errors->all()): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__env->startComponent('admin.components.message',['type' => 'danger']); ?>
                            <?php echo e($error); ?>

                        <?php if (isset($__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5)): ?>
<?php $component = $__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5; ?>
<?php unset($__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <?php if(session()->exists('message')): ?>
                    <?php $__env->startComponent('admin.components.message',['type' => session()->get('type')]); ?>
                        <?php echo e(session()->get('message')); ?>

                    <?php if (isset($__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5)): ?>
<?php $component = $__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5; ?>
<?php unset($__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
                <?php endif; ?>


                <div class="card-body">
                    <form action="<?php echo e(route('admin.users.update', ['user' => $user->id])); ?>" method="POST"
                          autocomplete="false"
                          enctype="multipart/form-data">


                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <input type="hidden" name="id" value="<?php echo e($user->id); ?>">

                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab"
                                   aria-selected="true">
                                    <span class="d-block d-sm-none"><i class="fas fa-user"></i></span>
                                    <span class="d-none d-sm-block">Informações</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab"
                                   aria-selected="false">
                                    <span class="d-block d-sm-none"><i class="far fa-image"></i></span>
                                    <span class="d-none d-sm-block">Foto</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#messages1" role="tab">
                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                    <span class="d-none d-sm-block">Endereço</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="home1" role="tabpanel">
                                <h3 class="mb-3">Informações</h3>
                                <div class="row">

                                    <div class="col-md-5">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nome</label>
                                            <input name="name" class="form-control"
                                                   value="<?php echo e(old('name') ?? $user->name); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="mb-3">
                                            <label for="last_name" class="form-label">Sobrenome</label>
                                            <input name="last_name" class="form-control"
                                                   value="<?php echo e(old('last_name') ?? $user->last_name); ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-3">
                                            <label for="genre" class="form-label">Sexo</label>
                                            <select name="genre" class="form-select">
                                                <option selected>Escolha...</option>
                                                <option
                                                    value="masculino" <?php echo e((old('genre') == 'masculino' ? 'selected' : ($user->genre == 'masculino' ? 'selected' : ''))); ?>>
                                                    Masculino
                                                </option>
                                                <option
                                                    value="feminino" <?php echo e((old('genre') == 'feminino' ? 'selected' : ($user->genre == 'feminino' ? 'selected' : ''))); ?>>
                                                    Feminino
                                                </option>
                                                <option
                                                    value="nbinario" <?php echo e((old('genre') == 'nbinario' ? 'selected' : ($user->genre == 'nbinario' ? 'selected' : ''))); ?>>
                                                    Não Binário
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">


                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="document" class="form-label">CPF</label>
                                            <input name="document" type="text" class="form-control input-mask"
                                                   data-inputmask="'mask': '999.999.999-99'" im-insert="true"
                                                   value="<?php echo e(old('document') ?? $user->document); ?>">
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="date_of_birth" class="form-label">Data de Nascimento</label>
                                            <input name="date_of_birth" class="form-control" type="date"
                                                   value="<?php echo e(date('Y-m-d', strtotime(old('date_of_birth') )) ??  date('Y-m-d', strtotime($user->date_of_birth))); ?>"
                                                   id="example-date-input">

                                        </div>
                                    </div>


                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="telephone" class="form-label">Telefone</label>
                                            <input name="telephone" id="input-mask" class="form-control input-mask"
                                                   data-inputmask="'mask': '(99) 999999999'" im-insert="true"
                                                   value="<?php echo e(old('telephone') ?? $user->telephone); ?>">
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="cell" class="form-label">Celular</label>
                                            <input name="cell" id="input-mask" class="form-control input-mask"
                                                   data-inputmask="'mask': '(99) 999999999'" im-insert="true"
                                                   value="<?php echo e(old('cell') ?? $user->cell); ?>">
                                        </div>
                                    </div>

                                </div>

                                <h3 class="mb-3">Acessos</h3>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input name="email" class="form-control" id="form-row-email-input"
                                                   value="<?php echo e(old('email') ?? $user->email); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Senha</label>
                                            <input name="password" type="text" class="form-control">
                                        </div>
                                    </div>

                                </div>


                                <?php if(auth()->check() && auth()->user()->hasRole('superAdmin')): ?>
                                <h3 class="mb-3">Perfil</h3>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="genre" class="form-label">Administrador?</label>
                                            <select name="is_admin" class="form-select">
                                                <option selected>Escolha...</option>
                                                <option
                                                    value="0" <?php echo e((old('is_admin') == '0' ? 'selected' : ($user->is_admin == '0' ? 'selected' : ''))); ?>>
                                                    Não
                                                </option>
                                                <option
                                                    value="1" <?php echo e((old('is_admin') == '1' ? 'selected' : ($user->is_admin == '1' ? 'selected' : ''))); ?>>
                                                    Sim
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="role" class="form-label">Tipo de Acesso</label>
                                        <select name="role" class="form-select">
                                            <option selected>Escolha...</option>
                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option
                                                    value="<?php echo e($role->name); ?>" <?php echo e((old('role') == $role->name ? 'selected' : ($user->roles->pluck('name')[0] == $role->name ? 'selected' : ''))); ?>>
                                                    <?php echo e($role->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </select>
                                    </div>

                                </div>
                                <?php endif; ?>
                            </div>

                            <div class="tab-pane" id="profile1" role="tabpanel">
                                <h3 class="mb-3">Foto</h3>
                                <div class="row">

                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="cover" class="form-label">Imagem Principal</label>
                                            <input name="cover" class="form-control" type="file" id="formFile">
                                        </div>
                                    </div>

                                    <div class="content_image row">
                                        <div class="col-4">
                                            <img src="<?php echo e(url($user->cover)); ?>" class="img-fluid">
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="tab-pane" id="messages1" role="tabpanel">
                                <h3 class="mb-3">Endereço</h3>
                                <div class="row">

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="mb-3">
                                                <label for="zipcode" class="form-label">CEP</label>
                                                <input name="zipcode" class="form-control zip_code_search"
                                                       value="<?php echo e(old('zipcode') ?? $user->zipcode); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="mb-3">
                                                <label for="street" class="form-label">Rua</label>
                                                <input name="street" class="form-control street"
                                                       value="<?php echo e(old('street') ?? $user->street); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="mb-3">
                                                <label for="number" class="form-label">Número</label>
                                                <input name="number" class="form-control number"
                                                       value="<?php echo e(old('number') ?? $user->number); ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label for="complement" class="form-label">Complemento</label>
                                                <input name="complement" class="form-control complement"
                                                       value="<?php echo e(old('complement') ?? $user->complement); ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="neighborhood" class="form-label">Bairro</label>
                                                <input name="neighborhood" class="form-control neighborhood"
                                                       value="<?php echo e(old('neighborhood') ?? $user->neighborhood); ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="state" class="form-label">Estado</label>
                                                <input name="state" class="form-control state"
                                                       value="<?php echo e(old('state') ?? $user->state); ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="city" class="form-label">Cidade</label>
                                                <input name="city" class="form-control city"
                                                       value="<?php echo e(old('city') ?? $user->city); ?>">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div>
                            <button type="submit" class="btn btn-primary w-md">Alterar</button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>

    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script>


        $(function () {

            $('input[name="cover"]').change(function (files) {

                $('.content_image').text('');

                $.each(files.target.files, function (key, value) {
                    var reader = new FileReader();
                    reader.onload = function (value) {
                        $('.content_image').append(
                            '<div class="col-md-4">' +
                            '<img class="img-fluid" ' +
                            'src="' + value.target.result + '">' +
                            '</img>' +
                            '</div>');
                    };
                    reader.readAsDataURL(value);
                });
            });


        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\boston\resources\views/admin/users/edit.blade.php ENDPATH**/ ?>