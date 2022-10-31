<x-layout>
<x-nav>

    <!------------------------------ END OF NAV----------------------- -->



<section class="dashboard">
    <div class="container dashboard__container">
        <button id="show__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-right-b"></i></button>
        <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-left-b"></i></button>
       
        <x-aside/>

        <main>
            <h2>Dashboard</h2>
            <x-flash-message />
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Admin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post['title']}}</td>
                        <td>{{$post['title']}}</td>
                        <td><a href="/admin/edit-post/{{$post['id']}}" class="btn sm">Edit</a></td>
                        <td>
                            <form action="/admin/{{$post['id']}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn sm">Delete</button> 
                            </form>
                        </td>
                        <td>Yes</td>
                    </tr>
                    @endforeach
                    {{-- <div class="paginate__links">
                        {{ $posts->links() }}
                         </div> --}}
                    {{-- <tr>
                        <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                        <td>Art</td>
                        <td><a href="/edit-post" class="btn sm">Edit</a></td>
                        <td><a href="/delete-category" class="btn sm">Delete</a></td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                        <td>Art</td>
                        <td><a href="/edit-post" class="btn sm">Edit</a></td>
                        <td><a href="/delete-category " class="btn sm">Delete</a></td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                        <td>Art</td>
                        <td><a href="/edit-post" class="btn sm">Edit</a></td>
                        <td><a href="/delete-category " class="btn sm">Delete</a></td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                        <td>Art</td>
                        <td><a href="/edit-post" class="btn sm">Edit</a></td>
                        <td><a href="/delete-category " class="btn sm">Delete</a></td>
                        <td>Yes</td>
                    </tr>
                    
                </tbody> --}}
            </table>
        </main>
    </div>
</section>





</x-nav>
</x-layout>