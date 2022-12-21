<section class="col-span-5">
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg">
            <h1 class="text-center text-2xl font-bold text-blue-700 sm:text-3xl">
                Jadi bagian dari kami sekarang
            </h1>

            <p class="mx-auto mt-4 max-w-md text-center text-gray-500 dark:text-gray-400">
                Jika Anda memiliki akun, silakan masuk. Jika Anda belum memiliki akun, silakan daftar.
            </p>

            <form action="#" class="mt-8 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="FirstName" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                        Nama Depan
                    </label>

                    <input type="text" id="FirstName" name="first_name" class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200" />
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="LastName" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                        Nama Belakang
                    </label>

                    <input type="text" id="LastName" name="last_name" class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200" />
                </div>

                <div class="col-span-6">
                    <label for="Email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                        Email
                    </label>

                    <input type="email" id="Email" name="email" class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200" />
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="Password" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                        Password
                    </label>

                    <input type="password" id="Password" name="password" class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200" />
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="PasswordConfirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                        Konfirmasi Password
                    </label>

                    <input type="password" id="PasswordConfirmation" name="password_confirmation" class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200" />
                </div>

                <div class="col-span-6">
                    <label for="MarketingAccept" class="flex gap-4">
                        <input type="checkbox" id="MarketingAccept" name="marketing_accept" class="h-5 w-5 rounded-md border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800" />

                        <span class="text-sm text-gray-700 dark:text-gray-200">
                            Saya ingin mendapatkan email tentang event, update produk, dan penawaran khusus dari kami.
                    </label>
                </div>

                <div class="col-span-6">
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        Dengan membuat akun, kamu menyetujui
                        <a href="#" class="text-gray-700 underline dark:text-gray-200">
                            terms and conditions
                        </a>
                        dan
                        <a href="#" class="text-gray-700 underline dark:text-gray-200">
                            privacy policy </a>
                        kami.
                    </p>
                </div>

                <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                    <button class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-700 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500 dark:hover:bg-blue-800 dark:hover:text-white">
                        Buat akun
                    </button>

                    <p class="mt-4 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
                        Sudah memiliki akun?
                        <a href="/signin" class="text-gray-700 underline dark:text-gray-200">Sign in</a>.
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>