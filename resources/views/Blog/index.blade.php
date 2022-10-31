
<x-layout>

    <x-nav>
    <!------------------------------ END OF NAV----------------------- -->

   
    <!-------------------------------BEGINNING OF FEATURED POST---------------->
    <section class="featured">
        <x-flash-message />
        <div class="container featured__container">
            <div class="post__thumbnail">
                <img src="./images/blog1.jpg">
            </div>
            <div class="post__info">
                <a href="category-post.html" class="category__button">Wild Life</a>
                <h2 class="post__title">
                    <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</a>
                </h2>
                <p class="post__body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam distinctio rerum quam qui animi officiis veniam quas fugit et nobis aliquid, consequatur itaque nemo ab fugiat minus magni ut? Ex.
                </p>
                <div class="post__author">
                    <div class="post__author--avatar">
                        <img src="./images/avatar2.jpg" >
                    </div>
                    <div class="post__author--info">
                        <h5>By: Mary Jane</h5>
                        <small>june 10, 2022 - 12:23</small>
                    </div>
                </div>
            </div>
        </div>
    </section>



        <!-------------------------------BEGINNING OF FEATURED POST---------------->

        <section class="posts">
            <div class="container posts__container">
                @foreach ($posts as $post)

                    @if ($post['featured'] == 'yes')
                        <article class="post">
                            <div class="post__thumbnail">
                                {{-- {{$post->image}} --}}
                                <img src="{{ asset('/storage/'. $post->image) }}">
                            </div>
                            <div class="post__info">
                                <a href="" class="category__button">{{$post['category']}}</a>
                                <h3 class="post__title">
                                    {{$post['title']}} 
                                </h3>
                                <p class="post__body">
                                    {{Str::substr($post->body, 1, 100)}}<a href="/{{$post['id']}}">..read more</a>
                                </p>
                                <div class="post__author">
                                    <div class="post__author--avatar">
                                        <img src="./images/avatar2.jpg" >
                                    </div>
                                    <div class="post__author--info">
                                        <h5>By: @if ($post['user_id'] == $post->users->id)
                                                 {{$post->users->first_name}} {{$post->users->last_name}}
                                                 @endif
                                        </h5>

                                        <small>June 13, 2023 - 10:34</small>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endif 
                    
                 @endforeach
                   
                
                    

                {{-- @enderror --}}
                {{-- <article class="post">
                    <div class="post__thumbnail">
                        <img src="./images/blog5.jpg">
                    </div>
                    <div class="post__info">
                        <a href="category-post.html" class="category__button">Wild Life</a>
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
            {{-- <div class="paginate__links">
                {{ $posts->links() }}
             </div> --}}
        </section>
   <!-------------------------------END OF POST---------------->

   <section class="category__buttons">
    <div class="container category__buttons--container">
    @foreach ($category as $cat_item)
    <a href="/?tag={{$cat_item['title']}}" class="category__button">{{$cat_item['title']}}</a>
    @endforeach
    </div>
   </section>

   <!-------------------------------END OF CATEGORY BUTTONS---------------->

    </x-nav>

</x-layout>