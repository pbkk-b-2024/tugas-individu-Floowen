@extends("layouts.layout")

@section("title", "Homepage")

@section("content")
    <div class="content">
        <h1 class="font-bold text-3xl">Users</h1><br>
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ route('addusers') }}">Add a User</a>
        <br><br>
        <form class="max-w-md">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" name="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search For Names" />
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>

        <div class="my-4 max-w-fit">
            <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"> 
            <table class="table-fixed text-white [&_:is(th,td):where(:nth-child(2),:nth-child(4))]:text-center border-separate border-spacing-x-5 border-spacing-y-3">
            <thead>
                <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach($userdata as $user)
                <tr>
                <td>{{ $user -> name }}</td>
                <td>{{ $user -> email }}</td>
                <td>{{ $user -> role }}</td>
                <td><a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="/user/{{ $user -> id }}">Update</a></td>
                <td><a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" href="/delete/{{ $user -> id }}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
                <div class="text-white d-flex">
                    {{ $userdata->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
