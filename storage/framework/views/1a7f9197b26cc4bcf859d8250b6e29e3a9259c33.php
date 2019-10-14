<?php $__env->startSection('content'); ?> 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               
                <div class="card-header">Alunos</div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Curso</th>
                                <th>E-mail</th>
                                <th>Endereço</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                    
                            <?php $__currentLoopData = $alunos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($p->id); ?></td>    
                                <td><?php echo e($p->nome); ?></td>    
                                <td><?php echo e($p->curso); ?></td>
                                <td><?php echo e($p->email); ?></td>
                                <td><?php echo e($p->endereco); ?></td>
                                <td>
                                    <a href="<?php echo e(route('alunos.edit', $p->id)); ?>" class="btn btn-sm btn-info"><i class="material-icons">edit</i>Editar</a>
                                    
                                    <form method="POST" action="<?php echo e(route('alunos.destroy', $p->id)); ?>"><br>
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="material-icons">delete</i>Excluir</button>
                                    </form>
                                </td>
                            </tr>    
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        
                    </table>
                    <div class="form-group row mb-2 mt-2 ml-2" style="text-align: right;">
                <div class="col-md-6">
                        <a href="<?php echo e(route('alunos.create')); ?>" class=" btn btn-primary"  style="text-align:center;  background-color:green">
                        <i class="material-icons" style="">person_add</i>   Novo
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projeto\resources\views/alunos/index.blade.php ENDPATH**/ ?>