@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        	<div class="panel panel-default">
        		<div class="panel-heading center">User Control Panel</div>
        		<div class="panel-body">
					<button type="button" class="btn btn-primary btn-lg btn-block">Create Additional User</button>
					<button type="button" class="btn btn-default btn-lg btn-block">Delete Additional User</button>
					<button type="button" class="btn btn-default btn-lg btn-block">Change Additional User</button>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection