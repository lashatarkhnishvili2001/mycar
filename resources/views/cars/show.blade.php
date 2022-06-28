<x-layout>
<a href="/" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">

    {{-- <x-card class="mt-4 p-2 flex justify-end space-x-6">
        <a href="/cars/{{$car->id}}/edit">
            <i class="fa-solid fa-pencil"></i> edit
        </a>        
    
        <form method="POST" action="/cars/{{$car->id}}">
            @csrf
            @method('DELETE')
            <button class="text-red-500">
                <i class="fa-solid fa-trash"></i> Delete
            </button>
        </form>
    </x-card> --}}

    <x-card class="p-10">
        <div class="galleries">
            @if(count($car->galleries))
                @foreach ($car->galleries as $gallery)
                    <img src="{{asset('storage/'.$gallery -> image)}}" class="max-w-xs hover:scale-110 transition duration-300 ease-in-out rounded-t-lg" alt="Louvre"/>
                @endforeach
            @else 
            <img src="{{asset('images/mycar.png')}}" class="max-w-xs hover:scale-110 transition duration-300 ease-in-out rounded-t-lg" alt="Louvre"/>

            
            @endif
        </div>
    <div
        class="flex flex-col items-center justify-center text-center"
    >
        {{-- <img class="w-48 mr-6 mb-6" src="{{$car->image ? asset('storage/' . $car->image) : asset('images/mycar.png')}}" alt="" /> --}}

        <h3 class="text-2xl mb-2">{{$car['title']}}</h3>
        <div class="text-xl font-bold mb-4">model: {{$car['model']}}</div>
        <ul class="flex mb-2">
            <li class="bg-black text-white rounded-xl px-3 py-1 mr-2" >
                year: {{$car['year']}}
            </li>
        </ul>
        <ul class="flex">
            <li class="bg-black text-white rounded-xl px-3 py-1 mr-2" >
                category: {{$car['category']}}
            </li>
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
            engine: {{$car['engine']}}
            </li>
        </ul>
        <ul class="flex mt-2">
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
            fuel type: {{$car['fuel_type']}}
            </li>
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
                <a href="#">wheel: {{$car['wheel']}}</a>
            </li>
        </ul>


        <div class="text-lg my-4">
            <i class="fa-solid fa-location-dot"></i> {{$car['location']}}
        </div>
        <div class="border border-gray-200 w-full mb-6"></div>
        <div>
            <h3 class="text-3xl font-bold mb-4">
                Job Description
            </h3>
            <div class="text-lg space-y-6">
                <p>
                    Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Eligendi non reprehenderit
                    facilis architecto autem quam
                    necessitatibus, odit quod, repellendus
                    voluptate cum. Necessitatibus a id tenetur.
                    Error numquam at modi quaerat.
                </p>

                <a
                    href="mailto:test@test.com"
                    class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                    ><i class="fa-solid fa-envelope"></i>
                    Contact Employer</a
                >

                <a
                    href="https://test.com"
                    target="_blank"
                    class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                    ><i class="fa-solid fa-globe"></i> Visit
                    Website</a
                >
            </div>
        </div>
    </div>
</x-card>

</div>
</x-layout>