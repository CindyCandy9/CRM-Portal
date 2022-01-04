
<div class="flex flex-col w-full transition-all">
    <div class="flex justify-between w-full items-center h-16 border-b">
        <div class="flex items-center w-full mr-4">
            <i class="fas fa-search text-gray-400 ml-4"></i>
            <input class="w-full px-2 py-4 h-full outline-none" placeholder="Search..."></input>
        </div>
        <div class="mx-4">
            <a href="<?= base_url('/login/logout') ?>">Logout</a>
        </div>
    </div>
    <div class="flex flex-col lg:flex-row justify-between px-2 py-4">
        <div class="w-full lg:w-1/2 px-2">
            <div class="mb-2 text-lg font-semibold">
                New Leads
            </div>
            <table class="shadow rounded w-full">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="px-4 py-2 text-left">#</th>
                        <th class="px-4 py-2 text-left">Phone</th>
                        <th class="px-4 py-2 text-left">Project</th>
                        <th class="px-4 py-2 text-left">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-100 hover:bg-blueGray-50 cursor-pointer transition-all">
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">03314641234</td>
                        <td class="px-4 py-2">091 Mall</td>
                        <td class="px-4 py-2">2022-02-31</td>
                    </tr>
                    <tr class="border-b border-gray-100 hover:bg-blueGray-50 cursor-pointer transition-all">
                        <td class="px-4 py-2">2</td>
                        <td class="px-4 py-2">03314641234</td>
                        <td class="px-4 py-2">091 Mall</td>
                        <td class="px-4 py-2">2022-02-31</td>
                    </tr>
                    <tr class="border-b border-gray-100 hover:bg-blueGray-50 cursor-pointer transition-all">
                        <td class="px-4 py-2">3</td>
                        <td class="px-4 py-2">03314641234</td>
                        <td class="px-4 py-2">091 Mall</td>
                        <td class="px-4 py-2">2022-02-31</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="w-full lg:w-1/2 px-2">
            asd
        </div>
    </div>
</div>