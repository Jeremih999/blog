<nav>
    <div class="container nav__container">
        <a href="/" class="nav__logo">BLOG</a>
        <ul class="nav__items">
            <li><a href="/blog">Blog</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/service">Services</a></li>
            <li><a href="/contact">Contact</a></li>
            @auth
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="{{ asset('/storage/'. auth()->user()->image) }}">
                    </div>
                    <ul>
                        <li><a href="/admin">Dashboard</a></li>

                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button><a>Logout</a></button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
            <li><a href="/signin">Sign in</a></li>
            @endauth
           
         
        </ul>
        <button id="open__nav-btn" class="button"><i class="uil uil-bars"></i></button>
        <button id="close__nav-btn" class="button"><i class="uil uil-multiply"></i></button>
    </div>
</nav>


{{$slot}}


<footer>
    <div class="footer__socials">
         <a href="" target="_blank">
            <i class="uil uil-youtube"></i>
         </a>
         <a href="" target="_blank">
            <i class="uil uil-facebook-f"></i>
         </a>
         <a href="" target="_blank">
            <i class="uil uil-twitter"></i>
         </a>
         <a href="" target="_blank">
            <i class="uil uil-instagram-alt"></i>
         </a>
         <a href="" target="_blank">
            <i class="uil uil-linkedin"></i>
         </a>
    </div>
    <div class="container footer__container">
        <article>
            <h4>Categories</h4>
            <ul>
                <li><a href="">Art</a></li>
                <li><a href="">Wild life</a></li>
                <li><a href="">Travel</a></li>
                <li><a href="">Science & technology</a></li>
                <li><a href="">Music</a></li>
                <li><a href="">Food</a></li>
            </ul>
        </article>

        <article>
            <h4>Support</h4>
            <ul>
                <li><a href="">Online Support</a></li>
                <li><a href="">Call Numbers</a></li>
                <li><a href="">Emails</a></li>
                <li><a href="">Social Support</a></li>
                <li><a href="">Location</a></li>
            </ul>
        </article>

        <article>
            <h4>Blog</h4>
            <ul>
                <li><a href="">Safety</a></li>
                <li><a href="">Repair</a></li>
                <li><a href="">Recent</a></li>
                <li><a href="">Popular </a></li>
                <li><a href="">Categories</a></li>
            </ul>
        </article>

        <article>
            <h4>Permalinks</h4>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </article>  
    </div>
    <div class="footer__Copyright">
        <small>Copyright &copy; JEREMIH PORTFOLIO</small>
    </div>
</footer>