
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>
<body>

  <div class="container mx-auto  mt-2 p-5 ">
      <div class="bg-green-200 border-dashed border-4 border-gray-600 p-5 ">
      <h2  class="text-base text-red-400 font-bold item-center ">   COVID-19      </h2>
  <h2 class="font-semibold capitalize text-gray-800">
    The coronavirus COVID-19 is affecting 210 countries and territories around the world and 2 international conveyances. The day is reset after midnight GMT+0. The list of countries and territories and their continental regional classification is based on the https://covid19api.com/ Data is sourced from Johns Hopkins CSSE. Sources are provided under "Latest Updates".
  </h2>
</div>
@include('card')
@include('search')
<div class="w-full shadow-md">
    <h3 class="text-base text-center text-gray-400 mt-4">The charts below are updated after the close of the day in GMT+0.</h3>
    {!! $chart->container() !!}
</div>
<br>
<br>
<br>
<br>
</div>
{!! $chart->script() !!}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>


</body>
</html>
