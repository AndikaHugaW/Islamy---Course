<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body>

    <section class="bg-gray-50">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-3xl font-bold text-blue-700 text-center">
                <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                Islam Course
            </a>
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-blue-700 md:text-2xl">
                        Masukan akun anda
                    </h1>

                    <!-- Session Status -->
                    <?php if (session('status')): ?>
                        <div class="mb-4 text-sm font-medium text-green-600">
                            <?php echo htmlspecialchars(session('status')); ?>
                        </div>
                    <?php endif; ?>

                    <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <label for="email" class="relative block overflow-hidden border-b border-gray-200 bg-transparent pt-3 focus-within:border-blue-600">
                                <input id="email" class="block mt-1 w-full peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="Email">
                                <span class="absolute start-0 top-2 -translate-y-1/2 text-xs text-gray-300 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">Email</span>
                            </label>
                            <?php if ($errors->has('email')): ?>
                                <div class="mt-2 text-red-600">
                                    <?php foreach ($errors->get('email') as $error): ?>
                                        <span class="error-message"><?php echo htmlspecialchars($error); ?></span><br>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Password -->
                        <div>
                            <label for="password" class="relative block overflow-hidden border-b border-gray-200 bg-transparent pt-3 focus-within:border-blue-600">
                                <input id="password" class="block mt-1 w-full peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" type="password" name="password" required autocomplete="current-password" placeholder="Password">
                                <span class="absolute start-0 top-2 -translate-y-1/2 text-xs text-gray-300 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">Password</span>
                            </label>
                            <?php if ($errors->has('password')): ?>
                                <div class="mt-2 text-red-600">
                                    <?php foreach ($errors->get('password') as $error): ?>
                                        <span class="error-message"><?php echo htmlspecialchars($error); ?></span><br>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <!-- Forgot Password and Submit Button -->
                        <div class="flex items-center justify-end mt-4">
                            <?php if (Route::has('password.request')): ?>
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            <?php endif; ?>
                            <button type="submit" class="w-full text-white bg-blue-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-lg px-5 py-4 text-center ms-3">
                                {{ __('Log in') }}
                            </button>
                        </div>

                        <p class="text-sm font-light text-gray-500">
                            Belum memiliki akunn? <a href="{{ route('register') }}" class="font-bold text-gray-400 hover:underline">Daftar</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
      </section>

</body>
</html>
