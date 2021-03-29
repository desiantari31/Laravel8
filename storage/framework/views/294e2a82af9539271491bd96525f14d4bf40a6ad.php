<?php if (isset($component)) { $__componentOriginalc822bbb98ab3ae4c9df57ce71c1cf098d20d672b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TamplateLayout::class, []); ?>
<?php $component->withName('tamplate-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<div class="rounded-tl-3xl bg-gradient-to-r from-purple-500 to-gray-800 p-4 shadow text-2xl text-white">
                    <h3 class="font-bold pl-2"><?php echo e($title); ?></h3>
        </div>
<main>
</main>
 <?php if (isset($__componentOriginalc822bbb98ab3ae4c9df57ce71c1cf098d20d672b)): ?>
<?php $component = $__componentOriginalc822bbb98ab3ae4c9df57ce71c1cf098d20d672b; ?>
<?php unset($__componentOriginalc822bbb98ab3ae4c9df57ce71c1cf098d20d672b); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\tugas-laravel\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>