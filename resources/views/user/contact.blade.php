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
        <div class="mx-auto max-w-screen-2xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
          <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
            <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
              <img
                alt=""
                src="https://images.unsplash.com/photo-1487017159836-4e23ece2e4cf?q=80&w=1771&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="absolute inset-0 h-full w-full object-cover"
              />
            </div>

            <div class="lg:py-52">
              <h2 class="text-3xl font-bold sm:text-4xl">Contact</h2>

              <p class="mt-4 text-gray-600">
                Kami senang mendengar dari Anda! Jika Anda memiliki pertanyaan, komentar, atau membutuhkan bantuan, jangan ragu untuk menghubungi kami. Tim kami siap membantu Anda..
              </p>

              <form action="#" class="mt-8 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="FirstName" class="block text-sm font-medium text-gray-700">
                    First Name
                  </label>

                  <input
                    type="text"
                    id="FirstName"
                    name="first_name"
                    class="mt-2 w-full rounded-md py-3 border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                  />
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="LastName" class="block text-sm font-medium text-gray-700">
                    Last Name
                  </label>

                  <input
                    type="text"
                    id="LastName"
                    name="last_name"
                    class="mt-2 w-full rounded-md py-2 border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                  />
                </div>

                <div class="col-span-6">
                  <label for="Email" class="block text-sm font-medium text-gray-700"> Email </label>

                  <input
                    type="email"
                    id="Email"
                    name="email"
                    class="mt-2 w-full rounded-md py-3 border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                  />
                </div>

                <div class="col-span-6 sm:col-span-6">
                  <label for="Password" class="block text-sm font-medium text-gray-700"> Nomor HP </label>

                  <input
                    type="number"
                    id="NoHP"
                    name="Nomor HP"
                    class="mt-2 w-full rounded-md py-3 border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                  />
                </div>

                <div class="col-span-6 sm:col-span-6">
                    <label for="OrderNotes" class=" block text-sm font-medium text-gray-700">Order notes</label>

                    <div class="overflow-hidden">
                    <textarea
                        id="OrderNotes"
                        class="w-full resize-none py-3 border-x-0 border-t-0 border-gray-200 mt-2 px-0 align-top sm:text-sm"
                        rows="4"
                        placeholder="Enter any additional order notes..."
                    ></textarea>

                    <div class="flex items-center justify-end gap-2 py-3">
                        <button
                        type="button"
                        class="rounded bg-gray-200 px-3 py-1.5 text-sm font-medium text-gray-700 hover:text-gray-600"
                        >
                        Clear
                        </button>

                        <button
                        type="button"
                        class="rounded bg-indigo-600 px-3 py-1.5 text-sm font-medium text-white hover:bg-indigo-700"
                        >
                        Add
                        </button>
                    </div>
                    </div>
                </div>


                <div class="col-span-6">
                  <label for="MarketingAccept" class="flex gap-4">
                    <input
                      type="checkbox"
                      id="MarketingAccept"
                      name="marketing_accept"
                      class="size-5 rounded-md border-gray-200 bg-white shadow-sm"
                    />

                    <span class="text-sm text-gray-700">
                      I want to receive emails about events, product updates and company announcements.
                    </span>
                  </label>
                </div>

                <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                  <button
                    class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
                  >
                    Create an account
                  </button>

                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

</body>
<!-- Footer -->
<x-footer />
</html>
