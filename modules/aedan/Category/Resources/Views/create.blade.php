<div class="mt-4">
    <h1 class="bg-gray-200 font-semibold p-2">Create Category</h1>
    <form action="{{ route('categories.store') }}" method="POST" class=" bg-white">
        @csrf
        <div>
            <input type="text" name="title" required placeholder="Category Name" class="w-72 p-1.5 m-4  border-2">
        </div>
        <div>
            <input type="text" name="slug" required placeholder="Slug Name" class="w-72 p-1.5 m-4  border-2">
        </div>
        <div class="mt-2">
            <label for="" class="block p-2 font-semibold bg-gray-200 w-full">Parent Category</label>
            <select name="parent_id" id="parent_id" class="w-72 p-1.5 m-4 text-gray-400 border-2">
                <option value="" class="text-gray-600"> have not</option>
                @foreach($categoires as $category)
                    <option value="{{$category->id}}" class="text-gray-600">{{$category->title}}</option>

                @endforeach

            </select>
          
        </div>
        <div class="">
            <input type="submit" value="Create" class="ml-28 my-3 bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded hover:cursor-pointer">
        </div>
    </form>
</div>
