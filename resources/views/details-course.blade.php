<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<!-- Navbar -->
<x-navbar />

<body>

    <section class="container mx-auto col-span-2 px-4 mt-6">
        <div class="w-full lg:w-2/3">

            <video class="h-full w-full rounded-lg" controls>
                <source
                  src="https://docs.material-tailwind.com/demo.mp4"
                  type="video/mp4"
                />
            </video>

            <div class="mx-auto justify-start rounded-lg p-5">

                <!-- Judul Vidio -->
                <h1 class="text-2xl mt-2 font-sans font-bold mb-2">Baca Tulis Al - Quran</h1>

                <!-- Nama Pemateri -->
                <div class="flex items-center mt-4 gap-4">
                    <img src="https://docs.material-tailwind.com/img/face-2.jpg" alt="avatar"
                      class="inline-block relative object-cover object-center !rounded-full w-12 h-12" />
                    <div>
                      <h6 class="block font-sans  text-base antialiased font-semibold leading-relaxed tracking-normal text-inherit">
                        Ustadz Hanan Ataqi
                      </h6>
                      <p class="block font-sans text-sm antialiased font-normal leading-normal text-gray-700">
                        Pemateri Baca Tulis Al - Quran
                      </p>
                    </div>
                  </div>

                <!-- Deskripsi -->
                <p class="mt-6 text-gray-700 font-sans font-semibold text-xl">Deskripsi Vidio</p>
                <p class="text-gray-400 mt-1 text-sm font-sans">Kursus ini dirancang untuk membantu peserta belajar membaca dan menulis Al-Quran dengan benar sesuai tajwid. Melalui pendekatan sistematis dan interaktif, peserta akan mempelajari huruf-huruf hijaiyah, kaidah tajwid, serta pengucapan yang tepat. Kursus ini cocok untuk segala usia dan tingkat kemampuan, mulai dari pemula hingga mereka yang ingin memperbaiki bacaan mereka. Selain itu, kursus ini juga mencakup pemahaman dasar tentang makna ayat-ayat Al-Quran, sehingga peserta tidak hanya bisa membaca dengan baik, tetapi juga memahami pesan-pesan ilahi yang terkandung di dalamnya.</p>
            </div>
        </div>


        <!-- Urutan Materi -->
        <ul aria-label="Alternative changelog feed" role="feed" class="relative flex flex-col gap-12 py-12 pl-6 text-sm lg:pl-0 before:absolute before:top-0 before:left-6 lg:before:left-[8.5rem] before:h-full before:border before:-translate-x-1/2 before:border-slate-200 before:border-dashed after:absolute after:top-6 after:left-6 lg:after:left-[8.5rem] after:bottom-6 after:border after:-translate-x-1/2 after:border-slate-200">
            <li role="article" class="relative pl-6 lg:pl-0 lg:flex lg:gap-12 before:absolute before:z-10 before:left-0 lg:before:left-[8.5rem] before:top-2 before:h-2 before:w-2 before:-translate-x-1/2 before:rounded-full before:bg-emerald-500 before:ring-2 before:ring-white">
            <h4 class="hidden text-base font-medium leading-7 text-slate-500 lg:w-28 lg:text-right lg:block">2023-02-08</h4>
            <div class="flex flex-col flex-1 gap-2">
                <h4 class="text-base font-medium text-emerald-500">Judul Materi 2 <span class="font-normal lg:hidden text-slate-500"> - 2023-01-21</span> </h4>
                <p class=" text-slate-500">Pass extended color palette to theme closures so it can be used without installing Tailwind when using npx tailwindcss.</p>
                <ul class="pl-5 list-disc text-slate-500 marker:text-emerald-500">
                <li>Remove outdated focus style fix in Preflight</li>
                <li>Fix error when not using a config file with postcss</li>
                <li>Fix issue with resolveConfig not being importable in Next.js</li>
                </ul>
            </div>
            </li>
            <li role="article" class="relative pl-6 lg:pl-0 lg:flex lg:gap-12 before:absolute before:z-10 before:left-0 lg:before:left-[8.5rem] before:top-2 before:h-2 before:w-2 before:-translate-x-1/2 before:rounded-full before:bg-emerald-500 before:ring-2 before:ring-white">
            <h4 class="hidden text-base font-medium leading-7 text-slate-500 lg:w-28 lg:text-right lg:block">2023-01-21</h4>
            <div class="flex flex-col flex-1 gap-2">
                <h4 class="text-base font-medium text-emerald-500">Judul Mataeri 3 <span class="font-normal lg:hidden text-slate-500"> - 2023-01-21</span> </h4>
                <p class=" text-slate-500">Pass extended color palette to theme closures so it can be used without installing Tailwind when using npx tailwindcss.</p>
                <ul class="pl-5 list-disc text-slate-500 marker:text-emerald-500">
                <li>Remove outdated focus style fix in Preflight</li>
                <li>Fix error when not using a config file with postcss</li>
                <li>Fix issue with resolveConfig not being importable in Next.js</li>
                </ul>
            </div>
            </li>
            <li role="article" class="relative pl-6 lg:pl-0 lg:flex lg:gap-12 before:absolute before:z-10 before:left-0 lg:before:left-[8.5rem] before:top-2 before:h-2 before:w-2 before:-translate-x-1/2 before:rounded-full before:bg-emerald-500 before:ring-2 before:ring-white">
            <h4 class="hidden text-base font-medium leading-7 text-slate-500 lg:w-28 lg:text-right lg:block">2023-01-18</h4>
            <div class="flex flex-col flex-1 gap-2">
                <h4 class="text-base font-medium text-emerald-500">Judul Materi 4 <span class="font-normal lg:hidden text-slate-500"> - 2023-01-18</span></h4>
                <p class=" text-slate-500">Although this is a bugfix it could affect your site if you were working around the bug in your own code by not prefixing the group class.</p>
                <ul class="pl-5 list-disc text-slate-500 marker:text-emerald-500">
                <li>Added utilities for screenreader visibility</li>
                <li>First, last, even, and odd child variants</li>
                <li>Disabled variant</li>
                <li>Visited variant</li>
                </ul>
            </div>
            </li>
            <li role="article" class="relative pl-6 lg:pl-0 lg:flex lg:gap-12 before:absolute before:z-10 before:left-0 lg:before:left-[8.5rem] before:top-2 before:h-2 before:w-2 before:-translate-x-1/2 before:rounded-full before:bg-emerald-500 before:ring-2 before:ring-white">
                <h4 class="hidden text-base font-medium leading-7 text-slate-500 lg:w-28 lg:text-right lg:block">2023-01-18</h4>
                <div class="flex flex-col flex-1 gap-2">
                    <h4 class="text-base font-medium text-emerald-500">Judul Materi 5 <span class="font-normal lg:hidden text-slate-500"> - 2023-01-18</span></h4>
                    <p class=" text-slate-500">Although this is a bugfix it could affect your site if you were working around the bug in your own code by not prefixing the group class.</p>
                    <ul class="pl-5 list-disc text-slate-500 marker:text-emerald-500">
                    <li>Added utilities for screenreader visibility</li>
                    <li>First, last, even, and odd child variants</li>
                    <li>Disabled variant</li>
                    <li>Visited variant</li>
                    </ul>
                </div>
                </li>
        </ul>
        <!-- End Alternative Changelog feed -->
    </section>



</body>

<!-- Footer -->
<x-footer />
</html>
