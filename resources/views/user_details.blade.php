<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


@extends('layouts.app')
@section('content')



<div class="col-md-6.col-md-offset-4">



  <form class="form-horizontal">
  <fieldset>

  <!-- Form Name -->
  <legend>Fill the credentials </legend>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Adhar ID</label>
    <div class="col-md-6">
    <input id="textinput" name="textinput" type="text" placeholder="Adhar-number" class="form-control input-md" required="">
    <span class="help-block">Enter your Adhar Verfication number</span>
    </div>
  </div>

  <!-- Select Basic -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">Nationality</label>
    <div class="col-md-4">
      <select id="selectbasic" name="selectbasic" class="form-control">
        <option value="0">Indian</option>
        <option value="1">NRI</option>
      </select>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Date of Birth</label>
    <div class="col-md-6">
    <input id="textinput" name="textinput" type="text" placeholder="dd-mm-yy" class="form-control input-md" required="">

    </div>
  </div>

  <!-- Multiple Radios -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="radios">Gender</label>
    <div class="col-md-4">
    <div class="radio">
      <label for="radios-0">
        <input type="radio" name="radios" id="radios-0" value="0" checked="checked">
        Male
      </label>
  	</div>
    <div class="radio">
      <label for="radios-1">
        <input type="radio" name="radios" id="radios-1" value="1">
        Female
      </label>
  	</div>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Addr1</label>
    <div class="col-md-5">
    <input id="textinput" name="textinput" type="text" placeholder="addr1" class="form-control input-md" required="">

    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">addr2</label>
    <div class="col-md-5">
    <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md" required="">

    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">addr3</label>
    <div class="col-md-4">
    <input id="textinput" name="textinput" type="text" placeholder="addr3" class="form-control input-md" required="">

    </div>
  </div>


  <div class="form-group">
    <label class="col-md-4 control-label" for="submit-user_details"></label>
    <div class="col-md-4">
      <button id="submit-user_details" name="submit-user_details" class="btn btn-primary">Submit</button>
    </div>
  </div>
  </fieldset>
  </form>
</div>
@stop
