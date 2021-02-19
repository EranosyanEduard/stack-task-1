<ol class="file-content__items">
    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('list-item', ['list_item' => $list_item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ol><?php /**PATH /Users/eduard/Desktop/dev/sandbox/php-blade/resources/views/ordered-list.blade.php ENDPATH**/ ?>