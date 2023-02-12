<div>
    <div class="px-4 py-5 bg-white shadow sm:rounded-lg sm:p-6">
        <form wire:submit.prevent="submit">
            <div class="md:grid md:grid-cols-3 md:gap-6">

                <div class="mt-5 space-y-6 md:col-span-2 md:mt-0">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="name" class="block text-sm font-medium text-gray-700">Title</label>
                            <div class="flex mt-1 rounded-md shadow-sm">

                                <input type="text" name="name" id="name" wire:model="name" list="products"
                                    class="flex-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="USB Kabels">
                                <datalist id="products">
                                    @foreach ($kabels as $kabel)
                                        <option value="{{ $kabel->name }}"></option>
                                    @endforeach
                                </datalist>
                                @error('name')
                                    <span class="error">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="code" class="block text-sm font-medium text-gray-700">code</label>
                            <div class="flex mt-1 rounded-md shadow-sm">

                                <input type="number" name="code" id="code" wire:model="code"
                                    class="flex-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="1002">
                                @error('code')
                                    <span class="error">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="type_id" class="block text-sm font-medium text-gray-700">type</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <select name="type_id" id="type_id" wire:model="type_id"
                                    class="flex-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm ">
                                    <option value="">kies een type</option>
                                    @forelse ($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @empty
                                        <option value="0">No type</option>
                                    @endforelse
                                </select>
                                @error('type_id')
                                    <span class="error">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="subtype" class="block text-sm font-medium text-gray-700">Sub-type</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <select name="subtyp_id" id="type" wire:model="subtyp_id"
                                    class="flex-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm ">
                                    <option value="">kies een type</option>
                                    @forelse ($subtypes as $subtype)
                                        <option value="{{ $subtype->id }}">{{ $subtype->name }}</option>
                                    @empty
                                        <option value="0">No subtype</option>
                                    @endforelse{{ $subtyp_id }}
                                </select>
                                @error('subtype_id')
                                    <span class="error">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="laenge" class="block text-sm font-medium text-gray-700">laenge</label>
                            <div class="flex mt-1 rounded-md shadow-sm">

                                <input type="number" name="laenge" id="laenge" wire:model="laenge"
                                    class="flex-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="1002">
                                @error('laenge')
                                    <span class="error">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="Startoort" class="block text-sm font-medium text-gray-700">Startoort</label>
                            <div class="flex mt-1 rounded-md shadow-sm">

                                <input type="text" name="Startoort" id="Startoort" wire:model="Startoort"
                                    list="Startoort"
                                    class="flex-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="USB Kabels">
                                <datalist id="Startoort">
                                    @foreach ($kabels as $kabel)
                                        <option value="{{ $kabel->Startoort }}"></option>
                                    @endforeach
                                </datalist>
                                @error('name')
                                    <span class="error">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="eindpoort" class="block text-sm font-medium text-gray-700">Startoort</label>
                            <div class="flex mt-1 rounded-md shadow-sm">

                                <input type="text" name="eindpoort" id="eindpoort" wire:model="eindpoort"
                                    list="Startoort"
                                    class="flex-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="USB Kabels">
                                <datalist id="eindpoort">
                                    @foreach ($kabels as $kabel)
                                        <option value="{{ $kabel->eindpoort }}"></option>
                                    @endforeach
                                </datalist>
                                @error('name')
                                    <span class="error">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">opmerking</label>
                        <div class="mt-1">
                            <textarea id="opmerking" name="opmerking" rows="3" wire:model="opmerking"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quidem facilis provident exercitationem officiis hic, quo soluta voluptatem minus doloribus fugiat libero dicta voluptatibus! Voluptatum recusandae natus ea dignissimos reiciendis?"></textarea>
                            @error('opmerking')
                                <span class="error">{{ $message }}</span>
                            @enderror

                        </div>

                    </div>
                    <div>
                        <div class="mt-1">
                            <button type="submit"
                                class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-indigo-500">
                                Save

                        </div>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>


        </form>
    </div>
