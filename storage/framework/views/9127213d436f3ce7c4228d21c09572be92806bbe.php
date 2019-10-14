<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Clientes</div>
    
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('clientes.update', $cliente->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="form-group row">
                                <label for="nome" class="col-md-2 col-form-label text-md-right"><?php echo e(__('Nome')); ?></label>
                                <div class="col-md-6">
                                    <input id="nome" type="text" class="form-control" name="nome" value="<?php echo e($cliente->nome); ?>" required>
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="telefone" class="col-md-2 col-form-label text-md-right"><?php echo e(__('Telefone')); ?></label>
                                <div class="col-md-6">
                                    <input id="telefone" type="text" class="form-control" name="telefone" value="<?php echo e($cliente->telefone); ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="endereco" class="col-md-2 col-form-label text-md-right"><?php echo e(__('Endereço')); ?></label>
                                <div class="col-md-6">
                                    <input id="endereco" type="text" class="form-control" name="endereco" value="<?php echo e($cliente->endereco); ?>" required>
                                </div>
                                </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-2 col-form-label text-md-right"><?php echo e(__('E-mail')); ?></label>
                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email" value="<?php echo e($cliente->email); ?>" required>
                                </div>
                            </div>
                            
                            
        
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-2">
                                    <button type="submit" class="btn btn-primary">
                                        Salvar
                                        
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projeto\resources\views/clientes/edit.blade.php ENDPATH**/ ?>