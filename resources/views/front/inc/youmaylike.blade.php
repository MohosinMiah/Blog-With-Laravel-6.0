
	<!-- more -->
	<section class="blog_w3ls py-5" id="more">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle mb-sm-5 mb-4">You may also like</h3>
			<div class="row">
				<!-- blog grid -->

				@foreach ($youmayLikes as $item)
					
				<div class="col-md-4">
					<div class="med-blog">
						<div class="blog-header">
							<a href="blog1.html">
								<img  width="100%" height="279px" src="/images/{{ $item->image }}" alt="image">
							</a>
						</div>
						<div class="blog-body bg-wh p-4">
							<span>{{ $item->created_at }} - {{ $item->title }}</span>
							<a href="blog1.html" class="blog-title">Dictum porta auris magna umgtdd fos</a>
							<p>{!! Str::limit($item->content,200) !!}</p>
						</div>
					</div>
				</div>				


				@endforeach
			</div>			</div>

				<!-- //blog grid -->
		
			</div>
		</div>
	</section>
	<!-- //more -->
