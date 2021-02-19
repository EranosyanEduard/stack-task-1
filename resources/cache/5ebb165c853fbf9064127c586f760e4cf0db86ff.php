<ol class="list__items">
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('./blocks/list/list-item', ['item' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ol><?php /**PATH /Users/eduard/Desktop/dev/sandbox/php-blade/resources/views///blocks/list/ordered-list.blade.php ENDPATH**/ ?>