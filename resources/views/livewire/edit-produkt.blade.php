<div>
    <div class="px-4 py-5 bg-white shadow sm:rounded-lg sm:p-6">
        <form wire:submit.prevent="submit">
            <div class="md:grid md:grid-cols-3 md:gap-6">

                <div class="mt-5 space-y-6 md:col-span-2 md:mt-0">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="name" class="block text-sm font-medium text-gray-700">Title</label>
                            <div class="flex mt-1 rounded-md shadow-sm">

                                <input type="text" name="name" id="name" wire:model="name"
                                    class="flex-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="USC-C tot USB-A 50cm">
                                    
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
                                    class="flex-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm  placeholder="1002">
                                @error('code')
                                    <span class="error">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <div class="mt-1">
                            <textarea id="description" name="description" rows="3" wire:model="description"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quidem facilis provident exercitationem officiis hic, quo soluta voluptatem minus doloribus fugiat libero dicta voluptatibus! Voluptatum recusandae natus ea dignissimos reiciendis?"></textarea>
                            @error('description')
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
                    </div>
                </div>
            </div>


        </form>
    </div>
