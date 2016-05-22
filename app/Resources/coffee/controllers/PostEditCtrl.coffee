(->
    class PostEditCtrl
        constructor: (@$scope) ->
            vm = this

            vm.tinymceModel = 'Hello world'

            vm.tinymceOptions = {
                menubar: false
                plugins: 'link image code autosave wordcount'
                height : 300
               # toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | code'
            }

            return

    angular
        .module("managepress")
        .controller('PostEditCtrl', PostEditCtrl)
)()
