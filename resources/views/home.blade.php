<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in successfully!
                  </div>
<div class="panel-body">
  Choose your SIM
  <div class="row">
    <div class="col-sm-6 col-md-3">
      <a href="/choose_sim" class="thumbnail">
        <img src="img/idea.jpg" alt="IDEA SIM">
      </a>
    </div>

    </div>



    <div class="row">
      <div class="col-sm-6 col-md-3">
        <a href="/choose_sim" class="thumbnail">
          <img src="img/airtel.jpg" alt="AIRTEL">
        </a>
      </div>

    </div>




    <div class="row">
    <div class="col-sm-6 col-md-3">
      <a href="/choose_sim" class="thumbnail">
        <img src="img/bsnl.jpg" alt="BSNL SIM">
      </a>
    </div>

  </div>


</div>



            </div>
        </div>
    </div>
</div>
@endsection
