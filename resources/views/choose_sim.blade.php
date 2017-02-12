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
                <div class="panel-heading">Get your SIM today</div>

                <div class="panel-body">
                  Please provide the details for applying a new sim.
                  <div class="panel-body">

                      Choose the type of SIM
            {{ Form::select('status',array('prepaid'=>'Prepaid','postpaid'=>'PostPaid'),'Prepaid') }}
            <br> <br>
            Choose the number type:
            {{ Form::select('number_type',array('fancy'=>'Fancy','ordinary'=>'ordinary'),'Fancy') }}
            <br><br>
            <br>
            <div class="panel panel-primary">
              <div class="panel-heading">Choose the number of your choice</div>
              <div class="panel-body">
                <p> </p>
              </div>

  <!-- Table -->
  <table class="table">
    <ul class="list-group">
    <li class="list-group-item">num1</li>
    <li class="list-group-item">num2</li>
    <li class="list-group-item">num3</li>
    <li class="list-group-item">num4</li>
    <li class="list-group-item">num5</li>
  </ul>
  </table>

            </div>


                </div>

                  </div>



                          <button type="submit" class="btn btn-primary">
                              Continue
                          </button>
                      </div>



            </div>
        </div>
    </div>
</div>
@endsection
