@extends("layout")

@section("content")

<div class="row">
    <h1>Create post</h1> 
    <div class="col-md-8 col-md-offset-2">
        <br>
        <form action="/posts" method="POST" enctype="multipart/form-data" id="postForm">
            @csrf
            <div class="form-group">
                <label for="title">Title <span class="require">*</span></label>
                <input type="text" id="title" class="form-control" required name="title" />
            </div>
            
            <div class="form-group">
                <label for="image">Image link</label>
                <input type="text" class="form-control" name="image" />
            </div>
            {{-- <div class="form-group">
                <label for="image">Image link</label>
                <input type="file" class="form-" name="image" />
            </div> --}}

            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="userText" rows="5" class="form-control" required name="body" ></textarea>
            </div>
            
            <div class="form-group">
                <input type="submit" name='post-create-form' id="post-btn" class="btn btn-primary" value='Create'>
                <!-- </button> -->
                <a href="/dashboard" class="btn btn-default">Cancel</a>
            </div>
        </form>
    </div>
    
</div>

@endsection