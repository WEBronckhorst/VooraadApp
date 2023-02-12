<div>
    <div class="px-4 py-5 bg-white shadow sm:rounded-lg sm:p-6">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">

            </div>
            <div class="flex flex-col mt-8">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead>
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 md:pl-0">
                                        Code </th>
                                    <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">
                                        Name</th>
                                    <th scope="col"
                                        class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">
                                        Type</th>
                                    <th scope="col"
                                        class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">
                                        Sub- Type</th>



                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6 md:pr-0">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach ($kabels as $klabel)
                                    <tr>
                                        <td
                                            class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6 md:pl-0">
                                            {{ $klabel->code }}</td>
                                        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $klabel->name }}
                                        </td>
                                        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $klabel->Type->name }}
                                        </td>
                                        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $klabel->SubType->name }}

                                        </td>
                                        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $klabel->bak->first()->name ?? '' }}

                                        </td>

                                        <td
                                            class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6 md:pr-0">
                                            <a href="{{ route('klabel.edit', $klabel->id) }}"
                                                class="text-indigo-600 hover:text-indigo-900">Edit<span
                                                    class="sr-only">, {{ $klabel->name }}</span></a>
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
