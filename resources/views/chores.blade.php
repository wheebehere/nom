@extends('layouts.app')

@section('content')
  
<div class="container">
  <div class="table-responsive">
          <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading center">Chore Overview</div>

                <div class="panel-body">
    <table class="table table-hover">
      
      <th colspan="3">Daily Chores</th>
      <!-- On cells (`td` or `th`) -->
      <tr>
        <th>Chore</th>
        <th>Chore Description</th>
        <th>Chore Frequency</th>
      </tr>

      @foreach ( $dailychores as $key => $value )
        

      <tr>
        <td>{{$value->choreName}}</td>
        <td>{{$value->choreDesc}}</td>
        <td>{{$value->choreFreq}}</td>
      </tr>

      @endforeach

      <th colspan="3">Weekly Chores</th>
      <!-- On cells (`td` or `th`) -->
      <tr>
        <th>Chore</th>
        <th>Chore Description</th>
        <th>Chore Frequency</th>
      </tr>

      @foreach ( $weeklychores as $key => $value )
        

      <tr>
        <td>{{$value->choreName}}</td>
        <td>{{$value->choreDesc}}</td>
        <td>{{$value->choreFreq}}</td>
      </tr>

      @endforeach


      <th colspan="3">Monthly Chores</th>
      <!-- On cells (`td` or `th`) -->
      <tr>
        <th>Chore</th>
        <th>Chore Description</th>
        <th>Chore Frequency</th>
      </tr>

      @foreach ( $monthlychores as $key => $value )
        

      <tr>
        <td>{{$value->choreName}}</td>
        <td>{{$value->choreDesc}}</td>
        <td>{{$value->choreFreq}}</td>
      </tr>

      @endforeach

      <th colspan="3">Yearly Chores</th>
      <!-- On cells (`td` or `th`) -->
      <tr>
        <th>Chore</th>
        <th>Chore Description</th>
        <th>Chore Frequency</th>
      </tr>

      @foreach ( $yearlychores as $key => $value )
        

      <tr>
        <td>{{$value->choreName}}</td>
        <td>{{$value->choreDesc}}</td>
        <td>{{$value->choreFreq}}</td>
      </tr>

      @endforeach

    </table>
    </div>
    </div>
</div>
</div>
</div>
@endsection
