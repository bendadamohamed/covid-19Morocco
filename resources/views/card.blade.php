
<div id="wrapper" class="max-w-2xl h-60 px-4 pb-4 mx-auto my-8">

    <div class="sm:grid sm:h-32 sm:grid-flow-row sm:gap-4 sm:grid-cols-3">
        <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white shadow-md rounded  border-b-8 border-blue-500">
            <div>
                <div>
                    <p class="flex  text-blue-500 text-md">
                        <span class="font-bold">Confirmed 😟</span>
                    </p>
                </div>
                <p class="text-3xl font-semibold text-gray-800">{{ number_format($global['TotalConfirmed'] )}}</p>
                <p class="text-sm text-gray-700 my-1">{{ date('l d M Y') }}</p>
                <p class="text-sm text-gray-600">Number of active cases of COVID-19</p>
            </div>
        </div>
        <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white shadow-md rounded  border-b-8 border-green-500 sm:mt-0">
            <div>
                <div>
                    <p class="flex  text-green-500 text-md">
                        <span class="font-bold">Recovered 🙂</span>
                    </p>
                </div>
                <p class="text-3xl font-semibold text-gray-800">{{ number_format($global['TotalRecovered']) }}</p>
                <p class="text-sm text-gray-700 my-1">{{ date('l d M Y') }}</p>
                <p class="text-sm text-gray-600">Number of recovries from COVID-19</p>
            </div>
        </div>

        <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white shadow-md rounded  border-b-8 border-red-500 sm:mt-0">
            <div>
                <div>
                    <p class="flex  text-red-500 text-md">
                        <span class="font-bold">Deaths 😢</span>
                    </p>
                </div>
                <p class="text-3xl font-semibold text-gray-800">{{ number_format($global['TotalDeaths']) }}</p>
                <p class="text-sm text-gray-700 my-1">{{ date('l d M Y') }}</p>
                <p class="text-sm text-gray-600">Number of deaths caused by COVID-19</p>
            </div>
        </div>
    </div>
</div>
<br>
<h2 class="text-base font-semibold text-center text-red-500">Covid-19 : World Up-date</h2>


{{-- dddddddddddddddddddddddddddddddddddddddd --}}



