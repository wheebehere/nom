@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        	<div class="panel panel-default">
        		<div class="panel-heading center">User Control Panel</div>
        		<div class="panel-body">
					<form class="form-horizontal">
            <div class="form-group">
              <label for="choreName" class="col-sm-2 control-label">Chore Name</label>
              <div class="col-sm-10">
                <input type="name" class="form-control" id="choreName" placeholder="Wash Dishes">
              </div>
            </div>
            <div class="form-group">
              <label for="ChoreDesc" class="col-sm-2 control-label">Chore Description</label>
              <div class="col-sm-10">
                <input type="desc" class="form-control" id="choreDesc" placeholder="Fill sink with hot water; use dish soap; wash all dishes.">
              </div>
            </div>
            <div class="form-group">
              <label for="ChoreFreq" class="col-sm-2 control-label">Chore Description</label>
              <div class="col-sm-10">
                <input type="desc" class="form-control" id="choreFreq" placeholder="Input one:  Daily, Weekly, Monthly, Yearly">
              </div>
            </div>
          </form>

          <div class="radio">
            <label>
              <input type="radio" name="optionsRadios" id="Daily" value="Daily" checked>
              You would like this chore to be performed on a Daily Basis
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="optionsRadios" id="Weekly" value="Weekly" checked>
              You would like this chore to be performed on a Weekly Basis
            </label>
          </div>
          <div class="radio">
          <label>
              <input type="radio" name="optionsRadios" id="Monthly" value="Monthly" checked>
              You would like this chore to be performed on a Monthly Basis
            </label>
          </div>
          <div class="radio">
          <label>
              <input type="radio" name="optionsRadios" id="Yearly" value="Yearly" checked>
              You would like this chore to be performed on a Yearly Basis
            </label>
          </div>

				</div>
			</div>
		</div>
	</div>
</div>

@endsection