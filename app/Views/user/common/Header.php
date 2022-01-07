<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRM Portal | <?= $subTitle ?></title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<link href="<?= base_url("css/app.css?v=1.0.0") ?>" rel="stylesheet">
	<link href="<?= base_url("css/all.min.css") ?>" rel="stylesheet">
    <script src="<?= base_url("js/app.js") ?>"></script>
</head>
<body class="transition-all ease-in-out">
    <div class="flex transition-all">
        <nav class="w-0 md:w-56 overflow-hidden md:flex flex-col justify-between h-screen sticky top-0 border-r border-gray-200 dark:border-background-darkSecondary dark:bg-background-darkPrimary transition-all">
            <div class="w-0 md:w-44 flex flex-col transition-all">
                <div class="w-0 md:w-full flex items-center h-16 transition-all">
                    <div class="text-2xl dark:text-gray-300 font-semibold my-4 mx-4 transition-all">CRM <span class="text-gray-500 dark:text-gray-500 transition-all">Portal</span></div>
                </div>
                <div class="flex w-full justify-center items-center">
                    <a href="<?= base_url("user") ?>" class="w-full mx-4 <?= $activePage == 'main' ? 'flex items-center bg-gray-100 dark:bg-background-darkSecondary text-blueGray-900 hover:text-gray-900 dark:text-blueGray-300 px-3 py-2 rounded-md text-sm font-semibold my-1 transition-all' : 'flex items-center px-3 py-2 rounded-md text-sm text-blueGray-500 hover:text-gray-900 dark:text-blueGray-500 font-semibold my-1 hover:bg-gray-50 dark:hover:text-gray-200 hover:dark:bg-background-hoverPrimary transition-all' ?>" aria-current="page">
                        <i class="fas fa-home dark:text-blueGray-300 w-6 text-sm"></i> Dashboard
                    </a>
                </div>
                <div class="flex w-full justify-center items-center">
                    <a href="<?= base_url("user/leads") ?>" class="w-full mx-4 <?= $activePage == 'leads' ? 'flex items-center bg-gray-100 dark:bg-background-darkSecondary text-blueGray-900 hover:text-gray-900 dark:text-blueGray-300 px-3 py-2 rounded-md text-sm font-semibold my-1 transition-all' : 'flex items-center px-3 py-2 rounded-md text-sm text-blueGray-500 hover:text-gray-900 dark:text-blueGray-500 font-semibold my-1 hover:bg-gray-50 dark:hover:text-gray-200 hover:dark:bg-background-hoverPrimary transition-all' ?>" aria-current="page">
                        <i class="fas fa-phone dark:text-blueGray-300 w-6 text-sm"></i> Leads <span class="text-xs py-1 px-2 mx-2 bg-green-50 dark:bg-background-darkSecondary text-green-800 dark:text-white rounded-lg transition-all"><?= $data[0]["total_new_leads"] ?></span>
                    </a>
                </div>
                <div class="flex w-full justify-center items-center">
                    <a href="<?= base_url("user/leads") ?>" class="w-full mx-4 <?= $activePage == 'settings' ? 'flex items-center bg-gray-100 dark:bg-background-darkSecondary text-blueGray-900 hover:text-gray-900 dark:text-blueGray-300 px-3 py-2 rounded-md text-sm font-semibold my-1 transition-all' : 'flex items-center px-3 py-2 rounded-md text-sm text-blueGray-500 hover:text-gray-900 dark:text-blueGray-500 font-semibold my-1 hover:bg-gray-50 dark:hover:text-gray-200 hover:dark:bg-background-hoverPrimary transition-all' ?>" aria-current="page">
                        <i class="fas fa-cog dark:text-blueGray-300 w-6 text-sm"></i> Settings
                    </a>
                </div>
            </div>
            <div class="w-0 md:w-48 flex flex-col border-t dark:border-background-darkSecondary py-4 transition-all">
                <div class="w-0 md:w-full flex items-center transition-all">
                    <div class="mx-4 relative">
                        <button type="button" class="flex text-sm rounded-full" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full" src="http://localhost:8080/images/avatar.svg" alt="">
                        </button>
                    </div>
                    <div class="flex flex-col transition-all">
                        <span class="text-sm font-semibold dark:text-white transition-all">Dawood Khan</span>
                        <a href="<?= base_url('/login/logout') ?>" class="text-xs font-medium text-gray-500 dark:text-blueGray-200 transition-all">Logout</a>
                    </div>
                </div>
            </div>
        </nav>    