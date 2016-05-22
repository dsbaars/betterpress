(->
    class UserCtrl
        constructor: (@$scope, $interval) ->
            @$scope.hello = "Hello world from demo controller"

    angular
        .module("managepress")
        .controller('UserCtrl', UserCtrl)
)()
