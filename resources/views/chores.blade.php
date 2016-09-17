@extends('layouts.app')

@section('content')

<style>
  .chores{
    width:100%;

  }

  .rounded-button{
    border-radius: 5px;
  }

</style>



 
<div class="container pull-left">
  <div class="table table-responsive">
          <div class="chores">
            <div class="panel panel-default">
                <div class="panel-heading table-style">Chore Overview <button class="pull-right rounded-button" type="button">Create Chore</button></a></div>
                <!-- <a href="{{ url('/createchores') }}"> -->
                <div class="panel-body">
                <table class="table table-hover">
      
      
      <!-- On cells (`td` or `th`) -->
      <tr>
        <th>Chore</th>
        <th>Chore Description</th>
        <th>Chore Frequency</th>
      </tr>
      <th colspan="3">Daily Chores</th>
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
@endsection
