<x-app-layout>

        <div class="max-w-8xl mx-auto sm:px-4 lg:px-4">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg "style="height: 93vh;">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  <div class="flex justify-between items-center mb-4">
                                      <h1 class="text-2xl font-bold mb-4">create user</h1>

                    </div>  
                    {{-- create form create user --}}
                    <form action="">
                        <div class="flex justify-between items-center mb-4">
                            <input type="text" name="username" placeholder="Username" class="border rounded px-3 py-2 w-1/4">
                            <input type="email" name="email" placeholder="Email" class="border rounded px-3 py-2 w-1/4">
                            <select name="role" class="border rounded px-3 py-2 w-1/4 bg-slate-500 text-black">
                                <option value="">Select Role</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                            <input type="text" name="password" placeholder="Password" class="border rounded px-3 py-2 w-1/4">
                            <input type="text" name="confirm_password" placeholder="Confirm Password" class="border rounded px-3 py-2 w-1/4">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
                    
    
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

        </style>
</x-app-layout>
