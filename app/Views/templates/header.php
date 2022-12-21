<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontSize: {
                        '3xl': '1.953rem',
                        '4xl': '2.441rem',
                        '5xl': '3.052rem',
                    }
                }
            }
        }
    </script>
    <link rel="icon" type="image/x-icon" href="https://www.designfreelogoonline.com/wp-content/uploads/2021/08/1167-motorcycle-02.png">
    <title><?= esc($title) ?> | Klub Motor Jagoan Neon</title>
</head>

<body>

    <nav class="bg-gray-200 border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-800 z-20">
        <a href="" class="flex items-center justify-center">
            <img src="https://www.designfreelogoonline.com/wp-content/uploads/2021/08/1167-motorcycle-02.png" class="h-16 mr-4" alt="Logo" />
            <h1 class="self-center text-2xl font-bold whitespace-nowrap dark:text-white">Klub Motor Jagoan Neon</h1>
        </a>
        <div class="flex flex-wrap items-center justify-between">
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden md:block md:w-full" id="navbar-default">
                <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-gray-200 dark:bg-gray-800 md:dark:bg-gray-800 dark:border-gray-700 md:w-full">
                    <li class="flex-1">
                        <a href="#" class="text-lg text-center block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent <?php if ($page === 'home') echo 'font-bold underline text-blue-700 md:dark:text-white" aria-current="page"'; else echo '"' ?> >Home</a>
                    </li>
                    <li class="flex-1">
                        <a href="#" class="text-lg text-center block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent <?php if ($page === 'profile')echo 'font-bold underline text-blue-700 md:dark:text-white" aria-current="page"'; else echo '"' ?> >Profile</a>
                    </li>
                    <li class="flex-1">
                        <a href="#" class="text-lg text-center block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent <?php if ($page === 'visimisi')echo 'font-bold underline text-blue-700 md:dark:text-white" aria-current="page"'; else echo '"' ?> >Visi dan Misi</a>
                    </li>
                    <li class="flex-1">
                        <a href="#" class="text-lg text-center block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent <?php if ($page === 'produk')echo 'font-bold underline text-blue-700 md:dark:text-white" aria-current="page"'; else echo '"' ?> >Produk Kami</a>
                    </li>
                    <li class="flex-1">
                        <a href="#" class="text-lg text-center block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent <?php if ($page === 'kontak')echo 'font-bold underline text-blue-700 md:dark:text-white" aria-current="page"'; else echo '"' ?> >Kontak Kami</a>
                    </li>
                    <li class="flex-1">
                        <a href="#" class="text-lg text-center block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent <?php if ($page === 'aboutus')echo 'font-bold underline text-blue-700 md:dark:text-white" aria-current="page"'; else echo '"' ?> >About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="grid grid-cols-6 min-h-screen bg-gray-100 dark:bg-gray-700">