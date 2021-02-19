<?php $__env->startSection('file-content'); ?>
    <section class="file-content">
        <?php if(isset($file_content)): ?>
            <?php if(is_array($file_content) && count($file_content)): ?>
                <?php echo $__env->make('ordered-list', ['list' => $file_content], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php else: ?>
                <p>Файл пуст или его контент не соответствует требованиям шаблона!</p>
            <?php endif; ?>
        <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/eduard/Desktop/dev/sandbox/php-blade/resources/views/file-content.blade.php ENDPATH**/ ?>