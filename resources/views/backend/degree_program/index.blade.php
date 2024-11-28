<x-app-layout>
    @section('title','Programs')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Degree/Program') }}
        </h2>
    </x-slot>

    <div class="py-5 px-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="text-right ">
                <a href="{{route('degree-program.create')}}"
                   class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Add Degree/Program
                </a>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-5">

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto custom-scrollbar">
                    <table class="min-w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-4 w-1/5 text-left">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-4 w-1/5 text-left">
                                University
                            </th>
                            <th scope="col" class="px-6 py-4 w-1/5 text-left">
                                Merit
                            </th>
                            <th scope="col" class="px-6 py-4 w-1/5 text-left">
                                Fee
                            </th>
                            <th scope="col" class="px-6 py-4 w-1/5 text-left">
                               Chance
                            </th>
                            <th scope="col" class="px-6 py-4 w-1/5 text-right">
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($degrees as $degree)
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4 truncate">
                                    {{$degree->degree_name ? $degree->degree_name : ''}}
                                </td>
                                <td class="px-6 py-4 truncate">
                                    {{$degree->university ? $degree->university->name : ''}}
                                </td>
                                <td class="px-6 py-4 truncate">
                                    {{$degree->last_year_merit ? $degree->last_year_merit : ''}}
                                </td>
                                <td class="px-6 py-4 truncate">
                                    {{$degree->fees ? $degree->fees : ''}}
                                </td>
                                <td class="px-6 py-4 truncate">
                                    {{$degree->chance ==1 ? 'High' : 'Low'}}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <!-- Add a flex container to align buttons horizontally -->
                                    <div class="flex justify-end space-x-2">
                                        <a href="{{ route('degree-program.edit', $degree->id) }}"
                                           class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-3 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Edit
                                        </a>
                                        <form action="{{ route('degree-program.destroy', $degree->id) }}" method="POST" style="display:inline;" id="delete-form-{{$degree->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" onclick="confirmDelete({{ $degree->id }})"
                                                    class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-3 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>

                            </tr>
                        @empty
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="py-5" colspan="5">
                                    <div class="flex items-center p-4 text-sm text-gray-800 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600" role="alert">
                                        <div>
                                            <span class="font-medium">No record found!</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    </div>

             <div class="mt-5">
                 {{$degrees->links()}}
             </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

