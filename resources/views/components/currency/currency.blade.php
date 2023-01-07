<table>
  <thead>
  <tr>
    <th>ID</th>
    <th>Nazwa waluty</th>
    <th>Kod waluty</th>
    <th>Kurs</th>
  </tr>
  </thead>
  <tbody>
  @foreach ($currencies as $currency)
    <tr>
      <td> {{ $currency->id }} </td>
      <td> {{ $currency->name }} </td>
      <td style="text-align: center"> {{ $currency->currency_code }} </td>
      <td style="text-align: right"> 1 {{ $currency->currency_code }} = {{ $currency->exchange_rate }} PLN</td>
    </tr>
  @endforeach
  </tbody>
</table>
