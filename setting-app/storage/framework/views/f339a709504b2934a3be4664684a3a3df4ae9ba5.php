<?php $__env->startSection('title'); ?>
    Settings
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('table').DataTable({
                "pageLength" : 200
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
                <div class="card-header"><?php echo e(__('Settings')); ?></div>
                <div class="card-body">
                    <?php if(Session::has('error')): ?>
                        <div class="alert alert-success">
                            <?php echo Session::get('error'); ?>

                        </div>
                    <?php endif; ?>

                    <?php if(Session::has('success')): ?>
                        <div class="alert alert-success">
                            <?php echo Session::get('success'); ?>

                        </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <th>No</th>
                                <th>Logo Kodein</th>
                                <th>Logo Yayasan</th>
                                <th>Whatsapp</th>
                                <th>Email</th>
                                <th>Address 1</th>
                                <th>Address 2</th>
                                <th>Facebook Link</th>
                                <th>Twitter Link</th>
                                <th>Instagram Link</th>
                                <th>Youtube Link</th>
                                <th>Action</th>
                            </thead>
                            <?php $__currentLoopData = $setting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tbody>
                                    <th><?php echo e(++$key); ?></th>
                                    <td class="w-30"><img style="max-width= 50px" src="<?php echo e(asset('logo/'.$value->logo_kodein)); ?>" alt="" class="img-thumbnail"></td>
                                    <td class="w-30"><img style="max-width= 50px" src="<?php echo e(asset('logo/'.$value->logo_yayasan)); ?>" alt="" class="img-thumbnail"></td>
                                    <td><?php echo $value->whatsapp; ?></td>
                                    <td><?php echo $value->email; ?></td>
                                    <td><?php echo $value->address_1; ?></td>
                                    <td><?php echo $value->address_2; ?></td>
                                    <td><?php echo $value->facebook_link; ?></td>
                                    <td><?php echo $value->twitter_link; ?></td>
                                    <td><?php echo $value->instagram_link; ?></td>
                                    <td><?php echo $value->youtube_link; ?></td>
                                    <td>
                                        <a href="<?php echo e(route('backend.show.setting', $value->id)); ?>" class="btn btn-sm btn-primary"><i class="fas fa-search pe-1"></i> Show</a>
                                        <a href="<?php echo e(route('backend.edit.setting', $value->id)); ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt pe-1"></i> Edit</a>
                                        <form action="<?php echo e(route('backend.delete.setting', $value->id)); ?>" method="post" class="d-inline">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash-alt pe-1"> Destroy</i>
                                            </button>
                                        </form>
                                    </td>
                                </tbody>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\setting_app\resources\views/backend/setting/index.blade.php ENDPATH**/ ?>