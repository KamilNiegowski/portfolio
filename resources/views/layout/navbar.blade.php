<!-- ====== Navbar Section Start -->
<header
        x-data="{navbarOpen: false}"
        class="fixed left-0 top-0 z-50 bg-white w-full flex items-center shadow-md dark:bg-slate-900 h-24"
>
  <div class="container">
    <div class="flex -mx-4 items-center justify-between relative">
      <div class="pr-4 w-60 max-w-full">
        <a href="/" class="w-full flex items-center py-2">
          <img
                  src="{{ url('/img/logo-white.webp') }}"
                  alt="logo"
                  class="max-w-[110px] lg:inline-block"
          />

          <span class="text-xl xl:text-2xl font-bold text-[#0aafff] dark:text-white">KamilNiegowski</span>
        </a>
      </div>
      <div class="flex px-4 justify-end items-center w-full">
        <div>
          <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen"
                                     x-bind:class="navbarOpen && 'navbarTogglerActive'"></x-layout.navbar-hamburger>
          <nav
                  :class="!navbarOpen && 'hidden'"
                  id="navbarCollapse"
                  class="absolute right-0 top-full bg-white py-5 px-6 z-50 shadow rounded-lg w-full dark:bg-slate-900 dark:text-white lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none"
          >
            <ul class="block lg:flex lg:items-center">
              <button
                      id="theme-toggle"
                      type="button"
                      class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg text-sm p-2.5"
              >
                <svg
                        id="theme-toggle-dark-icon"
                        class="w-5 h-5 hidden"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                          d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                  ></path>
                </svg>
                <svg
                        id="theme-toggle-light-icon"
                        class="w-5 h-5 hidden"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                          d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
              @foreach($navigationItems as $item)
                <x-layout.navbar-item :href="$item['href']">{{ $item['label'] }}</x-layout.navbar-item>
              @endforeach
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <script>
      const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
      const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

      // ustaw motyw na podstawie wartości z localStorage (jeśli istnieje)
      if (localStorage.getItem('theme') === 'dark') {
          themeToggleLightIcon.classList.remove('hidden');
          document.documentElement.classList.add('dark');
      } else {
          themeToggleDarkIcon.classList.remove('hidden');
          document.documentElement.classList.remove('dark');
      }

      const themeToggleBtn = document.getElementById('theme-toggle');

      themeToggleBtn.addEventListener('click', function () {
          // toggle icons inside button
          themeToggleDarkIcon.classList.toggle('hidden');
          themeToggleLightIcon.classList.toggle('hidden');

          // zmień motyw i zapisz preferencję do localStorage
          if (document.documentElement.classList.contains('dark')) {
              document.documentElement.classList.remove('dark');
              localStorage.setItem('theme', 'light');
          } else {
              document.documentElement.classList.add('dark');
              localStorage.setItem('theme', 'dark');
          }
      });
  </script>
</header>
<!-- ====== Navbar Section End -->
