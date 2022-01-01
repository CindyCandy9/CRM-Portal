<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRM Portal | <?= $subTitle ?></title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<link href="<?= base_url("css/app.css?v=1.0.0") ?>" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
    <header class="flex h-12 items-center bg-background-top text-white">
        <div class="mx-4">
            <a href="/admin/" class="font-semibold text-2xl">CRM Portal</a>
        </div>
        <div class="hidden md:block mx-4">
            <a href="/admin/">Dashboard</a>
        </div>
        <div class="hidden md:block mx-4">
            <a href="/admin/employees">Employees</a>
        </div>
        <div class="hidden md:block mx-4">
            <a href="/admin/leads">Leads</a>
        </div>
        <div class="flex-grow"></div>
        <div class="mx-4">
            <div x-data="{ dropdownOpen: false }" class="relative">
                <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md p-2 focus:outline-none">
                    <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>

                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

                <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20 border-gray-200" style="display: none">
                    <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                        Your Profile
                    </a>
                    <a href="<?= base_url('login/logout') ?>" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                        Sign Out
                    </a>
                </div>
            </div>
        </div>
    </header>