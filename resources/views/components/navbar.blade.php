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
            <strong class="font-semibold">ISLAMY 2024</strong><svg viewBox="0 0 2 2" class="mx-2 inline h-0.5 w-0.5 fill-current" aria-hidden="true"><circle cx="1" cy="1" r="1" /></svg>Join kursus sekarang selagi masih gratis.
          </p>
          <a href="#" class="flex-none rounded-full bg-gray-900 px-3.5 py-1 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">Join now <span aria-hidden="true">&rarr;</span></a>
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
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <div class="flex">
          <div class="flex  items-center" style="margin-left: -80px;">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200" zoomAndPan="magnify" viewBox="0 0 810 809.999993" height="200" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><g/><clipPath id="44b505161d"><path d="M 245.476562 516.878906 L 270.40625 516.878906 L 270.40625 541.808594 L 245.476562 541.808594 Z M 245.476562 516.878906 " clip-rule="nonzero"/></clipPath><clipPath id="9c21e62f65"><path d="M 257.941406 516.878906 C 251.058594 516.878906 245.476562 522.460938 245.476562 529.34375 C 245.476562 536.226562 251.058594 541.808594 257.941406 541.808594 C 264.824219 541.808594 270.40625 536.226562 270.40625 529.34375 C 270.40625 522.460938 264.824219 516.878906 257.941406 516.878906 Z M 257.941406 516.878906 " clip-rule="nonzero"/></clipPath><clipPath id="fdbc28021a"><path d="M 268 326 L 328 326 L 328 386 L 268 386 Z M 268 326 " clip-rule="nonzero"/></clipPath><clipPath id="d69c936dcc"><path d="M 301.578125 314.632812 L 340.023438 359.570312 L 295.089844 398.015625 L 256.640625 353.078125 Z M 301.578125 314.632812 " clip-rule="nonzero"/></clipPath><clipPath id="10c958efe2"><path d="M 320.800781 337.101562 C 310.183594 324.691406 291.519531 323.238281 279.109375 333.855469 C 266.699219 344.472656 265.25 363.140625 275.863281 375.546875 C 286.480469 387.957031 305.148438 389.410156 317.554688 378.792969 C 329.964844 368.175781 331.417969 349.507812 320.800781 337.101562 Z M 320.800781 337.101562 " clip-rule="nonzero"/></clipPath><clipPath id="c9957d453b"><path d="M 268 326 L 328 326 L 328 386 L 268 386 Z M 268 326 " clip-rule="nonzero"/></clipPath><clipPath id="06e0450161"><path d="M 301.578125 314.632812 L 340.109375 359.667969 L 295.074219 398.199219 L 256.542969 353.164062 Z M 301.578125 314.632812 " clip-rule="nonzero"/></clipPath><clipPath id="be6e2d8d82"><path d="M 301.578125 314.632812 L 340.019531 359.5625 L 295.089844 398.003906 L 256.648438 353.074219 Z M 301.578125 314.632812 " clip-rule="nonzero"/></clipPath><clipPath id="bd5a6e1b20"><path d="M 320.796875 337.097656 C 310.183594 324.691406 291.519531 323.238281 279.113281 333.851562 C 266.707031 344.46875 265.253906 363.132812 275.867188 375.539062 C 286.484375 387.945312 305.148438 389.398438 317.554688 378.78125 C 329.960938 368.167969 331.414062 349.503906 320.796875 337.097656 Z M 320.796875 337.097656 " clip-rule="nonzero"/></clipPath><clipPath id="08bfeffed5"><path d="M 138 351 L 435 351 L 435 647 L 138 647 Z M 138 351 " clip-rule="nonzero"/></clipPath><clipPath id="b85d364ff4"><path d="M 302.253906 351.695312 L 434.828125 506.644531 L 271.402344 646.46875 L 138.828125 491.519531 Z M 302.253906 351.695312 " clip-rule="nonzero"/></clipPath><clipPath id="244e8eb049"><path d="M 302.253906 351.695312 L 434.828125 506.644531 L 271.523438 646.363281 L 138.949219 491.414062 Z M 302.253906 351.695312 " clip-rule="nonzero"/></clipPath><clipPath id="0d3c0a7b2d"><path d="M 288 346 L 309 346 L 309 367 L 288 367 Z M 288 346 " clip-rule="nonzero"/></clipPath><clipPath id="a4232e2585"><path d="M 299.425781 342.296875 L 312.363281 357.417969 L 297.242188 370.351562 L 284.304688 355.234375 Z M 299.425781 342.296875 " clip-rule="nonzero"/></clipPath><clipPath id="7171a13498"><path d="M 305.894531 349.855469 C 302.320312 345.679688 296.039062 345.191406 291.863281 348.765625 C 287.6875 352.335938 287.199219 358.617188 290.773438 362.792969 C 294.34375 366.96875 300.625 367.457031 304.800781 363.882812 C 308.976562 360.3125 309.464844 354.03125 305.894531 349.855469 Z M 305.894531 349.855469 " clip-rule="nonzero"/></clipPath></defs><g clip-path="url(#44b505161d)"><g clip-path="url(#9c21e62f65)"><path fill="#0097b2" d="M 245.476562 516.878906 L 270.40625 516.878906 L 270.40625 541.808594 L 245.476562 541.808594 Z M 245.476562 516.878906 " fill-opacity="1" fill-rule="nonzero"/></g></g><g clip-path="url(#fdbc28021a)"><g clip-path="url(#d69c936dcc)"><g clip-path="url(#10c958efe2)"><path fill="#ffffff" d="M 301.578125 314.632812 L 340.023438 359.570312 L 295.089844 398.015625 L 256.640625 353.078125 Z M 301.578125 314.632812 " fill-opacity="1" fill-rule="nonzero"/></g></g></g><g clip-path="url(#c9957d453b)"><g clip-path="url(#06e0450161)"><g clip-path="url(#be6e2d8d82)"><g clip-path="url(#bd5a6e1b20)"><path stroke-linecap="butt" transform="matrix(0.389216, 0.454908, -0.454908, 0.389216, 301.577626, 314.632855)" fill="none" stroke-linejoin="miter" d="M 49.381587 0.00183865 C 22.111121 0.0000577128 -0.000248262 22.109954 -0.0020292 49.380419 C 0.00114754 76.655126 22.111044 98.766496 49.381509 98.768277 C 76.656216 98.7651 98.767586 76.655204 98.764409 49.380497 C 98.76619 22.110032 76.656294 -0.00133809 49.381587 0.00183865 Z M 49.381587 0.00183865 " stroke="#0097b2" stroke-width="47.603901" stroke-opacity="1" stroke-miterlimit="4"/></g></g></g></g><g clip-path="url(#08bfeffed5)"><g clip-path="url(#b85d364ff4)"><g clip-path="url(#244e8eb049)"><path fill="#ffffff" d="M 302.253906 351.695312 L 434.828125 506.644531 L 271.402344 646.46875 L 138.828125 491.519531 Z M 302.253906 351.695312 " fill-opacity="1" fill-rule="nonzero"/></g></g></g><g clip-path="url(#0d3c0a7b2d)"><g clip-path="url(#a4232e2585)"><g clip-path="url(#7171a13498)"><path fill="#0097b2" d="M 299.425781 342.296875 L 312.363281 357.417969 L 297.242188 370.351562 L 284.304688 355.234375 Z M 299.425781 342.296875 " fill-opacity="1" fill-rule="nonzero"/></g></g></g><g fill="#0097b2" fill-opacity="1"><g transform="translate(404.999983, 437.999998)"><g><path d="M 44.484375 -1.703125 C 44.484375 -0.59375 45.0625 0 45.953125 0 L 55.421875 0 C 56.34375 0 56.890625 -0.734375 56.890625 -1.703125 L 56.890625 -34.328125 C 56.890625 -44.875 51.078125 -50.921875 40.625 -50.921875 L 40.234375 -50.921875 C 35.984375 -50.921875 32.375 -49.3125 30.03125 -45.796875 C 27.640625 -49.359375 23.96875 -50.921875 19.625 -50.921875 L 19.28125 -50.921875 C 11.8125 -50.921875 3.328125 -47.796875 2.9375 -34.671875 L 2.9375 -1.65625 C 2.9375 -0.640625 3.421875 0 4.34375 0 L 13.8125 0 C 14.75 0 15.28125 -0.78125 15.28125 -1.65625 L 15.28125 -34.375 C 15.28125 -38.578125 17 -39.84375 19 -39.984375 L 19.34375 -39.984375 C 21.1875 -39.984375 23.53125 -38.8125 23.6875 -34.671875 L 23.6875 -1.703125 C 23.6875 -0.59375 24.265625 0 25.140625 0 L 34.625 0 C 35.546875 0 36.078125 -0.734375 36.078125 -1.703125 L 36.078125 -34.8125 C 36.078125 -38.625 37.84375 -39.890625 39.9375 -39.984375 L 40.578125 -39.984375 C 42.53125 -39.84375 44.4375 -38.578125 44.484375 -35.015625 Z M 44.484375 -1.703125 "/></g></g></g><g fill="#0097b2" fill-opacity="1"><g transform="translate(464.76327, 437.999998)"><g><path d="M 23.640625 -18.40625 C 23.640625 -16.015625 21.96875 -13.375 19.28125 -13.375 C 16.609375 -13.375 14.890625 -15.4375 14.890625 -17.71875 L 14.890625 -48.34375 C 14.890625 -49.421875 14.3125 -50 13.484375 -50 L 4 -50 C 3.171875 -50 2.546875 -49.421875 2.546875 -48.34375 L 2.546875 -17.625 C 2.546875 -8.40625 8.34375 -2.546875 16.3125 -2.546875 C 18.796875 -2.546875 21.296875 -3.328125 23.640625 -4.6875 L 23.640625 -1.953125 C 23.640625 3.46875 20.21875 5.078125 16.609375 5.078125 C 13.96875 5.078125 10.546875 3.859375 8.546875 2.4375 C 8.15625 2.15625 7.765625 1.953125 7.375 1.953125 C 6.984375 1.953125 6.640625 2.203125 6.34375 2.6875 L 3.65625 8.59375 C 3.171875 9.46875 3.46875 10.5 4.390625 11.078125 C 7.46875 13.375 12.453125 15.140625 18.453125 15.140625 C 29.890625 15.140625 35.984375 8.453125 35.984375 -1.65625 L 35.984375 -48.34375 C 35.984375 -49.421875 35.296875 -50 34.515625 -50 L 25.484375 -50 C 24.953125 -50 23.640625 -49.421875 23.640625 -47.859375 Z M 23.640625 -18.40625 "/></g></g></g><g fill="#000000" fill-opacity="1"><g transform="translate(288.007782, 437.999998)"><g><path d="M 16.5 -65.671875 C 16.5 -66.84375 16.015625 -67.578125 14.890625 -67.578125 L 5.125 -67.578125 C 4.109375 -67.578125 3.515625 -66.84375 3.515625 -65.671875 L 3.515625 -1.859375 C 3.515625 -0.6875 4 0 5.125 0 L 14.890625 0 C 16.015625 0 16.5 -0.6875 16.5 -1.859375 Z M 16.5 -65.671875 "/></g></g></g><g fill="#000000" fill-opacity="1"><g transform="translate(308.075362, 437.999998)"><g><path d="M 22.609375 -29.109375 C 16.359375 -32.46875 14.109375 -33.0625 14.109375 -36.140625 C 14.109375 -38.484375 15.71875 -40.375 18.265625 -40.375 C 20.65625 -40.375 22.46875 -38.71875 22.46875 -36.328125 L 22.46875 -35.640625 C 22.46875 -34.71875 22.859375 -34.1875 23.96875 -34.1875 L 31.6875 -34.1875 C 33.0625 -34.1875 33.546875 -34.28125 33.546875 -35.296875 L 33.546875 -36.140625 C 33.546875 -44.875 28.078125 -50.921875 17.71875 -50.921875 C 8.5 -50.921875 1.859375 -44.625 1.859375 -36.375 C 1.859375 -29.78125 5.609375 -25.59375 10.796875 -22.46875 C 15.875 -19.140625 22.015625 -17.234375 22.015625 -13.765625 C 22.015625 -11.234375 19.921875 -9.671875 17.53125 -9.671875 C 15.140625 -9.671875 13.03125 -11.140625 13.03125 -13.578125 L 13.03125 -14.5 C 13.03125 -15.53125 12.59375 -16.015625 11.765625 -16.015625 L 3.765625 -16.015625 C 2.25 -16.015625 1.375 -15.625 1.375 -14.59375 L 1.375 -13.921875 C 1.375 -6.296875 4.546875 0.921875 18.015625 0.921875 C 27.828125 0.921875 34.375 -5.171875 34.375 -13.71875 C 34.375 -20.3125 29.59375 -25.4375 22.609375 -29.109375 Z M 22.609375 -29.109375 "/></g></g></g><g fill="#000000" fill-opacity="1"><g transform="translate(343.816151, 437.999998)"><g><path d="M 22.3125 -9.28125 C 22.3125 -9.96875 22.265625 -11.078125 20.796875 -11.078125 L 19.96875 -11.078125 C 16.40625 -11.078125 15.328125 -12.59375 15.328125 -15.328125 L 15.328125 -65.921875 C 15.328125 -66.9375 14.796875 -67.578125 13.71875 -67.578125 L 4.59375 -67.578125 C 3.515625 -67.578125 2.9375 -66.9375 2.9375 -65.921875 L 2.9375 -14.59375 C 2.9375 -3.171875 9.03125 0 16.5 0 L 19.578125 0 C 22.171875 0 22.3125 -0.875 22.3125 -1.5625 Z M 22.3125 -9.28125 "/></g></g></g><g fill="#000000" fill-opacity="1"><g transform="translate(367.496871, 437.999998)"><g><path d="M 23.09375 -14.5 C 23.09375 -11.28125 20.796875 -9.90625 18.75 -9.90625 C 16.546875 -9.90625 14.015625 -11.421875 14.015625 -15.1875 L 14.015625 -15.921875 C 14.015625 -19.09375 15.484375 -21.921875 20.796875 -21.921875 L 23.09375 -21.921875 Z M 17.328125 -30.765625 C 9.078125 -30.8125 1.65625 -26.421875 1.65625 -16.0625 L 1.65625 -14.984375 C 1.65625 -3.65625 10.9375 0.921875 18.609375 0.921875 C 23.828125 0.921875 35.40625 -1.90625 35.40625 -14.0625 L 35.40625 -35.359375 C 35.40625 -45.515625 27 -50.921875 18.953125 -50.921875 C 12.109375 -50.921875 8.296875 -48.875 4.734375 -46.6875 C 3.078125 -45.703125 3.265625 -44.734375 3.71875 -43.796875 L 6.15625 -38.375 C 6.390625 -37.9375 6.6875 -37.75 7.078125 -37.75 C 7.515625 -37.75 8.015625 -37.984375 8.5 -38.28125 C 10.296875 -39.59375 12.9375 -40.875 16.9375 -40.875 C 21.34375 -40.875 23.09375 -37.15625 23.09375 -34.1875 L 23.09375 -30.71875 Z M 17.328125 -30.765625 "/></g></g></g></svg>
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

        <!-- Login Button -->
        <a
        class="inline-block rounded bg-blue-600 px-8 py-3 text-sm font-medium text-white transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:bg-blue-500"
        href="#"
        >
        Login
        </a>

        <!-- Register Button -->
        <a
        class="inline-block rounded border border-current px-8 py-3 text-sm font-medium text-blue-600 transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:text-blue-500"
        href="#"
        >
        Register
        </a>

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
