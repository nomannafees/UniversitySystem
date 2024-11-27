<x-app-layout>
    @section('title','Universities')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Universities') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="text-right ">
                <a href="{{route('universities.create')}}"
                   class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Add University
                </a>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-5">

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-4 w-2/4">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-4 w-2/4">
                                Location
                            </th>
                            <th scope="col" class="px-6 py-4 w-1/3 text-right"> <!-- Increased width here -->
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($universities as $university)
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4 w-2/4 truncate">
                                    {{$university->name ? $university->name : ''}}
                                </td>
                                <td class="px-6 py-4 w-2/4 truncate">
                                    {{$university->location ? $university->location : '--'}}
                                </td>
                                <td class="px-6 py-4 w-1/3 text-right"> <!-- Increased width here -->
                                    <!-- Flex container to keep buttons in a row -->
                                    <div class="flex justify-end space-x-3">
                                        <a href="{{ route('universities.edit', $university->id) }}"
                                           class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-3 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Edit
                                        </a>
                                        <form action="{{ route('universities.destroy', $university->id) }}" method="POST" style="display:inline;" id="delete-form-{{$university->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" onclick="confirmDelete({{ $university->id }})"
                                                    class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-3 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="py-5" colspan="3">
                                    <div class="flex items-center p-4 text-sm text-gray-800 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600" role="alert">
                                        <div>
                                            <span class="font-medium"> No record found!</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

