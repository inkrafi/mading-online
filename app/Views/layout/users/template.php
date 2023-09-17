<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style-user.css">

    <title><?= $title; ?></title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: ghostwhite;
            overflow-x: hidden;
        }

        .btn-article {
            background-color: #00A388;
        }

        .btn-article:hover {
            background-color: #009388;
        }

        section {
            padding: 50px 0 100px;
        }

        #hero-section {
            background: url('https://images.unsplash.com/photo-1617721926586-4eecce739745?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') no-repeat;
            background-size: cover;
            height: 500px;
            position: relative;
            padding: 100px;
            margin-top: -60px;
        }

        #hero-section::after {
            content: '';
            display: block;
            height: 100%;
            width: 100%;
            background-color: rgba(50, 100, 130, 0.6);
            background-size: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 0;
        }

        #hero-section .row {
            position: absolute;
            z-index: 1;
        }

        #main-section {
            background-color: #00A31130;
        }

        footer {
            padding: 1rem 0;
            text-align: center;
            font-size: 14px;
            background-color: #00A388;
        }
        footer p {
            margin-top: 20px;
            color: white;
        }
    </style>

</head>

<body>

    <?= $this->include('layout/users/navbar'); ?>

    <?= $this->renderSection('content'); ?>

    <?= $this->include('layout/users/footer'); ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>