<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Complete Navbar with Tailwind CSS</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="relative isolate flex items-center gap-x-6 overflow-hidden bg-gray-50 px-6 py-2.5 sm:px-3.5 sm:before:flex-1">
        <div class="absolute left-[max(-7rem,calc(50%-52rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
          <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
        </div>
        <div class="absolute left-[max(45rem,calc(50%+8rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
          <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
        </div>
        <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
          <p class="text-sm leading-6 text-gray-900">
            <strong class="font-semibold">GeneriCon 2023</strong><svg viewBox="0 0 2 2" class="mx-2 inline h-0.5 w-0.5 fill-current" aria-hidden="true"><circle cx="1" cy="1" r="1" /></svg>Join us in Denver from June 7 – 9 to see what’s coming next.
          </p>
          <a href="#" class="flex-none rounded-full bg-gray-900 px-3.5 py-1 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">Register now <span aria-hidden="true">&rarr;</span></a>
        </div>
        <div class="flex flex-1 justify-end">
          <button type="button" class="-m-3 p-3 focus-visible:outline-offset-[-4px]">
            <span class="sr-only">Dismiss</span>
            <svg class="h-5 w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
            </svg>
          </button>
        </div>
      </div>


  <nav class="bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <div class="flex">
          <div class="flex  items-center" style="margin-left: -80px;">
            <img class="h-52 w-52 object-cover" src="/logo.png" alt="User Profile">
          </div>
          <div class="hidden sm:ml-6 sm:flex sm:space-x-8" style="margin-left: -50px;">
            <a href="/" class="text-gray-500 hover:text-blue-500 inline-flex items-center px-1 pt-1 border-b-2 border-transparent hover:border-blue-500 text-lg hover:text-xl hover:font-bold font-semibold">Home</a>
            <a href="/2" class="text-gray-500 hover:text-blue-500 inline-flex items-center px-1 pt-1 border-b-2 border-transparent hover:border-blue-500 text-lg hover:text-xl hover:font-bold font-semibold">Courses</a>
            <a href="/3" class="text-gray-500 hover:text-blue-500 inline-flex items-center px-1 pt-1 border-b-2 border-transparent hover:border-blue-500 text-lg hover:text-xl hover:font-bold font-semibold">Blog</a>
            <a href="/4" class="text-gray-500 hover:text-blue-500 inline-flex items-center px-1 pt-1 border-b-2 border-transparent hover:border-blue-500 text-lg hover:text-xl hover:font-bold font-semibold">Contact</a>
          </div>
        </div>


        <div class="flex items-center space-x-4">
          <!-- Search Form -->
          <div class="bg-gray-100 py-1 px-5 rounded-full">
            <div class="flex items-center">

                <div class="flex gap-5">
                    <div class="relative">
                    <details class="group [&_summary::-webkit-details-marker]:hidden">
                        <summary
                        class="flex cursor-pointer items-center gap-2 "
                        >
                        <span class="text-sm font-medium">Categories </span>

                        <span class="">
                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2_953)">
                                <path d="M10.5939 11.7778C10.2257 11.7778 9.92719 12.0763 9.92719 12.4445C9.92719 12.8126 10.2257 13.1111 10.5939 13.1111V11.7778ZM15.9272 13.1111C16.2954 13.1111 16.5939 12.8126 16.5939 12.4445C16.5939 12.0763 16.2954 11.7778 15.9272 11.7778V13.1111ZM13.9272 9.77778C13.9272 9.40961 13.6287 9.11112 13.2605 9.11112C12.8923 9.11112 12.5939 9.40961 12.5939 9.77778H13.9272ZM12.5939 15.1111C12.5939 15.4793 12.8923 15.7778 13.2605 15.7778C13.6287 15.7778 13.9272 15.4793 13.9272 15.1111H12.5939ZM10.5939 13.1111H13.2605V11.7778H10.5939V13.1111ZM15.9272 11.7778H13.2605V13.1111H15.9272V11.7778ZM13.9272 12.4445V9.77778H12.5939V12.4445H13.9272ZM12.5939 12.4445V15.1111H13.9272V12.4445H12.5939ZM2.37874 5.6889V1.42223H1.04541V5.6889H2.37874ZM2.37874 1.42223C2.37874 1.45759 2.3647 1.49151 2.33969 1.51651L1.39688 0.573701C1.17184 0.798745 1.04541 1.10397 1.04541 1.42223H2.37874ZM2.33969 1.51651C2.31469 1.54152 2.28077 1.55556 2.24541 1.55556V0.222229C1.92715 0.222229 1.62193 0.348657 1.39688 0.573701L2.33969 1.51651ZM2.24541 1.55556H6.51208V0.222229H2.24541V1.55556ZM6.51208 1.55556C6.47672 1.55556 6.44281 1.54152 6.41779 1.51651L7.3606 0.573701C7.13556 0.348657 6.83033 0.222229 6.51208 0.222229V1.55556ZM6.41779 1.51651C6.39279 1.4915 6.37874 1.45759 6.37874 1.42223H7.71208C7.71208 1.10397 7.58565 0.798745 7.3606 0.573701L6.41779 1.51651ZM6.37874 1.42223V5.6889H7.71208V1.42223H6.37874ZM6.37874 5.6889C6.37874 5.65354 6.39279 5.61962 6.41779 5.59461L7.3606 6.53742C7.58565 6.31238 7.71208 6.00715 7.71208 5.6889H6.37874ZM6.41779 5.59461C6.44281 5.56961 6.47672 5.55556 6.51208 5.55556V6.8889C6.83033 6.8889 7.13556 6.76247 7.3606 6.53742L6.41779 5.59461ZM6.51208 5.55556H2.24541V6.8889H6.51208V5.55556ZM2.24541 5.55556C2.28077 5.55556 2.31468 5.56961 2.33969 5.59461L1.39688 6.53742C1.62193 6.76247 1.92715 6.8889 2.24541 6.8889V5.55556ZM2.33969 5.59461C2.3647 5.61962 2.37874 5.65354 2.37874 5.6889H1.04541C1.04541 6.00715 1.17184 6.31238 1.39688 6.53742L2.33969 5.59461ZM2.37874 14.5778V10.3111H1.04541V14.5778H2.37874ZM2.37874 10.3111C2.37874 10.3465 2.3647 10.3804 2.33969 10.4054L1.39688 9.46258C1.17184 9.68765 1.04541 9.9929 1.04541 10.3111H2.37874ZM2.33969 10.4054C2.31468 10.4304 2.28077 10.4445 2.24541 10.4445V9.11112C1.92715 9.11112 1.62193 9.23752 1.39688 9.46258L2.33969 10.4054ZM2.24541 10.4445H6.51208V9.11112H2.24541V10.4445ZM6.51208 10.4445C6.47672 10.4445 6.44281 10.4304 6.41779 10.4054L7.3606 9.46258C7.13556 9.23752 6.83033 9.11112 6.51208 9.11112V10.4445ZM6.41779 10.4054C6.39279 10.3804 6.37874 10.3465 6.37874 10.3111H7.71208C7.71208 9.9929 7.58565 9.68765 7.3606 9.46258L6.41779 10.4054ZM6.37874 10.3111V14.5778H7.71208V10.3111H6.37874ZM6.37874 14.5778C6.37874 14.5424 6.39279 14.5085 6.41779 14.4835L7.3606 15.4263C7.58565 15.2013 7.71208 14.896 7.71208 14.5778H6.37874ZM6.41779 14.4835C6.44281 14.4585 6.47672 14.4445 6.51208 14.4445V15.7778C6.83033 15.7778 7.13556 15.6514 7.3606 15.4263L6.41779 14.4835ZM6.51208 14.4445H2.24541V15.7778H6.51208V14.4445ZM2.24541 14.4445C2.28077 14.4445 2.31468 14.4585 2.33969 14.4835L1.39688 15.4263C1.62193 15.6514 1.92715 15.7778 2.24541 15.7778V14.4445ZM2.33969 14.4835C2.3647 14.5085 2.37874 14.5424 2.37874 14.5778H1.04541C1.04541 14.896 1.17184 15.2013 1.39688 15.4263L2.33969 14.4835ZM11.2676 5.6889V1.42223H9.9343V5.6889H11.2676ZM11.2676 1.42223C11.2676 1.45759 11.2536 1.4915 11.2286 1.51651L10.2858 0.573701C10.0607 0.798745 9.9343 1.10397 9.9343 1.42223H11.2676ZM11.2286 1.51651C11.2035 1.54152 11.1697 1.55556 11.1343 1.55556V0.222229C10.8161 0.222229 10.5108 0.348657 10.2858 0.573701L11.2286 1.51651ZM11.1343 1.55556H15.401V0.222229H11.1343V1.55556ZM15.401 1.55556C15.3656 1.55556 15.3317 1.54152 15.3067 1.51651L16.2495 0.573701C16.0244 0.348657 15.7192 0.222229 15.401 0.222229V1.55556ZM15.3067 1.51651C15.2817 1.4915 15.2676 1.45759 15.2676 1.42223H16.601C16.601 1.10397 16.4746 0.798745 16.2495 0.573701L15.3067 1.51651ZM15.2676 1.42223V5.6889H16.601V1.42223H15.2676ZM15.2676 5.6889C15.2676 5.65354 15.2817 5.61962 15.3067 5.59461L16.2495 6.53742C16.4746 6.31238 16.601 6.00715 16.601 5.6889H15.2676ZM15.3067 5.59461C15.3317 5.56961 15.3656 5.55556 15.401 5.55556V6.8889C15.7192 6.8889 16.0244 6.76247 16.2495 6.53742L15.3067 5.59461ZM15.401 5.55556H11.1343V6.8889H15.401V5.55556ZM11.1343 5.55556C11.1697 5.55556 11.2035 5.56961 11.2286 5.59461L10.2858 6.53742C10.5108 6.76247 10.8161 6.8889 11.1343 6.8889V5.55556ZM11.2286 5.59461C11.2536 5.61962 11.2676 5.65354 11.2676 5.6889H9.9343C9.9343 6.00715 10.0607 6.31238 10.2858 6.53742L11.2286 5.59461Z" fill="#5BBCFF"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2_953">
                                <rect width="16" height="16" fill="white" transform="translate(0.823242)"/>
                                </clipPath>
                                </defs>
                                </svg>

                        </span>
                        </summary>

                        <div class="z-50 group-open:absolute group-open:start-0 group-open:top-auto group-open:mt-6">
                        <div class="w-96 rounded border border-gray-200 bg-white">
                            <header class="flex items-center justify-between p-4">
                            <span class="text-sm text-gray-700"> 0 Dipilih </span>

                            <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                                Reset
                            </button>
                            </header>

                            <ul class="space-y-1 border-t border-gray-200 p-4">
                            <li>
                                <label for="FilterInStock" class="inline-flex items-center gap-2">
                                <input type="checkbox" id="FilterInStock" class="size-5 rounded border-gray-300" />

                                <span class="text-sm font-medium text-gray-700">Kursus Agama Islam </span>
                                </label>
                            </li>

                            <li>
                                <label for="FilterPreOrder" class="inline-flex items-center gap-2">
                                <input type="checkbox" id="FilterPreOrder" class="size-5 rounded border-gray-300" />

                                <span class="text-sm font-medium text-gray-700">Cerita Islami </span>
                                </label>
                            </li>

                            <li>
                                <label for="FilterOutOfStock" class="inline-flex items-center gap-2">
                                <input
                                    type="checkbox"
                                    id="FilterOutOfStock"
                                    class="size-5 rounded border-gray-300"
                                />

                                <span class="text-sm font-medium text-gray-700">Membaca Al-Quran dan Tajwid </span>
                                </label>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </details>
                    </div>

                    <div class="relative">

                    </div>
                </div>


                <div class="relative w-80 px-1">
                    <label for="Search" class="sr-only"> Search </label>

                    <input
                    type="text"
                    id="Search"
                    placeholder="Search for..."
                    class="w-full rounded-md border-gray-200 py-3 px-3 pe-18 shadow-sm sm:text-sm"
                    />

                    <span class="absolute inset-y-0 end-0 grid w-10 place-content-center">
                    <button type="button" class="text-gray-600 hover:text-gray-700">
                        <span class="sr-only">Search</span>

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
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
                        />
                        </svg>
                    </button>
                    </span>
                </div>
            </div>
        </div>

          <!-- Wishlist Icon -->
          <button class="hover:bg-slate-300">
            <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.5" y="1" width="39" height="39" rx="19.5" stroke="#7F7E97"/>
                <path d="M29.4853 17.7598C29.2241 17.4321 28.8323 17.2442 28.4102 17.2442H24.6011L22.5355 12.5145C22.4075 12.2212 22.0659 12.0872 21.7726 12.2154C21.4793 12.3434 21.3454 12.685 21.4735 12.9783L23.3365 17.2442H16.4425L18.3055 12.9783C18.4335 12.685 18.2996 12.3435 18.0063 12.2154C17.7131 12.0872 17.3715 12.2212 17.2434 12.5145L15.1779 17.2442H11.3687C10.9466 17.2442 10.5548 17.4321 10.2936 17.7598C10.0372 18.0816 9.94264 18.4951 10.0341 18.8946L12.0682 27.7797C12.2103 28.4001 12.7591 28.8334 13.4029 28.8334H26.376C27.0198 28.8334 27.5686 28.4001 27.7107 27.7797L29.7449 18.8946C29.8363 18.4951 29.7417 18.0815 29.4853 17.7598ZM26.376 27.6745H13.4029C13.3045 27.6745 13.2183 27.6099 13.198 27.521L11.1638 18.636C11.1478 18.5663 11.1746 18.5138 11.1999 18.4821C11.2234 18.4526 11.2766 18.4031 11.3687 18.4031H14.6718L14.52 18.7507C14.3919 19.044 14.5258 19.3855 14.8191 19.5136C14.8946 19.5466 14.9733 19.5622 15.0507 19.5622C15.2741 19.5622 15.4869 19.4323 15.582 19.2146L15.9364 18.4032H23.8426L24.197 19.2146C24.2921 19.4324 24.505 19.5622 24.7283 19.5622C24.8057 19.5622 24.8844 19.5466 24.9599 19.5136C25.2532 19.3856 25.3871 19.044 25.259 18.7507L25.1073 18.4031H28.4103C28.5024 18.4031 28.5556 18.4526 28.5791 18.4821C28.6044 18.5139 28.6312 18.5663 28.6152 18.636L26.5811 27.5211C26.5607 27.6099 26.4744 27.6745 26.376 27.6745Z" fill="#7F7E97"/>
                <path d="M16.4125 20.9141C16.0925 20.9141 15.833 21.1735 15.833 21.4935V25.7429C15.833 26.0629 16.0925 26.3224 16.4125 26.3224C16.7325 26.3224 16.9919 26.0629 16.9919 25.7429V21.4935C16.9919 21.1735 16.7325 20.9141 16.4125 20.9141Z" fill="#7F7E97"/>
                <path d="M19.8895 20.9141C19.5695 20.9141 19.3101 21.1735 19.3101 21.4935V25.7429C19.3101 26.0629 19.5695 26.3224 19.8895 26.3224C20.2095 26.3224 20.4689 26.0629 20.4689 25.7429V21.4935C20.4689 21.1735 20.2095 20.9141 19.8895 20.9141Z" fill="#7F7E97"/>
                <path d="M23.366 20.9141C23.046 20.9141 22.7866 21.1735 22.7866 21.4935V25.7429C22.7866 26.0629 23.046 26.3224 23.366 26.3224C23.6861 26.3224 23.9455 26.0629 23.9455 25.7429V21.4935C23.9455 21.1735 23.6861 20.9141 23.366 20.9141Z" fill="#7F7E97"/>
                </svg>
          </button>
          <!-- Notification Icon -->
          <button class="hover:bg-slate-300 bg:rounded-md">
            <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="1.32324" y="1" width="39" height="39" rx="19.5" stroke="#7F7E97"/>
                <g clip-path="url(#clip0_2_973)">
                <path d="M20.5786 14.1113L19.6147 13.1205C17.352 10.7946 13.203 11.5972 11.7053 14.5214C11.0022 15.8968 10.8435 17.8825 12.1275 20.4168C13.3643 22.8569 15.9376 25.7797 20.5786 28.9634C25.2196 25.7797 27.7915 22.8569 29.0297 20.4168C30.3137 17.8812 30.1564 15.8968 29.4519 14.5214C27.9542 11.5972 23.8052 10.7933 21.5425 13.1191L20.5786 14.1113ZM20.5786 30.5834C-0.0356865 16.9616 14.2315 6.32972 20.342 11.9535C20.4226 12.0275 20.5019 12.1041 20.5786 12.1834C20.6544 12.1042 20.7334 12.0279 20.8152 11.9549C26.9243 6.32703 41.1929 16.9602 20.5786 30.5834Z" fill="#7F7E97"/>
                </g>
                <defs>
                <clipPath id="clip0_2_973">
                <rect width="22" height="22" fill="white" transform="translate(9.82324 9.5)"/>
                </clipPath>
                </defs>
                </svg>
          </button>
          <!-- Profile dropdown -->
          <div class="relative ml-3">
            <div>
              <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">Open user menu</span>
                <img class="h-12 w-12 object-cover rounded-full" src="/profile.jpeg" alt="">
              </button>
            </div>

            <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              <!-- Active: "bg-gray-100", Not Active: "" -->
              <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100 text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
              <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100 text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
              <a href="#" class="block px-4 py-2 text-sm hover:bg-red-100 text-red-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
            </div>
          </div>
        <div class="-mr-2 flex items-center sm:hidden">
          <!-- Mobile menu button -->
          <button type="button" class="bg-gray-900 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
      <div class="pt-2 pb-3 space-y-1">
        <a href="#" class="bg-gray-900 text-white block pl-3 pr-4 py-2 border-l-4 border-gray-500 text-base font-medium">Home</a>
        <a href="#" class="text-gray-700 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-900 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium">Courses</a>
        <a href="#" class="text-gray-700 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-900 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium">Blog</a>
        <a href="#" class="text-gray-700 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-900 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium">Contact</a>
      </div>
    </div>
  </nav>
