<form action="#" method="POST">
    <div class="flex justify-between items-center px-4 py-6 bg-gray-50 h-24">
        <span class="text-2xl flex w-1/2 font-semibold"><?= $subTitle ?></span>
        <div class="flex justify-end w-1/2">
            <a href="<?= base_url('admin/employees') ?>" class="bg-gray-200 text-black text-base sm:text-md rounded-md py-1 md:py-2 px-2 md:px-3 mx-3">
                <span>Cancel</span>
            </a>
            <button type="submit" class="bg-blue-500 text-white text-sm lg:text-base rounded-md py-1 md:py-2 px-2 md:px-3">
                <span>Save & Continue</span>
            </button>
        </div>
    </div>
    <div class="flex flex-col mx-4 my-4">
        <?php if(session()->getFlashdata('ResponseMessageSuccess') !== NULL) : ?>
            <div class="flex my-2 pb-2">
                <div class="bg-green-100 text-green-900 w-full py-2 px-2 rounded"><?= $_SESSION['ResponseMessageSuccess'] ?></div>
            </div>
        <?php elseif (session()->getFlashdata('ResponseMessageError') !== NULL) : ?>
            <div class="flex my-2 pb-2">
                <div class="bg-red-100 text-red-900 w-full py-2 px-2 rounded"><?= $_SESSION['ResponseMessageError'] ?></div>
            </div>
        <?php endif ?>
        <div class="flex my-2">
            <label class="text-lg text-gray-500">Account Information</label>
        </div>
        <div class="flex flex-col md:flex-row justify-between">
        <div class="md:w-1/2 md:mr-8">
                <div class="my-4">
                    <div class="mr-4 pb-1 md:w-1/2"><label for="Fullname" class="text-sm">Fullname <span class="text-red-500">*</span></label></div>
                    <input type="text" name="user_fullname" placeholder="Enter Fullname" required class="border rounded px-2 py-1 w-full"></input>
                </div>
                <div class="my-4">
                    <div class="mr-4 pb-1 md:w-1/2"><label for="Email" class="text-sm">Email <span class="text-red-500">*</span></label></div>
                    <input type="email" name="user_email" placeholder="Enter Email" required class="border rounded px-2 py-1 w-full"></input>
                </div>
                <div class="my-4">
                    <div class="mr-4 pb-1 md:w-1/2"><label for="Password" class="text-sm">Password <span class="text-red-500">*</span></label></div>
                    <div class="flex">
                    <input type="password" name="user_password" placeholder="Enter Password" required class="border rounded px-2 py-1 w-full mr-4"></input>
                    <input type="password" name="user_confirm_password" placeholder="Confirm Password" required class="border rounded px-2 py-1 w-full"></input>
                    </div>
                </div>
                <div class="my-4">
                    <div class="mr-4 pb-1 md:w-1/2"><label for="Gender" class="text-sm">Gender <span class="text-red-500">*</span></label></div>
                    <select name="user_gender" required class="form-select appearance-none block w-full px-3 py-1 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        <option disabled selected value="">Select Gender</option>
                        <?php foreach($data[3] as $gender) : ?>
                        <option value="<?= $gender["gender_id"] ?>"><?= $gender["gender_name"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="md:w-1/2 md:mr-8">
                <div class="my-4">
                    <div class="mr-4 pb-1 md:w-1/2"><label for="Department" class="text-sm">Location <span class="text-red-500">*</span></label></div>
                    <select name="user_location" required class="form-select appearance-none block w-full px-3 py-1 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        <option selected disabled value="">Select Location</option>
                        <?php foreach($data[0] as $location) : ?>
                        <option value="<?= $location["location_id"] ?>"><?= $location["location_name"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="my-4">
                    <div class="mr-4 pb-1 md:w-1/2"><label for="Department" class="text-sm">Department <span class="text-red-500">*</span></label></div>
                    <select name="user_department" required class="form-select appearance-none block w-full px-3 py-1 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        <option selected disabled value="">Select Department</option>
                        <?php foreach($data[1] as $department) : ?>
                        <option value="<?= $department["department_id"] ?>"><?= $department["department_name"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="my-4">
                    <div class="mr-4 pb-1 md:w-1/2"><label for="Sub-Department" class="text-sm">Sub-Department <span class="text-red-500">*</span></label></div>
                    <select name="user_sub_department" required class="form-select appearance-none block w-full px-3 py-1 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        <option selected disabled value="">Select Sub-Department</option>
                        <?php foreach($data[2] as $sub_department) : ?>
                        <option value="<?= $sub_department["sub_department_id"] ?>"><?= $sub_department["sub_department_name"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="my-4">
                    <div class="mr-4 pb-1 md:w-1/2"><label for="Role" class="text-sm">Role <span class="text-red-500">*</span></label></div>
                    <select name="user_role" required class="form-select appearance-none block w-full px-3 py-1 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        <option selected disabled value="">Select Role</option>
                        <?php foreach($data[4] as $roles) : ?>
                        <option value="<?= $roles["user_role_id"] ?>"><?= $roles["user_role_name"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
</form>