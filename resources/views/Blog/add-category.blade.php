<x-layout>
    <x-nav>

    <!------------------------------ END OF NAV----------------------- -->


<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Category</h2>
        {{-- <div class="alert__message error">
            <p>this is an error alert__message</p>
        </div> --}}
        <form action="/admin/manage-category" method="post">
            @csrf
            <input type="text" placeholder="Title" name="title">
            <textarea rows="4" placeholder="Description" name="body"></textarea>
            <div class="form__control inline">
                <input type="radio" id="is_featured" name="featured" value="yes">
                <p>Yes</p>
                <input type="radio" id="is_featured" name="featured" value="no">
                <p>No</p>
                <label for="is_featured">Featured</label>
                @error('featured')
                <div class="alert__message error">
                    <p>{{$message}}</p>
                 </div>
                @enderror
            </div>
          
            <button type="submit" class="btn">Add Category</button>
        </form>
    </div>
</section>


    </x-nav>
</x-layout>