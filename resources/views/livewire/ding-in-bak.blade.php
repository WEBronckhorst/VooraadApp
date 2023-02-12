<div>
    <div class="px-4 py-5 bg-white shadow sm:rounded-lg sm:p-6">

        <div class="md:grid md:grid-cols-3 md:gap-6">


            <div class="mt-5 space-y-6 md:col-span-2 md:mt-0">


                <label for="code" class="block text-sm font-medium text-gray-700">Wat wil je koppelen</label>
                <fieldset>
                    <legend class="sr-only">Produkten</legend>
                    <div class="-space-y-px bg-white rounded-md">
                        <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                        <label
                            @if ($ding == 1) class="relative z-10 flex p-4 border border-indigo-200 cursor-pointer rounded-tl-md rounded-tr-md focus:outline-none bg-indigo-50" @else class="relative flex p-4 border border-gray-200 cursor-pointer rounded-tl-md rounded-tr-md focus:outline-none" @endif>
                            <input type="radio" name="privacy-setting" value="1" wire:model="ding"
                                class="mt-0.5 h-4 w-4 shrink-0 cursor-pointer text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                aria-labelledby="privacy-setting-0-label"
                                aria-describedby="privacy-setting-0-description">
                            <span class="flex flex-col ml-3">
                                <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                <span id="privacy-setting-0-label" class="block text-sm font-medium">Produkten</span>
                                <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->

                            </span>
                        </label>

                        <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                        <label
                            @if ($ding == 2) class="relative z-10 flex p-4 border border-indigo-200 cursor-pointer rounded-tl-md rounded-tr-md focus:outline-none bg-indigo-50" @else class="relative flex p-4 border border-gray-200 cursor-pointer rounded-tl-md rounded-tr-md focus:outline-none" @endif>
                            <input type="radio" name="privacy-setting" value="2" wire:model="ding"
                                class="mt-0.5 h-4 w-4 shrink-0 cursor-pointer text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                aria-labelledby="privacy-setting-1-label"
                                aria-describedby="privacy-setting-1-description">
                            <span class="flex flex-col ml-3">
                                <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                <span id="privacy-setting-1-label" class="block text-sm font-medium">Kabels</span>

                            </span>
                        </label>


                </fieldset>


                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                        <label for="code" class="block text-sm font-medium text-gray-700">code</label>
                        <div class="flex mt-1 rounded-md shadow-sm">

                            <input type="text" name="code" id="code" wire:model="code"
                                class="flex-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm  placeholder="1002">
                            <div class="mt-1">
                                <button type="submit" wire:click="getDing"
                                    class="inline-flex justify-center px-4 py-2 ml-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-indigo-500">
                                    Zoek op code

                            </div>
                            @error('code')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        {{ $produk->name ?? '' }}
                        {{ $kabel->name ?? '' }}

                    </div>
                </div>
                <div class="col-span-3 sm:col-span-2">
                    <label for="bakCode" class="block text-sm font-medium text-gray-700">Kak code</label>
                    <div class="flex mt-1 rounded-md shadow-sm">

                        <input type="text" name="bakCode" id="code" wire:model="bak_code"
                            class="flex-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm  placeholder="1002">
                        <div class="mt-1">
                            <button type="submit" wire:click="getBak"
                                class="inline-flex justify-center px-4 py-2 ml-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-indigo-500">
                                zoek bak

                        </div>
                        @error('code')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    {{ $bak->name ?? '' }}

                    <div class="mt-4">
                        <button type="submit" wire:click="kopple"
                            class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-indigo-500">
                            Kopple

                    </div>
                </div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>

            <div>


            </div>

        </div>



    </div>
