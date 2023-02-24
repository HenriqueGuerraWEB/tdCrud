
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modal') }}
        </h2>
    </x-slot>





<div class="py-12 ">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            @if (session()->has('message'))

                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">

                  <div class="flex">

                    <div>

                      <p class="text-sm">{{ session('message') }}</p>

                    </div>

                  </div>

                </div>

            @endif

            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Criar novo item</button>

            @if($isOpen)

                @include('livewire.modal.create')

            @endif

            <table class="table-fixed w-full dark:bg-gray-800">

                <thead>

                    <tr class="bg-gray-100 border dark:border-gray-600 dark:text-white dark:bg-gray-600">

                        <th class="px-4 py-2 w-20">No.</th>

                        <th class="px-4 py-2">Title</th>

                        <th class="px-4 py-2">Body</th>

                        <th class="px-4 py-2">Action</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($posts as $post)

                    <tr class="text-white">

                        <td class="border dark:border-gray-600 px-4 py-2">{{ $post->id }}</td>

                        <td class="border dark:border-gray-600 px-4 py-2">{{ $post->title }}</td>

                        <td class="border dark:border-gray-600 px-4 py-2">{{ $post->body }}</td>

                        <td class="border dark:border-gray-600 px-4 py-2">

                        <button wire:click="edit({{ $post->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>

                            <button wire:click="delete({{ $post->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

