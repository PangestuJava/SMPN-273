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
    <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
        <div
            class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
            <div class="intro-x font-bold text-lg xl:text-xl text-center xl:text-left">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by
                clicking on
                the
                link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during
                registration.') }}
            </div>
            @endif

            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <x-primary-button>
                            {{ __('Resend Verification Email') }}
                        </x-primary-button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit"
                        class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>