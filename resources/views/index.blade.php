<x-app-layout>
    <div class="flex justify-center items-center w-full h-[calc(100vh-64px)]">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Home Page</h1>
                </div>
            </div> --}}

            <div class="w-full h-full grid md:grid-cols-2">
                <div class="w-full flex flex-col justify-center">
                    <h1 class="text-7xl font-bold">Find the right <span class="text-blue-500">digital</span> service,
                        right away</h1>

                    <form class="w-full mx-auto mt-10">
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Search for any service..." required />
                            <button type="submit"
                                class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                        </div>
                    </form>

                    <div class="flex items-center gap-3 mt-5">
                        <h1 class="text-md font-semibold">Popular:</h1>
                        <div class="py-2 px-4 border rounded-full">
                            <h3 class="text-sm">Website Design</h3>
                        </div>
                        <div class="py-2 px-4 border rounded-full">
                            <h3 class="text-sm">WordPress</h3>
                        </div>
                        <div class="py-2 px-4 border rounded-full">
                            <h3 class="text-sm">Logo Desain</h3>
                        </div>
                        <div class="py-2 px-4 border rounded-full">
                            <h3 class="text-sm">AI Services</h3>
                        </div>
                    </div>

                </div>
                <div class="w-full flex justify-end items-center">
                    <img src="{{ asset('images/image1.svg') }}" alt="Hero Image" class="w-[500px]">
                </div>
            </div>


        </div>
    </div>
    <section>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <h1>Trusted by:</h1>

        </div>
    </section>
</x-app-layout>
