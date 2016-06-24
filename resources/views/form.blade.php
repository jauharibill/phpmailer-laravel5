@extends('main')

@section('content')
<div class="navbar navbar-default">
  <div class="container-fluid">
    <div class="nav navbar-nav navbar-right navbar-header">
      <a class="navbar-brand" href="javascript:void(0)">LaraMail <i class="material-icons">email</i></a>
    </div>
    <div class="navbar-right navbar-collapse collapse navbar-responsive-collapse">
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input class="form-control col-md-8" placeholder="Search" type="text">
        </div>
      </form>
    </div>
  </div>
</div>

<div class="jumbotron" style="background: white;width: 70%; display:table;margin: 10px auto;">
<form class="form-horizontal" method="post" action="/sendmail">
{!! csrf_field() !!}
  <fieldset>
    <legend>Send me E-Mail</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Your Email</label>

      <div class="col-md-10">
        <input class="form-control" id="inputEmail" placeholder="Email" type="email" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label for="Name" class="col-md-2 control-label">Your Name</label>
      <div class="col-md-10">
        <input class="form-control" id="Name" placeholder="Name" type="name" name="name" required>
      </div>
    </div>

       <div class="form-group">
      <label for="subject" class="col-md-2 control-label">Subject</label>

      <div class="col-md-10">
        <input class="form-control" id="subject" placeholder="Subject" type="text" name="subject" required>
      </div>
    </div>
    
    <div class="form-group">
      <label for="textArea" class="col-md-2 control-label">Your Text</label>

      <div class="col-md-10">
        <textarea class="form-control" rows="3" id="textArea" name="text" required></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        <button type="button" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Send</button>
      </div>
    </div>
  </fieldset>
</form>

</div>
<a href="https://github.com/you"><img style="position: absolute; top: 0; left: 0; border: 0;z-index: 1000;" src="https://camo.githubusercontent.com/567c3a48d796e2fc06ea80409cc9dd82bf714434/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_darkblue_121621.png"></a>

@endsection