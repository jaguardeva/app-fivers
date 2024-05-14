<x-app-layout>
    <x-slot name="header">
        <div class="md:flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Payment') }}
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

    <div class="py-12 px-4 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-3xl font-semibold">Metode Pembayaran</h1>
            <form id="payment-form" method="POST" action="">
                @csrf
                <input type="hidden" name="payment_method" id="payment-method">
                <div class="w-full">
                    <div class="md:flex gap-5 mt-6">
                        <div class="w-full max-w-[400px]">
                            <div class="flex flex-col gap-6 cursor-pointer">
                                <div id="bca"
                                    class="payment-option flex items-center justify-between border-2 px-5 py-4 w-[400px] h-[64px] overflow-hidden bg-white">
                                    <div class="flex items-center gap-2">
                                        <div class="dot h-4 w-4 rounded-full border-2 border-blue-500"></div>
                                        <h1 class="font-semibold text-lg">BCA</h1>
                                    </div>
                                    <div><img src="{{ asset('images/bca.svg') }}" alt="" class="w-16"></div>
                                </div>
                                <div id="mandiri"
                                    class="payment-option flex items-center justify-between border-2 px-5 py-4 w-[400px] h-[64px] overflow-hidden bg-white">
                                    <div class="flex items-center gap-2">
                                        <div class="dot h-4 w-4 rounded-full border-2 border-blue-500"></div>
                                        <h1 class="font-semibold text-lg">MANDIRI</h1>
                                    </div>
                                    <div><img src="{{ asset('images/mandiri.svg') }}" alt="" class="w-16">
                                    </div>
                                </div>
                                <div id="bni"
                                    class="payment-option flex items-center justify-between border-2 px-5 py-4 w-[400px] h-[64px] overflow-hidden bg-white">
                                    <div class="flex items-center gap-2">
                                        <div class="dot h-4 w-4 rounded-full border-2 border-blue-500"></div>
                                        <h1 class="font-semibold text-lg">BNI</h1>
                                    </div>
                                    <div><img src="{{ asset('images/bni.svg') }}" alt="" class="w-16"></div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full bg-white p-6 rounded-lg">
                            <div class="flex justify-between items-center">
                                <div class="max-w-xs">
                                    <h1 class="text-lg font-semibold">Our agency will be your social media marketing
                                        manager
                                        and
                                        content
                                        creator</h1>
                                </div>
                                <div>
                                    <p class="text-xl font-semibold ">Rp500.000</p>
                                </div>
                            </div>
                            <div class="space-y-2 mt-3">
                                <div class="flex items-center gap-2">
                                    <i class="fa-solid fa-circle-check text-green-600"></i>
                                    <p>Free first year</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="fa-solid fa-circle-check text-green-600"></i>
                                    <p>Free Domain</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="fa-solid fa-circle-check text-green-600"></i>
                                    <p>Free SSL</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, asperiores
                                    architecto assumenda tenetur corporis quia aut atque praesentium aliquid hic.</p>
                            </div>
                            <hr class="my-5 border">
                            <div>
                                <form action="" method="POST">
                                    @csrf
                                    <div class="flex items-center justify-between gap-4">
                                        <input
                                            class="w-full outline-none border-slate-400 placeholder:text-slate-400 text-sm p-3"
                                            type="text" name="firstName" id="name"
                                            placeholder="Nama depan (opsional)">
                                        <input
                                            class="w-full outline-none border-slate-400 placeholder:text-slate-400 text-sm p-3"
                                            type="text" name="lastName" id="name"
                                            placeholder="Nama belakang (opsional)">
                                    </div>
                                    <input
                                        class="w-full outline-none border-slate-400 placeholder:text-slate-400 text-sm p-3 mt-4"
                                        type="text" name="lastName" id="name" placeholder="Nomor Telepon">
                                    <input
                                        class="w-full outline-none border-slate-400 placeholder:text-slate-400 text-sm p-3 mt-4"
                                        type="text" name="lastName" id="name" placeholder="Negara Domisili">
                                    <div class="flex items-center justify-between gap-4 mt-4">
                                        <input
                                            class="w-full outline-none border-slate-400 placeholder:text-slate-400 text-sm p-3"
                                            type="text" name="firstName" id="name"
                                            placeholder="Kabupaten/provinsi">
                                        <input
                                            class="w-full outline-none border-slate-400 placeholder:text-slate-400 text-sm p-3"
                                            type="text" name="lastName" id="name" placeholder="Kota">
                                    </div>
                                    <div class="flex items-center justify-between gap-4 mt-4">
                                        <input
                                            class="w-full outline-none border-slate-400 placeholder:text-slate-400 text-sm p-3"
                                            type="text" name="firstName" id="name" placeholder="Alamat">
                                        <input
                                            class="w-full outline-none border-slate-400 placeholder:text-slate-400 text-sm p-3"
                                            type="text" name="lastName" id="name" placeholder="Kode Pos">
                                    </div>
                                    <div class="flex items-center justify-between gap-4 mt-4">
                                        <p class="text-md ">Diskon Paket</p>
                                        <p class="text-md ">Rp0</p>
                                    </div>
                                    <div class="flex items-center justify-between gap-4 mt-4">
                                        <p class="text-md ">Pajak & Biaya Tambahan</p>
                                        <p class="text-md ">Rp0</p>
                                    </div>
                                    <hr class="border my-4">
                                    <div class="flex items-center justify-between">
                                        <p class="text-2xl font-semibold">Total</p>
                                        <p class="text-lg font-semibold">Rp500.000</p>
                                    </div>
                                    <hr class="border my-4">
                                    <div class="w-full">
                                        <button
                                            class="bg-blue-600 hover:bg-blue-700 w-full text-white px-5 py-4 rounded">Bayar
                                            Sekarang</button>
                                        <div class="flex items-center gap-3 mt-4">
                                            <i class="fa-solid fa-clock-rotate-left text-green-600"></i>
                                            <p class="text-sm">Jaminan 30 Hari Uang Kembali
                                            </p>
                                        </div>
                                        <div class="flex items-center gap-3 mt-4">
                                            <i class="fa-solid fa-lock text-green-600"></i>
                                            <p class="text-sm">Pembayaran Aman dan Terenkripsi
                                            </p>
                                        </div>
                                        <p class="mt-4 text-sm">Dengan checkout, Anda setuju dengan <a href="#"
                                                class="font-bold text-blue-600 hover:underline">Ketentuan
                                                Penggunaan</a> kami
                                            dan
                                            mengonfirmasi bahwa Anda telah membaca <a href="#"
                                                class="font-bold text-blue-600 hover:underline">Kebijakan
                                                Privasi</a> kami. Anda dapat
                                            membatalkan biaya perpanjangan layanan kapan saja.</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>


</x-app-layout>
