<div class="mt-5 md:mt-0 md:col-span-2">
    <form action="{{ route('profile.tasks.store') }}" method="POST">
        @method('POST')
        @csrf

        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-gray-50 sm:px-6">
                <h4 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Create new task') }}
                </h4>
            </div>
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text"
                               id="title"
                               name="title"
                               class="mt-1 block w-full sm:text-sm border border-gray-300 rounded-md shadow-lg">
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea type="text"
                                  id="description"
                                  name="description"
                                  rows="4"
                                  class="mt-1 block w-full sm:text-sm border border-gray-300 rounded-md shadow-lg"></textarea>
                    </div>
                </div>
            </div>
            <div class="px-4 py-5 bg-gray-50 sm:px-6">
                <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border {{--border-transparent--}} shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-lg">
                    Save
                </button>
            </div>
        </div>
    </form>
</div>
