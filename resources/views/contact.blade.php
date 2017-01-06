@extends('layout')

@section('content')
<h1>Contact Us</h1>
<section class="header">
  <div class="background"> &nbsp;</div>
  </section>
  .<div class="container">
    .<section class="section-padding">
      .<div class="jumbotron text-center">
        .<h1><span class="grey">Welcome to </span>Project</h1>
  <p>Wanna Learn to Code .Here is the rigt solution that you had found.<p>

      </div>
<p>Please contact us by sending a message</p>


{{ Form::open(array('url'=> 'contact')) }}

{{ Form::label('Subject')  }}

{{Form::text('subject','Enter your subject') }}
<br>
{{Form::label('Message')}}

{{Form::textarea('message','Enter your message') }}

<br>

{{  Form::submit() }}
{{  Form::close() }}

  @stop
