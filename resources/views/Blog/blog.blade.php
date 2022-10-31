<x-layout>
    <x-nav>

    <!------------------------------ END OF NAV----------------------- -->

    <section class="search__bar">
        <form action="/blog" class="container search__bar-container">
            <div>
                <i class="uil uil-search"></i>
                <input type="search" name="search" placeholder="search">
            </div>
            <button type="submit" class="btn">GO</button>
        </form>
    </section>
<!------------------------------ END OF SEARCH----------------------- -->

<!-------------------------------BEGINNING OF FEATURED POST---------------->

        <section class="posts">
            <div class="container posts__container">
             
            @foreach ($posts as $post)
                
            
                <article class="post">
                    
                        <div class="post__thumbnail">
                            <img src="./images/blog3.jpg">
                        </div>
                        <div class="post__info">
                            <a href="" class="category__button">{{$post['category']}}</a>
                            <h3 class="post__title">
                                {{$post['title']}}
                            </h3>
                            <p class="post__body">
                                {{Str::substr($post->body, 1, 100)}}<a href="/post/{{$post['id']}}">..read more</a>
                            </p>
                            <div class="post__author">
                                <div class="post__author--avatar">
                                    <img src="./images/avatar4.jpg">
                                </div>
                                <div class="post__author--info">
                                    <h5>By: John Okeke</h5>
                                    <small>June 13, 2023 - 10:34</small>
                                </div>
                            </div>
                        </div>
                </article>
            @endforeach
            {{-- <div class="paginate__links">
                {{ $posts->links() }}
                 </div> --}}
                {{-- <article class="post">
                    <div class="post__thumbnail">
                        <img src="./images/blog5.jpg">
                    </div>
                    <div class="post__info">
                        <a href="" class="category__button">Wild Life</a>
                        <h3 class="post__title">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        </h3>
                        <p class="post__body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos dolore vel neque sed ipsa facilis assumenda, aut maxime magni itaque magnam tempore. Necessitatibus nobis dolore magnam, quos accusantium praesentium aliquam?
                        </p>
                        <div class="post__author">
                            <div class="post__author--avatar">
                                <img src="./images/avatar7.jpg">
                            </div>
                            <div class="post__author--info">
                                <h5>By: John Okeke</h5>
                                <small>June 13, 2023 - 10:34</small>
                            </div>
                        </div>
                    </div>
                </article>
                 <article class="post">
                    <div class="post__thumbnail">
                        <img src="./images/blog8.jpg">
                    </div>
                    <div class="post__info">
                        <a href="" class="category__button">Wild Life</a>
                        <h3 class="post__title">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        </h3>
                        <p class="post__body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos dolore vel neque sed ipsa facilis assumenda, aut maxime magni itaque magnam tempore. Necessitatibus nobis dolore magnam, quos accusantium praesentium aliquam?
                        </p>
                        <div class="post__author">
                            <div class="post__author--avatar">
                                <img src="./images/avatar7.jpg">
                            </div>
                            <div class="post__author--info">
                                <h5>By: John Okeke</h5>
                                <small>June 13, 2023 - 10:34</small>
                            </div>
                        </div>
                    </div>
                </article>
                 <article class="post">
                    <div class="post__thumbnail">
                        <img src="./images/blog9.jpg">
                    </div>
                    <div class="post__info">
                        <a href="" class="category__button">Wild Life</a>
                        <h3 class="post__title">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        </h3>
                        <p class="post__body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos dolore vel neque sed ipsa facilis assumenda, aut maxime magni itaque magnam tempore. Necessitatibus nobis dolore magnam, quos accusantium praesentium aliquam?
                        </p>
                        <div class="post__author">
                            <div class="post__author--avatar">
                                <img src="./images/avatar14.jpg">
                            </div>
                            <div class="post__author--info">
                                <h5>By: John Okeke</h5>
                                <small>June 13, 2023 - 10:34</small>
                            </div>
                        </div>
                    </div>
                </article>
                 <article class="post">
                    <div class="post__thumbnail">
                        <img src="./images/blog18.jpg">
                    </div>
                    <div class="post__info">
                        <a href="" class="category__button">Wild Life</a>
                        <h3 class="post__title">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        </h3>
                        <p class="post__body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos dolore vel neque sed ipsa facilis assumenda, aut maxime magni itaque magnam tempore. Necessitatibus nobis dolore magnam, quos accusantium praesentium aliquam?
                        </p>
                        <div class="post__author">
                            <div class="post__author--avatar">
                                <img src="./images/avatar2.jpg">
                            </div>
                            <div class="post__author--info">
                                <h5>By: John Okeke</h5>
                                <small>June 13, 2023 - 10:34</small>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post">
                    <div class="post__thumbnail">
                        <img src="./images/blog1.jpg">
                    </div>
                    <div class="post__info">
                        <a href="" class="category__button">Wild Life</a>
                        <h3 class="post__title">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        </h3>
                        <p class="post__body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos dolore vel neque sed ipsa facilis assumenda, aut maxime magni itaque magnam tempore. Necessitatibus nobis dolore magnam, quos accusantium praesentium aliquam?
                        </p>
                        <div class="post__author">
                            <div class="post__author--avatar">
                                <img src="./images/avatar1.jpg">
                            </div>
                            <div class="post__author--info">
                                <h5>By: John Okeke</h5>
                                <small>June 13, 2023 - 10:34</small>
                            </div>
                        </div>
                    </div>
                </article> <article class="post">
                    <div class="post__thumbnail">
                        <img src="./images/blog12.jpg">
                    </div>
                    <div class="post__info">
                        <a href="" class="category__button">Wild Life</a>
                        <h3 class="post__title">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        </h3>
                        <p class="post__body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos dolore vel neque sed ipsa facilis assumenda, aut maxime magni itaque magnam tempore. Necessitatibus nobis dolore magnam, quos accusantium praesentium aliquam?
                        </p>
                        <div class="post__author">
                            <div class="post__author--avatar">
                                <img src="./images/avatar13.jpg">
                            </div>
                            <div class="post__author--info">
                                <h5>By: John Okeke</h5>
                                <small>June 13, 2023 - 10:34</small>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post">
                    <div class="post__thumbnail">
                        <img src="./images/blog41.jpg">
                    </div>
                    <div class="post__info">
                        <a href="" class="category__button">Wild Life</a>
                        <h3 class="post__title">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        </h3>
                        <p class="post__body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos dolore vel neque sed ipsa facilis assumenda, aut maxime magni itaque magnam tempore. Necessitatibus nobis dolore magnam, quos accusantium praesentium aliquam?
                        </p>
                        <div class="post__author">
                            <div class="post__author--avatar">
                                <img src="./images/avatar15.jpg">
                            </div>
                            <div class="post__author--info">
                                <h5>By: John Okeke</h5>
                                <small>June 13, 2023 - 10:34</small>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post">
                    <div class="post__thumbnail">
                        <img src="./images/blog22.jpg">
                    </div>
                    <div class="post__info">
                        <a href="" class="category__button">Wild Life</a>
                        <h3 class="post__title">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        </h3>
                        <p class="post__body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos dolore vel neque sed ipsa facilis assumenda, aut maxime magni itaque magnam tempore. Necessitatibus nobis dolore magnam, quos accusantium praesentium aliquam?
                        </p>
                        <div class="post__author">
                            <div class="post__author--avatar">
                                <img src="./images/avatar10.jpg">
                            </div>
                            <div class="post__author--info">
                                <h5>By: John Okeke</h5>
                                <small>June 13, 2023 - 10:34</small>
                            </div>
                        </div>
                    </div>
                </article> --}}
            </div>
        </section>
   <!-------------------------------END OF POST---------------->

   <section class="category__buttons">
    <x-tag />
   </section>

   <!-------------------------------END OF CATEGORY BUTTONS---------------->
    </x-nav>
</x-layout>