<x-layout>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Sign Up</h2>
        {{-- <div class="alert__message error">
            <p>this is an error alert__message</p>
        </div> --}}
        <form action="/users" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" placeholder="First Name" name="first_name" value='{{old("first_name")}}'>
            @error('first_name')
                <div class="alert__message error">
                    <p>{{$message}}</p>
                 </div>
            @enderror
            <input type="text" placeholder="Last Name" name="last_name" value='{{old("last_name")}}' >
            @error('last_name')
                <div class="alert__message error">
                    <p>{{$message}}</p>
                 </div>
            @enderror
            <input type="text" placeholder="Username" name="name" value='{{old("name")}}'>
            @error('name')
                <div class="alert__message error">
                    <p>{{$message}}</p>
                 </div>
            @enderror
            <input type="email" placeholder="Email" name="email" value='{{old("email")}}'>
            @error('email')
                <div class="alert__message error">
                    <p>{{$message}}</p>
                 </div>
            @enderror
            <input type="password" placeholder="Create Password" name="password" value='{{old("password")}}'>
            @error('password')
                <div class="alert__message error">
                    <p>{{$message}}</p>
                 </div>
            @enderror
            <input type="password" placeholder="Confirm Password" name="password_confirmation" value='{{old("password_confirmation")}}'>
            @error('password_confirmation')
                <div class="alert__message error">
                    <p>{{$message}}</p>
                 </div>
                @enderror
            <div class="form__control">
                <label for="avatar"></label>
                <input type="file" id="avatar" name="image">

            </div>
            @error('image')
                <div class="alert__message error">
                    <p>{{$message}}</p>
                 </div>
            @enderror
            <button type="submit" class="btn">Sign Up</button>
            <small>Already have an account? <a href="/signin">Sign In</a></small>
        </form>
    </div>
</section>

</x-layout>