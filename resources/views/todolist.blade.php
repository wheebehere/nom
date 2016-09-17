@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
         <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading center">To Do List</div>

                <div class="panel-body">
        
                  <label>
                    Task Name
                    <input id="new-task-input" type="text" placeholder="Pick up milk">
                  </label>
                  <button type="button" id="add-task-button">
                    Add Task
                  </button>
                </div>
            </div>
        </div>
    </div>
</div>
                  </form>
                    <ul id="todolist-container"></ul>
      
                    <script type="text/template" id="list-item-template">
                      <li class="task">
                        <label>
                          <input class="checkbox" type="checkbox">
                          <span class="task-name"><!-- TASK_NAME --></span>
                        </label>
                      </li>
                    </script>

                    <script src="todolist.js"></script>

@endsection
