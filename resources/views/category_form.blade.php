@extends('Layout.app')

@section('title')
    Category Insert
@endsection

@section('app')
    <div class="w-full h-full">
        <h3 class="pl-5">Create Category</h3>
        <div class="w-2/4 h-2/4 " style="margin: 0 auto">
            <form action="{{ route('category.create') }}" method="POST">
                @csrf
                <div class="w-auto shadow-md h-auto">
                    <p class="text-lg">Name</p>
                    <div>
                        <input type="text" name="name" placeholder="Name"
                            class="border border-1 rounded-md border-black p-1">
                    </div>
                </div>
                <div class="w-auto shadow-md h-auto">
                    <p class="text-lg">Description</p>
                    <div>
                        <input type="text" name="description" placeholder="Description"
                            class="border border-1 rounded-md border-black p-1">
                    </div>
                </div>
                <button class="focus:outline-none bg-green-500 px-3 py-2 mt-2 rounded-md">Save</button>
            </form>
        </div>
    </div>
@endsection
