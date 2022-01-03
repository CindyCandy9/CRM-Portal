<form action="#" method="POST">
    <div class="flex justify-between items-center px-4 py-6 bg-gray-50 h-24">
        <span class="text-2xl flex w-1/2 font-semibold"><?= $subTitle ?></span>
        <div class="flex justify-end w-1/2">
            <a href="<?= base_url('admin/leads') ?>" class="bg-gray-200 text-black text-base sm:text-md rounded-md py-1 md:py-2 px-2 md:px-3 mx-3">
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
            <label class="text-lg text-gray-500">Lead Information</label>
        </div>
        <div class="flex flex-col md:flex-row justify-between">
        <div class="md:w-1/2 md:mr-8">
                <div class="my-4">
                    <div class="mr-4 pb-1 md:w-1/2"><label for="Client Name" class="text-sm">Client Name</label></div>
                    <input type="text" name="client_name" placeholder="Enter Client Name" class="border rounded px-2 py-2 w-full focus:outline-none focus:bg-white focus:border-blue-500"></input>
                </div>
                <div class="my-4">
                    <div class="mr-4 pb-1 md:w-1/2"><label for="Phone" class="text-sm">Client Phone <span class="text-red-500">*</span></label></div>
                    <input type="text" name="client_phone" required placeholder="Enter Phone" class="border rounded px-2 py-2 w-full focus:outline-none focus:bg-white focus:border-blue-500"></input>
                </div>
            </div>
            <div class="md:w-1/2 md:mr-8">
                <div class="my-4">
                    <div class="mr-4 pb-1 md:w-1/2"><label for="Lead Date" class="text-sm">Lead Date <span class="text-red-500">*</span></label></div>
                    <div class="relative">
                        <input type="datetime-local" name="lead_date" required placeholder="Select Date" class="border rounded px-2 py-2 w-full focus:outline-none focus:bg-white focus:border-blue-500">
                    </div>
                </div>
                <div class="my-4">
                    <div class="mr-4 pb-1 md:w-1/2"><label for="Project" class="text-sm">Project <span class="text-red-500">*</span></label></div>
                    <select name="project_id" required class="form-select appearance-none block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:outline-none focus:bg-white focus:border-blue-500" aria-label="Default select example">
                        <option selected disabled value="">Select Project</option>
                        <?php foreach($data[0] as $project) : ?>
                        <option value="<?= $project["project_id"] ?>"><?= $project["project_name"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
</form>