(->
    class NavbarCtrl
        constructor: (@$scope, $location, $sce, $urlRouter) ->
            @$scope.menu = [{
                'title': $sce.trustAsHtml('<i class="fa fa-dashboard"></i> Dashboard'),
                'link': "."
            }, {
                'title': $sce.trustAsHtml('<i class="fa fa-newspaper-o" aria-hidden="true"></i> Posts'),
                'link': "post",
            }, {
                'title': $sce.trustAsHtml('<i class="fa fa-file-image-o" aria-hidden="true"></i> Media'),
                'link': "media"
            }, {
                'title': $sce.trustAsHtml('<i class="fa fa-file-o" aria-hidden="true"></i> Pages'),
                'link': "page"
            }, {
                'title': $sce.trustAsHtml('<i class="fa fa-comments-o" aria-hidden="true"></i> Comments'),
                'link': "comment"
            }, {
                'title': $sce.trustAsHtml('<i class="fa fa-users" aria-hidden="true"></i> Users'),
                'link': "user"
            }, {
                'title': $sce.trustAsHtml('<i class="fa fa-sliders" aria-hidden="true"></i> Settings'),
                'link': "setting"
            }

            ]

            @$scope.isActive = (route) ->
                route is $location.path()

    angular
        .module("managepress")
        .controller('NavbarCtrl', NavbarCtrl)
)()
