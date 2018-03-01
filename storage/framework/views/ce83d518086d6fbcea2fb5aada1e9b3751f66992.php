<?php $__env->startSection('content'); ?>
<div class="container homebox" style="background-color:white;margin-top: 80px;">
    <div class="page-header text-center">
        <h3 >Welcome <?php echo e($user->name); ?></h3>
    </div>
    <!--<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">DASHBOARD</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!
                </div>
            </div>
        </div>
    </div> -->
    <div class="row" >
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title pull-left" style="padding-top: 7.5px;color:black;">YOUR PROFILE</h4>
                   
                </div>
                <div class="panel-body">
                    <p>
                       DEPARTMENT&nbsp&nbsp&nbsp<?php echo e($user->college); ?></br>
                       LEVEL&nbsp&nbsp&nbsp<?php echo e($user->level); ?> </br>
                        EMAIL&nbsp&nbsp&nbsp<?php echo e($user->email); ?></br>
                       MOBILE&nbsp&nbsp&nbsp<?php echo e($user->phnumber); ?></br>

                    </p>
                </div>
                

            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>