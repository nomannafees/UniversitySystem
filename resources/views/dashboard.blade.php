<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 p-6 text-gray-900 dark:text-gray-100">
                    <!-- University Card -->
                    <div class="bg-blue-500 dark:bg-blue-700 p-6 rounded-lg shadow-lg">
                        <h3 class="text-lg font-semibold text-white">Total Universities</h3>
                        <p class="text-3xl text-white mt-2">{{ $universitiesCount }}</p>
                        <a href="{{ route('universities.index') }}" class="mt-4 inline-block text-white bg-blue-700 hover:bg-blue-800 rounded-lg px-4 py-2 text-sm">
                            View Universities
                        </a>
                    </div>

                    <!-- Degree Programs Card -->
                    <div class="bg-green-500 dark:bg-green-700 p-6 rounded-lg shadow-lg">
                        <h3 class="text-lg font-semibold text-white">Total Degree Programs</h3>
                        <p class="text-3xl text-white mt-2">{{ $degreeProgramsCount }}</p>
                        <a href="{{ route('degree-program.index') }}" class="mt-4 inline-block text-white bg-green-700 hover:bg-green-800 rounded-lg px-4 py-2 text-sm">
                            View Degree Programs
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
