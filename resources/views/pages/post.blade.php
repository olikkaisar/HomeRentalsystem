@extends('layout')
@section('content')

<!-- <br><br>
<br><br>
<br><br> -->


<div class="container">


  
<form class="form-horizontal" action="{{url('/add_post')}}" method="post" enctype="multipart/form-data" style="margin-top: 150px">
  <div class="form-group">
{{ csrf_field() }}
<p class="alert-success">
<?php
$messege = Session::get('messege');
if ($messege) {
  echo $messege;
  Session::put('messege', null);
}
?>


</p>
    
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="name">
  </div>

   <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" name="phone" id="phone" placeholder="phone no">
  </div>

  <div class="form-group">
    <label for="location">Location</label>
    <input type="text" class="form-control" name="location" id="location" placeholder="location">
  </div>

  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" name="price" id="price" placeholder="price">
  </div>


  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" rows="5" placeholder="Please enter your full description about room and address"></textarea>
  </div>

  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control-file" name="image" id="image">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>


</form>
</div>

@endsection