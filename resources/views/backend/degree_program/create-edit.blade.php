<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Degree/program') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-right ">
                <a href="{{route('degree-program.index')}}"
                   class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Degree/program List
                </a>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-5">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section class="bg-white dark:bg-gray-900">
                        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new university</h2>
                            <form
                                action="{{ isset($degreeProgram) ? route('degree-program.update',$degreeProgram->id) : route('degree-program.store') }}"
                                method="post">
                                @csrf
                                @isset($degreeProgram)
                                    {{ method_field('PUT') }}
                                @endisset
                                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                    <div class="sm:col-span-2">
                                        <label for="name"
                                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">University
                                            Name</label>
                                        <input type="text" name="degree_name" id="degree_name-error"
                                               value="{{isset($degreeProgram->degree_name) ? $degreeProgram->degree_name:'' }}"
                                               class="bg-red-50 border border-red-500 text-red-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                               placeholder="Type product name">
                                        @error('degree_name')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                class="font-medium">{{ $message }}</span></p>
                                        @enderror

                                    </div>
                                </div>

                                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mt-5">
                                    <!-- Last Year Merit Input -->
                                    <div>
                                        <label for="last_year_merit"
                                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Last Year Merit
                                        </label>
                                        <input
                                            type="number"
                                            name="last_year_merit"
                                            id="last_year_merit-error"
                                            value="{{ isset($degreeProgram->last_year_merit) ? $degreeProgram->last_year_merit : '' }}"
                                            class="bg-red-50 border border-red-500 text-red-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Last Year Merit">
                                        @error('last_year_merit')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                            <span class="font-medium">{{ $message }}</span>
                                        </p>
                                        @enderror
                                    </div>

                                    <!-- Fees Input -->
                                    <div>
                                        <label for="fees"
                                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Fees
                                        </label>
                                        <input
                                            type="text"
                                            name="fees"
                                            id="fees-error"
                                            value="{{ isset($degreeProgram->fees) ? $degreeProgram->fees : '' }}"
                                            class="bg-red-50 border border-red-500 text-red-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Fee">
                                        @error('fees')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                            <span class="font-medium">{{ $message }}</span>
                                        </p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mt-5">
                                    <div class="sm:col-span-2">
                                        <label for="countries"
                                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                                            University</label>
                                        <select id="university_id" name="university_id"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="" hidden>Choose a University</option>
                                            @foreach($universities as $university)
                                                <option {{isset($degreeProgram) && $degreeProgram->university_id==$university->id ? 'selected':''}} value="{{$university->id}}">{{$university->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                    <button type="submit"
                                            class="px-5 py-2.5 mt-4 sm:mt-3 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg w-32">
                                        {{isset($degreeProgram) ? 'Update':'Save'}}
                                    </button>


                                </div>
                            </form>
                        </div>
                    </section>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
