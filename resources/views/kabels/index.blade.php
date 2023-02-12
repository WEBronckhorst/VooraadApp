<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('kabels') }}
            </h2>
            <a href="{{ route('klabel.create') }}"
                class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                {{ __('create') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            @livewire('index-kabel')
        </div>
    </div>
</x-app-layout>
