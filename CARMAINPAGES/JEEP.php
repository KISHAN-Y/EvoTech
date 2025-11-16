<?php include('./CARMAINPAGES/header.php');?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - animated grid card to fullscreen</title>
  <link rel="stylesheet" href="./ALL CAR/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<!-- partial:index.partial.html -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:200" rel="stylesheet">

<div class="container" ng-class="{'no-scroll': selected.length}" ng-app="app" ng-controller="mainCtrl">
	<div class="page">
		<div class="back-container">
			<img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/circled-left.png" alt="circled-left" class="back" />
			<span class="back-text">Back</span>
		</div>
		<div class="grid">
			<div class="grid-item" ng-repeat="item in boxes">
				<box class="box" item="item" on-select="selectBox" ng-class="{'selected': selected[0].item.name == item.name}"></box>
			</div>
		</div>
	</div>
	
	<div class="fullscreen-background top-up" ng-show="selected.length" ng-style="{'background-image': 'url(' + selected[0].item.image + ')'}"></div>
	<div class="scroller" ng-show="selected.length">
		<a class="close-button" ng-click="clearSelection()">
			<div class="close-container">
				<i style="font-size:24px" class="fa">&#xf00d;</i>&ensp;
				<span class="back-text2">Close</span>
			</div>
		</a>
		<h1>{{selected[0].item.name}}</h1>
		<div big-box ng-repeat="item in selected" class="box on-top" position="item.position" selected="item.item">
			<img ng-src="{{item.item.image}}" alt="" />
			<div class="content">
				<h2>Lorem ipsum dolor</h2>
				<p>{{selected[0].item.description}}</p>
			</div>
		</div>
		
	</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular-animate.min.js"></script>

<script>var app = angular.module('app', ['ngAnimate'])

app.controller('mainCtrl', function($scope) {
	$scope.boxes = [{
		name: 'COPASS[2017-2021]',
		image: 'COMPASS.JPG', 
		title:'JEEP COPASS', 
		description:"This is a description of service here and now let see if it works"
	},{
		name: 'MERIDIAN',
		image: 'MERIDIAN.JPG', 
		title:'JEEP MERIDIAN', 
		description:"This is a description of service here and now let see if it works"
	} ];

	$scope.selected = [];
	$scope.selectBox = function(item, position) {
		$scope.selected = [{
			item: item,
			position: position
		}];
		$scope.$apply();
	}
	$scope.clearSelection = function() {
		$scope.selected = [];
	}
})

app.directive('box', function() {
	return {
		restrict: 'E',
		scope: {},
		bindToController: {
			onSelect: "=",
			item: "="
		},
		controllerAs: 'box',
		controller: function() {
			var box = this;

			box.goFullscreen = function(e) {
				box.onSelect(box.item, e.target.getBoundingClientRect())
			}
		},
		link: function(scope, element) {
			//this to change text in the box onclick (must add this)
			element.bind('click', scope.box.goFullscreen)
			element.css({
				'background-image': 'url(' + scope.box.item.image + ')'
			})
			element.html('<div class="box-overlay"><h2>' + scope.box.item.title + '</h2><button>Learn More</button></div>')
		}
	}
})

app.directive('bigBox', function($timeout) {
	return {
		restrict: 'AE',
		scope: {},
		bindToController: {
			position: "=",
			selected: "=",
			onSelect: "="
		},
		controllerAs: 'box',
		controller: function() {
			var box = this;
		},
		link: function(scope, element) {
			var css = {}
			for (var key in scope.box.position) {
				css[key] = scope.box.position[key] + 'px';
			}
			
			element.css(css);

			$timeout(function() {
				element.css({
					top: '50%',
					left: '10%'
				})
				//element.addClass('image-out');
			}, 200)
			$timeout(function() {
				element.addClass('image-out');
			}, 600)

			$timeout(function() {
				element.css({
					width: '80%',
					height: '60%'
				})
			}, 500)
			
			$timeout(function(){
				element.addClass('show');
			}, 1000)
		}
	}
})</script>
<!-- partial -->
  
</body>
</html>
