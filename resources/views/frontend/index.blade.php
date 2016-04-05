<!DOCTYPE html>
<html>
<head>
    <base href="http://localhost/naturedev/public/">
    <title>NatureDev.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{ Html::style('css/styles.css') }}
    <!-- Load libraries -->
    <!-- IE required polyfills, in this exact order -->
    {{ Html::script('js/es6-shim/es6-shim.min.js') }}
    {{ Html::script('js/angular2/es6/dev/src/testing/shims_for_IE.js') }}
    {{ Html::script('js/angular2/bundles/angular2-polyfills.js') }}
    {{ Html::script('js/systemjs/dist/system.js') }}
    {{ Html::script('js/rxjs/bundles/Rx.js') }}
    {{ Html::script('js/angular2/bundles/angular2.dev.js') }}
    {{ Html::script('js/angular2/bundles/router.dev.js') }}
    {{ Html::script('js/angular2/bundles/http.dev.js') }}

    {{ Html::script('js/d3.min.js') }}
    {{ Html::script('js/c3.min.js') }}
    {{ Html::script('js/scripts.js') }}

    <script>
        System.config({
            "defaultJSExtensions": true,
            packages: {
                app: {
                    format: 'register',
                    defaultExtension: 'js'
                }
            }
        });

        System.import('js/boot')
                .then(null, console.error.bind(console));
    </script>
</head>
<body>
<div class="container">
    <div class="content">
        <naturedev-app>Loading...</naturedev-app>
    </div>
</div>
{{ Html::script('js/scripts.js') }}
</body>
</html>
