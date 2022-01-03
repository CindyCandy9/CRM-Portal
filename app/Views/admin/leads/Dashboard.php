<div class="flex justify-between items-center px-4 py-6 bg-gray-50 h-24">
    <span class="text-2xl flex font-semibold"><?= $subTitle ?></span>
    <div class="flex justify-end w-1/2">
        <a href="<?= base_url('admin/leads/import') ?>" class="bg-gray-200 text-black rounded-md py-1 md:py-2 px-2 md:px-3 mx-3">
            <span>Import</span>
        </a>
        <a href="<?= base_url('admin/leads/add') ?>" class="bg-blue-500 text-white rounded-md py-1 md:py-2 px-2 md:px-3">
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
  <div class="overflow-x-auto mx-4">
    <div class="align-middle inline-block min-w-full">
      <div class="overflow-hidden">
        <table class="min-w-full divide-y divide-gray-100">
          <thead>
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                #
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Client
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Project
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Lead Date
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Assigned To
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Status
              </th>
            </tr>
          </thead>
          <tbody class="bg-white">
            <?php foreach($data as $lead): ?>
            <tr class="even:bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="">
                    <div class="text-xs text-gray-500">
                      <?= $lead['lead_id'] ?>
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="">
                    <div class="text-sm font-medium text-gray-900"><?= $lead['lead_client_name'] ?></div>
                    <div class="text-sm text-gray-500"><?= $lead['lead_client_phone'] ?></div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm font-medium text-gray-900"><?= $lead['project_name'] ?></div>
                <div class="text-sm text-gray-500"><?= $lead['location_name'] ?></div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm font-medium text-gray-900"><?php $date = date_create($lead['lead_date']); echo date_format($date, 'd-M-Y'); ?></div>
                <div class="text-sm text-gray-500"><?php $date = date_create($lead['lead_date']); echo date_format($date, 'D H:i:s'); ?></div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm font-medium text-gray-900"><?= $lead['user_fullname'] ?></div>
                <div class="text-sm text-gray-500"><?= $lead['department_name'] ?></div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 rounded-full bg-yellow-100 text-yellow-800">
                  <?= $lead['lead_status_name'] ?>
                </span>
              </td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="bg-white mx-4 py-6 flex items-center justify-between border-t-2 border-gray-100 sm:mx-4">
    <div class="flex-1 flex justify-between sm:hidden">
      <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
        Previous
      </a>
      <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
        Next
      </a>
    </div>
    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
      <div>
        <p class="text-sm text-gray-700">
          Showing
          <span class="font-medium">1</span>
          to
          <span class="font-medium">10</span>
          of
          <span class="font-medium">97</span>
          results
        </p>
      </div>
      <div>
        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
          <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
            <span class="sr-only">Previous</span>
            <!-- Heroicon name: solid/chevron-left -->
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
          </a>
          <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
          <a href="#" aria-current="page" class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
            1
          </a>
          <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
            2
          </a>
          <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium">
            3
          </a>
          <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
            ...
          </span>
          <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium">
            8
          </a>
          <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
            9
          </a>
          <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
            10
          </a>
          <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
            <span class="sr-only">Next</span>
            <!-- Heroicon name: solid/chevron-right -->
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
          </a>
        </nav>
      </div>
    </div>
  </div>
</div>