@extends('layouts.master',['title' =>'Contactez-nous '])

@section('content')

<div class="container">
<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
<h1 >Get In Touch</h1>
<p>If you having trouble with this service, please <a href="mailto:damediagnea@gmail.com">ask for help.</a></p>


<form class="form-horizontal" method="post" action="{{route('contacts.store')}}">
@csrf
  <fieldset>
    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
      <label for="name" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="name" name="name"  placeholder="Name">
        @if($errors->has('name'))
        <p style="color:red;"> {{ $errors->first('name')}} </p>

        @endif

      </div>
    </div>
    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
      <label for="email" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="email" class="form-control" id="email" name="email"  placeholder="Email">
        @if($errors->has('email'))
       <p style="color:red;"> {{ $errors->first('email')}} </p>

        @endif
      </div>
    </div>
    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
      <label for="message" class="col-lg-2 control-label">Message</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="10" cols="10" id="message"  name="message" placeholder="Message"></textarea>
        @if($errors->has('message'))
        <p style="color:red;"> {{ $errors->first('message')}} </p>

        @endif
      </div>
    </div>
    
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary btn-block">Submit &raquo;</button>
      </div>
    </div>
  </fieldset>
</form>
</div>
</div>



@endsection