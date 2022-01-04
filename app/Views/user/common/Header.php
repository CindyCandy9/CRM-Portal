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
<body>
    <div class="flex">
        <nav class="flex flex-col justify-between h-full min-h-screen w-56 border-r border-gray-200">
            <div class="flex flex-col">
                <div class="flex justify-center w-full items-center h-16">
                    <span class="text-2xl font-semibold my-4 mx-4">CRM Portal</span>
                </div>
                <div class="flex w-full justify-center items-center">
                    <a href="<?= base_url("user") ?>" class="w-full mx-4 <?= $activePage == 'main' ? 'flex bg-gray-100 text-blueGray-900 px-3 py-2 rounded-md text-sm font-semibold my-1 transition-all ease-in-out' : 'flex px-3 py-2 rounded-md text-sm text-blueGray-600 font-semibold my-1 hover:bg-blueGray-50 transition-all ease-in-out' ?>" aria-current="page">
                        <i class="fas fa-home text-blueGray-500 w-8 text-xl"></i> Dashboard
                    </a>
                </div>
                <div class="flex w-full justify-center items-center">
                    <a href="<?= base_url("user/leads") ?>" class="w-full mx-4 <?= $activePage == 'leads' ? 'flex bg-gray-100 text-blueGray-900 px-3 py-2 rounded-md text-sm font-semibold my-1 transition-all ease-in-out' : 'flex px-3 py-2 rounded-md text-sm text-blueGray-600 font-semibold my-1 hover:bg-blueGray-50 transition-all ease-in-out' ?>" aria-current="page">
                        <i class="fas fa-phone text-blueGray-500 w-8 text-xl"></i> Leads
                    </a>
                </div>
            </div>
            <div class="flex flex-col border-t py-4">
                <div class="flex w-full items-center">
                    <div class="mx-4 relative">
                        <button type="button" class="flex text-sm rounded-full" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full" src="http://localhost:8080/images/avatar.svg" alt="">
                        </button>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold">Dawood Khan</span>
                        <a href="#" class="text-xs font-medium text-gray-500">View Profile</a>
                    </div>
                </div>
            </div>
        </nav>    