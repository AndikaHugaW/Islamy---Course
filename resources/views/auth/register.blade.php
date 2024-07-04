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
                        Daftar Akun
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <!-- Name -->
                        <div>
                            <label for="name" class="relative block overflow-hidden border-b border-gray-200 bg-transparent pt-3 focus-within:border-blue-600">
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Name" class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"/>
                                <span class="absolute start-0 top-2 -translate-y-1/2 text-xs text-gray-300 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                    Name
                                </span>
                            </label>
                            <?php if ($errors->has('name')): ?>
                                <div class="mt-2 text-red-600">
                                    <?php foreach ($errors->get('name') as $error): ?>
                                        <span class="error-message"><?php echo htmlspecialchars($error); ?></span><br>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Email Address -->
                        <div>
                            <label for="email" class="relative block overflow-hidden border-b border-gray-200 bg-transparent pt-3 focus-within:border-blue-600">
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="Email" class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"/>
                                <span class="absolute start-0 top-2 -translate-y-1/2 text-xs text-gray-300 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                    Email
                                </span>
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
                                <input type="password" id="password" name="password" required autocomplete="new-password" placeholder="Password" class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"/>
                                <span class="absolute start-0 top-2 -translate-y-1/2 text-xs text-gray-300 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                    Password
                                </span>
                            </label>
                            <?php if ($errors->has('password')): ?>
                                <div class="mt-2 text-red-600">
                                    <?php foreach ($errors->get('password') as $error): ?>
                                        <span class="error-message"><?php echo htmlspecialchars($error); ?></span><br>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Confirm Password -->
                        <div>
                            <label for="password_confirmation" class="relative block overflow-hidden border-b border-gray-200 bg-transparent pt-3 focus-within:border-blue-600">
                                <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"/>
                                <span class="absolute start-0 top-2 -translate-y-1/2 text-xs text-gray-300 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                    Confirm Password
                                </span>
                            </label>
                            <?php if ($errors->has('password_confirmation')): ?>
                                <div class="mt-2 text-red-600">
                                    <?php foreach ($errors->get('password_confirmation') as $error): ?>
                                        <span class="error-message"><?php echo htmlspecialchars($error); ?></span><br>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <button type="submit" class="w-full text-white bg-blue-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-lg px-5 py-4 text-center ms-3">
                                {{ __('Register') }}
                            </button>
                        </div>

                        <p class="text-sm font-light text-gray-500">
                            Sudah memiliki akun? <a href="{{ route('login') }}" class="font-bold text-gray-400 hover:underline">Masuk</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
      </section>

</body>
</html>
