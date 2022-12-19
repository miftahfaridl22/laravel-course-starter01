<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inventaris Kantor</title>

    @vite('resources/js/app.js')
</head>

<body>
    <div class="flex justify-center items-center h-screen">

        <div class="w-2/5 p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Inventarisasi Barang Kantor</h5>
            </a>
            <div class="p4">
                <form action="">
                    <div class="mb-2">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Kode Barang
                        </label>
                        <input 
                            type="text" 
                            id="kodebrg" 
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                            placeholder="kode barang" 
                        required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Nama Barang
                        </label>
                        <input 
                            type="text" 
                            id="namabrg" 
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                            placeholder="nama aset" 
                        required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Merk
                        </label>
                        <input 
                            type="text" 
                            id="merk" 
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                            placeholder="nama aset" 
                        required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Bahan
                        </label>
                        <input 
                            type="text" 
                            id="bahan" 
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                            placeholder="nama aset" 
                        required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Asal usul / Cara Perolehan Barang
                        </label>
                        <input 
                            type="text" 
                            id="asalusul" 
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                            placeholder="nama aset" 
                        required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Tahun Perolehan
                        </label>
                        <input 
                            type="text" 
                            id="tahun" 
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                            placeholder="nama aset" 
                        required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Keadaan Barang (B/KB/RB)
                        </label>
                        <input 
                            type="text" 
                            id="keadaanbrg" 
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                            placeholder="nama aset" 
                        required>
                    </div>
                </form>
            </div>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Simpan
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>

    </div>
</body>

</html>