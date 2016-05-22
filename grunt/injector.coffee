module.exports =
      options:
          ignorePath: [ 'web/' ]
      app:
          files:
              'app/Resources/views/manage.html.twig': [
                'bower.json'
                'web/css/*.css'
                'web/ng/**/*.js'
              ]
