<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aktualne kursy walut NBP</title>
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
<body class="bg-dark">
<div class="ml-12 relative overflow-x-auto shadow-md sm:rounded-lg">
  <table class=" text-sm text-dark dark:text-white">
    <thead class="text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
    <tr>
      <th scope="col" class="px-4 py-2">id</th>
      <th scope="col" class="px-4 py-2">nazwa waluty</th>
      <th scope="col" class="px-4 py-2">kod waluty</th>
      <th scope="col" class="px-4 py-2">kurs</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($currencies as $currency)
      <tr class=" text-[16px] bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
        <th scope="row"
            class="px-2 font-medium text-gray-900 whitespace-nowrap dark:text-white"
        >{{ $currency->id }}
        </th>
        <td class="px-2"> {{ $currency->name }} </td>
        <td class="px-2 text-center"> {{ $currency->currency_code }} </td>
        <td class="px-2 text-center">
          1 {{ $currency->currency_code }} = {{ $currency->exchange_rate }} PLN
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
<a href="/"
   class="text-black mt-10 dark:text-white dark:hover:text-dark hover:text-white hover:bg-black dark:hover:bg-black inline-block rounded-lg border border-black dark:border-white hover:border-black px-8 py-3 text-center text-base font-semibold transition"
> Wróć na stronę główna. </a>
</body>
</html>
