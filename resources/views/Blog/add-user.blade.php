<x-layout>
    <x-nav>
    <!------------------------------ END OF NAV----------------------- -->


<section class="form__section">
    <div class="container form__section-container">
        <h2>Add User</h2>
        <div class="alert__message error">
            <p>this is an error alert__message</p>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Last Name">
            <input type="text" placeholder="Username">
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Create Password">
            <input type="password" placeholder="Confirm Password">
            <select>
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>
            <div class="form__control">
                <label for="avatar"></label>
                <input type="file" name="avatar" id="avatar">
            </div>
            <button type="submit" class="btn">Add User</button>
        </form>
    </div>
</section>

    </x-nav>
</x-layout>