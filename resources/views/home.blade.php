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
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
          <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
            <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
                <img alt="" src="{{ asset('illustrasi.svg') }}"
                     class="absolute inset-0 h-fit w-fit mt-12 object-cover"/>


            </div>

            <div class="lg:py-24 mt-12">
              <h2 class="text-xl font-bold sm:text-4xl">Pelajari dan Kembangkan
              <strong class="block w-full font-extrabold text-blue-700">Dengan Islamy Sekarang! </strong>
              </h2>

              <p class="mt-4 text-gray-600">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
                eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
                quidem quam repellat.
              </p>

              <a class="group mt-8 relative inline-block text-sm font-medium text-white focus:outline-none focus:ring"href="#">
                <span class="absolute inset-0 border border-blue-600 group-active:border-blue-500"></span>
                <span class="block border border-blue-600 bg-blue-600 px-8 py-3 transition-transform active:border-blue-500 active:bg-blue-500 group-hover:-translate-x-1 group-hover:-translate-y-1">
                Get Started
                </span>
                </a>

                <a class="group mx-2 mt-8 relative inline-block text-sm font-medium text-white focus:outline-none focus:ring"href="#">
                    <span class="absolute inset-0 border border-blue-600 group-active:border-blue-500"></span>
                    <span class="block border border-blue-600 text-blue-500 px-8 py-3 transition-transform active:border-blue-500 active:bg-blue-500 group-hover:-translate-x-1 group-hover:-translate-y-1">
                    Learn More
                    </span>
                    </a>
            </div>
          </div>
        </div>
      </section>


    <!-- Section ke 2 -->
    <section class="text-black mt-60">
        <div class="mx-auto max-w-screen-xl ">
          <div class="mx-auto max-w-fit text-center">
            <h4 class="text-3xl font-bold sm:text-4xl">Achieve Your Goal with Islam Course</h2>

            <p class="mt-4 max-w-xl text-base text-center text-gray-500">
                Raih Tujuan Anda dengan Kursus Islamy Gabungkan prinsip Islam dan teknik modern untuk mencapai aspirasi pribadi dan spiritual Anda.</p>
          </div>

          <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            <!-- Pengajar Yang Berkualitas -->
            <a href="#" class="group relative block h-64 sm:h-80 lg:h-96">
                <span class="absolute inset-0 border-2 border-dashed border-blue-500"></span>

                <div
                  class="relative flex h-full transform items-end border-2 hover:border-blue-500 bg-white bg-cover w-full object-cover transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2" ">
                  <div
                    class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                  <svg width="70" height="71" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="0.780029" width="70" height="70" rx="35" fill="#1BCBE3"/>
                    <g clip-path="url(#clip0_2_116)">
                    <path d="M48.6966 28.2812C48.6966 28.2812 37.4058 23.2794 37.4028 23.2781C36.6403 22.9476 35.8319 22.78 35 22.78C34.1681 22.78 33.3597 22.9476 32.5972 23.2781C32.5942 23.2794 21.3034 28.2812 21.3034 28.2812C19.904 28.89 19 30.3021 19 31.88C19 33.4579 19.904 34.87 21.3034 35.4789L24 36.6734V44.88C24 47.0305 25.6823 48.78 27.75 48.78H42.25C44.3177 48.78 46 47.0305 46 44.88V41.4135C46 40.6955 45.4404 40.1135 44.75 40.1135C44.0596 40.1135 43.5 40.6955 43.5 41.4135V44.88C43.5 45.5968 42.9393 46.18 42.25 46.18H27.75C27.0608 46.18 26.5 45.5968 26.5 44.88V37.781C26.5 37.781 32.5942 40.4807 32.5972 40.482C33.3597 40.8124 34.1681 40.98 35 40.98C35.8318 40.98 36.6402 40.8124 37.4028 40.482C37.4058 40.4807 48.6966 35.4789 48.6966 35.4789C50.096 34.87 51 33.4579 51 31.88C51 30.3021 50.096 28.89 48.6966 28.2812ZM47.7301 33.081C47.7271 33.0823 36.4373 38.0836 36.4373 38.0836C35.9821 38.2803 35.4986 38.38 34.9999 38.38C34.5013 38.38 34.0178 38.2803 33.5627 38.0837C32.4414 37.5869 22.2728 33.0823 22.2698 33.081C21.8022 32.8783 21.5 32.4069 21.5 31.88C21.5 31.3531 21.8022 30.8818 22.2699 30.679C22.2729 30.6777 33.5627 25.6764 33.5627 25.6764C34.0178 25.4797 34.5014 25.38 35 25.38C35.4986 25.38 35.9822 25.4797 36.4373 25.6764C36.4373 25.6764 47.7271 30.6777 47.7301 30.679C48.1978 30.8818 48.5 31.3531 48.5 31.88C48.5 32.4069 48.1978 32.8783 47.7301 33.081Z" fill="white"/>
                    <path d="M49.75 37.941C49.0596 37.941 48.5 38.523 48.5 39.241V44.88C48.5 45.598 49.0596 46.18 49.75 46.18C50.4404 46.18 51 45.598 51 44.88V39.241C51 38.523 50.4404 37.941 49.75 37.941Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_2_116">
                    <rect width="32" height="26" fill="white" transform="translate(19 22.78)"/>
                    </clipPath>
                    </defs>
                    </svg>


                    <h2 class="mt-4 text-xl text-blue-600 font-medium sm:text-2xl">Pengajar Berkualitas</h2>
                  </div>

                  <div
                    class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8"
                  >
                    <h3 class="text-xl text-blue-600 font-medium sm:text-2xl">Pengajar Berkulitas</h3>

                    <p class="mt-4 text-sm text-blue-600 sm:text-base">
                      Menyediakan Pembimbing Yang Berkualitas
                      Di bidangnya Untuk Mencapai Potensi Maksimal Mereka.
                    </p>

                    <p class="mt-8 font-bold">Read more</p>
                  </div>
                </div>
              </a>

              <!-- Kursus Yang Efektif -->
              <a href="#" class="group relative block h-64 sm:h-80 lg:h-96">
                <span class="absolute inset-0 border-2 border-dashed border-purple-500"></span>

                <div
                  class="relative flex h-full transform items-end border-2 hover:border-purple-500 bg-white bg-cover w-full object-cover transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2" ">
                  <div
                    class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8"
                  >
                  <svg width="70" height="71" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="0.780029" width="70" height="70" rx="35" fill="#5751E1"/>
                    <g clip-path="url(#clip0_2_126)">
                    <path d="M26.5116 44.28H43.4884C46.2519 44.28 48.5 42.0371 48.5 39.28V24.78C48.5 22.0229 46.2519 19.78 43.4884 19.78H26.5116C23.7481 19.78 21.5 22.0229 21.5 24.78V46.78C21.5 49.5371 23.7481 51.78 26.5116 51.78H43.4884C46.2519 51.78 48.5 49.5371 48.5 46.78C48.5 46.0896 47.9391 45.53 47.2471 45.53C46.5551 45.53 45.9942 46.0896 45.9942 46.78C45.9942 48.1584 44.87 49.28 43.4884 49.28H26.5116C25.13 49.28 24.0058 48.1584 24.0058 46.78C24.0058 45.4016 25.13 44.28 26.5116 44.28ZM24.0058 24.78C24.0058 23.4016 25.13 22.28 26.5116 22.28H43.4884C44.87 22.28 45.9942 23.4016 45.9942 24.78V39.28C45.9942 40.6584 44.87 41.78 43.4884 41.78H26.5116C25.5993 41.78 24.7434 42.0244 24.0058 42.4509V24.78ZM29.08 28.2175C29.08 27.5271 29.6409 26.9675 30.3329 26.9675H39.7297C40.4217 26.9675 40.9826 27.5271 40.9826 28.2175C40.9826 28.908 40.4217 29.4675 39.7297 29.4675H30.3329C29.6409 29.4675 29.08 28.908 29.08 28.2175Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_2_126">
                    <rect width="27" height="32" fill="white" transform="translate(21.5 19.78)"/>
                    </clipPath>
                    </defs>
                    </svg>


                    <h2 class="mt-4 text-xl text-purple-600 font-medium sm:text-2xl">Kursus Yang Efektif</h2>
                  </div>

                  <div
                    class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8"
                  >
                    <h3 class="mt-4 text-xl text-purple-600 font-medium sm:text-2xl">Kursus Yang Efektif</h3>

                    <p class="mt-4 text-purple-600 text-sm sm:text-base">
                      Menyediakan Program Pembelajaran Optimal
                      Dan Bisa Dipelajari Dimana Saja.
                    </p>

                    <p class="mt-8 font-bold">Read more</p>
                  </div>
                </div>
              </a>

              <!-- Sertifikat Resmi -->
              <a href="#" class="group relative block h-64 sm:h-80 lg:h-96" >
                <span class="absolute inset-0 border-2 border-dashed border-yellow-500"></span>

                <div
                  class="relative flex h-full transform items-end border-2 hover:border-yellow-500  bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2" ">
                  <div
                    class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8"
                  >
                  <svg width="70" height="71" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="0.780029" width="70" height="70" rx="35" fill="#FFC224"/>
                    <g clip-path="url(#clip0_2_135)">
                    <path d="M51.9167 18.28H18.0833C17.7612 18.28 17.5 18.5462 17.5 18.8744V42.65C17.5 42.9783 17.7612 43.2444 18.0833 43.2444H28.6166C28.6341 43.4423 28.6627 43.6373 28.6971 43.8305L25.4975 47.716C25.2903 47.9673 25.3223 48.3423 25.569 48.5534C25.6385 48.6129 25.7207 48.6551 25.809 48.6765L29.3312 49.5336L30.7714 52.9217C30.8995 53.2229 31.2429 53.3614 31.5385 53.2309C31.6218 53.1942 31.6954 53.1382 31.7537 53.0673L34.9481 49.1883C34.9656 49.1883 34.9825 49.1883 35 49.1883C35.0175 49.1883 35.0344 49.1883 35.0519 49.1883L38.2462 53.0673C38.4532 53.3189 38.8211 53.3519 39.068 53.141C39.1375 53.0816 39.1925 53.0065 39.2286 52.9217L40.6688 49.5336L44.191 48.6765C44.5044 48.6004 44.698 48.2799 44.6233 47.9606C44.6022 47.8706 44.5609 47.7868 44.5025 47.716L41.3029 43.8305C41.3373 43.6373 41.3659 43.4423 41.3834 43.2444H51.9167C52.2388 43.2444 52.5 42.9783 52.5 42.65V18.8744C52.5 18.5461 52.2388 18.28 51.9167 18.28ZM31.4668 51.5659L30.2855 48.7901C30.2125 48.6184 30.0645 48.4918 29.8859 48.4483L26.9984 47.7451L29.0926 45.2017C29.1037 45.2279 29.1183 45.2517 29.1293 45.2778C29.2052 45.4561 29.2874 45.6255 29.3784 45.7937C29.4157 45.8639 29.4554 45.9328 29.4951 46.0012C29.5752 46.1371 29.6599 46.2702 29.7494 46.4006C29.8118 46.4916 29.8772 46.5789 29.9442 46.6681C30.0224 46.7691 30.1029 46.8678 30.1875 46.9653C30.2721 47.0628 30.3707 47.1703 30.4681 47.269C30.5398 47.3421 30.6139 47.4129 30.6897 47.4824C30.7528 47.5418 30.8093 47.6042 30.8752 47.6607C30.9412 47.7172 31.003 47.7552 31.066 47.8052C31.0946 47.8277 31.1191 47.8539 31.1482 47.8759C31.2007 47.9163 31.2562 47.9514 31.3098 47.99C31.3938 48.0495 31.4767 48.1136 31.5636 48.1683C31.7292 48.2765 31.9002 48.3752 32.0734 48.4655C32.1399 48.5 32.2076 48.5315 32.2752 48.5636C32.4308 48.6381 32.5873 48.7059 32.7448 48.7669C32.7903 48.7841 32.8353 48.8037 32.8808 48.8198C33.1017 48.8989 33.3269 48.9654 33.5551 49.0189L33.5615 49.0207L31.4668 51.5659ZM36.0955 47.8735C35.828 47.9311 35.5565 47.9675 35.2835 47.9823H35.2759C35.1838 47.987 35.0916 47.9936 34.9988 47.9936C34.9061 47.9936 34.8139 47.987 34.7218 47.9823H34.7142C34.4417 47.9674 34.1709 47.9312 33.9039 47.8741L33.8549 47.864C33.7511 47.8408 33.6484 47.8123 33.5469 47.7826C33.5043 47.7701 33.4612 47.7588 33.4192 47.7451C33.3462 47.7219 33.2745 47.6946 33.2027 47.6684C33.131 47.6423 33.0627 47.6167 32.9939 47.5876C32.9513 47.5692 32.9093 47.5496 32.8673 47.5282C32.7717 47.4842 32.6766 47.4396 32.5838 47.3903L32.5372 47.3641C32.2967 47.2331 32.0666 47.0832 31.8488 46.916C31.7275 46.8238 31.6155 46.7222 31.5052 46.6217C31.3749 46.5032 31.2504 46.378 31.1325 46.2467C31.0858 46.1955 31.0357 46.1468 30.9913 46.0939C30.8284 45.8986 30.6798 45.6914 30.5468 45.474C30.527 45.4419 30.5101 45.408 30.4885 45.3747C30.3645 45.1635 30.2553 44.9436 30.1618 44.7167C30.1537 44.6965 30.1443 44.6763 30.1367 44.6573C30.0334 44.3972 29.9503 44.1294 29.8883 43.856C29.8883 43.8453 29.8801 43.837 29.8772 43.8263C29.7924 43.4402 29.7498 43.0456 29.75 42.65C29.7483 39.6955 32.0973 37.2991 34.9968 37.2972C37.8963 37.2954 40.2482 39.6891 40.25 42.6435C40.2502 43.0436 40.2064 43.4426 40.1193 43.8328C40.1164 43.8429 40.1106 43.8518 40.1082 43.8619C40.0463 44.1349 39.9634 44.4026 39.8603 44.6625C39.8522 44.6833 39.8428 44.7041 39.8341 44.722C39.7409 44.9475 39.6321 45.166 39.5086 45.3758C39.4893 45.4091 39.4718 45.4442 39.4503 45.4774C39.3172 45.6946 39.1689 45.9016 39.0063 46.0968C38.9626 46.1491 38.913 46.1967 38.8669 46.2478C38.7474 46.3803 38.6214 46.5067 38.4895 46.6264C38.3787 46.7269 38.2684 46.8285 38.1477 46.92C38.0269 47.0116 37.919 47.0888 37.8012 47.1655L37.7942 47.1697C37.6886 47.238 37.5807 47.301 37.471 47.3605C37.4494 47.3724 37.4284 47.3848 37.4068 47.3961C37.3187 47.4431 37.2318 47.4853 37.1391 47.5263C37.0924 47.5477 37.0463 47.5697 36.9991 47.5893C36.9337 47.6173 36.8673 47.6416 36.8008 47.666C36.7343 47.6904 36.652 47.7219 36.5762 47.7456C36.5359 47.7587 36.4951 47.77 36.4542 47.7819C36.351 47.8116 36.2472 47.8413 36.1422 47.8639L36.0955 47.8735ZM43.0016 47.7433L40.1141 48.4465C39.9355 48.49 39.7875 48.6166 39.7145 48.7883L38.5332 51.5659L36.4385 49.0225H36.4437C36.6729 48.9691 36.8988 48.9025 37.1204 48.8228C37.1642 48.8073 37.2062 48.7889 37.2499 48.7728C37.4127 48.7098 37.5731 48.6409 37.7306 48.5642C37.7948 48.5339 37.8589 48.5048 37.9219 48.4715C38.0969 48.3787 38.2719 48.2783 38.4399 48.1683C38.521 48.116 38.5986 48.0572 38.6773 48.0007C38.7357 47.9597 38.794 47.9223 38.8523 47.8789C38.8832 47.8551 38.9107 47.8271 38.941 47.8028C38.9993 47.754 39.067 47.713 39.1265 47.6619C39.186 47.6108 39.2467 47.543 39.3085 47.4872C39.3855 47.4158 39.4613 47.3439 39.5348 47.2696C39.6309 47.1718 39.7238 47.0711 39.8137 46.9677C39.8982 46.8702 39.9787 46.7715 40.0575 46.6705C40.1246 46.5831 40.1899 46.4921 40.2523 46.403C40.3422 46.2734 40.4273 46.1403 40.5061 46.0047C40.5469 45.9358 40.5866 45.8663 40.6227 45.7955C40.7134 45.6279 40.796 45.4565 40.8707 45.2814C40.8812 45.2511 40.8963 45.2267 40.9074 45.1999L43.0016 47.7433ZM51.3333 42.0556H41.3869C41.0704 38.461 37.9539 35.8085 34.4262 36.1311C31.3372 36.4136 28.8891 38.908 28.6119 42.0556H18.6667V19.4688H51.3333V42.0556Z" fill="white"/>
                    <path d="M20.4168 20.6576C20.0947 20.6576 19.8335 20.9237 19.8335 21.252V23.6295H21.0002V21.8464H22.7502V20.6576H20.4168Z" fill="white"/>
                    <path d="M49.5833 20.6576H47.25V21.8464H49V23.6295H50.1667V21.252C50.1667 20.9237 49.9055 20.6576 49.5833 20.6576Z" fill="white"/>
                    <path d="M49 37.895V39.6782H47.25V40.8669H49.5833C49.9055 40.8669 50.1667 40.6008 50.1667 40.2725V37.895H49Z" fill="white"/>
                    <path d="M21.0002 39.6782V37.895H19.8335V40.2725C19.8335 40.6008 20.0947 40.8669 20.4168 40.8669H22.7502V39.6782H21.0002Z" fill="white"/>
                    <path d="M42 24.8184H28V26.0071H42V24.8184Z" fill="white"/>
                    <path d="M45.5 28.3846H24.5V29.5734H45.5V28.3846Z" fill="white"/>
                    <path d="M34.9998 38.4893C32.7446 38.4893 30.9165 40.3521 30.9165 42.65C30.919 44.9468 32.7457 46.8081 34.9998 46.8107C37.255 46.8107 39.0831 44.9479 39.0831 42.65C39.0831 40.3521 37.255 38.4893 34.9998 38.4893ZM34.9998 45.622C33.389 45.622 32.0831 44.2913 32.0831 42.65C32.085 41.0095 33.3898 39.68 34.9998 39.6781C36.6106 39.6781 37.9165 41.0087 37.9165 42.65C37.9165 44.2913 36.6106 45.622 34.9998 45.622Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_2_135">
                    <rect width="35" height="35" fill="white" transform="translate(17.5 18.28)"/>
                    </clipPath>
                    </defs>
                    </svg>


                    <h2 class="mt-4 text-xl text-yellow-500 font-medium sm:text-2xl">Sertifikat Resmi</h2>
                  </div>

                  <div
                    class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8"
                  >
                    <h3 class="mt-4 text-xl text-yellow-500 font-medium sm:text-2xl">Sertifikat Resmi</h3>

                    <p class="mt-4 text-sm text-yellow-500 sm:text-base">
                      Menawarkan Kursus Online Yang Memungkinkan
                      Memperoleh Sertifikasi Resmi Dalam Berbagai Bidang.
                    </p>

                    <p class="mt-8 font-bold">Read more</p>
                  </div>
                </div>
              </a>

          </div>
        </div>
      </section>

      <!-- Section 3 -->
      <section>
        <div class="mx-auto max-w-fit px-4 py-16 sm:px-8 lg:px-40">
          <div class="grid grid-cols-1 lg:h-screen lg:grid-cols-2">
            <div class="relative z-10 lg:py-16">
              <div class="relative h-64 sm:h-80 lg:h-full">
                <img
                  alt=""
                  src="/mentor.svg"
                  class="absolute inset-0 bg-center w-fit object-cover"
                />
              </div>
            </div>

            <div class="relative flex items-center ">
              <span
                class="hidden lg:absolute lg:inset-y-0 lg:-start-12 "
              ></span>

              <div class="p-8 sm:p-16 lg:p-20">
                <h2 class="text-2xl font-bold sm:text-4xl">
                  Ratusan Kursus Terbaik Menjadi Satu Di Islamy
                </h2>

                <p class="mt-4 text-gray-600">
                    menawarkan akses ke ribuan kursus terbaik dalam berbagai bidang. Temukan dan ikuti kursus yang sesuai dengan minat dan kebutuhan Anda untuk meningkatkan keterampilan dan pengetahuan Anda.
                </p>

                <ul class="max-w-md mt-10 space-y-1 text-gray-500 list-inside dark:text-gray-400">
                    <li class="flex items-center">
                        <svg class="w-8 h-8 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        The Most World Class Intructors
                    </li>
                    <li class="flex items-center">
                        <svg class="w-8 h-8 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        Acces Your Class anywhere
                    </li>
                    <li class="flex items-center">
                        <svg class="w-8 h-8 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        Flexible Course Plan
                    </li>
                </ul>

              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section 4 -->
      <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
          <header class="text-center">
            <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Explore Khusus Terbaik Untuk Kamu</h2>

            <p class="mx-auto mt-4 max-w-md text-gray-500">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque praesentium cumque iure
              dicta incidunt est ipsam, officia dolor fugit natus?
            </p>
          </header>

          <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
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
                      <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium"> New </span>

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

            <!-- Card Ke 2 -->
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
                      <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium"> New </span>

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

            <!-- Card Ke 3 -->
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
                      <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium"> New </span>

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

            <!-- Card Ke 4 -->
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
                      src="https://plus.unsplash.com/premium_photo-1677966719936-3de1c1d94421?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                      alt=""
                      class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
                    />

                    <div class="relative border border-gray-100 bg-white p-6">
                      <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium"> New </span>

                      <h3 class="mt-4 text-lg font-medium text-gray-900">Bahasa Arab</h3>

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
      </section>


</body>
<!-- Footer -->
<x-footer />
</html>
