<x-guest-layout>
    <div class="my-auto">
        <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16"
            src="{{ asset('front/dist/images/illustration.svg') }}">
        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
            A few more clicks to
            <br>
            sign up to your account.
        </div>
        <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Manage all your accounts in
            one place</div>
    </div>
    </div>
    <!-- END: Login Info -->
    <!-- BEGIN: Login Form -->
    <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
        <div
            class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
            <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                Sign Up
            </h2>
            <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">
                A few more clicks to register to your account. Manage all your accounts in one place
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="intro-x mt-8">
                    <input type="text" id="name" name="name" class="intro-x login__input form-control py-3 px-4 block"
                        placeholder="Name" value="{{ old('name') }}">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                    <input type="text" id="email" name="email"
                        class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Email"
                        value="{{ old('email') }}">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <input type="password" id="password" name="password"
                        class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Confirm Password">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <div class="intro-x flex items-center text-slate-600 dark:text-slate-500 mt-4 text-xs sm:text-sm">
                    <input id="remember-me" type="checkbox" checked="checked" class="form-check-input border mr-2"
                        disabled>
                    <label class="cursor-pointer select-none" for="remember-me">I agree to the Envato</label>
                    <a class="text-primary dark:text-slate-200 ml-1" href="#">Privacy Policy</a>.
                </div>
                <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                    <button type="submit"
                        class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Register</button>
                    <a href="{{ route('login') }}"
                        class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Sign in</a>
                </div>
                <div class="intro-x mt-10 xl:mt-24 text-slate-600 dark:text-slate-500 text-center xl:text-left"> By
                    signin up, you agree to our <a class="text-primary dark:text-slate-200" href="#">Terms and
                        Conditions</a> & <a class="text-primary dark:text-slate-200" href="#">Privacy Policy</a>
                </div>
            </form>
        </div>
    </div>
    <!-- END: Login Form -->
</x-guest-layout>