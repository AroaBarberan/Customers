<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="css/app.css">
    <title>@yield('title', 'Customers')</title>
    <style>
        * {
            background-color: #F5F5F5;
        }

        table {
            margin: auto;
            margin-top: 200px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
            background-color: #e1e1e1;
        }

        tr, th {
            padding: 20px 50px;
            font-size: 16px;
        }

        th {
            background-color: #FF5722;
            color: #fff;
        }

        td {
            padding: 5px 50px;
            background-color: #fff;
        }

        .avatar {
            width: 100px;
            height: 100px;
        }

        .form {
            width: 70%;
            margin: 0 auto;
            margin-top: 150px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
        }

        fieldset, .form-group, label {
            background-color: #fff;

        }

        legend {
            padding: 5px;
            font-size: 36px;
            color: #fff;
            border-radius: 5px;
            background-color: #FF5722;
            text-align: center;
        }

        .form div {
            padding: 10px;
        }

        .back {
            margin: 70%;
        }

        span {
            color: #000;
            margin-left: 12px;
            background-color: #fff;
        }

        .icon {
            padding: 5px 10px;
        }

    </style>
</head>
<body>
<main>
    @yield('main')
</main>
</body>
</html>