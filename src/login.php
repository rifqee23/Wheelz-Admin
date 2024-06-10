<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="output.css">
</head>

<body class="">
    <div class="flex flex-col items-center w-full min-h-screen pt-28">
        <div>
            <img src="asset/WHEELZ FULL.png" alt="">
        </div>
        <div class="w-full max-w-md px-8 py-12 shadow-2xl shadow-blue-500">
            <h3>Home / Login</h3>
            <h1 class="mt-5 text-2xl">Login</h1>
            <p class="mt-2 text-slate-400">Input your username and password.</p>
            <div class="mt-5">
                <form action="db/user/login.php" method="post">
                    <div>
                        <label class="block text-lg font-medium" for="">Username</label>
                        <input class="w-full px-4 py-2 mt-2 rounded-lg outline outline-1 outline-slate-300 focus:outline-blue-500" name="username" type="text" placeholder="rfq">
                    </div>

                    <div class="mt-5">
                        <label class="block text-lg font-medium" for="">Password</label>
                        <div class="relative">
                            <input class="w-full px-4 py-2 mt-2 rounded-lg outline outline-1 outline-slate-300 focus:outline-blue-500" name="password" type="password" placeholder="Your Password">
                            <span class="absolute right-0 cursor-pointer top-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                    <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div class="flex justify-center w-full mt-8">
                        <button class="w-full py-2 text-2xl font-semibold text-white bg-blue-500 rounded-md" type="submit" name="submit">Login</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>