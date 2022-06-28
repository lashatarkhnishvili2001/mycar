@props(['car'])

<x-card>
    <div class="flex justify-center">
  <div class="rounded-lg shadow-lg bg-white max-w-sm">
    {{-- <div class="relative overflow-hidden bg-no-repeat bg-cover max-w-xs">
        <img src="{{$car->image ? asset('storage/' . $car->image) : asset('images/mycar.png')}}" class="max-w-xs hover:scale-110 transition duration-300 ease-in-out" alt="Louvre" />
      </div> --}}
    <a href="/cars/{{$car->id}}" class="relative overflow-hidden bg-no-repeat bg-cover max-w-xs" data-mdb-ripple="true" data-mdb-ripple-color="light">
      <img src="{{count($car -> galleries) ? asset('storage/'. $car -> galleries -> first() -> image) :  asset('images/mycar.png')}}" class="max-w-xs hover:scale-110 transition duration-300 ease-in-out rounded-t-lg" alt="Louvre"/>
    </a>
    {{-- <div class="galleries">
        @foreach ($car->galleries as $gallery)
        <img src="{{$car->image ? asset('storage/' . $gallery -> image) : asset('images/mycar.png')}}" class="max-w-xs hover:scale-110 transition duration-300 ease-in-out rounded-t-lg" alt="Louvre"/>
        @endforeach
    </div> --}}
    <div class="p-6">
        <h3 class="text-2xl flex justify-center animate__shakeX">
            <a href="/cars/{{$car->id}}">{{$car['title']}}</a>
        </h3>
      <h5 class="text-gray-900 text-xl font-medium mb-2">Model: {{$car['model']}}</h5>
      <h6 class="font-medium leading-tight text-base mt-0 mb-2 ">Category: {{$car['category']}}</h6>
      <h6 class="font-medium leading-tight text-base mt-0 mb-2 ">Year: {{$car['year']}}</h6>
      <h6 class="font-medium leading-tight text-base mt-0 mb-2 ">Engine: {{$car['engine']}}</h6>
      <h6 class="font-medium leading-tight text-base mt-0 mb-2 ">Wheel: {{$car['wheel']}}</h6>
      <h6 class="font-medium leading-tight text-base mt-0 mb-2 ">Fuel_type: {{$car['fuel_type']}}</h6>
      <h6 class="font-medium leading-tight text-base mt-0 mb-2 ">Location: {{$car['location']}}</h6>
      
    </div>
  </div>
</div>
    {{-- <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{$car->image ? asset('storage/' . $car->image) : asset('images/mycar.png')}}" alt=""/>

        <div>       
            <h3 class="text-2xl">
                <a href="/cars/{{$car->id}}">{{$car['title']}} {{$car['model']}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$car['year']}}</div>
            <ul class="flex">
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">{{$car['category']}}</a>
                </li>
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">{{$car['fuel_type']}}</a>
                </li>

            </ul>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$car['location']}}
            </div>
        </div>
    </div>   --}}
</x-card>
