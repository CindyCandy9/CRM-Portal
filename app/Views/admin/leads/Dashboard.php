<div class="flex justify-between items-center px-4 py-6 bg-gray-50 h-24">
    <span class="text-2xl flex font-semibold"><?= $subTitle ?></span>
    <div class="flex justify-end w-1/2">
        <a href="<?= base_url('admin/employees/add') ?>" class="bg-gray-200 text-black rounded-md py-1 md:py-2 px-2 md:px-3 mx-3">
            <span>Import</span>
        </a>
        <a href="<?= base_url('admin/employees/add') ?>" class="bg-blue-500 text-white rounded-md py-1 md:py-2 px-2 md:px-3">
            <span>Add New</span>
        </a>
    </div>
</div>
<div class="flex flex-col my-4">
  <?php if(session()->getFlashdata('ResponseMessageSuccess') !== NULL) : ?>
  <div class="flex my-2 pb-2 mx-4">
    <div class="bg-green-100 text-green-900 w-full py-2 px-2 rounded"><?= $_SESSION['ResponseMessageSuccess'] ?></div>
  </div>
  <?php elseif (session()->getFlashdata('ResponseMessageError') !== NULL) : ?>
  <div class="flex my-2 pb-2 mx-4">
    <div class="bg-red-100 text-red-900 w-full py-2 px-2 rounded"><?= $_SESSION['ResponseMessageError'] ?></div>
  </div>
  <?php endif ?>
  <div class="flex items-baseline my-2 pb-2 mx-4">
    <label class="text-lg text-gray-500">All Leads</label> <label class="text-sm text-gray-400 ml-2">(Descending)</label>
  </div>
</div>