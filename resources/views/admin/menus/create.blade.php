<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex m-2 p-2">
            <a href="{{route('admin.menus.index')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Menu Index</a>
        </div>
        <div class="m-2 p-2 bg-slate-100 rounded">
        <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
  <form enctype="multipart/form-data" method="post" action="{{route('admin.menus.store')}}" >
    @csrf
    <div class="sm:col-span-6">
      <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
      <div class="mt-1">
        <input type="text" id="name" name="name" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror" />
      </div>
      @error('name')
            <div class="text-sm text-red-400">{{$message}}</div>
      @enderror
    </div>
    <div class="sm:col-span-6">
      <label for="image" class="block text-sm font-medium text-gray-700"> Image </label>
      <div class="mt-1">
        <input type="file" id="image" wire:model="newImage" name="image" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5 @error('image') border-red-400 @enderror" />
      </div>
      @error('image')
            <div class="text-sm text-red-400">{{$message}}</div>
      @enderror
    </div>
    <div class="sm:col-span-6">
      <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
      <div class="mt-1">
        <input id="price" type="number" min="0.00" max="10000.00" step="0.01" name="price" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('price') border-red-400 @enderror">
      </div>
      @error('price')
            <div class="text-sm text-red-400">{{$message}}</div>
      @enderror
    </div>
    <div class="sm:col-span-6 pt-5">
      <label for="decsription" class="block text-sm font-medium text-gray-700">Description</label>
      <div class="mt-1">
        <textarea id="decsription" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('description') border-red-400 @enderror"></textarea>
      </div>
      @error('description')
            <div class="text-sm text-red-400">{{$message}}</div>
      @enderror
    </div>
    <div class="sm:col-span-6 pt-5">
      <label for="categories" class="block text-sm font-medium text-gray-700">Categories</label>
      <div class="mt-1">
        <select multiple id="categories" name="categories[]" class="form-multiselect block w-full mt-1">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
      </div>
    </div>
    <div class="mt-6 p-4">
    <button class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white" type="submit">Store</button>
    </div>
  </form>
</div>

        </div>
        </div>
    </div>
</x-admin-layout>
