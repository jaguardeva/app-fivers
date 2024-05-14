<x-app-layout>
    <x-slot name="header">
        <div class="md:flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Detail Service') }}
            </h2>
            <form class="w-full max-w-xl">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Search for any service..." required />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                </div>
            </form>
        </div>

    </x-slot>

    <div class="py-12 px-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full">
                <div class="grid md:grid-cols-2">
                    <div>

                        {{-- Header --}}
                        <div class="mb-4">
                            <h1 class="text-3xl font-semibold">Our agency will be your social media marketing manager
                                and content creator</h1>

                            <div class="flex items-center gap-3 mt-3">
                                <div
                                    class="flex justify-center items-center w-12 h-12 rounded-full border overflow-hidden">
                                    <img src="https://i.pinimg.com/564x/e4/46/46/e44646dc05a279c87770e06d29b44193.jpg"
                                        alt="" class="h-full w-full object-cover object-center">
                                </div>
                                <div>
                                    <h1 class="font-semibold text-lg">kreasiwebku</h1>
                                    <div class="flex items-center gap-1">
                                        <i class="fa-solid fa-star text-lg"></i>
                                        <p class="font-bold text-lg">4.5 </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Carousel --}}
                        <div id="default-carousel" class="relative w-full" data-carousel="slide">
                            <!-- Carousel wrapper -->
                            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                <!-- Item 1 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://i.pinimg.com/564x/69/1b/f2/691bf22c81101b83312489611da02536.jpg"
                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                        alt="...">
                                </div>
                                <!-- Item 2 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://i.pinimg.com/564x/d3/fc/dc/d3fcdcb3a02d1282c8598603d22365c9.jpg"
                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                        alt="...">
                                </div>
                                <!-- Item 3 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://i.pinimg.com/736x/2d/8a/dc/2d8adc62c0148c8f25e5f9c0eea01958.jpg"
                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                        alt="...">
                                </div>
                                <!-- Item 4 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://i.pinimg.com/736x/84/e8/ce/84e8ce390c02951e4d2200fd589ee6a4.jpg"
                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                        alt="...">
                                </div>
                                <!-- Item 5 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://i.pinimg.com/736x/a9/c7/c9/a9c7c9192a66ae10ba0b80654d56b589.jpg"
                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                        alt="...">
                                </div>
                            </div>
                            <!-- Slider indicators -->
                            <div
                                class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                    aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                    aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                    aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                    aria-label="Slide 4" data-carousel-slide-to="3"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                    aria-label="Slide 5" data-carousel-slide-to="4"></button>
                            </div>
                            <!-- Slider controls -->
                            <button type="button"
                                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                data-carousel-prev>
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 1 1 5l4 4" />
                                    </svg>
                                    <span class="sr-only">Previous</span>
                                </span>
                            </button>
                            <button type="button"
                                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                data-carousel-next>
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                        </div>

                        <div class="mt-10">
                            <h1 class="text-xl font-semibold">About this service</h1>
                            <div class="mt-4">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia sunt rem voluptatem
                                    laudantium veritatis, architecto ullam doloremque tenetur pariatur obcaecati
                                    voluptas enim voluptates quaerat facere aliquid temporibus voluptatibus odio?
                                    Deleniti natus delectus fugiat vero mollitia voluptatem quae maxime omnis quas
                                    dignissimos. Rerum, ipsa? Repellendus ullam tempora deleniti sit maiores adipisci
                                    non nihil fugit, eius pariatur. Voluptas voluptatem rem officiis cumque dolores sit
                                    provident excepturi temporibus ad, et, omnis velit. Dignissimos, vitae. Maiores sunt
                                    corporis temporibus et possimus modi aliquid error saepe, ex accusamus odio. Non
                                    similique assumenda in. Sapiente accusamus nam facere earum in est saepe voluptates
                                    et consequuntur corporis.
                                    <br> <br>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum, excepturi
                                    perferendis! Sapiente fugiat provident modi doloremque eos consequatur aut
                                    repudiandae, suscipit ea expedita aliquam labore. In, et! Magni, labore quidem.
                                </p>
                            </div>
                        </div>

                        <div>
                            <h1 class="text-xl font-semibold my-4">FAQ</h1>

                            <div id="accordion-collapse" data-accordion="collapse">
                                <h2 id="accordion-collapse-heading-1">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl  hover:bg-gray-100  gap-3"
                                        data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                        aria-controls="accordion-collapse-body-1">
                                        <span>What is Flowbite?</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-1" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-1">
                                    <div class="p-5 border border-b-0 border-gray-200 ">
                                        <p class="mb-2 text-gray-500 ">Flowbite is an open-source
                                            library of interactive components built on top of Tailwind CSS including
                                            buttons, dropdowns, modals, navbars, and more.</p>
                                        <p class="text-gray-500 ">Check out this guide to learn how
                                            to <a href="/docs/getting-started/introduction/"
                                                class="text-blue-600  hover:underline">get
                                                started</a> and start developing websites even faster with components on
                                            top of Tailwind CSS.</p>
                                    </div>
                                </div>
                                <h2 id="accordion-collapse-heading-2">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200  hover:bg-gray-100  gap-3"
                                        data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-2">
                                        <span>Is there a Figma file available?</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-2" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-2">
                                    <div class="p-5 border border-b-0 border-gray-200 ">
                                        <p class="mb-2 text-gray-500 ">Flowbite is first
                                            conceptualized and designed using the Figma software so everything you see
                                            in the library has a design equivalent in our Figma file.</p>
                                        <p class="text-gray-500 ">Check out the <a href="https://flowbite.com/figma/"
                                                class="text-blue-600  hover:underline">Figma design
                                                system</a> based on the utility classes from Tailwind CSS and components
                                            from Flowbite.</p>
                                    </div>
                                </div>
                                <h2 id="accordion-collapse-heading-3">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200  hover:bg-gray-100  gap-3"
                                        data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-3">
                                        <span>What are the differences between Flowbite and Tailwind UI?</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-3" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-3">
                                    <div class="p-5 border border-t-0 border-gray-200 ">
                                        <p class="mb-2 text-gray-500 ">The main difference is that
                                            the core components from Flowbite are open source under the MIT license,
                                            whereas Tailwind UI is a paid product. Another difference is that Flowbite
                                            relies on smaller and standalone components, whereas Tailwind UI offers
                                            sections of pages.</p>
                                        <p class="mb-2 text-gray-500 ">However, we actually recommend
                                            using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no
                                            technical reason stopping you from using the best of two worlds.</p>
                                        <p class="mb-2 text-gray-500 ">Learn more about these
                                            technologies:</p>
                                        <ul class="ps-5 text-gray-500 list-disc ">
                                            <li><a href="https://flowbite.com/pro/"
                                                    class="text-blue-600  hover:underline">Flowbite
                                                    Pro</a></li>
                                            <li><a href="https://tailwindui.com/" rel="nofollow"
                                                    class="text-blue-600  hover:underline">Tailwind
                                                    UI</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="ml-16">
                        <div class="border px-6 py-7 sticky top-24 text-gray-600">
                            <h1 class="font-semibold text-2xl">Rp 500.000</h1>
                            <div class="mt-4">
                                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi
                                    quam illo perspiciatis dolor hic exercitationem nesciunt beatae rerum, commodi magni
                                    voluptates laborum non blanditiis qui tenetur fugit recusandae ducimus! Hic?</p>

                                <div class="mt-4 flex flex-col gap-3">
                                    <div class="flex items-center gap-2">
                                        <i class="fa-solid fa-circle-check"></i>
                                        <p class="text-sm">Free Hosting</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="fa-solid fa-circle-check"></i>
                                        <p class="text-sm">Interactive Design</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="fa-solid fa-circle-check"></i>
                                        <p class="text-sm">Free SSL</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="fa-solid fa-circle-check"></i>
                                        <p class="text-sm">Free Domain</p>
                                    </div>
                                </div>
                                <div class="mt-6 flex justify-between items-center">
                                    <div class="flex items-center gap-2">
                                        <i class="fa-solid fa-clock text-lg"></i>
                                        <p class="font-medium text-sm">14-day delivery</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="fa-solid fa-rotate-left"></i>
                                        <p class="font-medium text-sm">3 Revisions</p>
                                    </div>
                                </div>
                                <a href="{{ route('checkout') }}"
                                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 mt-6 rounded-md w-full flex gap-5 items-center justify-center">
                                    <span>Continue</span><i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
