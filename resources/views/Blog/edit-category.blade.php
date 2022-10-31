<x-layout>
    <x-nav>

    <!------------------------------ END OF NAV----------------------- -->


<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit Category</h2>
        <x-flash-message />
        <form action="/admin/manage-category/{{$cat['id']}}" method="post">
            @csrf
            @method('PUT')
            <input type="text" name="title" placeholder="Title" value="{{$cat->title}}">
            <textarea rows="4" name="body" placeholder="Description">{{$cat['body']}}</textarea>
          
            <button type="submit" class="btn">Update Category</button>
        </form>
    </div>
</section>
    </x-nav>
</x-layout>