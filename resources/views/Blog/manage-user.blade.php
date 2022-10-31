<x-layout>
    <x-nav>

    <!------------------------------ END OF NAV----------------------- -->



<section class="dashboard">
    <div class="container dashboard__container">
        <button id="show__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-right-b"></i></button>
        <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-left-b"></i></button>
        <aside>
            <ul>
                <li><a href="/admin/add-post">
                    <i class="uil uil-pen"></i>
                    <h5>Add Post</h5>
                </a></li>
                <li><a href="/admin" >
                    <i class="uil uil-postcard"></i>
                    <h5>Manage Post</h5>
                </a></li>
                <li><a href="/admin/add-user">
                    <i class="uil uil-user-plus"></i>
                    <h5>Add User</h5>
                </a></li>
                <li><a href="/admin/manage-user" class="active" >
                    <i class="uil uil-users-alt"></i>
                    <h5>manage-user</h5>
                </a></li>
                <li><a href="/admin/add-category">
                    <i class="uil uil-edit"></i>
                    <h5>Add Category</h5>
                </a></li>
                <li><a href="/admin/manage-category" > 
                    <i class="uil uil-list-ul"></i>
                    <h5>Manage Categories</h5>
                </a></li>
            </ul>
        </aside>

        <main>
            <h2>Manage Users</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ernest Achiever</td>
                        <td>Achiever</td>
                        <td><a href="/edit-user" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.html " class="btn sm">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Jeremih Brown</td>
                        <td>Brownny</td>
                        <td><a href="edit-user.html" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.html " class="btn sm">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Avater Aang</td>
                        <td>Avatar</td>
                        <td><a href="edit-user.html" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.html " class="btn sm">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Naruto Uzamaki</td>
                        <td>Naruto</td>
                        <td><a href="edit-user.html" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.html " class="btn sm">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Victoria Cakes</td>
                        <td>Cakes</td>
                        <td><a href="edit-user.html" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.html " class="btn sm">Delete</a></td>
                    </tr>
                    
                </tbody>
            </table>
        </main>
    </div>
</section>





    </x-nav>
</x-layout>