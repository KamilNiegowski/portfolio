<x-app-layout>
  <div class="">
    <table class="m-auto mb-20 mt-20 sm:rounded-md text-sm text-dark dark:text-white">
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
</x-app-layout>