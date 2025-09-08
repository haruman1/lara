<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Preview</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/prelineui.css'])
    <style>
        /* sedikit styling agar tampak seperti blog */
        body {
            padding: 32px;
            font-family: ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
        }

        .prose {
            max-width: 780px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="prose">
        {!! $content !!}
    </div>
</body>

</html>
