@extends("layout")

@section("content")

<div class="row justify-content-center">

    @foreach($posts as $post)
        <div class="col-md-6 col-lg-4">
            <div class="card-content">
                <div class="card-img">
                    <img src="{{asset('img/2.jpg')}}" alt="">
                    <span class="username">
                        <h4> <a href="#" class="username_url">Ahmed</a></h4>
                    </span>
                </div>
                <div class="card-desc text-center">
                    <h3>{{$post["title"]}}</h3>
                    <p>{{substr($post["body"],0, 35)}}...</p>
                    <a href="/blogsol/pages/posts/show.php?id={{$post['id']}}" class="btn-card">Read</a>
                </div>
            </div>
        </div>

    @endforeach

    @if(count($posts) == 0)

        <h2 class='text-center'>There are no posts</h2>

    @endif

    

    
    <!-- END LOOP -->
    <!-- CHECK IF THERE IS NO POSTS -->
        <!-- Display a message 'There are no posts available' -->
    <!-- END IF -->
</div>

@endsection