<!DOCTYPE html>
<html>
<head>
    <title>NatureDev.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.0/es6-shim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/systemjs/0.19.16/system-polyfills.js"></script>
    <script src="https://npmcdn.com/angular2/es6/dev/src/testing/shims_for_IE.js"></script>
    <script src="https://code.angularjs.org/tools/system.js"></script>
    <script src="https://code.angularjs.org/tools/typescript.js"></script>
    <script src="https://code.angularjs.org/2.0.0-beta.12/angular2-polyfills.js"></script>
    <script src="https://code.angularjs.org/2.0.0-beta.12/Rx.js"></script>
    <script src="https://code.angularjs.org/2.0.0-beta.12/angular2.dev.js"></script>
    <script>
        System.config({
            transpiler: 'typescript',
            typescriptOptions: {emitDecoratorMetadata: true},
            packages: {'app': {defaultExtension: 'ts'}}
        });
        System.import('js/backend')
                .then(null, console.error.bind(console));
    </script>
</head>
<body>
<div class="container">
    <div class="content">
        <my-app>Loading...</my-app>
    </div>
</div>
</body>
</html>
