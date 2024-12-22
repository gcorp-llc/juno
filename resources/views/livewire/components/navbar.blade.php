<nav class="glass z-50 bg-violet-700  fixed w-full top-0 start-0 border-none shadow-2xl">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a wire:navigate href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('favicon.png') }}" class="h-8" alt="GCORP LLC">
        </a>

        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            @if($settings->locales)
                <div class="dropdown dropdown-bottom dropdown-left hidden lg:flex">

                    <div tabindex="0" role="button"
                         class="btn btn-ghost text-white">
                        {{ str()->upper(app()->getLocale()) }}</div>
                    <ul tabindex="0" class="dropdown-content menu bg-base-200 rounded-box z-[1] w-52 p-2 shadow">
                        @if (app()->getLocale() != 'fa')
                            <li wire:click="locale('fa')" class="hover:bg-blue-800">
                                <a href="#"
                                   class="block text-center px-4 py-2 hover:bg-slate-500 dark:hover:bg-gray-600 dark:hover:text-white">فارسی</a>
                            </li>
                        @endif
                        @if (app()->getLocale() != 'en')
                            <li wire:click="locale('en')">
                                <a href="#"
                                   class="block text-center px-4 py-2 hover:bg-slate-500 dark:hover:bg-gray-600 dark:hover:text-white">English</a>
                            </li>
                        @endif

                        @if (app()->getLocale() != 'ar')
                            <li wire:click="locale('ar')">
                                <a href="#"
                                   class="block text-center px-4 py-2 hover:bg-slate-500 dark:hover:bg-gray-600 dark:hover:text-white">العربی</a>
                            </li>
                        @endif
                    </ul>

                </div>
            @endif
            @if($settings->tune)
                <a href="{{ route('tune') }}" wire:navigate
                   class="hidden lg:flex btn btn-primary hover:btn-secondary ">
                    {{ __('Get Turn') }}
                </a>
            @endif
            @if($settings->auth)
                @auth()
                    <div class="hidden lg:flex dropdown dropdown-bottom dropdown-left">
                        <div tabindex="0" role="button" class="btn btn-ghost mx-2">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg"
                                 width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                      d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                      clip-rule="evenodd"/>
                            </svg>

                        </div>
                        <ul tabindex="0" class="menu dropdown-content  bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                            <li>
                                <a class="block text-center px-4 py-2 hover:bg-slate-500 dark:hover:bg-gray-600 dark:hover:text-white"
                                   href="{{route('profile.edit')}}" wire:navigate>
                                    {{ __('Profile') }}
                                </a>
                            </li>
                            <li>
                                <button wire:click="logout"
                                        class="block text-center px-4 py-2 hover:bg-slate-500 dark:hover:bg-gray-600 dark:hover:text-white">
                                    {{ __('Log Out') }}
                                </button>
                            </li>
                        </ul>
                    </div>

                @else
                    <div class="hidden lg:flex dropdown dropdown-bottom dropdown-left">
                        <summary class="btn btn-ghost mx-2"> {{ __('Log in') }}</summary>
                        <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                            <li>
                                <a href="{{ route('login') }}" wire:navigate
                                   class="block text-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ __('Log in') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}" wire:navigate
                                   class="block text-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ __('Register') }}</a>

                            </li>
                        </ul>
                    </div>
                @endauth
            @endif


            <div class="drawer drawer-start lg:hidden ">
                <input id="my-drawer-4" type="checkbox" class="drawer-toggle"/>
                <div class="drawer-content">

                    <!-- Page content here -->
                    <label for="my-drawer-4" class="drawer-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h8m-8 6h16"/>
                        </svg>
                    </label>
                </div>

                <div class="drawer-side">
                    <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
                    <div class="menu text-base-content min-h-full w-80 p-4 bg-slate-200 rounded shadow">
                        <div class="flex shadow justify-between bg-lime-500 text-white px-3 pt-2 my-2 rounded-3xl">
                            <div class="dropdown dropdown-bottom">
                                <div tabindex="0" role="button"
                                     class="inline-flex mb-3 bg-slate-500 hover:bg-slate-600 rounded text-white shadow items-center p-2 text-sm font-medium text-center focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                                    {{ str()->upper(app()->getLocale()) }}</div>
                                <ul tabindex="0"
                                    class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                                    @if (app()->getLocale() != 'fa')
                                        <li wire:click="locale('fa')" class="hover:bg-blue-800">
                                            <a href="#"
                                               class="block text-center px-4 py-2 hover:bg-slate-500 dark:hover:bg-gray-600 text-gray-800">فارسی</a>
                                        </li>
                                    @endif
                                    @if (app()->getLocale() != 'en')
                                        <li wire:click="locale('en')">
                                            <a href="#"
                                               class="block text-center px-4 py-2 hover:bg-slate-500 dark:hover:bg-gray-600 text-gray-800">English</a>
                                        </li>
                                    @endif

                                    @if (app()->getLocale() != 'ar')
                                        <li wire:click="locale('ar')">
                                            <a href="#"
                                               class="block text-center px-4 py-2 hover:bg-slate-500 dark:hover:bg-gray-600 text-gray-800">العربی</a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            <h2 class="justify-end text-xl p-2">GCORP LLC</h2>
                        </div>

                        <ul class="menu bg-slate-100 glass text-gray-800 text-center rounded-box w-100 shadow">
                            <li>
                                <a href="{{ route('home') }}" wire:navigate>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                    </svg>
                                    {{ __('Home') }}
                                </a>
                            </li>
                            <li>
                                <a wire:navigate href="{{ route('posts') }}">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M19 7h1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h11.5M7 14h6m-6 3h6m0-10h.5m-.5 3h.5M7 7h3v3H7V7Z"/>
                                    </svg>

                                    {{ __('Posts') }}
                                </a>
                            </li>
                            <li>
                                <a wire:navigate href="{{ route('faq') }}">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M9.529 9.988a2.502 2.502 0 1 1 5 .191A2.441 2.441 0 0 1 12 12.582V14m-.01 3.008H12M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>

                                    {{ __('Faq') }}
                                </a>
                            </li>
                            <li>
                                <a wire:navigate href="{{ route('contact_us') }}">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M20.283 8h-4.285m3.85 3h-3.85m4.061-6H11v11h8.27l1.715-9.847A.983.983 0 0 0 20.059 5ZM6.581 13.23h-.838A13.752 13.752 0 0 1 5.622 11c-.02-.745.02-1.49.12-2.23h1.04c.252 0 .496-.088.683-.245a.927.927 0 0 0 .329-.61l.2-1.872a.888.888 0 0 0-.045-.39.936.936 0 0 0-.212-.34 1.017 1.017 0 0 0-.341-.231A1.08 1.08 0 0 0 6.983 5h-2.06a1.27 1.27 0 0 0-.699.204 1.135 1.135 0 0 0-.442.543A15.066 15.066 0 0 0 3.007 11a15.656 15.656 0 0 0 .795 5.229c.165.462 1.342.771 1.864.771h1.116c.142 0 .283-.028.413-.082.13-.053.246-.132.341-.23a.936.936 0 0 0 .212-.34.889.889 0 0 0 .046-.391l-.201-1.873a.927.927 0 0 0-.33-.609 1.059 1.059 0 0 0-.682-.245ZM10 18v1h10v-1a2 2 0 0 0-2-2h-6a2 2 0 0 0-2 2Z"/>
                                    </svg>

                                    {{ __('Contact Us') }}
                                </a>
                            </li>
                            <li>
                                <a wire:navigate href="{{ route('about_us') }}">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>

                                    {{ __('About Us') }}
                                </a>
                            </li>

                        </ul>

                        <div class="card bg-slate-100 m-3 glass self-end absolute bottom-0 left-0">

                            <div class="card-body">
                                <h2 class="card-title">{{ __('Contact Us') }}</h2>
                                <ul class="menu bg-base-200 rounded-box w-56">
                                    <li>
                                        <a href="tel:02191694901">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"/>
                                            </svg>

                                            02191694901
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tel:09370290168">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"/>
                                            </svg>
                                            09370290168
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>

        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                <li>
                    <a wire:navigate href="{{ route('home') }}"
                       class="block py-2 px-3 {{ Route::is('home') ? 'text-violet-900 bg-slate-300 md:bg-transparent md:text-violet-900' : 'text-gray-900' }}  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-500 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">{{ __('Home') }}

                    </a>
                </li>
                <li>
                    <a wire:navigate href="{{ route('posts') }}"
                       class="block py-2 px-3 {{ Route::is('posts') ? 'text-violet-900 bg-slate-300 md:bg-transparent md:text-violet-900' : 'text-gray-900' }}  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-500 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">{{ __('Posts') }}</a>
                </li>
                <li>
                    <a href="{{ route('gallery') }}" wire:navigate
                       class="block py-2 px-3 {{ Route::is('gallery') ? 'text-white bg-blue-700 md:bg-transparent md:text-blue-700' : 'text-gray-900' }}  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">{{ __('Gallery') }}</a>

                </li>


                <li>
                    <a wire:navigate href="{{ route('faq') }}"
                       class="block py-2 px-3 {{ Route::is('faq') ? 'text-violet-900 bg-slate-300 md:bg-transparent md:text-violet-900' : 'text-gray-900' }}  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-500 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">{{ __('Faq') }}</a>
                </li>

                <li>
                    <a wire:navigate href="{{ route('contact_us') }}"
                       class="block py-2 px-3 {{ Route::is('contact_us') ? 'text-violet-900 bg-slate-300 md:bg-transparent md:text-violet-900' : 'text-gray-900' }}  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-500 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">{{ __('Contact Us') }}</a>
                </li>
                <li>
                    <a wire:navigate href="{{ route('about_us') }}"
                       class="block py-2 px-3 {{ Route::is('about_us') ? 'text-violet-900 bg-slate-300 md:bg-transparent md:text-violet-900' : 'text-gray-900' }}  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-500 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">{{ __('About Us') }}</a>
                </li>


            </ul>
        </div>
    </div>
</nav>
