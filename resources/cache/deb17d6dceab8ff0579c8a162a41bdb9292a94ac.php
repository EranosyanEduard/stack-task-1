<?php $__env->startSection('list'); ?>
    <section class="list">
        <?php if(isset($items)): ?>
            <?php if(is_array($items) && count($items)): ?>
                <?php echo $__env->make('blocks.list.unordered-list', ['items' => $items], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php else: ?>
                <p>Файл пуст или его контент не соответствует требованиям шаблона!</p>
            <?php endif; ?>
        <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.homepage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/eduard/Desktop/dev/sandbox/php-blade/resources/views///blocks/list/list.blade.php ENDPATH**/ ?>