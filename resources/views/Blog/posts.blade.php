<x-layout>
    
    <x-nav>
    <!------------------------------ END OF NAV----------------------- -->

    <section class="singlepost">
        <div class="container singlepost__container">
            <h2>{{$post['title']}}</h2>
            <div class="post__author">
                <div class="post__author--avatar">
                    <img src="{{asset('images/avatar4.jpg')}}">
                </div>
                <div class="post__author--info">
                    <h5>By: John Okeke</h5>
                    <small>June 13, 2023 - 10:34</small>
                </div>
            </div>
            <div class="singlepost__thumbnail">
                <img src="{{asset('images/blog33.jpg')}}">
            </div>
            <p>
                {{$post['body']}}
            </p>

        </div>
    </section>

    <!--==================== END OF POST================== -->



</x-nav>
</x-layout>