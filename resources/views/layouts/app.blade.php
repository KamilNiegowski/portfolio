@php use App\Models\TextWidget; @endphp
        <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class=" h-full">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Kamil Niegowski</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
  <meta name="robots" content="noindex, nofollow">


  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-SFJVK8KPDB"></script>
  <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
          dataLayer.push(arguments);
      }

      gtag('js', new Date());

      gtag('config', 'G-SFJVK8KPDB');
  </script>
  <script type="text/javascript">
      (function (c, l, a, r, i, t, y) {
          c[a] = c[a] || function () {
              (c[a].q = c[a].q || []).push(arguments)
          };
          t = l.createElement(r);
          t.async = 1;
          t.src = "https://www.clarity.ms/tag/" + i;
          y = l.getElementsByTagName(r)[0];
          y.parentNode.insertBefore(t, y);
      })(window, document, "clarity", "script", "gyunxlatpp");
  </script>
  <!-- Fonts -->
  @vite('resources/css/app.css')

  <style>
      .dark #hero-text {
          background-color: {{ TextWidget::getBackgroundColorDarkTheme('hero-text') }};
      }

      .dark #about-me {
          background-color: {{ TextWidget::getBackgroundColorDarkTheme('about-me') }};
      }

      .dark #portfolio {
          background-color: {{ TextWidget::getBackgroundColorDarkTheme('portfolio') }};
      }

      .dark #contact-me {
          background-color: {{ TextWidget::getBackgroundColorDarkTheme('contact-me') }};
      }

      #hero-text {
          background-color: {{ TextWidget::getBackgroundColorLightTheme('hero-text') }};
      }

      #about-me {
          background-color: {{ TextWidget::getBackgroundColorLightTheme('about-me') }};
      }

      #portfolio {
          background-color: {{ TextWidget::getBackgroundColorLightTheme('portfolio') }};
      }

      #contact-me {
          background-color: {{ TextWidget::getBackgroundColorLightTheme('contact-me') }};
      }


  </style>
</head>
<body class="antialiased h-full flex flex-col text-gray-800 dark:text-white dark:bg-slate-700 scrollbar scrollbar-morpheus-den">
<x-layout.navbar></x-layout.navbar>
{{$slot}}
<x-layout.footer></x-layout.footer>
@vite('resources/js/app.js')
</body>
</html>
