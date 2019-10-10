@extends('admin.layouts.app')

@section('content')
   <!-- post content -->
   <div class="container">
          <h1 class="jumbotron-heading text-center text-primary">Update Posts</h1>
          @if (Session::has('message'))
        <h4 class="text-info">{!! session('message') !!}</h4>
   @endif
          @if ( count( $errors ) > 0 )
                @foreach ($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
            @endforeach
            @endif
          <!-- /top tiles -->
<form id="demo-form2"  action="{{route('admin-post-update')}}" method="POST" class="form-horizontal form-label-left"   enctype="multipart/form-data">
            {{ csrf_field() }}
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="post-title">Post Title <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="post-title" name="title" value="{{ $post->title }}" required="required" class="form-control col-md-7 col-xs-12">
    <input type="hidden"  name="id" value="{{ $post->id }}" required="required" class="form-control col-md-7 col-xs-12">

  </div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat_name">Post Category <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="cat_name" name="cat_name"  value="{{ $post->cat_name }}"  required="required" class="form-control col-md-7 col-xs-12">
  </div>
</div>



<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Upload Image  <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="file" id="image" name="image"  class="form-control col-md-7 col-xs-12">
    <?php if(!empty($post->image)){  ?>
      <img width="300px" height="300px" class="img-circle profile_img" src="/images/{{$post->image}}" alt="">
      <?php } else{ ?>
        <img width="300px" height="300px"  class="img-circle profile_img" src="http://placehold.it/550x350" alt="">

    <?php   }?>
  </div>
</div>


<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mytextarea" >post Content <span class="required"> </span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <textarea type="text" id="mytextareaa"    required="required" name="content"  class="form-control col-md-7 col-xs-12" rows="4" cols="50">
     {{ $post->content }}
</textarea>
  </div>
</div>

<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="isavailable">Status <span class="required"> </span>
  </label>
<div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="status" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="status" <?php if($post->status == 'public') { ?>checked="checked" <?php } ?> value="public" data-parsley-multiple="status"> Public
                            </label>
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="status" <?php if($post->status == 'private') { ?>checked="checked" <?php } ?>  value="private" data-parsley-multiple="status"> Private
                            </label>
                          </div>
                        </div>
</div>


<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <button class="btn btn-primary" type="reset">Reset</button>
    <button type="submit" class="btn btn-success">Submit</button>
  </div>
</div>

</form>

   </div>

        <!-- /post content -->
        @stop
