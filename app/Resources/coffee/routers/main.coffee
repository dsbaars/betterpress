(->
    config = ($stateProvider) ->
        $stateProvider.state('index', {
            url: '/'
            templateUrl: '/bundles/dsbaarsmanage/index.html'
            controller: 'MainCtrl'
        }).state('post', {
            url: '/post'
            templateUrl: '/bundles/dsbaarsmanage/post/index.html'
            controller: 'PostCtrl'
        }).state('post_edit', {
            url: '/edit/{postId}'
            templateUrl: '/bundles/dsbaarsmanage/post/edit.html'
            controller: 'PostEditCtrl'
            controllerAs: 'vm'
        }).state('post.new', {
            url: 'new'
            templateUrl: '/bundles/dsbaarsmanage/post/new.html'
            controller: 'PostNewCtrl'
        }).state('comment', {
            url: '/comment'
            templateUrl: '/bundles/dsbaarsmanage/comment/index.html'
            controller: 'CommentCtrl'
        }).state('comment.edit', {
            url: '/comment/:id'
            templateUrl: '/bundles/dsbaarsmanage/comment/edit.html'
            controller: 'CommentEditCtrl'
        }).state('comment.new', {
            url: '/comment/new'
            templateUrl: '/bundles/dsbaarsmanage/comment/new.html'
            controller: 'CommentNewCtrl'
        }).state('user', {
            url: '/user'
            templateUrl: '/bundles/dsbaarsmanage/user/index.html'
            controller: 'UserCtrl'
        }).state('user.edit', {
            url: '/user/:id'
            templateUrl: '/bundles/dsbaarsmanage/user/edit.html'
            controller: 'UserEditCtrl'
        }).state('user.new', {
            url: '/user/new'
            templateUrl: '/bundles/dsbaarsmanage/user/new.html'
            controller: 'UserNewCtrl'
        }).state('setting', {
            url: '/setting'
            templateUrl: '/bundles/dsbaarsmanage/setting/index.html'
            controller: 'SettingCtrl'
        }).state('setting.edit', {
            url: '/setting/:id'
            templateUrl: '/bundles/dsbaarsmanage/setting/edit.html'
            controller: 'SettingEditCtrl'
        }).state('setting.new', {
            url: '/setting/new'
            templateUrl: '/bundles/dsbaarsmanage/setting/new.html'
            controller: 'SettingNewCtrl'
        }).state('media', {
            url: '/media'
            templateUrl: '/bundles/dsbaarsmanage/media/index.html'
            controller: 'MediaCtrl'
        }).state('media.edit', {
            url: '/media/:id'
            templateUrl: '/bundles/dsbaarsmanage/media/edit.html'
            controller: 'MediaEditCtrl'
        }).state('media.new', {
            url: '/media/new'
            templateUrl: '/bundles/dsbaarsmanage/media/new.html'
            controller: 'MediaNewCtrl'
        })


        return

    angular
        .module("managepress")
        .config(config)
)()
