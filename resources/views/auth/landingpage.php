    <header style="position: fixed; top: 0; width: 100%; z-index: 1000;">
        <nav class="relative w-full z-20 top-0 left-0 bg-black border-gray-200 px-2 sm:px-4 rounded dark:border-gray-200 dark:bg-white m-0 mb-5 navbar-solid-bg">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center rtl:space-x-reverse">
                    <img src="<?= urlpath('images/logo.png') ?>" alt="Logo" style="height: 50px;" />
                    <p class="pl-1"></p>
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse rounded-3xl" style="background-color: #A6AFB0;">
                    <a href="<?= urlpath('login') ?>" type="button" class="text-white border-indigo-700 bg-[#1A6E57] hover:text-white hover:bg-[#686868]  focus:ring-4 font-medium rounded-lg text-sm px-6 py-2 text-center hover-button justify-center items-center">Masuk</a>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                    <ul class="flex font-medium text-white space-x-8 items-center text-sm">
                        <li>
                            <a href="#" class="block py-0 px-3 md:p-0 text-white bg-blue-700 rounded md:bg-transparent md:text-white md:dark:text-blue-500 custom-hover" aria-current="page">Blog</a>
                        </li>
                        <li>
                            <a href="#" class="block p-0 px-3 custom-hover md:p-0 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Sports</a>
                        </li>
                        <li>
                            <a href="#" class="block p-0 px-3 md:p-0 text-white custom-hover rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Foods</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="mt-28 text-white mx-20">
            <!-- Content here -->
            <h1 class="text-4xl">Temukan Artikel Yang Menarik Disini !</h1>
            <h3 class="w-2/3 mt-5 text-tua">Jelajahi berbagai artikel menarik yang ditulis oleh span para <span class="text-muda font-bold">penulis berbakat</span> dari berbagai latar belakang. Dari tips <span class="text-muda font-bold"> gaya hidup </span>, teknologi terbaru hingga <span class="text-muda font-bold"> cerita perjalanan </span> yang memukau, temukan konten yang menginspirasi dan <span class="text-muda font-bold"> memperkaya </span> wawasan Anda setiap hari.</h3>
        </div>
        <div class="text-white mx-20 items-end flex flex-col right-0">
            <h1 class="text-4xl mt-10">Mulailah Perjalanan Blogging Anda Hari Ini!</h1>
            <h3 class="w-2/3 mt-5 text-tua text-right">Tidak ada waktu yang lebih baik dari <span class="text-muda font-bold"> sekarang </span> untuk mulai berbagi cerita Anda. <span class="text-muda font-bold"> Daftarlah </span> hari ini dan <span class="text-muda font-bold"> mulailah </span>  <span class="text-muda font-bold">perjalanan </span> blogging Anda bersama kami. Kami tidak sabar untuk <span class="text-muda font-bold"> membaca tulisan </span> Anda dan melihat dunia melalui <span class="text-muda font-bold"> perspektif </span> Anda.</h3>
            <!-- Add more content to see the scroll effect -->
        </div>
        <hr class="mt-10 bg-tua">
        <div class="mt-20 text-white flex justify-center font-bold text-2xl">
            <h1>Artikels</h1>
        </div>
        <div class="w-full -mt-5">
            <a href="" class="flex justify-center">
                <img src="<?= urlpath('images/karosel.png') ?>" class="w-full m-12 rounded-3xl" alt="">
            </a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mx-20 my-10">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md flex flex-col">
                <img src="<?= urlpath('images/logo1.png') ?>" alt="Gambar Kartu 1" class="w-full h-72 object-cover rounded-lg">
                <div class="p-4 bg-black  flex-grow flex flex-col justify-between mt-4 rounded-b-lg">
                    <h3 class="text-lg font-semibold text-white">Judul</h3>
                    <p class="mb-4" style="color: #A6AFB0">Deskripsi Kartu 1</p>
                    <hr>
                    <a href="#" class="text-white border mt-4 hover-button py-2 px-4 rounded-lg text-center" style="border-radius: 1.5rem;">Read More</a>
                </div>
            </div>
        </div>
    </main>






    <?php include 'resources/views/master/master.php'; ?>