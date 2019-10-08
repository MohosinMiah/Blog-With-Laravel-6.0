<!-- Include Header Part  -->
@include('front/inc/header')

<!-- Include Menu bar   Part  -->

@include('front/inc/headerall')


	<!-- blog -->
	<section class="wthree-row py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
            <!-- Include  Posts Part  -->
            @include('front/blog/posts')
            <!-- Include Sidebar  Part  -->
            @include('front/blog/sidebar')
			</div>
		</div>
	</section>
    <!-- //blog -->

    <!-- Include You May Like Posts Part  -->
    @include('front/inc/youmaylike')

<!-- Include Footer Part  -->
@include('front/inc/footer')
