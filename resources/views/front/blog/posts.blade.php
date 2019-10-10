<div class="col-lg-8 blog-left-content">
        @foreach ($blogs as $blog)

    <div class="creatives-grid">
        <a href="/{{ $blog->title }}">
            <img src="images/{{ $blog->image }}" alt=" " class="img-fluid" />
        </a>
        <div class="p-mask img-thumbnail">
            <h4><a href="/{{ $blog->title }}">{{ $blog->title }}</a></h4>
            <span class="let mt-3">{{ $blog->created_at }}</span>
            <hr>
            <p>{!! $blog->content !!}</p>
            <a class="btn button-style-w3ls mt-4" href="/{{ $blog->title }}">Read More</a>
        </div>
    </div>

    
    @endforeach
    <nav aria-label="Page navigation example">
            {{ $blogs->links() }}

    </nav>



</div>
