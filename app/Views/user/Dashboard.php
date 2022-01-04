
<div class="flex flex-col w-full">
    <div class="flex justify-between w-full items-center h-16">
        <div class="flex items-center w-full mr-4">
            <i class="fas fa-search text-gray-400 ml-4"></i>
            <input class="w-full px-2 py-4 h-full outline-none" placeholder="Search..."></input>
        </div>
        <div class="mx-4">
            <a href="<?= base_url('/login/logout') ?>">Logout</a>
        </div>
    </div>
    <div class="text-2xl flex font-semibold border-t px-4 py-4">
        <?= $subTitle ?>
    </div>
</div>