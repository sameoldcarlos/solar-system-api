<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Token - Solar System API</title>
    <style>
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0.25rem;
        }
        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1.25rem;
        }

        .card-title {
            margin-bottom: 0.75rem;
        }
        .align-content-center {
            align-content: center !important;
        }
        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, 0.03);
            border-bottom: 1px solid rgba(0, 0, 0, 0.125);
        }
        .alert-primary {
            color: #1b4b72;
            background-color: #d6e9f8;
            border-color: #c6e0f5;
        }
    </style>
</head>
<body>
<div class="card align-content-center">
    <div class="card-header align-content-center">
        <h2 class="card-title"> Hello again {{$user->name}}... </h2>
    </div>
    <div class="card-body">
        <p class="card-text">That's your token to access the Solar System API:</p>
        <p class="alert-primary">
            {{$user->api_token}}
        </p>
        <p class="card-text">It's highly recommended that you copy this key and save somewhere. That is the only time you will be able to see it!</p>
        <p class="card-text">Best regards,</p>
        <p>Carlos</p>
    </div>
</div>
</body>
</html>

