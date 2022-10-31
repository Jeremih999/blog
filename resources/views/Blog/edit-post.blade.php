<x-layout>
    <x-nav>
    <!------------------------------ END OF NAV----------------------- -->


<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit {{Str::substr($post->title, 0, 20)}}..</h2>
        {{-- <div class="alert__message error">
            {{-- <p>{{$message}}</p> --}}
            
   
            <x-flash-message />
        <form action="/admin/{{$post['id']}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="text" placeholder="Title" value="{{$post['title']}}" name="title">
            <select name="category">
                  <option selected value="{{$post['category']}}">{{$post['category']}}</option>
                  @foreach ($category as $cat_item)
                    <option value="{{$cat_item->title}}">{{$cat_item->title}}</option>
                  @endforeach
                  {{-- <option value="travel">Travel</option>
                  <option value="technology">technology</option>
                  <option  value="science">Science</option>
                  <option value="art">Art</option>
                  <option value="food">Food</option> --}}
                

            </select>
            <textarea rows="12" placeholder="body" name="body"> {!!$post['body']!!} </textarea>
            <div class="form__control inline">
                <input type="radio" id="is_featured" @if ($post['featured'] === "yes")  checked  @endif  name="featured" value="yes">
                <p>Yes</p>
                <input type="radio" id="is_featured" @if ($post['featured'] === "no")  checked  @endif name="featured" value="no">
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
                <input type="file" id="thumbnail" name="image" >
                <img src="{{ asset('/storage/'. $post->image) }}" style="width: 100px">
            </div>
            
            <button type="submit" class="btn">Update Post</button>
        </form>
    </div>
</section>
    </x-nav>
</x-layout>