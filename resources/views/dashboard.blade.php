<x-app-layout>

    <div class="">
        <h1 class="text-3xl font-medium ml-8 text-indigo-900">Dashboard</h1>
        <h4 class="ml-8 mb-8 text-indigo-900"><span class="text-gray-500">Home / </span>Dashboard</h4>
        <div class="w-full px-4 sm:grid sm:grid-cols-3 gap-8 items-center mx-auto sm:px-6 lg:px-8 mb-8">
            <div class="w-full bg-indigo-700 overflow-hidden shadow-md border border-gray-200 sm:rounded-lg mb-4 sm:mb-0 rounded-lg">
                <div class="px-6 py-4 text-white">
                    <h5 class=" font-medium text-2xl">Jumlah Media</h5>
                    <div class="flex items-center gap-8 p-4 text-white">
                        <i class="fa-solid fa-layer-group text-4xl"></i>
                        <div class="">
                            <h5 class="text-4xl font-bold">0</h5>
                            <p class="text-sm text-gray-300">Total Media</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full bg-green-700 overflow-hidden shadow-md border border-gray-200 sm:rounded-lg rounded-lg mb-4 sm:mb-0">
                <div class="px-6 py-4 text-white">
                    <h5 class=" font-medium text-2xl">Wartawan</h5>
                    <div class="flex items-center gap-8 p-4">
                        <i class="fa-solid fa-users text-4xl"></i>
                        <div class="">
                            <h5 class="text-4xl font-bold">0</h5>
                            <p class="text-sm text-gray-300">Total Orang</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full bg-orange-700 overflow-hidden rounded-lg shadow-md border border-gray-200 sm:rounded-lg mb-4 sm:mb-0">
                <div class="px-6 py-4 text-white">
                    <h5 class=" font-medium text-2xl">Berita</h5>
                    <div class="flex items-center gap-8 p-4">
                        <i class="fa-regular fa-newspaper text-4xl"></i>
                        <div class="">
                            <h5 class="text-4xl font-bold">0</h5>
                            <p class="text-sm text-gray-300">Total Terkirim</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-8 mb-8">
            <div class="w-full bg-white overflow-hidden shadow-md border border-gray-200 sm:rounded-lg">
                <div class="p-6 text-indigo-900">
                    <h5 class="font-medium text-2xl mb-4">Progress Pengisian Data Perusahaan</h5>
                    <div class="w-full bg-gray-200 rounded-full h-6">
                        <div class="bg-indigo-500 h-6 rounded-full text-white text-center" style="width: 50%;">
                            50%
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="w-full text-center mx-auto p-8 border-t border-gray-300">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus, obcaecati?</footer>
</x-app-layout>
