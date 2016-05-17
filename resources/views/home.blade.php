@extends('layouts.app')

@section('content')

<style>
.item-done {
    text-decoration: line-through;
}
.item-normal {
    text-decoration: none;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   <h3>Welcome {{ Auth::user()->getFullUserName()}}</h3> 
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6 col-md-offset-5" ng-app="todoApp" ng-controller="todoController">
    <h1>TodoApp</h1>
    <div class="row">
        <div class="col-md-4">
            <input type='text' ng-model="todo.title">
            <button class="btn btn-primary btn-md"  ng-click="addTodo()">Add</button>
            <i ng-show="loading" class="fa fa-spinner fa-spin"></i>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <table class="table table-striped">
            <tr><th>Done</th><th>Task Name</th><th>Remove</th><th>Priority</th>
                <tr ng-repeat='todo in todos'>
                    <td><input type="checkbox" ng-true-value="1" ng-false-value="'0'" ng-model="todo.done" ng-change="updateTodo(todo)"></td>

                    <td ng-class="todo.done ? 'item-done':'item-normal'"><% todo.title %></td>

                    <td><button class="btn btn-danger btn-xs" ng-click="deleteTodo($index)">  <span class="glyphicon glyphicon-trash" ></span></button></td>
                    <td><input type="checkbox" ng-true-value="1" ng-false-value="'0'" ng-model="todo.priority" ng-change="updateTodo(todo)"></td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection


