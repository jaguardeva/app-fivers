<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex gap-60 justify-center">
                <a href="{{ route('myorders.notpaid') }}"
                    class="text-5xl text-slate-400 hover:text-blue-600 transition-all duration-100 max-w-xl relative">
                    <div class="flex flex-col items-center gap-5">
                        <i class="fa-solid fa-wallet"></i>
                        <span class="text-lg">Belum Dibayar</span>
                    </div>
                    <div
                        class="w-3 h-3 p-3 rounded-full bg-red-500 text-white absolute -top-4 -right-4 flex justify-center items-center">
                        <p class="text-xs">2</p>
                    </div>
                </a>
                <a href="{{ route('myorders.onprocess') }}"
                    class="text-5xl text-slate-400 hover:text-blue-600 transition-all duration-100 max-w-xl relative">
                    <div class="flex flex-col items-center gap-5">
                        <i class="fa-solid fa-gear"></i>
                        <span class="text-lg">Sedang Dikerjakan</span>
                    </div>
                    <div
                        class="w-3 h-3 p-3 rounded-full bg-red-500 text-white absolute -top-4 -right-4 flex justify-center items-center">
                        <p class="text-xs">1</p>
                    </div>
                </a>
                <a href=""
                    class="text-5xl text-slate-400 hover:text-blue-600 transition-all duration-100 max-w-xl">
                    <div class="flex flex-col items-center gap-5">
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <span class="text-lg">Beri Penilaian</span>
                    </div>
                </a>
            </div>
            <hr class="border my-12">
        </div>
    </div>
</x-app-layout>
