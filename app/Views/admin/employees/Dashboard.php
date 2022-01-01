<div class="flex justify-between items-center px-4 py-6 bg-gray-50 h-24">
    <span class="text-2xl flex font-semibold"><?= $subTitle ?></span>
    <div class="flex justify-end w-1/2">
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
  <div class="flex my-2 pb-2 mx-4">
      <label class="text-lg text-gray-500">All Employees</label>
  </div>
  <div class="-my-2 overflow-x-auto">
    <div class="py-2 align-middle inline-block min-w-full px-4">
      <div class="overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
          <thead>
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                #
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Department
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Leads <abbr title="Cleared / Pending / Rejected">(C / P / R)</abbr>
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Location
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Status
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <?php foreach($data as $user): ?>
                <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="">
                          <div class="text-xs text-gray-500">
                              <?= $user['user_id'] ?>
                          </div>
                      </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                    <div class="">
                        <div class="text-sm font-medium text-gray-900">
                            <?= $user['user_fullname'] ?>
                        </div>
                        <div class="text-sm text-gray-500">
                            <?= $user['user_email'] ?>
                        </div>
                    </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900"><?= $user['department_name'] ?></div>
                    <div class="text-sm text-gray-500"><?= $user['sub_department_name'] ?></div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="text-sm text-green-600">10</span> / 
                    <span class="text-sm text-gray-500">30</span> / 
                    <span class="text-sm text-red-700">60</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900"><?= $user['location_name'] ?></div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <?php if($user['user_status'] == 1) : ?>
                    <span class="px-2 inline-flex text-xs leading-5 rounded-full bg-green-100 text-green-800">
                        Active
                    </span>
                    <?php else : ?>
                    <span class="px-2 inline-flex text-xs leading-5 rounded-full bg-red-100 text-red-800">
                        Inactive
                    </span>  
                    <?php endif ?>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                    <?php if($user['user_status'] == 1) : ?>
                      <a href="<?= base_url('admin/employees/edit/' . $user['user_id']) ?>" class="text-gray-600 hover:text-gray-900 mr-2">Edit</a>
                    <?php endif ?>
                    <a href="<?= $user['user_status'] == 1 ? base_url('admin/employees/disable/' . $user['user_id']) : base_url('admin/employees/enable/' . $user['user_id']) ?>" class="<?= $user['user_status'] == 1 ? 'text-red-600 hover:text-red-900' : 'text-gray-500 hover:text-gray-900' ?>"><?= $user['user_status'] == 1 ? 'Disable' : 'Enable' ?></a>
                    
                </td>
                </tr>
            <?php endforeach ?>
            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>