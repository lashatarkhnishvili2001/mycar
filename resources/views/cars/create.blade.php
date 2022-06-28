<x-layout>
    <x-card class=" p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create a Gig
            </h2>
            <p class="mb-4">Post a gig to find a developer</p>
        </header>

        <form method="POST" action="/cars" enctype="multipart/form-data">
            @csrf

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2"
                    >Job Title</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="title"
                    {{-- placeholder="Example: Senior Laravel Developer" --}}
                    value="{{old('title')}}"

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
                    value="{{old('model')}}"

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
                    value="{{old('category')}}"
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
                    value="{{old('engine')}}"
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
                    value="{{old('wheel')}}"
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
                    value="{{old('fuel_type')}}"
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
                    value="{{old('location')}}"
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
                    value="{{old('year')}}"
                />
                @error('year')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

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
                    Create Gig
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>