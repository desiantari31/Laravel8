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
<div>
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="mt-5 md:mt-0 md:col-span-3">
      <form method="POST" action="<?php echo e((isset($guru))?route('guru.update', $guru->id):route('guru.store')); ?>" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <?php if(isset($guru)): ?>
        <?php echo method_field('PUT'); ?>
      <?php endif; ?>
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label for="nip" class="block text-sm font-medium text-gray-700">
                NIP
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <input type="text"  value="<?php echo e((isset($guru))?$guru->nip:old('nip')); ?>" name="nip" id="nip" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan NIP">
                </div>
              </div>
            </div>

            <div>
              <label for="nama" class="block text-sm font-medium text-gray-700">
                NAMA
              </label>
              <div class="mt-1">
                <input  name="nama"  value="<?php echo e((isset($guru))?$guru->nama:old('nama')); ?>" rows="1" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan Nama"></input>
              </div>
            </div>

            <div>
              <label for="status" class="block text-sm font-medium text-gray-700">
                STATUS
              </label>
              <div class="mt-1">
                <input  name="status" value="<?php echo e((isset($guru))?$guru->status:old('status')); ?>" rows="1" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan Status"></input>
              </div>
            </div>

            <div>
              <label for="jabatan" class="block text-sm font-medium text-gray-700">
                JABATAN
              </label>
              <div class="mt-1">
                <input  name="jabatan"  value="<?php echo e((isset($guru))?$guru->jabatan:old('jabatan')); ?>" rows="1" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Masukkan Jabatan"></input>
              </div>
            </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Save
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

</main>
 <?php if (isset($__componentOriginalc822bbb98ab3ae4c9df57ce71c1cf098d20d672b)): ?>
<?php $component = $__componentOriginalc822bbb98ab3ae4c9df57ce71c1cf098d20d672b; ?>
<?php unset($__componentOriginalc822bbb98ab3ae4c9df57ce71c1cf098d20d672b); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\tugas-laravel\resources\views/admin/tambah.blade.php ENDPATH**/ ?>