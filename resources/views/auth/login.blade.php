<x-guest-layout>
    <div class="my-auto">
        <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16"
            src="{{ asset('front/dist/images/illustration.svg') }}">
        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
            A few more clicks to
            <br>
            sign in to your account.
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
                Sign In
            </h2>
            <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">
                A few more clicks to sign in to your account. Manage all your accounts in one place
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="intro-x mt-8">
                    <input type="text" id="email" name="email" class="intro-x login__input form-control py-3 px-4 block"
                        placeholder="Email">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <input type="password" id="password" name="password"
                        class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                    <div class="flex items-center mr-auto">
                        <input id="remember-me" type="checkbox" name="remember-me" class="form-check-input border mr-2">
                        <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                    </div>
                    <a href="">Forgot Password?</a>
                </div>

                <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                    <button type="submit"
                        class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Login</button>
                    <a href="{{ route('register') }}"
                        class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Register</a>
                </div>

                <div
                    class="my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-neutral-300 after:mt-0.5 after:flex-1 after:border-t after:border-neutral-300">
                    <p class="mx-4 mb-0 text-center font-semibold dark:text-neutral-200">
                        OR
                    </p>
                </div>
                <div class="text-center">
                    <a href="auth/google/redirect">
                        <button type="button" data-te-ripple-init data-te-ripple-color="light"
                            class="py-2 px-2 mr-2 rounded-full bg-primary uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
                            <i data-lucide="globe"></i>
                        </button>
                    </a>
                    {{-- <a href="">
                        <button type="button" data-te-ripple-init data-te-ripple-color="light"
                            class="py-2 px-2 mr-2 rounded-full bg-primary uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
                            <i data-lucide="facebook"></i>
                        </button>
                    </a> --}}
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