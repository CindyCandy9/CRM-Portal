<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRM</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<link href="css/app.css" rel="stylesheet">
</head>
<body>
	<div class="min-h-screen flex flex-col items-center justify-center bg-gray-100">
		
		<div class="flex flex-col">
			<div class="flex flex-col my-4">
				<span class="self-center text-3xl font-bold">Sign in to your account</span>
				<div class="self-center pt-1 pb-3">
					<span class="text-gray-500">Enter your credentials to access your account</span>
				</div>
			</div>
			<form class="bg-white shadow-md rounded-md px-8 pt-6 pb-8 mb-4 " action="/login/auth" method="post">
				<div class="self-center w-full pb-2">
					<label for="email" class="text-xs font-semibold text-gray-500">Email</label>
					<input type="email" name="email" placeholder="Enter your email address" class="w-full placeholder-gray-400 p-2 text-xs border border-gray-300 rounded"></input>
				</div>
				<div class="self-center w-full pb-4">
					<label for="password" class="text-xs font-semibold text-gray-500">Password</label>
					<input type="password" name="password" placeholder="Enter your password" class="w-full placeholder-gray-400 p-2 text-xs border border-gray-300 rounded"></input>
				</div>
				<div class="self-center w-full">
					<button type="submit" class="w-full bg-blue-500 text-white rounded-md py-2">
						<div class="uppercase flex justify-center items-center">Login</div>
					</button>
				</div>
			</form>
			<?php if(session()->getFlashdata('msg')):?>
				<div class="mt-4 py-1 px-2 bg-red-100 w-full text-xs text-red-900 rounded-sm"><?= session()->getFlashdata('msg') ?></div>
			<?php endif;?>
		</div>
		<div>
			<a href="#" class="text-xs text-blue-900">Forgot your password?</a>
		</div>
	</div>
</body>
</html>
