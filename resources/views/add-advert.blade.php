<x-app-layout>
    <div class="p-8">
        <form class="text-sm text-left text-gray-500 dark:text-gray-400" method="post" enctype="multipart/form-data"
              action="{{ route('advert.store') }}">
            @csrf
            <div class="grid gap-6 grid-cols-2">
                <div>
                    <label for="name"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Název produktu</label>
                    <input type="text" id="name"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Název produktu" name="itemName" required>
                </div>
                <div>
                    <label for="location"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Poloha</label>
                    <input type="text" id="location"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Poloha" name="location" required>
                </div>
                <div>
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Vybrat kategorii</label>
                    <select id="countries" name="category" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Vybrat kategorii</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                    </select>
                </div>
                <div>
                    <label for="price" class="block mb-2 font-medium text-gray-900 dark:text-gray-300">Cena</label>
                    <input type="number" id="price"
                           class="bg-gray-50 border border-gray-300 text-sm text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Cena" name="price" required>
                </div>
            </div>
            <div>
                <label for="description"
                       class="block mt-4 text-sm font-medium text-gray-900 dark:text-gray-300">Popis</label>
                <textarea id="description" rows="2"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="Popis inzerátu" name="description" required></textarea>
            </div>
            <div>
                <label for="images"
                       class="block mt-4 text-sm font-medium text-gray-900 dark:text-gray-300">Nahrát obrázek</label>
                <div class="flex justify-center items-center w-full">
                    <label for="dropzone-file"
                           class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col justify-center items-center pt-5 pb-6">
                            <svg class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Kliknout pro nahrání</span>
                                nebo přesunout</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" name="image" type="file" class="hidden" required/>
                    </label>
                </div>
            </div>
            <div class="flex justify-center pt-5">
                <x-jet-button type="submit" wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    Zveřejnit inzerát
                </x-jet-button>
            </div>
        </form>
    </div>

</x-app-layout>

