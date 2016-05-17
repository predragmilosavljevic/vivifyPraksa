 

var app = angular.module('todoApp', ['ngResource'], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});

app.controller('todoController', function($scope, Todo) {

	$scope.todos = [];
	$scope.loading = false;

	$scope.init = function() {
		$scope.loading = true;
		Todo.query(function(data) {
			$scope.todos = data;
			$scope.loading = false;
		});
	}

	$scope.addTodo = function() {
		$scope.loading = true;

		Todo.save({
			title: $scope.todo.title,
			done: $scope.todo.done
		}, function(data, status, headers, config) {
			$scope.todos.push(data);
			$scope.todo = '';
			$scope.loading = false;
		});
	};

	$scope.updateTodo = function(todo) {
		$scope.loading = true;

		Todo.update(todo, function (data) {
			todo = data;
			$scope.loading = false;
		});
	};

	$scope.deleteTodo = function(index) {
		$scope.loading = true;

		var todo = $scope.todos[index];
		Todo.remove(todo, function (data) {
			$scope.todos.splice(index, 1);
			todo = data;
			$scope.loading = false;
		});
	};

	$scope.init();
});


