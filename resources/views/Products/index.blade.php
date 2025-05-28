<x-app-layout>

        <div class="max-w-8xl mx-auto sm:px-4 lg:px-4">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  <div class="flex justify-between items-center mb-4">
                                      <h1 class="text-2xl font-bold mb-4">Products Management</h1>
                                      {{-- create button create user if user click on button create user please show dialog box form create user on screen please show --}}
                                      <!-- add icon logout if clcick on icon please popup confirm logout or cancel icon not text -->
                                      <form method="POST" action="{{ route('logout') }}" x-data="{ open: false }">
                                          @csrf

                                          <button type="button" @click="open = !open" class="bg-gray-300 pw-4 rounded" id="logout-button">
                                              {{-- add icon logout --}}
                                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                                              </svg>
                                          </button>
                                         {{-- open popup  confirm logout to center screen --}}
                                         <div x-show="open" class="fixed inset-0  flex items-center justify-center z-50">
                                              <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-lg">
                                                <input  type="text"  name="name" placeholder="name" class="border rounded px-3 py-2 w-1/4 bg-white dark:bg-gray-800 ">
                                         <input type="text" name="Description" placeholder="Description" class="border rounded px-3 py-2 w-1/4 bg-white dark:bg-gray-800 ">
                                         <input type="number" name="Price" placeholder="Price" class="border rounded px-3 py-2 w-1/4 bg-white dark:bg-gray-800 ">
                                         <select name="role" class="border rounded px-3 py-2 w-1/4 bg-white dark:bg-gray-800 ">
                                             <option  value="">Select Stock</option>
                                             <option value="admin">Instock</option>
                                            <option value="user">Outstock</option>
                                         </select>
                                                  <div class="mt-4 flex justify-end">
                                                      <button type="button" @click="open = false" class="ml-2 text-gray-700 dark:text-gray-300 px-4 py-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700" id="cancel">
                                                          Cancel
                                                      </button>
                                                      <button type="submit" class="ml-2 text-gray-700 dark:text-gray-300 px-4 py-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700" id="create">
                                                          Submit
                                                      </button>

                                                  
                                          
                                         
                                          </div>
                                          </div>
                                        </div>
                                              
                                     </form>
                      </div>

                    <table class="table-auto w-full ">
 <thead >
    <tr>
      <th class="bg-gray-100 dark:bg-gray-700 px-2 py-2">ID</th>
      <th class="bg-gray-100 dark:bg-gray-700 px-2 py-2">Name</th>
      <th class="bg-gray-100 dark:bg-gray-700 px-2 py-2">Description</th>
      <th class="bg-gray-100 dark:bg-gray-700 px-2 py-2">Price</th>
      <th class="bg-gray-100 dark:bg-gray-700 px-2 py-2">Stock</th>
      <th class="bg-gray-100 dark:bg-gray-700 px-2 py-2">Actions</th>
    </tr>
  </thead>
{{-- add <tbody> tr td = role one by one of th --}}
<tbody>         
    {{-- @foreach ($users as $user) --}}
    <tr class="border-b dark:border-gray-600">
      {{-- <td class="border-b px-4 py-2">{{ $user->id }}</td> --}}
      <td class="px-4 py-2">1</td>
      <td class="px-4 py-2">phka</td>
      <td class="px-4 py-2">fgtgijskfjid</td>
      <td class="px-4 py-2">10$ </td>
      <td class="px-4 py-2">Instock<span id="color"></span></td>
      <td class="px-4 py-2 flex justify-around">
        {{-- <a href="{{ route('admin.edit', $user->id) }}" class="text-blue-500 hover:text-blue-700" id="edit">Edit</a> --}}
        <a href="" class="text-blue-700 hover:text-blue-700" id="edit">
          <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
          </svg>
        </a>
        {{-- <form action="{{ route('admin.destroy', $user->id) }}" method="POST" style="display:inline;"> --}}
          @csrf
          @method('DELETE')
          <button type="submit" class="text-red-500 hover:text-red-700 " >
            <svg id="delete" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
              <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
            </svg>
          </button>
        {{-- </form> --}}
      </td>
    </tr>
 {{-- @foreach ($users as $user) --}}
    <tr class="border-b dark:border-gray-600">
      {{-- <td class="border-b px-4 py-2">{{ $user->id }}</td> --}}
      <td class="px-4 py-2">2</td>
      <td class="px-4 py-2">phka</td>
      <td class="px-4 py-2">fgtgijskfjid</td>
      <td class="px-4 py-2">10$</td>
      <td class="px-4 py-2">OutStock<span id="color"></span></td>
      <td class="px-4 py-2 flex justify-around">
        {{-- <a href="{{ route('admin.edit', $user->id) }}" class="text-blue-500 hover:text-blue-700" id="edit">Edit</a> --}}
        <a href="" class="text-blue-700 hover:text-blue-700" id="edit">
          <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
          </svg>
        </a>
        {{-- <form action="{{ route('admin.destroy', $user->id) }}" method="POST" style="display:inline;"> --}}
          @csrf
          @method('DELETE')
          <button type="submit" class="text-red-500 hover:text-red-700 " >
            <svg id="delete" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
              <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
            </svg>
          </button>
        {{-- </form> --}}
      </td>
    </tr>
    {{-- @endforeach --}}
  </tbody>
</table>
                </div>
            </div>
        </div>
        <style>
          table {
            border-collapse: collapse;
            width: 100%;
          }

          th, td {
            border: 1px solid #ddd;
            padding: 8px;
          }

          th {
            background-color: #f2f2f2;
            text-align: left;
          }
          #delete, #edit {
            cursor: pointer;
            transition: color 0.3s ease;
            margin: 0 5px;
          }
          #delete{
            color: #ff0000;
          }
          #create{
            background-color: #4CAF50; /* Green */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
          }
          #create:hover {
            background-color: #45a049; /* Darker green on hover */
          }
          #cancel{
            background-color: #f44336; /* Red */
            color: white;
            padding: 10px 20px;
            margin-right: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
          }
          #cancel:hover {
            background-color: #d32f2f; /* Darker red on hover */
          }
        </style>

<script>
document.getElementById('createUserFormToggle').addEventListener('click', function() {
    const form = document.getElementById('createUserForm');
    if (form.classList.contains('hidden')) {
        form.classList.remove('hidden');
    } else {
        form.classList.add('hidden');
    }
});
</script>
</x-app-layout>
