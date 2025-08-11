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
<div>Edit User</div>



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

<form class="" method="POST" action="{{url('update_user',$edit_user->id)}}">
@csrf

<div class="form-group">
<label for="">Edit User</label>


<input class="form-control" type="text" name="name" value="{{$edit_user->name}}" placeholder="Name"><br>
<input class="form-control" type="email" name="email" value="{{$edit_user->email}}" placeholder="Email"><br>
<input class="form-control" type="text" name="mobile" value="{{$edit_user->mobile}}" placeholder="Mobile"><br>

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

@include('admin.footer')


</body>

</html>
