
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
<div>Posts</div>
</h1>


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






<div class="col-12 col-md-6 col-lg-12">

<form class="" method="POST" action="{{url('add_post')}}" >
@csrf

<div class="form-group">
<label for="">Create New Post</label>

<input class="form-control" type="text" name="title" value="{{old('title')}}" placeholder="Title"><br>
<textarea class="form-control" maxlength="2048" type="text"  rows="4" cols="50" name="description"  placeholder="Description">{{old('description')}}</textarea><br>
<input class="form-control" type="text" name="mobile" value="{{old('mobile')}}" placeholder="Mobile"><br>

</div>

<div class="form-group">
<button type="submit" class="btn btn-primary btn-block" >
Save
</button>
</div>
</form>
</div>

<div class="section-body">
<div class="row">
<div class="col-12 col-md-6 col-lg-12">
<div class="card">
<div class="card-header">
<h4>Posts</h4>
</div>

<div class="card-body">
<div class="table-responsive">


@if ($Post->count() == 0)

<h1 class="text-center text-danger">No Data Found</h1>


@else


<table class="table table-bordered">
<tr>

<th>Title</th>
<th>Description</th>
<th>Mobile</th>
<th>Created At</th>
<th>Action</th>
</tr>


@foreach($Post as $data)

<tr>

<td>{{$data->title}}</td>
<td>{!! Str::limit($data->description,50)!!}</td>
<td>{{$data->mobile}}</td>
<td>{{$data->created_at}}</td>
<td>
<a href="{{url('edit_post',$data->id )}}" class="btn btn-action btn-info">Edit</a>
<a onclick="confirmation(event)" href="{{url('delete_post',[$data->id , $data->title])}}" class="btn btn-action btn-danger">Delete</a></td>

@endforeach

@endif
</tr>
</table>
{{$Post->links()}}

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
