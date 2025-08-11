<!DOCTYPE html>
<html lang="en">

<head>
@include('posts.css')
</head>

<body>
<div id="app">
@include('posts.header')

<div class="main-content">
<section class="section">
<h1 class="section-header">
<div>Edit Post</div>



</h1>
<div class="section-body">
<div class="row">
<div class="col-12 col-md-6 col-lg-12">
<div class="card">


</div>
<div class="col-12 col-md-6 col-lg-12">



@if ($errors->any())
<div>
<ul>
@foreach ($errors->all() as $error)

<?php toastr()->closeButton()->timeOut(10000)->addError($error);
?>
@endforeach
</ul>
</div>
@endif


<form class="" method="POST" action="{{url('update_post',$edit_post->id)}}">
@csrf

<div class="form-group">
<label for="">Edit Post</label>


<input class="form-control" type="text" name="title" value="{{$edit_post->title}}" placeholder="Title"><br>
<textarea class="form-control" type="text"  rows="4" cols="50" name="description" placeholder="Description">{{$edit_post->description}}</textarea><br>
<input class="form-control" type="text" name="mobile" value="{{$edit_post->mobile}}" placeholder="Mobile"><br>

</div>

<div class="form-group">
<button type="submit" class="btn btn-primary btn-block" tabindex="4">
Update
</button>
</div>
</form>
</div>


</div>

</div>
</div>
</div>

</div>
</section>
</div>
</div>

@include('posts.footer')


</body>

</html>
