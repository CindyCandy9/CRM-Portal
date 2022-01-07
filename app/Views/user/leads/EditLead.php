
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
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 mx-4 my-4">
        <div class="col-span-1 lg:col-span-3">
            <div class="rounded-xl shadow-sm bg-white dark:bg-background-darkSecondary dark:text-white transition-all mb-4 pb-4">
                <div class="px-4 py-2 text-md lg:text-lg text-blueGray-600 dark:text-blueGray-400 font-semibold border-b dark:border-border-darkPrimary transition-all">Lead Information</div>
                <div class="grid grid-cols-2 gap-2 mx-4 md:mx-8 mt-4">
                    <div class="text-xs md:text-sm">
                        <table>
                            <tbody>
                                <tr class="h-10">
                                    <td class="flex items-center pr-4 text-blueGray-500 font-semibold float-right h-10">Name</td>
                                    <td><input class="focus:outline-none rounded focus:border focus:border-gray-300 px-2 py-1 transition-all placeholder:text-blueGray-300" placeholder="e.g, John Doe"></input></td>
                                </tr>
                                <tr class="h-10">
                                    <td class="flex items-center pr-4 text-blueGray-500 font-semibold float-right h-10">Title</td>
                                    <td><input class="focus:outline-none rounded focus:border focus:border-gray-300 px-2 py-1 transition-all placeholder:text-blueGray-300" placeholder="e.g, VP Accounting"></input></td>
                                </tr>
                                <tr class="h-10">
                                    <td class="flex items-center pr-4 text-blueGray-500 font-semibold float-right h-10">Phone</td>
                                    <td><input class="focus:outline-none rounded focus:border focus:border-gray-300 px-2 py-1 transition-all placeholder:text-blueGray-300" placeholder="e.g, 02134578910"></input></td>
                                </tr>
                                <tr class="h-10">
                                    <td class="flex items-center pr-4 text-blueGray-500 font-semibold float-right h-10">Mobile</td>
                                    <td><input class="focus:outline-none rounded focus:border focus:border-gray-300 px-2 py-1 transition-all placeholder:text-blueGray-300" placeholder="e.g, 03311231234"></input></td>
                                </tr>
                                <tr class="h-10">
                                    <td class="flex items-center pr-4 text-blueGray-500 font-semibold float-right h-10">Source</td>
                                    <td><input class="focus:outline-none rounded focus:border focus:border-gray-300 px-2 py-1 transition-all placeholder:text-blueGray-300" placeholder="e.g, Facebook"></input></td>
                                </tr>
                                <tr class="h-10">
                                    <td class="flex items-center pr-4 text-blueGray-500 font-semibold float-right h-10">Industry</td>
                                    <td><input class="focus:outline-none rounded focus:border focus:border-gray-300 px-2 py-1 transition-all placeholder:text-blueGray-300" placeholder="e.g, Service Provider"></input></td>
                                </tr>
                                <tr class="h-10">
                                    <td class="flex items-center pr-4 text-blueGray-500 font-semibold float-right h-10">Revenue</td>
                                    <td><input class="focus:outline-none rounded focus:border focus:border-gray-300 px-2 py-1 transition-all placeholder:text-blueGray-300" placeholder="e.g, 850000"></input></td>
                                </tr>
                                <tr class="h-10">
                                    <td class="flex items-center pr-4 text-blueGray-500 font-semibold float-right h-10">Twitter</td>
                                    <td><input class="focus:outline-none rounded focus:border focus:border-gray-300 px-2 py-1 transition-all placeholder:text-blueGray-300" placeholder="e.g, @john_doe"></input></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-xs md:text-sm">
                        <table>
                            <tbody>
                                <tr class="h-10">
                                    <td class="flex items-center pr-4 text-blueGray-500 font-semibold float-right h-10">Company</td>
                                    <td><input class="focus:outline-none rounded focus:border focus:border-gray-300 px-2 py-1 transition-all placeholder:text-blueGray-300" placeholder="e.g, ABC LTD"></input></td>
                                </tr>
                                <tr class="h-10">
                                    <td class="flex items-center pr-4 text-blueGray-500 font-semibold float-right h-10">Email</td>
                                    <td><input class="focus:outline-none rounded focus:border focus:border-gray-300 px-2 py-1 transition-all placeholder:text-blueGray-300" placeholder="e.g, johndoe@example.com"></input></td>
                                </tr>
                                <tr class="h-10">
                                    <td class="flex items-center pr-4 text-blueGray-500 font-semibold float-right h-10">Fax</td>
                                    <td><input class="focus:outline-none rounded focus:border focus:border-gray-300 px-2 py-1 transition-all placeholder:text-blueGray-300" placeholder="e.g, 5551234567"></input></td>
                                </tr>
                                <tr class="h-10">
                                    <td class="flex items-center pr-4 text-blueGray-500 font-semibold float-right h-10">Website</td>
                                    <td><input class="focus:outline-none rounded focus:border focus:border-gray-300 px-2 py-1 transition-all placeholder:text-blueGray-300" placeholder="e.g, example.com"></input></td>
                                </tr>
                                <tr class="h-10">
                                    <td class="flex items-center pr-4 text-blueGray-500 font-semibold float-right h-10">Status</td>
                                    <td><input class="focus:outline-none rounded focus:border focus:border-gray-300 px-2 py-1 transition-all placeholder:text-blueGray-300" placeholder="e.g, Pending"></input></td>
                                </tr>
                                <tr class="h-10">
                                    <td class="flex items-center pr-4 text-blueGray-500 font-semibold float-right h-10">Employees</td>
                                    <td><input class="focus:outline-none rounded focus:border focus:border-gray-300 px-2 py-1 transition-all placeholder:text-blueGray-300" placeholder="e.g, 100"></input></td>
                                </tr>
                                <tr class="h-10">
                                    <td class="flex items-center pr-4 text-blueGray-500 font-semibold float-right h-10">Rating</td>
                                    <td><input class="focus:outline-none rounded focus:border focus:border-gray-300 px-2 py-1 transition-all placeholder:text-blueGray-300" placeholder="e.g, 1-5"></input></td>
                                </tr>
                                <tr class="h-10">
                                    <td class="flex items-center pr-4 text-blueGray-500 font-semibold float-right h-10">Skype</td>
                                    <td><input class="focus:outline-none rounded focus:border focus:border-gray-300 px-2 py-1 transition-all placeholder:text-blueGray-300" placeholder="e.g, @john_doe"></input></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="rounded-xl shadow-sm bg-white dark:bg-background-darkSecondary dark:text-white transition-all mb-4 pb-4">
                <div class="px-4 py-2 text-md lg:text-lg text-blueGray-600 dark:text-blueGray-400 font-semibold border-b dark:border-border-darkPrimary transition-all">Address Information</div>
                <div class="grid grid-cols-2 gap-2 mx-4 md:mx-8 mt-4">
                    <div class="text-xs md:text-sm">
                        <table>
                            <tbody>
                                <tr class="h-10">
                                    <td class="flex items-center pr-4 text-blueGray-500 font-semibold float-right h-10">Street</td>
                                    <td><input class="focus:outline-none rounded focus:border focus:border-gray-300 px-2 py-1 transition-all placeholder:text-blueGray-300" placeholder="e.g, E11/4, St48A"></input></td>
                                </tr>
                                <tr class="h-10">
                                    <td class="flex items-center pr-4 text-blueGray-500 font-semibold float-right h-10">State</td>
                                    <td><input class="focus:outline-none rounded focus:border focus:border-gray-300 px-2 py-1 transition-all placeholder:text-blueGray-300" placeholder="e.g, Punjab"></input></td>
                                </tr>
                                <tr class="h-10">
                                    <td class="flex items-center pr-4 text-blueGray-500 font-semibold float-right h-10">Country</td>
                                    <td><input class="focus:outline-none rounded focus:border focus:border-gray-300 px-2 py-1 transition-all placeholder:text-blueGray-300" placeholder="e.g, Pakistan"></input></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-xs md:text-sm">
                        <table>
                            <tbody>
                                <tr class="h-10">
                                    <td class="flex items-center pr-4 text-blueGray-500 font-semibold float-right h-10">City</td>
                                    <td><input class="focus:outline-none rounded focus:border focus:border-gray-300 px-2 py-1 transition-all placeholder:text-blueGray-300" placeholder="e.g, Islamabad"></input></td>
                                </tr>
                                <tr class="h-10">
                                    <td class="flex items-center pr-4 text-blueGray-500 font-semibold float-right h-10">Zip Code</td>
                                    <td><input class="focus:outline-none rounded focus:border focus:border-gray-300 px-2 py-1 transition-all placeholder:text-blueGray-300" placeholder="e.g, 44000"></input></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="rounded-xl shadow-sm bg-white dark:bg-background-darkSecondary dark:text-white transition-all">
                <div class="px-4 py-2 text-md lg:text-lg text-blueGray-600 dark:text-blueGray-400 font-semibold border-b dark:border-border-darkPrimary transition-all">Notes</div>
                <div class="px-4 py-4 transition-all">
                    <textarea class="text-sm focus:outline-none h-10 focus:h-32 border rounded-lg resize-y w-full px-2 py-2 scrollbar-thin scrollbar-thumb-gray-200 scrollbar-track-gray-50 dark:border-border-darkPrimary dark:bg-background-hoverPrimary transition-all" type="text" placeholder="Add Note"></textarea>
                </div>
            </div>
        </div>
        <div class="sticky top-2 h-fit rounded-xl shadow-sm bg-white dark:bg-background-darkSecondary dark:text-white transition-all">
            <div class="px-4 py-2 text-md lg:text-lg text-blueGray-600 dark:text-blueGray-400 font-semibold border-b dark:border-border-darkPrimary transition-all">Actions</div>
            <div class="mx-4 my-4 transition-all">
                <button class="rounded-lg w-full border border-b-2 border-blue-700 dark:border-blue-800 hover:border-blue-800 text-white py-1 md:py-2 bg-gradient-to-b from-blue-400 to-blue-500 dark:from-blue-800 dark:to-blue-900 hover:from-blue-500 hover:to-blue-600 mb-2">Save Information</button>
                <button class="rounded-lg w-full border border-b-2 border-gray-300 dark:border-gray-900 hover:border-gray-400 text-black dark:text-white py-1 md:py-2 bg-gradient-to-b from-gray-50 to-gray-100 dark:from-blueGray-700 dark:to-blueGray-800 hover:from-gray-50 hover:to-gray-100 mb-2">Convert</button>
                <button class="rounded-lg w-full border border-b-2 border-gray-300 dark:border-gray-900 hover:border-gray-400 text-black dark:text-white py-1 md:py-2 bg-gradient-to-b from-gray-50 to-gray-100 dark:from-blueGray-700 dark:to-blueGray-800 hover:from-gray-50 hover:to-gray-100">Transfer</button>
            </div>
        </div>
    </div>
</div>