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

<section>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <header>
            <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-2 sm:py-12 lg:px-2">
              <div class="sm:flex sm:items-center sm:justify-between">
                <div class="text-center sm:text-left">
                  <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">All Courses</h1>

                  <p class="mt-1.5 text-sm text-gray-500">Silahkan Jelajahi dan Pelajari yang kamu butuhkan di Islamy 🎉</p>
                </div>

                <div class="flex gap-8">
                    <div class="relative">
                      <details class="group [&_summary::-webkit-details-marker]:hidden">
                        <summary
                          class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600"
                        >
                          <span class="text-sm font-medium"> Sort by </span>

                          <span class="transition group-open:-rotate-180">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke-width="1.5"
                              stroke="currentColor"
                              class="h-4 w-4"
                            >
                              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                          </span>
                        </summary>

                        <div class="z-50 group-open:absolute group-open:start-0 group-open:top-auto group-open:mt-2">
                          <div class="w-96 rounded border border-gray-200 bg-white">
                            <header class="flex items-center justify-between p-4">
                              <span class="text-sm text-gray-700"> 0 Selected </span>

                              <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                                Reset
                              </button>
                            </header>

                            <ul class="space-y-1 border-t border-gray-200 p-4">
                              <li>
                                <label for="FilterInStock" class="inline-flex items-center gap-2">
                                  <input type="checkbox" id="FilterInStock" class="size-5 rounded border-gray-300" />

                                  <span class="text-sm font-medium text-gray-700"> In Stock (5+) </span>
                                </label>
                              </li>

                              <li>
                                <label for="FilterPreOrder" class="inline-flex items-center gap-2">
                                  <input type="checkbox" id="FilterPreOrder" class="size-5 rounded border-gray-300" />

                                  <span class="text-sm font-medium text-gray-700"> Pre Order (3+) </span>
                                </label>
                              </li>

                              <li>
                                <label for="FilterOutOfStock" class="inline-flex items-center gap-2">
                                  <input
                                    type="checkbox"
                                    id="FilterOutOfStock"
                                    class="size-5 rounded border-gray-300"
                                  />

                                  <span class="text-sm font-medium text-gray-700"> Out of Stock (10+) </span>
                                </label>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </details>
                    </div>
              </div>
            </div>
          </header>

      <div class="mt-8 block lg:hidden">
        <button
          class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600"
        >
          <span class="text-sm font-medium"> Filters & Sorting </span>

          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="size-4 rtl:rotate-180"
          >
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
          </svg>
        </button>
      </div>

      <div class="mt-4 lg:mt-8 lg:grid lg:grid-cols-4 lg:items-start lg:gap-8">
        <div class="hidden space-y-4 lg:block">


          <div>
            <p class="block text-xs font-medium text-gray-700">Filters</p>

            <div class="mt-1 space-y-2">
              <details
                class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden"
              >
                <summary
                  class="flex cursor-pointer items-center justify-between gap-2 p-4 text-gray-900 transition"
                >
                  <span class="text-sm font-medium"> Categories </span>

                  <span class="transition group-open:-rotate-180">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-4 w-4"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                      />
                    </svg>
                  </span>
                </summary>

                <div class="border-t border-gray-200 bg-white">
                  <header class="flex items-center justify-between p-4">
                    <span class="text-sm text-gray-700"> 0 Selected </span>

                    <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                      Reset
                    </button>
                  </header>

                  <ul class="space-y-1 border-t border-gray-200 p-4">
                    <li>
                      <label for="FilterInStock" class="inline-flex items-center gap-2">
                        <input
                          type="checkbox"
                          id="FilterInStock"
                          class="size-5 rounded border-gray-300"
                        />

                        <span class="text-sm font-medium text-gray-700"> In Stock (5+) </span>
                      </label>
                    </li>

                    <li>
                      <label for="FilterPreOrder" class="inline-flex items-center gap-2">
                        <input
                          type="checkbox"
                          id="FilterPreOrder"
                          class="size-5 rounded border-gray-300"
                        />

                        <span class="text-sm font-medium text-gray-700"> Pre Order (3+) </span>
                      </label>
                    </li>

                    <li>
                      <label for="FilterOutOfStock" class="inline-flex items-center gap-2">
                        <input
                          type="checkbox"
                          id="FilterOutOfStock"
                          class="size-5 rounded border-gray-300"
                        />

                        <span class="text-sm font-medium text-gray-700"> Out of Stock (10+) </span>
                      </label>
                    </li>
                  </ul>
                </div>
              </details>

              <details
                class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden">
                <summary
                  class="flex cursor-pointer items-center justify-between gap-2 p-4 text-gray-900 transition"
                >
                  <span class="text-sm font-medium"> Price </span>

                  <span class="transition group-open:-rotate-180">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-4 w-4"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                      />
                    </svg>
                  </span>
                </summary>

                <div class="border-t border-gray-200 bg-white">
                  <header class="flex items-center justify-between p-4">
                    <span class="text-sm text-gray-700"> The highest price is $600 </span>

                    <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                      Reset
                    </button>
                  </header>

                  <div class="border-t border-gray-200 p-4">
                    <div class="flex justify-between gap-4">
                      <label for="FilterPriceFrom" class="flex items-center gap-2">
                        <span class="text-sm text-gray-600">$</span>

                        <input
                          type="number"
                          id="FilterPriceFrom"
                          placeholder="From"
                          class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                        />
                      </label>

                      <label for="FilterPriceTo" class="flex items-center gap-2">
                        <span class="text-sm text-gray-600">$</span>

                        <input
                          type="number"
                          id="FilterPriceTo"
                          placeholder="To"
                          class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                        />
                      </label>
                    </div>
                  </div>
                </div>
              </details>

              <details
                class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden"
              >
                <summary
                  class="flex cursor-pointer items-center justify-between gap-2 p-4 text-gray-900 transition"
                >
                  <span class="text-sm font-medium"> Skill Levels </span>

                  <span class="transition group-open:-rotate-180">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-4 w-4"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                      />
                    </svg>
                  </span>
                </summary>

                <div class="border-t border-gray-200 bg-white">
                  <header class="flex items-center justify-between p-4">
                    <span class="text-sm text-gray-700"> 0 Selected </span>

                    <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                      Reset
                    </button>
                  </header>

                  <ul class="space-y-1 border-t border-gray-200 p-4">
                    <li>
                      <label for="FilterRed" class="inline-flex items-center gap-2">
                        <input
                          type="checkbox"
                          id="FilterRed"
                          class="size-5 rounded border-gray-300"
                        />

                        <span class="text-sm font-medium text-gray-700"> Red </span>
                      </label>
                    </li>

                    <li>
                      <label for="FilterBlue" class="inline-flex items-center gap-2">
                        <input
                          type="checkbox"
                          id="FilterBlue"
                          class="size-5 rounded border-gray-300"
                        />

                        <span class="text-sm font-medium text-gray-700"> Blue </span>
                      </label>
                    </li>

                    <li>
                      <label for="FilterGreen" class="inline-flex items-center gap-2">
                        <input
                          type="checkbox"
                          id="FilterGreen"
                          class="size-5 rounded border-gray-300"
                        />

                        <span class="text-sm font-medium text-gray-700"> Green </span>
                      </label>
                    </li>

                    <li>
                      <label for="FilterOrange" class="inline-flex items-center gap-2">
                        <input
                          type="checkbox"
                          id="FilterOrange"
                          class="size-5 rounded border-gray-300"
                        />

                        <span class="text-sm font-medium text-gray-700"> Orange </span>
                      </label>
                    </li>

                    <li>
                      <label for="FilterPurple" class="inline-flex items-center gap-2">
                        <input
                          type="checkbox"
                          id="FilterPurple"
                          class="size-5 rounded border-gray-300"
                        />

                        <span class="text-sm font-medium text-gray-700"> Purple </span>
                      </label>
                    </li>

                    <li>
                      <label for="FilterTeal" class="inline-flex items-center gap-2">
                        <input
                          type="checkbox"
                          id="FilterTeal"
                          class="size-5 rounded border-gray-300"
                        />

                        <span class="text-sm font-medium text-gray-700"> Teal </span>
                      </label>
                    </li>
                  </ul>
                </div>
              </details>
              <details
                class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden"
              >
                <summary
                  class="flex cursor-pointer items-center justify-between gap-2 p-4 text-gray-900 transition"
                >
                  <span class="text-sm font-medium"> Mentor </span>

                  <span class="transition group-open:-rotate-180">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-4 w-4"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                      />
                    </svg>
                  </span>
                </summary>

                <div class="border-t border-gray-200 bg-white">
                  <header class="flex items-center justify-between p-4">
                    <span class="text-sm text-gray-700"> 0 Selected </span>

                    <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                      Reset
                    </button>
                  </header>

                  <ul class="space-y-1 border-t border-gray-200 p-4">
                    <li>
                      <label for="FilterInStock" class="inline-flex items-center gap-2">
                        <input
                          type="checkbox"
                          id="FilterInStock"
                          class="size-5 rounded border-gray-300"
                        />

                        <span class="text-sm font-medium text-gray-700"> In Stock (5+) </span>
                      </label>
                    </li>

                    <li>
                      <label for="FilterPreOrder" class="inline-flex items-center gap-2">
                        <input
                          type="checkbox"
                          id="FilterPreOrder"
                          class="size-5 rounded border-gray-300"
                        />

                        <span class="text-sm font-medium text-gray-700"> Pre Order (3+) </span>
                      </label>
                    </li>

                    <li>
                      <label for="FilterOutOfStock" class="inline-flex items-center gap-2">
                        <input
                          type="checkbox"
                          id="FilterOutOfStock"
                          class="size-5 rounded border-gray-300"
                        />

                        <span class="text-sm font-medium text-gray-700"> Out of Stock (10+) </span>
                      </label>
                    </li>
                  </ul>
                </div>
              </details>
            </div>
          </div>
        </div>

        <div class="lg:col-span-3">
          <ul class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Card Pertama -->
            <li>
                <a href="#" class="group relative block overflow-hidden">
                    <button
                      class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75"
                    >
                      <span class="sr-only">Wishlist</span>

                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-4 w-4"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                        />
                      </svg>
                    </button>

                    <img
                      src="https://images.unsplash.com/photo-1574545640323-59dc7a2b4a6d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDd8fHxlbnwwfHx8fHw%3D"
                      alt=""
                      class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
                    />

                    <div class="relative border border-gray-100 bg-white p-6">
                        <span class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-purple-400 border border-purple-400">Islami</span>
                      <h3 class="mt-4 text-lg font-medium text-gray-900">Baca Tulis Al - Quran</h3>

                      <p class="mt-1.5 text-sm text-gray-700">Free</p>

                      <form class="mt-4">
                        <button
                          class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105"
                        >
                          Join Sekarang
                        </button>
                      </form>
                    </div>
                  </a>
            </li>

            <!-- Card Pertama -->
            <li>
                <a href="#" class="group relative block overflow-hidden">
                    <button
                      class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75"
                    >
                      <span class="sr-only">Wishlist</span>

                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-4 w-4"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                        />
                      </svg>
                    </button>

                    <img
                      src="https://images.unsplash.com/photo-1645579954839-9a91874deb4d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDEyfHx8ZW58MHx8fHx8"
                      alt=""
                      class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
                    />

                    <div class="relative border border-gray-100 bg-white p-6">
                        <span class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-purple-400 border border-purple-400">Islami</span>

                      <h3 class="mt-4 text-lg font-medium text-gray-900">Aqidah dan Akhlak</h3>

                      <p class="mt-1.5 text-sm text-gray-700">Free</p>

                      <form class="mt-4">
                        <button
                          class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105"
                        >
                          Join Sekarang
                        </button>
                      </form>
                    </div>
                  </a>
            </li>

            <!-- Card Pertama -->
            <li>
                <a href="#" class="group relative block overflow-hidden">
                    <button
                      class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75"
                    >
                      <span class="sr-only">Wishlist</span>

                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-4 w-4"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                        />
                      </svg>
                    </button>

                    <img
                      src="https://images.unsplash.com/photo-1655438809467-5bb97320cf10?q=80&w=1919&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                      alt=""
                      class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
                    />

                    <div class="relative border border-gray-100 bg-white p-6">
                        <span class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-purple-400 border border-purple-400">Islami</span>

                      <h3 class="mt-4 text-lg font-medium text-gray-900">Fiqh Puasa</h3>

                      <p class="mt-1.5 text-sm text-gray-700">Free</p>

                      <form class="mt-4">
                        <button
                          class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105"
                        >
                          Join Sekarang
                        </button>
                      </form>
                    </div>
                  </a>
            </li>

            <!-- Card Pertama -->
            <li>
                <a href="#" class="group relative block overflow-hidden">
                    <button
                      class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75"
                    >
                      <span class="sr-only">Wishlist</span>

                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-4 w-4"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                        />
                      </svg>
                    </button>

                    <img
                      src="https://images.unsplash.com/photo-1655438809467-5bb97320cf10?q=80&w=1919&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                      alt=""
                      class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
                    />

                    <div class="relative border border-gray-100 bg-white p-6">
                        <span class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-purple-400 border border-purple-400">Islami</span>

                      <h3 class="mt-4 text-lg font-medium text-gray-900">Fiqh Puasa</h3>

                      <p class="mt-1.5 text-sm text-gray-700">Free</p>

                      <form class="mt-4">
                        <button
                          class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105"
                        >
                          Join Sekarang
                        </button>
                      </form>
                    </div>
                  </a>
            </li>

            <!-- Card Pertama -->
            <li>
                <a href="#" class="group relative block overflow-hidden">
                    <button
                      class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75"
                    >
                      <span class="sr-only">Wishlist</span>

                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-4 w-4"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                        />
                      </svg>
                    </button>

                    <img
                      src="https://images.unsplash.com/photo-1655438809467-5bb97320cf10?q=80&w=1919&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                      alt=""
                      class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
                    />

                    <div class="relative border border-gray-100 bg-white p-6">
                        <span class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-purple-400 border border-purple-400">Islami</span>

                      <h3 class="mt-4 text-lg font-medium text-gray-900">Fiqh Puasa</h3>

                      <p class="mt-1.5 text-sm text-gray-700">Free</p>

                      <form class="mt-4">
                        <button
                          class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105"
                        >
                          Join Sekarang
                        </button>
                      </form>
                    </div>
                  </a>
            </li>

            <!-- Card Pertama -->
            <li>
                <a href="#" class="group relative block overflow-hidden">
                    <button
                      class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75"
                    >
                      <span class="sr-only">Wishlist</span>

                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-4 w-4"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                        />
                      </svg>
                    </button>

                    <img
                      src="https://images.unsplash.com/photo-1655438809467-5bb97320cf10?q=80&w=1919&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                      alt=""
                      class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
                    />

                    <div class="relative border border-gray-100 bg-white p-6">
                        <span class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-purple-400 border border-purple-400">Islami</span>

                      <h3 class="mt-4 text-lg font-medium text-gray-900">Fiqh Puasa</h3>

                      <p class="mt-1.5 text-sm text-gray-700">Free</p>

                      <form class="mt-4">
                        <button
                          class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105"
                        >
                          Join Sekarang
                        </button>
                      </form>
                    </div>
                  </a>
            </li>

            <!-- Card Pertama -->
            <li>
                <a href="#" class="group relative block overflow-hidden">
                    <button
                      class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75"
                    >
                      <span class="sr-only">Wishlist</span>

                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-4 w-4"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                        />
                      </svg>
                    </button>

                    <img
                      src="https://images.unsplash.com/photo-1655438809467-5bb97320cf10?q=80&w=1919&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                      alt=""
                      class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
                    />

                    <div class="relative border border-gray-100 bg-white p-6">
                        <span class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-purple-400 border border-purple-400">Islami</span>

                      <h3 class="mt-4 text-lg font-medium text-gray-900">Fiqh Puasa</h3>

                      <p class="mt-1.5 text-sm text-gray-700">Free</p>

                      <form class="mt-4">
                        <button
                          class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105"
                        >
                          Join Sekarang
                        </button>
                      </form>
                    </div>
                  </a>
            </li>

            <!-- Card Pertama -->
            <li>
                <a href="#" class="group relative block overflow-hidden">
                    <button
                      class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75"
                    >
                      <span class="sr-only">Wishlist</span>

                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-4 w-4"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                        />
                      </svg>
                    </button>

                    <img
                      src="https://images.unsplash.com/photo-1655438809467-5bb97320cf10?q=80&w=1919&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                      alt=""
                      class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
                    />

                    <div class="relative border border-gray-100 bg-white p-6">
                        <span class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-purple-400 border border-purple-400">Islami</span>

                      <h3 class="mt-4 text-lg font-medium text-gray-900">Fiqh Puasa</h3>

                      <p class="mt-1.5 text-sm text-gray-700">Free</p>

                      <form class="mt-4">
                        <button
                          class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105"

                          Join Sekarang
                        </button>
                      </form>
                    </div>
                  </a>
            </li>

            <!-- Card Kedua -->
            <li>
                <a href="#" class="group relative block overflow-hidden">
                    <button
                      class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75"
                    >
                      <span class="sr-only">Wishlist</span>

                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-4 w-4"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                        />
                      </svg>
                    </button>

                    <img
                      src="https://images.unsplash.com/photo-1655438809467-5bb97320cf10?q=80&w=1919&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                      alt=""
                      class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
                    />

                    <div class="relative border border-gray-100 bg-white p-6">
                        <span class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-purple-400 border border-purple-400">Islami</span>

                      <h3 class="mt-4 text-lg font-medium text-gray-900">Fiqh Puasa</h3>

                      <p class="mt-1.5 text-sm text-gray-700">Free</p>

                      <form class="mt-4">
                        <button
                          class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105"
                        >
                          Join Sekarang
                        </button>
                      </form>
                    </div>
                  </a>
            </li>

            <!-- Card Pertama -->
            <li>
                <a href="#" class="group relative block overflow-hidden">
                    <button
                      class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75"
                    >
                      <span class="sr-only">Wishlist</span>

                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-4 w-4"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                        />
                      </svg>
                    </button>

                    <img
                      src="https://images.unsplash.com/photo-1655438809467-5bb97320cf10?q=80&w=1919&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                      alt=""
                      class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
                    />

                    <div class="relative border border-gray-100 bg-white p-6">
                        <span class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-purple-400 border border-purple-400">Islami</span>

                      <h3 class="mt-4 text-lg font-medium text-gray-900">Fiqh Puasa</h3>

                      <p class="mt-1.5 text-sm text-gray-700">Free</p>

                      <form class="mt-4">
                        <button
                          class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105"
                        >
                          Join Sekarang
                        </button>
                      </form>
                    </div>
                  </a>
            </li>

            <!-- Card Pertama -->
            <li>
                <a href="#" class="group relative block overflow-hidden">
                    <button
                      class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75"
                    >
                      <span class="sr-only">Wishlist</span>

                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-4 w-4"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                        />
                      </svg>
                    </button>

                    <img
                      src="https://images.unsplash.com/photo-1655438809467-5bb97320cf10?q=80&w=1919&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                      alt=""
                      class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
                    />

                    <div class="relative border border-gray-100 bg-white p-6">
                        <span class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-purple-400 border border-purple-400">Islami</span>

                      <h3 class="mt-4 text-lg font-medium text-gray-900">Fiqh Puasa</h3>

                      <p class="mt-1.5 text-sm text-gray-700">Free</p>

                      <form class="mt-4">
                        <button
                          class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105"
                        >
                          Join Sekarang
                        </button>
                      </form>
                    </div>
                  </a>
            </li>

            <!-- Card Pertama -->
            <li>
                <a href="#" class="group relative block overflow-hidden">
                    <button
                      class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75"
                    >
                      <span class="sr-only">Wishlist</span>

                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-4 w-4"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                        />
                      </svg>
                    </button>

                    <img
                      src="https://images.unsplash.com/photo-1655438809467-5bb97320cf10?q=80&w=1919&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                      alt=""
                      class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
                    />

                    <div class="relative border border-gray-100 bg-white p-6">
                        <span class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-purple-400 border border-purple-400">Islami</span>

                      <h3 class="mt-4 text-lg font-medium text-gray-900">Fiqh Puasa</h3>

                      <p class="mt-1.5 text-sm text-gray-700">Free</p>

                      <form class="mt-4">
                        <button
                          class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105"
                        >
                          Join Sekarang
                        </button>
                      </form>
                    </div>
                  </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</body>
<!-- Footer -->
<x-footer />
</html>
