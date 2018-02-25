<?php $__env->startSection('content'); ?>


<div class ="row rym animated fadeIn">
    
    <img src="../img/failed.jpg" class="img-responsive" style="z-index: 4; height:40vh;margin:auto;">
    <p>Uhh, seems like something went wrong!</p>
    <br><br>
</div>
<script>
    window.setTimeout(function(){ window.location = "/game"; },5000);
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>