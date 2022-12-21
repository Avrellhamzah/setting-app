<?php $__env->startSection('title'); ?>
    Settings | Show #ID <?php echo e($setting->id); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script>
        $(function(){
            $('[data-fancybox]').fancybox();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Settings | Show #ID <?php echo e($setting->id); ?></div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td><?php echo e($setting->id); ?></td>
                                </tr>
                                <tr>
                                    <th>Logo Kodein</th>
                                    <td>
                                        <a href="<?php echo e(asset('logo/'.$setting->logo_kodein)); ?>">
                                            <img src="<?php echo e(asset('logo/'.$setting->logo_kodein)); ?>" class="w-25">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Logo Yayasan</th>
                                    <td>
                                        <a href="<?php echo e(asset('logo/'.$setting->logo_yayasan)); ?>">
                                            <img src="<?php echo e(asset('logo/'.$setting->logo_yayasan)); ?>" class="w-25">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Whatsapp</th>
                                    <td><?php echo e($setting->whatsapp); ?></td>
                                </tr>
                                <tr>
                                    <th>Address 1</th>
                                    <td><?php echo $setting->address_1; ?></td>
                                </tr>
                                <tr>
                                    <th>Address 2</th>
                                    <td><?php echo $setting->address_2; ?></td>
                                </tr>
                                <tr>
                                    <th>Facebook Link</th>
                                    <td><?php echo $setting->facebook_link; ?></td>
                                </tr>
                                <tr>
                                    <th>Instagram Link</th>
                                    <td><?php echo $setting->instagram_link; ?></td>
                                </tr>
                                <tr>
                                    <th>Twitter Link</th>
                                    <td><?php echo $setting->twitter_link; ?></td>
                                </tr>
                                <tr>
                                    <th>Youtube Link</th>
                                    <td><?php echo $setting->youtube_link; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\setting_app\resources\views/backend/setting/show.blade.php ENDPATH**/ ?>