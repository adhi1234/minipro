@extends('layout')
@section('content')


<section class="header">                                                         <!--Place this section in about.blade.php Looks better-->
  <div class="background"> &nbsp;</div>
  </section>

  <section class="header section-padding">
    <div class="background">&nbsp;  </div>
    <div class="container">
        <div class="header-text">
          <h1>MINI PROJECT </h1>:<br> Its just a trailer:<br>

        </div>

    </div>

  </section>


  <div class="container">
    <section class="section-padding">
      <div class="jumbotron text-center">
        <h1><span class="grey">Welcome to </span>Project Page</h1>
<p>Wanna Learn to Code .Here is the rigt solution that you had found.<p>

      </div>

    </section>

  </div>





{{ Form::open(array('url'=> 'contact')) }}


{{ Form::label('Subject')  }}


.<div class="form-container">


{{Form::text('subject','Enter your subject') }}



{{Form::label('Message')}}

{{Form::textarea('message','Enter your message') }}



{{  Form::submit() }}</div>
{{  Form::close() }}

  @stop
