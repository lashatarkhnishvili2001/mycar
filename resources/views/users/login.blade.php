<x-layout>
    <section class="h-screen">
        <div class="px-6 h-full text-gray-800">
          <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">
            <div
              class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0"
            >
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="w-full" alt="Sample image" />
            </div>
            <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                <form method="POST" action="/users/authenticate">
                @csrf 
                <div class="flex flex-row items-center justify-center lg:justify-start">
                  <p class="text-lg mb-0 mr-4">Login into your account to post gigs</p>
                  
                </div>
      
                <div
                  class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5"
                >
                  <p class="text-center font-semibold mx-4 mb-0">Or</p>
                </div>
      
                <!-- Email input -->
                
                <div class="mb-6">
                    <input
                    type="email"
                    class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    name="email" value="{{old('email')}}"
                    placeholder="Email address"
                    />
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
      
                <!-- Password input -->
                <div class="mb-6">
                  <input
                    type="password"
                    class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    name="password" value="{{old('password')}}"
                    placeholder="Password"
                  />
                  @error('password')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror
                </div>
                
                
      
                <div class="text-center lg:text-left">
                  <button
                  type="submit"
                    class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                  >
                    Login
                  </button>
                  <p class="text-sm font-semibold mt-2 pt-1 mb-0">
                    Don't have an account?
                    <a
                        href="/register"
                        class="phptext-red-600 hover:text-red-700 focus:text-red-700 transition duration-200 ease-in-out"
                      >Register</a
                    >
                  </p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    {{-- <x-card class=" p-10 max-w-lg mx-auto mt-24"> 
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Login
                        </h2>
                        <p class="mb-4">Login into your account to post gigs</p>
                    </header>

                    <form method="POST" action="/users/authenticate">
                        @csrf 
                        <div class="mb-6">
                            <label for="email" class="inline-block text-lg mb-2"
                                >Email</label
                            >
                            <input
                                type="email"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="email" value="{{old('email')}}"
                            />
                            
                            @error('email')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="password"
                                class="inline-block text-lg mb-2"
                            >
                                Password
                            </label>
                            <input
                                type="password"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="password" value="{{old('password')}}"
                            />
                            @error('password')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        

                        <div class="mb-6">
                            <button
                                type="submit"
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                                Sign in
                            </button>
                        </div>

                        <div class="mt-8">
                            <p>
                                Don't have an account?
                                <a href="/register" class="text-laravel"
                                    >Register</a
                                >
                            </p>
                        </div>
                    </form>
    </x-card> --}}
</x-layout>