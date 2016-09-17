@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        	<div class="panel panel-default">
        		<div class="panel-heading center">User Control Panel</div>
        		<div class="panel-body">
					<div class="col-xs-12 col-sm-6 col-md-8">Overview</div>
					<div class="col-xs-6 col-md-4">Create Addtional User</div>
					<div class="col-xs-6 col-sm-4">Delete Addtional User</div>
					<div class="col-xs-6 col-sm-4">Change Addtional User Password</div>
					<!-- Optional: clear the XS cols if their content doesn't match in height -->
					<div class="clearfix visible-xs-block"></div>
					<div class="col-xs-6 col-sm-4">Other Settings</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection