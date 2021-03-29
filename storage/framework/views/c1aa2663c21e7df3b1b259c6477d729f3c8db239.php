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
<div class="col-span-6 p-4">
        <a href="#"><button class="px-4 py-1 text-sm rounded bg-white text-blue-600 font-semibold border border-blue-200 hover:text-white hover:bg-blue-600 hover:border-transparent focus:outline-none">Tambah</button>
       </a>
        <a href="#"><button class="px-4 py-1 text-sm rounded bg-white text-blue-600 font-semibold border border-blue-200 hover:text-white hover:bg-blue-600 hover:border-transparent focus:outline-none">Konfirmasi</button>
        </a>
    </div>
<div class="rounded sm:px-1 sm:px-1 sm:bg-gray-100">
    <table class="min-w-full divide-y">
    <thread class="bg-gray-50">
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tandai</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hari</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jam</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pengajar</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kelas</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Option</th>
        </tr>
    </thread>
    <tbody class="divide-y divide-gray-200">
        <?php $no=1;?>
        <?php $__currentLoopData = $mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mapel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td class="px-6 py-4 whitespace-nowrap"><input type="checkbox" name="" id=""></td>
            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($mapel->hari); ?></td>
            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($mapel->jam); ?>

            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
            <?php echo e($mapel->pengajar); ?>

            </td>
            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($mapel->kelas); ?></td>
            <td class="px-6 py-4 whitespace-nowrap" >
                <a href="#"><button class="px-4 py-1 text-sm rounded text-green-600 font-semibold border border-green-200 hover:text-white hover:bg-green-600 hover:border-transparent focus:outline-none">Edit</button></a> | 
                <form action="<?php echo e(route('mapel.destroy',$mapel->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <a href="#"><button class="px-4 py-1 text-sm rounded text-red-600 font-semibold border border-red-200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none">Hapus</a>
                
            </td>
            </tr>
    </tbody>
    </table>
 </div> 
</main>
 <?php if (isset($__componentOriginalc822bbb98ab3ae4c9df57ce71c1cf098d20d672b)): ?>
<?php $component = $__componentOriginalc822bbb98ab3ae4c9df57ce71c1cf098d20d672b; ?>
<?php unset($__componentOriginalc822bbb98ab3ae4c9df57ce71c1cf098d20d672b); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\tugas-laravel\resources\views/admin/mapel.blade.php ENDPATH**/ ?>