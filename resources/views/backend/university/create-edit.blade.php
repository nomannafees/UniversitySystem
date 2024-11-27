<x-app-layout>
    @section('title',isset($university) ? 'Edit University':'Add University')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add University') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-right ">
                <a href="{{route('universities.index')}}"
                   class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Universities List
                </a>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-5">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section class="bg-white dark:bg-gray-900">
                        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">{{isset($university) ? 'Edit university':'Add a new university'}}</h2>
                            <form id="form" action="{{ isset($university) ? route('universities.update',$university->id) : route('universities.store') }}" method="post">
                                @csrf
                                @isset($university)
                                    {{ method_field('PUT') }}
                                @endisset
                                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                    <div class="sm:col-span-2">
                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">University Name</label>
                                        <input  type="text" name="name" id="name" value="{{isset($university->name) ? $university->name:'' }}" class="required bg-red-50 border border-red-500 text-red-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter University Name">
                                        @error('name')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium error-msg">{{ $message }}</span></p>
                                        @enderror

                                    </div>
                                    <div class="sm:col-span-2">
                                        <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">University location</label>
                                        <input  type="text" name="location" id="location" value="{{isset($university->location) ? $university->location:'' }}" class="required bg-red-50 border border-red-500 text-red-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter University Location">
                                        @error('location')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium error-msg">{{ $message }}</span></p>
                                        @enderror

                                    </div>

                                    <button type="submit" class="px-5 py-2.5 mt-4 sm:mt-3 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4  rounded-lg w-32">
                                        {{isset($university) ? 'Update':'Save'}}
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
