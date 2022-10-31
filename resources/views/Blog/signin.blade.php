<x-layout>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Sign In</h2>
        {{-- <div class="alert__message success">
            <p>this is an Success alert__message</p>
        </div> --}}
        <form action="/user/authenticate" method="post">
            @csrf
            <input type="text" placeholder="User Name or Email" name="email" value="{{old('email')}}">
            @error('email')
                <div class="alert__message error">
                    <p>{{$message}}</p>
                 </div>
            @enderror
            <input type="password" placeholder="Confirm Password" name="password">
            @error('password')
                <div class="alert__message error">
                    <p>{{$message}}</p>
                 </div>
            @enderror
          
            <button type="submit" class="btn">Sign In</button>
            <small>Don't have an account? <a href="/signup">Sign Up</a></small>
        </form>
    </div>
</section>

</x-layout>