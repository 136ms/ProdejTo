<x-app-layout>
    <div class="p-8">
        <form class="text-sm text-left text-gray-500 dark:text-gray-400">
            <div class="grid gap-6 grid-cols-2">
                <div>
                    <label for="name"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                    <input type="text" id="name"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Item name" required="">
                </div>
                <div>
                    <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Location</label>
                    <input type="text" id="location"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Location" required="">
                </div>
                <div>
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Choose
                        category</label>
                    <select id="countries"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a category</option>
                        <option value="US">Cars</option>
                        <option value="CA">Electronics</option>
                        <option value="FR">Housing</option>
                        <option value="DE">Clothes</option>
                    </select>
                </div>
                <div>
                    <label for="price" class="block mb-2 font-medium text-gray-900 dark:text-gray-300">Price</label>
                    <input type="text" id="price"
                           class="bg-gray-50 border border-gray-300 text-sm text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Price" required="">
                </div>
            </div>
            <div>
                <label for="description"
                       class="block mt-4 text-sm font-medium text-gray-900 dark:text-gray-300">Description</label>
                <textarea id="description" rows="2"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="Description"></textarea>
            </div>
            <div>
                <label for="images"
                       class="block mt-4 text-sm font-medium text-gray-900 dark:text-gray-300">Upload images</label>
                <div class="flex justify-center items-center w-full">
                    <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col justify-center items-center pt-5 pb-6">
                            <svg class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>
            </div>
                </form>
            </div>
        </form>

    //add_image.blade.php
    <div class="container">
        <form method="post" action="{{ route('images.store') }}"
              enctype="multipart/form-data">
            @csrf
            <div class="image">
                <label><h4>Add image</h4></label>
                <input type="file" class="form-control" required name="image">
            </div>

            <div class="post_button">
                <button type="submit" class="btn btn-success">Add</button>
            </div>
        </form>
    </div>

    </div>
    <div class="flex justify-center">
        <x-jet-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
            Publish
        </x-jet-button>
    </div>
</x-app-layout>

