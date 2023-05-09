<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Brak strony</title>
  <!-- Fonts -->
  <link href="{{Vite::asset('resources/css/app.css')}}" rel="stylesheet">
  <script>
      if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
          document.documentElement.classList.add('dark')
      } else {
          document.documentElement.classList.remove('dark')
      }
      console.log(window.matchMedia('(prefers-color-scheme: dark)').matches)
  </script>
</head>
<body class="bg-dark ">
<div class="container mt-[45vh] ">
  <div class="w-full ">
    <div class=" text-center">
      <h2
              class="text-black mb-2 text-[50px] font-bold leading-none dark:text-white sm:text-[80px] md:text-[100px]"
      >
        404
      </h2>
      <h4 class="text-black dark:text-white mb-3 text-[22px] font-semibold leading-tight ">
        Oops! Nie ma takiej strony.
      </h4>
      <a
              href="/"
              class="text-black dark:text-white dark:hover:text-dark hover:text-white hover:bg-black dark:hover:bg-black inline-block rounded-lg border border-black dark:border-white hover:border-black px-8 py-3 text-center text-base font-semibold transition"
      >
        Wróć na stronę główna.
      </a>
    </div>
  </div>
</div>
<div
        class="absolute top-0 left-0 -z-10 flex h-full w-full items-center"
>
  <div
          class="h-full w-1/2 bg-gradient-to-t from-slate-100 to-slate-600 dark:from-[#000000] dark:to-dark"
  ></div>

  <div
          class="h-full w-1/2 bg-gradient-to-b from-slate-100 to-slate-600 dark:from-[#000000] dark:to-dark"
  ></div>
  <div
          class="h-full w-1/2 bg-gradient-to-t from-slate-100 to-slate-600 dark:from-[#000000] dark:to-dark"
  ></div>

  <div
          class="h-full w-1/2 bg-gradient-to-b from-slate-100 to-slate-600 dark:from-[#000000] dark:to-dark"
  ></div>
</div>
<!-- ====== Error 404 Section End -->
</body>
