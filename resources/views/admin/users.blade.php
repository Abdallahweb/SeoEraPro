<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.css')
</head>

<body>
<div id="app">
@include('admin.header')
<div class="main-content">
<section class="section">
<h1 class="section-header">
<div>Users</div>
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

<form class="" method="POST" action="{{url('add_user')}}" >
@csrf

<div class="form-group">
<label for="">Create New User</label>

<input class="form-control" type="text" name="name" value="{{old('name')}}" placeholder="Name"><br>
<input class="form-control" type="email" name="email" value="{{old('email')}}" placeholder="Email"><br>
<input class="form-control" type="text" name="mobile" value="{{old('mobile')}}" placeholder="Mobile"><br>
<input class="form-control" type="password" name="password" placeholder="Password"><br>

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
<h4>Users</h4>
</div>

<div class="card-body">
<div class="table-responsive">

@if ($Users->count() == 0)

<h1 class="text-center text-danger">No Data Found</h1>


@else

<table class="table table-bordered">
<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Created At</th>
<th>Action</th>
</tr>



@foreach($Users as $data)

<tr>

<td>{{$data->id}}</td>
<td>{{$data->name}}</td>
<td>{{$data->email}}</td>
<td>{{$data->mobile}}</td>
<td>{{$data->created_at}}</td>
<td>
<a href="{{url('edit_user',$data->id )}}" class="btn btn-action btn-info">Edit</a>
<a onclick="confirmation(event)" href="{{url('delete_user',[$data->id , $data->name])}}" class="btn btn-action btn-danger">Delete</a></td>

@endforeach

@endif

</tr>
</table>
{{$Users->links()}}

</div>
</div>
</div>
</div>

</div>
</section>
</div>
</div>

@include('admin.footer')


</body>

</html>
