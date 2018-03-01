<?php $__env->startSection('content'); ?>
<style>
  
</style>
<div class="row rym">
<h1 id="heading" align="center" style="color:black;">Register New</h1>

    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-body">
        

        <?php echo Form::open(['route' => ['register',$id], 'method' => 'POST']); ?>

            <div class="form-group">
                <?php echo e(Form::label('phno','Phone Number')); ?>

                <?php echo e(Form::text('phno','',['class' => 'form-control','placeholder' => 'Phone Number','required'])); ?>

            </div>
           
            <div class="form-group">
                <?php echo e(Form::label('department','Department')); ?>

                <?php echo e(Form::text('department','',['class' => 'form-control','placeholder' => 'Department'])); ?>

            </div>
            
            <?php echo e(Form::submit('Submit',['class' => 'btn btn-success editb'])); ?>

        <?php echo Form::close(); ?>

        </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>