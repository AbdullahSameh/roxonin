<header>
  <!-- This example requires Tailwind CSS v2.0+ -->
  <nav>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-16">
      <div class="relative flex items-center justify-between h-20 px-2.5">
        <div class="absolute inset-y-0 start-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button type="button" id="mobileMenuToggale"
            class="inline-flex items-center justify-center md:justify-start p-2 rounded-md text-head-color hover:text-white hover:bg-logo-color focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
            aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>

            {{-- <svg id="openMenu" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg> --}}

            <svg id="openMenu" class="block h-6 w-6" width="24" height="24" viewBox="0 0 24 24" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M0 4.79398C0 4.13398 0.5352 3.59998 1.194 3.59998H10.806C11.1227 3.59998 11.4264 3.72577 11.6503 3.94969C11.8742 4.17361 12 4.47731 12 4.79398C12 5.11064 11.8742 5.41434 11.6503 5.63826C11.4264 5.86218 11.1227 5.98798 10.806 5.98798H1.194C0.877331 5.98798 0.573633 5.86218 0.349715 5.63826C0.125796 5.41434 0 5.11064 0 4.79398Z"
                fill="#121212" />
              <path
                d="M0 12C0 11.34 0.5352 10.806 1.194 10.806H22.806C23.1227 10.806 23.4264 10.9318 23.6503 11.1557C23.8742 11.3796 24 11.6833 24 12C24 12.3166 23.8742 12.6203 23.6503 12.8443C23.4264 13.0682 23.1227 13.194 22.806 13.194H1.194C0.877331 13.194 0.573633 13.0682 0.349715 12.8443C0.125796 12.6203 0 12.3166 0 12Z"
                fill="#121212" />
              <path
                d="M1.194 18.012C0.877331 18.012 0.573633 18.1378 0.349715 18.3617C0.125796 18.5856 0 18.8893 0 19.206C0 19.5226 0.125796 19.8263 0.349715 20.0502C0.573633 20.2742 0.877331 20.4 1.194 20.4H15.606C15.9227 20.4 16.2264 20.2742 16.4503 20.0502C16.6742 19.8263 16.8 19.5226 16.8 19.206C16.8 18.8893 16.6742 18.5856 16.4503 18.3617C16.2264 18.1378 15.9227 18.012 15.606 18.012H1.194Z"
                fill="#121212" />
            </svg>


            <svg id="closeMenu" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <div class="flex-1 flex items-center justify-center md:justify-start sm:justify-start">
          <div class="flex-shrink-0 flex items-center">
            <a href="#">
              <img class="h-20 w-auto" src="{{ asset('images/logo/logo.png') }}" alt="roxonin">
            </a>
          </div>

          <div class="flex-1 h-20 hidden sm:block ltr:ms-6 sm:ms-6">
            <div class="flex items-center justify-start h-full">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href=""
                class="nav-link relative inline-flex items-center text-head-color px-2 lg:px-5 py-2 h-full text-sm lg:text-base uppercase font-medium hover:text-logo-color transition duration-200 ease-in-out">
                {{ __('messages.home') }}
              </a>
              <a href="#"
                class="nav-link relative inline-flex items-center text-head-color px-2 lg:px-5 py-2 h-full text-sm lg:text-base uppercase font-medium hover:text-logo-color transition duration-200 ease-in-out">
                {{ __('messages.aboutUs') }}
              </a>
              <a href="#"
                class="nav-link relative inline-flex items-center text-head-color px-2 lg:px-5 py-2 h-full text-sm lg:text-base uppercase font-medium hover:text-logo-color transition duration-200 ease-in-out">
                {{ __('messages.contact') }}
              </a>
            </div>
          </div>
        </div>

        <div class="absolute inset-y-0 end-0 flex items-center pe-2 sm:static sm:inset-auto sm:ms-6 sm:pe-0">
          <div class="group ms-3 relative inline-block text-left">
            <div>
              <button type="button"
                class="inline-flex items-center justify-center md:justify-start w-full font-poppins rounded-lg border border-background-color shadow-sm px-2 py-2 bg-background-color text-sm font-medium text-head-color hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-background-color"
                id="menu-button" aria-expanded="true" aria-haspopup="true">
                @if (App::currentLocale() == 'ar')
                  @include('layout.flags.ar')

                  <span class="hidden md:inline">AR</span>
                @else
                  @include('layout.flags.en')

                  <span class="hidden md:inline">EN</span>
                @endif
                <!-- Heroicon name: solid/chevron-down -->
                <svg class="-me-1 ms-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                  fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
                </svg>
              </button>
            </div>

            <div
              class="origin-top-right absolute end-0 mt-2 w-full rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-10 transition-all opacity-0 group-focus-within:visible group-focus-within:opacity-100 group-focus-within:translate-y-1"
              role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <div class="py-1" role="none">
                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                @if (App::currentLocale() == 'ar')
                  <a href="#"
                    class="flex items-center justify-center md:justify-start text-text-color px-4 py-2 text-sm"
                    role="menuitem" tabindex="-1" id="menu-item-0">
                    <img class="md:me-2 w-5 h-5" src="{{ asset('images/icons/flag_english.svg') }}"
                      alt="flag_english">
                    <span class="hidden md:inline">EN</span>
                  </a>
                @else
                  <a href="#"
                    class="flex items-center justify-center md:justify-start text-text-color px-4 py-2 text-sm"
                    role="menuitem" tabindex="-1" id="menu-item-0">
                    <img class="md:me-2 w-5 h-5" src="{{ asset('images/icons/flag_uae.svg') }}" alt="flag_uae">
                    <span class="hidden md:inline">AR</span>
                  </a>
                @endif
              </div>
            </div>
          </div>
          <button
            class=" hidden lg:block items-center ms-3 px-10 py-3 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-400 rounded-xl hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Contact Us
          </button>

        </div>
      </div>
    </div>
  </nav>

</header>
