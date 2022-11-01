<x-app-layout>
    <div class="bg-white">
        <h2 class="text-gray-900 text-lg mb-5 font-medium title-font">Lost and Found:</h2>

        <div class="overflow-x-auto border-x border-t">
            <table class="table-auto w-full">
                <thead class="border-b">
                    <tr class="bg-gray-50">
                        <th class="text-left p-4 font-medium">
                            Name
                        </th>
                        <th class="text-left p-4 font-medium">
                            Name
                        </th>
                        <th class="text-left p-4 font-medium">
                            Select
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guardPasses as $guardPass)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-4">
                            {{$guardPass['id']}}
                        </td>
                        <td class="p-4">
                            {{$guardPass['name']}}
                        </td>
                        <td class="p-4 hudai_1">
                            <button class="hudai">Select</button>
                            
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>