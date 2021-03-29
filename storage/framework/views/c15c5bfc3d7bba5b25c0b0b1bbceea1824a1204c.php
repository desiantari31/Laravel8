<?php if (isset($component)) { $__componentOriginalc822bbb98ab3ae4c9df57ce71c1cf098d20d672b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TamplateLayout::class, []); ?>
<?php $component->withName('tamplate-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1><?php echo e($title); ?></h1>
                <h2><?php echo e($data['mahasiswa']['nim']); ?></h2>
                <h2><?php echo e($data['mahasiswa']['nama']); ?></h2>
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginalc822bbb98ab3ae4c9df57ce71c1cf098d20d672b)): ?>
<?php $component = $__componentOriginalc822bbb98ab3ae4c9df57ce71c1cf098d20d672b; ?>
<?php unset($__componentOriginalc822bbb98ab3ae4c9df57ce71c1cf098d20d672b); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\tugas-laravel\resources\views/admin/beranda.blade.php ENDPATH**/ ?>