<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        window.config = {
            baseUrl: "{{ config('app.url') }}",
        };
    </script>
</head>

<body>
    <div id="app"></div>
</body>

</html>
