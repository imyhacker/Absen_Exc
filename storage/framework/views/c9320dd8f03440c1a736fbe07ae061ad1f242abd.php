<?php $__env->startSection('content'); ?>
  <main role="main" class="inner cover">
    <h1 class="cover-heading">Contact Me!</h1>
	 <div class="container mt-5">
    	<div class="row">
	        <div class="col-4">
	        	 <a href="https://wa.me/+62895372320697" target="_blank"><img src="<?php echo e(asset('gambar/icon/wa.jpg')); ?>" class="img-fluid mx-auto d-block" width="250px" height="80px" alt="Whatsapp"></a>
        </div>
         <div class="col-4">
	        	<a href="https://t.me/darbex_x" target="_blank"><img src="<?php echo e(asset('gambar/icon/telegram.png')); ?>" class="img-fluid mx-auto d-block" width="150px" height="80px" alt="Telegram"></a>
        </div>
         <div class="col-4">
	        	<a href="mailto:arifarhan1602@gmail.com" target="_blank"><img src="<?php echo e(asset('gambar/icon/gmail.png')); ?>" class="img-fluid mx-auto d-block" width="150px" height="80px" alt="Gmail"></a>
        </div>
    </div>
</div>
  </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mylat\resources\views//share/contact.blade.php ENDPATH**/ ?>