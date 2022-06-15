<x-app-layout>
    @isset($added)
        @if($added == true)
            <h2 class="flex justify-center p-6">Inzerát přidán!</h2>
        @endif
    @endisset

    <div class="flex justify-center p-6">
        <table class="text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nadpis
                </th>
                <th scope="col" class="px-6 py-3">
                    Datum
                </th>
                <th scope="col" class="px-6 py-3">
                    Cena
                </th>
                <th scope="col" class="px-6 py-3"></th>
            </tr>
            </thead>
            <tbody>

            @foreach($advertsData as $data)

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        {{$data['itemName']}}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        {{substr($data['updated_at'],0,10)}}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        {{$data['price']}} Kč
                    </th>
                    <td class="px-6 py-4">
                        <a href="/edit/{{$data['id']}}" class="font-medium text-blue-900 whitespace-nowrap hover:underline">Upravit</a>
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>
</x-app-layout>
