<li class="list__item">
    <?php echo e($item->title); ?>

    <?php if(isset($item->isFolder)): ?>
        <?php echo $__env->make('blocks.list.unordered-list', ['items' => $item->children], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
</li><?php /**PATH /Users/eduard/Desktop/dev/sandbox/php-blade/resources/views/blocks/list/list-item.blade.php ENDPATH**/ ?>