<?php $__env->startSection('content'); ?>

<div class ="row rym animated fadeIn">
    
    
    <img  src="../img/cmo.jpg" style="height:170px;"><br><br>
    Mannequins say "We breakin' the mold"<br>
Breakin' out and we breakin' the codes<br>
Similar to the Jacques Cousteau<br>
To the depths and you're wet<br>
So your tank explodes, so get it out
    <br><br>
    <div class="col-md-6 col-md-offset-3" style="padding-bottom: 20px;">        
            <?php echo Form::open(['action' => 'GameController@answer', 'method' => 'POST']); ?>

                <div class="form-group" align="center">
                    <?php echo e(Form::label('answer','Answer')); ?>

                    <?php echo e(Form::text('answer','',['class' => 'form-control','placeholder' => 'Your Answer'])); ?>

                </div>
            <?php echo e(Form::submit('Submit',['class' => 'btn btn-success editb'])); ?>

        <?php echo Form::close(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>