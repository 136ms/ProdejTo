<x-app-layout>
    <div class="p-8">
        <form class="text-sm text-left text-gray-500 dark:text-gray-400" method="post" enctype="multipart/form-data"
              action="{{ route('advert.store') }}">
            @csrf
            <div class="grid gap-6 grid-cols-2">
                <div>
                    <label for="name"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Název
                        produktu</label>
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
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Vybrat
                        kategorii</label>
                    <select id="countries" name="category" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="" disabled selected>Vybrat kategorii</option>
                        @foreach($categories as $category)
                            <option label="{{$category->category}}" value="{{$category->id}}"></option>
                        @endforeach

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
                        <input id="dropzone-file" name="images[]" id="images" type="file" class="hidden" required/>
                    </label>
                </div>
            </div>

            <div class="block mt-4 ">
                <div class="card-deck">
                    <label
                        class="flex h-64 bg-gray-50 rounded-lg border border-gray-300">
                        <div class="images-preview-div" style="display: contents"></div>
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

    <div>

        <style>
            .images-preview-div img {
                padding: 10px;
                max-width: 100px;
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            $(function () {
                var previewImages = function (input, imgPreviewPlaceholder) {
                    if (input.files) {
                        var filesAmount = input.files.length;
                        for (i = 0; i < filesAmount; i++) {
                            var reader = new FileReader();
                            reader.onload = function (event) {
                                $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                            }
                            reader.readAsDataURL(input.files[i]);
                        }
                    }
                };
                $('#dropzone-file').on('change', function () {
                    previewImages(this, 'div.images-preview-div');
                });
            });
        </script>
    </div>

    <div class="container mt-5">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <style>
            .images-preview-div img {
                padding: 10px;
                max-width: 100px;
            }
        </style>
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                <h2>Laravel 8 Upload Multiple Image With Preview - Tutsmake.com</h2>
            </div>
            <div class="card-body">
                <form name="images-upload-form" method="POST" action="{{ url('upload-multiple-image-preview') }}"
                      accept-charset="utf-8" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="file" name="images[]" id="images" placeholder="Choose images" multiple>
                            </div>
                            @error('images')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="mt-1 text-center">
                                <div class="images-preview-div"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            $(function () {
// Multiple images preview with JavaScript
                var previewImages = function (input, imgPreviewPlaceholder) {
                    if (input.files) {
                        var filesAmount = input.files.length;
                        for (i = 0; i < filesAmount; i++) {
                            var reader = new FileReader();
                            reader.onload = function (event) {
                                $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                            }
                            reader.readAsDataURL(input.files[i]);
                        }
                    }
                };
                $('#images').on('change', function () {
                    previewImages(this, 'div.images-preview-div');
                });
            });
        </script>
    </div>

</x-app-layout>

