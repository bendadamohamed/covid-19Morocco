<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="relative">
        <select wire:model="countryName"  class="block rounded rounded-full appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
            {{ sort($country) }}
            @foreach ($country as $item)
        <option>{{ $item['Country'] }}</option>

        @endforeach
      </select>

      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
    </div>
</div>


{{-- {{ $countryName }} --}}


<!-- Calendar Icon -->
<div class="flex  justify-center">
<div class="min-w-32 flex bg-white min-h-48 p-3 mb-4 font-medium">
    <div class="w-32 flex-none lg:rounded-t-none lg:rounded-l text-center shadow ">
      <div class="block overflow-hidden  text-center rounded border border-blue-200 ">
        <div class="pt-3 bg-white py-3">
          <span class="text-4xl font-bold leading-tight text-blue-500 ">
            {{number_format($value['TotalConfirmed'])}}
          </span>
        </div>
        <div class="text-center  ">
          <span class="text-semibold pb-2 text-blue-500">
            Confirmed
          </span>
        </div>
      </div>
    </div>
</div>
<div class="min-w-32 flex bg-white min-h-48 p-3 mb-4 font-medium">

    <div class="w-32 flex-none lg:rounded-t-none lg:rounded-l text-center shadow ">
      <div class="block overflow-hidden  text-center rounded border border-red-200 ">
        <div class="pt-3 bg-white py-3">
          <span class="text-4xl font-bold leading-tight text-red-500 ">
            {{number_format($value['NewDeaths'])}}
          </span>
        </div>
        <div class="text-center  ">
          <span class="text-semibold pb-2 text-red-500">
            Deaths
          </span>
        </div>
      </div>
    </div>
</div>
<div class="min-w-32 flex  bg-white min-h-48 p-3 mb-4 font-medium">

    <div class="w-32 flex-none lg:rounded-t-none lg:rounded-l text-center shadow ">
      <div class="block overflow-hidden  text-center rounded border border-green-200 ">
        <div class="pt-3 bg-white py-3">
          <span class="text-4xl font-bold leading-tight text-green-500 ">
            {{number_format($value['NewRecovered'])}}
          </span>
        </div>
        <div class="text-center  ">
          <span class="text-semibold pb-2 text-green-500">
            Recovered
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- @foreach ($cc['Countries'] as $item)
@if ($item['Country']==='Morocco')
<li>{{ var_dump($item)}}</li>
@endif
@endforeach --}}
