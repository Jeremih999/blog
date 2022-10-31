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
                <li><a href="/admin/manage-user" >
                    <i class="uil uil-users-alt"></i>
                    <h5>manage-user</h5>
                </a></li>
                <li><a href="/admin/add-category">
                    <i class="uil uil-edit"></i>
                    <h5>Add Category</h5>
                </a></li>
                <li><a href="/admin/manage-category" class="active"> 
                    <i class="uil uil-list-ul"></i>
                    <h5>Manage Categories</h5>
                </a></li>
            </ul>
        </aside>

        <main>
            <h2>Manage Categories</h2>
            <x-flash-message />
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{$post['title']}}</td>
                            <td><a href="/admin/edit-category/{{$post['id']}} " class="btn sm">Edit</a></td>
                            <td>
                                <form action="/admin/manage-category/{{$post->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                   @endforeach
                </tbody>
            </table>
        </main>
    </div>
</section>




    </x-nav>
</x-layout>