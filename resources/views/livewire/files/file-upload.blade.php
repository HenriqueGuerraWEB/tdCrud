

@if($updateMode)

@include('livewire.files.update')

@else

@include('livewire.files.create')

@endif




<div>

  

    @if (session()->has('message'))

    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
        <div class="flex">
          <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
          <div>
            {{ session('message') }}
          
          </div>
        </div>
      </div>

            


    @endif



    <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-t border-gray-200 dark:border-gray-700">

        <table class="table-auto border-collapse" style="width: 100%;">
    
            <thead class="text-white">
    
                <tr class="text-center bg-gray-100 border dark:border-gray-600 dark:text-white dark:bg-gray-600">
    
                    <th>ID</th>
    
                    <th>Nome</th>
    
                    <th>Imagem</th>
    
                    <th width="150px">Action</th>
    
                </tr>
    
            </thead>
    
            <tbody>
    
                @foreach($posts as $post)
    
                <tr class="text-center bg-gray-100 border dark:border-gray-600 dark:text-white dark:bg-gray-800">
    
    
                    
                    <td>{{ $post->id }}</td>
    
                    <td>{{ $post->title }}</td>
    
                    <td><img src="{{ url('storage/'.$post->name) }}"style="max-width:50px;" /></td>
    
                    <td>
    
                    <button wire:click="edit({{ $post->id }})" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Editar</button>
    
                    <button wire:click="delete({{ $post->id }})" class="bg-orange-500 hover:bg-orange-400 text-white font-bold py-2 px-4 border-b-4 border-orange-700 hover:border-orange-500 rounded">Apagar</button>
    
                    </td>
    
                </tr>
    
                @endforeach
    
            </tbody>
    
        </table>
    
    </div>

</div>