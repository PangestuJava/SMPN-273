<div class="h-full flex items-center">
    <!-- BEGIN: Logo -->
    <a href="" class="logo -intro-x md:flex xl:w-[180px] block">
        <img alt="Midone - HTML Admin Template" class="logo__image w-6" src="{{ asset('front/dist/images/logo.svg') }}">
        <span class="logo__text text-white text-lg ml-3"> {{ config("app.name") }} </span>
    </a>
    <!-- END: Logo -->
    <!-- BEGIN: Breadcrumb -->
    <nav aria-label="breadcrumb" class="-intro-x h-[45px] mr-auto">
        <ol class="breadcrumb breadcrumb-light">
            <li class="breadcrumb-item"><a href="#">Application</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </nav>
    <!-- END: Breadcrumb -->

    <!-- BEGIN: Account Menu -->
    <div class="intro-x dropdown w-8 h-8">
        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110"
            role="button" aria-expanded="false" data-tw-toggle="dropdown">
            <img alt="Midone - HTML Admin Template" src="{{ asset('front/dist/images/profile-3.jpg') }}">
        </div>
        <div class="dropdown-menu w-56">
            <ul
                class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                <li class="p-2">
                    <div class="font-medium">{{ Auth::user()->name }}</div>
                    <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">{{ Auth::user()->email }}</div>
                </li>
                <li>
                    <hr class="dropdown-divider border-white/[0.08]">
                </li>
                <li>
                    <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i>
                        Profile </a>
                </li>
                {{-- <li>
                    <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i>
                        Add Account </a>
                </li> --}}
                {{-- <li>
                    <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i>
                        Reset Password </a>
                </li> --}}
                {{-- <li>
                    <hr class="dropdown-divider border-white/[0.08]">
                </li> --}}
                <li>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> {{ __('Logout') }}
                        </x-dropdown-link>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>