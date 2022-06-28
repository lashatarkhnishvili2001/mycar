<x-layout>
    <x-card class=" p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit Gig
            </h2>
            <p class="mb-4">Edit: {{$car->image}}</p>
        </header>

        <form method="POST" action="/cars/{{$car->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2"
                    >Job Title</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="title"
                    {{-- placeholder="Example: Senior Laravel Developer" --}}
                    value="{{$car->title}}"

                />
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="model" class="inline-block text-lg mb-2"
                    >model</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="model"
                    {{-- placeholder="Example: Senior Laravel Developer" --}}
                    value="{{$car->model}}"

                />
                @error('model')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="category"
                    class="inline-block text-lg mb-2"
                    >category</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="category"
                    {{-- placeholder="Example: Remote, Boston MA, etc" --}}
                    value="{{$car->category}}"
                />
                @error('category')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="engine"
                    class="inline-block text-lg mb-2"
                >
                    engine
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="engine" 
                    value="{{$car->engine}}"
                />
                @error('engine')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="wheel"
                    class="inline-block text-lg mb-2"
                    >whell</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="wheel"
                    placeholder="left, right"
                    value="{{$car->wheel}}"
                />
                @error('wheel')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="fuel_type"
                    class="inline-block text-lg mb-2"
                    > fuel_type </label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="fuel_type"
                    placeholder=" gasoline , diesel"
                    value="{{$car->fuel_type}}"
                />
                @error('fuel_type')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="location"
                    class="inline-block text-lg mb-2"
                    >Job Location</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="location"
                    placeholder="location"
                    value="{{$car->location}}"
                />
                @error('location')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="year"
                    class="inline-block text-lg mb-2"
                    >Job year</label
                >
                <input
                    type="year"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="year"
                    {{-- placeholder="Example: Remote, Boston MA, etc" --}}
                    value="{{$car->year}}"
                />
                @error('year')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
        <img class="w-48 mr-6 mb-6" src="{{$car->image ? asset('storage/' . $car->image) : asset('images/mycar.png')}}" alt="" />


            <div class="mb-6">
                <label for="image" class="inline-block text-lg mb-2">
                    image
                </label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="image[]" multiple
                />
                @error('image')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="galleries">
                @if(count($car->galleries))
                    @foreach ($car->galleries as $gallery)
                        <div class="w-full p-1 md:p-2 relative" >
                            <form method="POST" action="/images/{{$gallery->id}}" class="absolute top-0 right-0" onsubmit="return confirm('are you sure delete this image?')">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500"><i class=" fa-solid fa-trash"></i>Delete</button>
                            </form> 
                            <img src="{{asset('storage/'.$gallery -> image)}}" class="w-full  transition duration-300 ease-in-out rounded-t-lg" alt="Louvre"/>
                        </div>
                    @endforeach
                @else 
                <img src="{{asset('images/mycar.png')}}" class="max-w-xs  transition duration-300 ease-in-out rounded-t-lg" alt="Louvre"/>
    
                
                @endif
            </div>
            {{-- <div class="mb-6">
                <label
                    for="description"
                    class="inline-block text-lg mb-2"
                >
                    Job Description
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="description"
                    rows="10"
                    placeholder="Include tasks, requirements, salary, etc"
                    {{old('description')}}
                ></textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div> --}}

            <div class="mb-6">
                <button
                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                >
                    Update Gig
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>