
<div class="flex flex-col w-full bg-gray-100 dark:bg-background-darkPrimary transition-all">
    <div class="flex justify-between w-full items-center h-16 border-b dark:border-background-darkSecondary bg-white dark:bg-background-darkPrimary transition-all">
        <div class="flex items-center w-full mr-4">
            <i class="fas fa-search text-gray-400 dark:text-blueGray-400 ml-4 transition-all"></i>
            <input class="w-full px-2 py-4 h-full outline-none dark:bg-background-darkPrimary dark:text-white transition-all" placeholder="Search..."></input>
        </div>
        <div class="px-4 py-4 cursor-pointer">
            <button id="theme-toggle" type="button" class="text-gray-500 dark:text-blueGray-400 hover:bg-gray-100 dark:hover:bg-blueGray-700 focus:outline-none rounded-lg text-sm p-2.5 transition-all">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5 transition-all" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5 transition-all" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            </button>
        </div>
    </div>
    <div class="flex flex-col lg:flex-row justify-between mt-4 w-full px-4 mb-4">
        <div class="flex lg:w-full mr-0 lg:mr-2 mb-4 lg:mb-0">
            <div class="flex items-center shadow-sm rounded-xl px-4 py-4 mr-4 w-full bg-white dark:bg-background-darkSecondary transition-all">
                <div class="flex mr-4 h-full items-center">
                    <i class="fas fa-headphones text-gray-500 dark:text-blueGray-500 w-8 text-2xl transition-all"></i>
                </div>
                <div class="flex flex-col">
                    <span class="text-sm md:text-base lg:text-lg text-black dark:text-blueGray-300 transition-all">
                        Pending Leads
                    </span>
                    <span class="my-1 px-2 text-sm lg:text-xl bg-yellow-50 dark:bg-background-hoverPrimary text-yellow-900 dark:text-white rounded-lg w-min transition-all">
                        4
                    </span>
                </div>
            </div>
            <div class="flex items-center shadow-sm rounded-xl px-4 py-4 w-full bg-white dark:bg-background-darkSecondary transition-all">
                <div class="flex mr-4 h-full items-center">
                    <i class="fas fa-bell text-gray-500 dark:text-blueGray-500 w-8 text-2xl transition-all"></i>
                </div>
                <div class="flex flex-col">
                    <span class="text-sm md:text-base lg:text-lg text-black dark:text-blueGray-300 transition-all">
                        New Leads
                    </span>
                    <span class="my-1 px-2 text-sm lg:text-xl bg-green-50 dark:bg-background-hoverPrimary text-green-900 dark:text-white rounded-lg w-min transition-all">
                        2
                    </span>
                </div>
            </div>
        </div>
        <div class="flex lg:w-full mr-0 lg:ml-2">
            <div class="flex items-center shadow-sm rounded-xl px-4 py-4 mr-4 w-full bg-white dark:bg-background-darkSecondary transition-all">
                <div class="flex mr-4 h-full items-center">
                    <i class="far fa-credit-card text-gray-500 dark:text-blueGray-500 w-8 text-2xl transition-all"></i>
                </div>
                <div class="flex flex-col">
                    <span class="text-sm md:text-base lg:text-lg text-black dark:text-blueGray-300 transition-all">
                        Converted Leads
                    </span>
                    <span class="my-1 px-2 text-sm lg:text-xl bg-blue-50 dark:bg-background-hoverPrimary text-blue-900 dark:text-white rounded-lg w-min transition-all">
                        0
                    </span>
                </div>
            </div>
            <div class="flex items-center shadow-sm rounded-xl px-4 py-4 w-full bg-white dark:bg-background-darkSecondary transition-all">
                <div class="flex mr-4 h-full items-center">
                    <i class="fas fa-sitemap text-gray-500 dark:text-blueGray-500 w-8 text-2xl transition-all"></i>
                </div>
                <div class="flex flex-col">
                    <span class="text-sm md:text-base lg:text-lg text-black dark:text-blueGray-300 transition-all">
                        Total Leads
                    </span>
                    <span class="my-1 px-2 text-sm lg:text-xl bg-gray-100 dark:bg-background-hoverPrimary text-gray-900 dark:text-white rounded-lg w-min transition-all">
                        6
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col lg:flex-row justify-between px-4 mb-4">
        <div class="w-full lg:w-1/2 mb-4 lg:mb-0 mr-0 lg:mr-2 shadow-sm rounded-xl pb-3 bg-white dark:bg-background-darkSecondary transition-all">
            <div class="flex justify-between items-center border-b border-gray-100 dark:border-border-darkPrimary px-4 py-3 rounded-tr-xl rounded-tl-xl transition-all">
                <div class="text-lg font-semibold text-gray-700 dark:text-gray-300 transition-all">
                    New Leads
                </div>
                <div class="text-lg text-gray-700 dark:text-white transition-all">
                    <i class="fas fa-ellipsis-v text-gray-500 dark:text-gray-300 text-sm cursor-pointer transition-all"></i>
                </div>
            </div>
            <div class="overscroll-contain overflow-auto max-h-64 scrollbar-thin scrollbar-thumb-gray-200 scrollbar-track-gray-50">
                <table class="w-full">
                    <thead class="bg-background-secondary dark:bg-background-hoverPrimary transition-all">
                        <tr class="border-b border-gray-100 dark:border-border-darkPrimary transition-all">
                            <th class="px-4 py-2 text-left text-xs font-medium tracking-wider uppercase dark:text-gray-400 transition-all">#</th>
                            <th class="px-4 py-2 text-left text-xs font-medium tracking-wider uppercase dark:text-gray-400 transition-all">Phone</th>
                            <th class="px-4 py-2 text-left text-xs font-medium tracking-wider uppercase dark:text-gray-400 transition-all">Project</th>
                            <th class="px-4 py-2 text-left text-xs font-medium tracking-wider uppercase dark:text-gray-400 transition-all">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b last:border-none border-gray-100 dark:border-border-darkPrimary hover:bg-gray-50 dark:hover:bg-background-hoverPrimary cursor-pointer transition-all">
                            <td class="px-4 py-2 text-sm dark:text-white transition-all">1</td>
                            <td class="px-4 py-2 text-sm dark:text-white transition-all">03314641234</td>
                            <td class="px-4 py-2 text-sm dark:text-white transition-all">091 Mall</td>
                            <td class="px-4 py-2 text-sm dark:text-white transition-all">2022-02-31</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="w-full lg:w-1/2 mb-4 lg:mb-0 ml-0 lg:ml-2 shadow-sm rounded-xl pb-3 bg-white dark:bg-background-darkSecondary transition-all">
            <div class="flex justify-between items-center border-b border-gray-100 dark:border-border-darkPrimary px-4 py-3 rounded-tr-xl rounded-tl-xl transition-all">
                <div class="text-lg font-semibold text-gray-700 dark:text-gray-300 transition-all">
                    New Leads
                </div>
                <div class="text-lg text-gray-700 dark:text-white transition-all">
                    <i class="fas fa-ellipsis-v text-gray-500 dark:text-gray-300 text-sm cursor-pointer transition-all"></i>
                </div>
            </div>
            <div class="overscroll-contain overflow-auto max-h-64 scrollbar-thin scrollbar-thumb-gray-200 scrollbar-track-gray-50">
                <table class="w-full">
                    <thead class="bg-background-secondary dark:bg-background-hoverPrimary transition-all">
                        <tr class="border-b border-gray-100 dark:border-border-darkPrimary transition-all">
                            <th class="px-4 py-2 text-left text-xs font-medium tracking-wider uppercase dark:text-gray-400 transition-all">#</th>
                            <th class="px-4 py-2 text-left text-xs font-medium tracking-wider uppercase dark:text-gray-400 transition-all">Phone</th>
                            <th class="px-4 py-2 text-left text-xs font-medium tracking-wider uppercase dark:text-gray-400 transition-all">Project</th>
                            <th class="px-4 py-2 text-left text-xs font-medium tracking-wider uppercase dark:text-gray-400 transition-all">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b last:border-none border-gray-100 dark:border-border-darkPrimary hover:bg-gray-50 dark:hover:bg-background-hoverPrimary cursor-pointer transition-all">
                            <td class="px-4 py-2 text-sm dark:text-white transition-all">1</td>
                            <td class="px-4 py-2 text-sm dark:text-white transition-all">03314641234</td>
                            <td class="px-4 py-2 text-sm dark:text-white transition-all">091 Mall</td>
                            <td class="px-4 py-2 text-sm dark:text-white transition-all">2022-02-31</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>