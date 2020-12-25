@extends('admin_layout')
@section('admin_content')

<br><br>
<br><br>
<br><br>

<p class="alert-success">

<?php
$messege = Session::get('messege');
if ($messege) {
	echo $messege;
	Session::put('messege', null);
}
?>

</p>

<form class="form-horizontal" action="{{url('/add_post')}}" method="post" enctype="multipart/form-data">
  <div class="form-group">
{{ csrf_field() }}
    
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="name">
  </div>

   <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" name="phone" id="phone" placeholder="phone no">
  </div>


  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" rows="5"></textarea>
  </div>

  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control-file" name="image" id="image">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>


</form>

@endsection