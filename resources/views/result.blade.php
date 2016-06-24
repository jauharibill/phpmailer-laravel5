@extends('main')
@section('content')
<META http-equiv="refresh" content="3;URL=/"> 
@if($result=="success")
<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Well done!</strong> You successfully send Email
  <a href="javascript:void(0)" class="alert-link">this important alert message</a>.
</div>

@elseif($result=="failed")
<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Oh snap!</strong>
  <a href="javascript:void(0)" class="alert-link">Change a few things up</a> and try submitting again.
</div>
@endif
@endsection