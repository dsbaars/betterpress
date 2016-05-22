(->
    config = (
        $interpolateProvider,
        $stateProvider,
        $urlRouterProvider,
        $locationProvider,
        $httpProvider
    ) ->
        $interpolateProvider.startSymbol('[[')
        $interpolateProvider.endSymbol(']]')

        $urlRouterProvider
            .otherwise('/')

        $locationProvider.html5Mode(true)

        return

    angular
        .module("managepress", [
            'ui.bootstrap'
            'ui.router'
            'ui.tinymce'
        ])
        .config(config)
)()
