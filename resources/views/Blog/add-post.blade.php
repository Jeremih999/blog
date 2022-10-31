<x-layout>
    <x-nav>

    <!------------------------------ END OF NAV----------------------- -->


<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Post</h2>
        
        <form action="/admin" enctype="multipart/form-data" method="POST">
            @csrf
                <input type="text" placeholder="Title" name="title">
                @error('title')
                <div class="alert__message error">
                    <p>{{$message}}</p>
                </div>
                @enderror
                <textarea rows="12" placeholder="body" name="body"></textarea>
                @error('body')
                <div class="alert__message error">
                    <p>{{$message}}</p>
                </div>
                @enderror
                <select name="category">
                    @foreach ($category as $cat_item)
                    <option value="{{$cat_item->title}}">{{$cat_item->title}}</option>
                    @endforeach
                    {{-- <option value="Travel">Travel</option>
                    <option value="technology">technology</option>
                    <option value="science">Science</option>
                    <option value="Art">Art</option>
                    <option value="food">Food</option> --}}
                </select>
            
                @error('category')
                <div class="alert__message error">
                    <p>{{$message}}</p>
                </div>
                @enderror
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
            <div class="form__control">
                <label for="thumbnail">Add Thumbnail</label>
                <input type="file"  name="image">
                {{-- <input type="hidden" name="cat_id" value="{{$category->id}}"> --}}
            </div>
            
            <button type="submit" class="btn">Add Post</button>
        </form>
    </div>
</section>

    </x-nav>
</x-layout>