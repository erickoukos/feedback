<?php include('./config/connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project FeedBack</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-2">
        <div class="container">
            <a class = "navbar-brand" href="./index.php">FeedBack Limited</a>
            <button class="navbar-toggler" type = "button" data-bs-toggle="collapse" data-bs-target = "#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle Navigation">
                <span class = "navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id = "navbarNav"></div>
            <ul class = "navbar-nav ms-auto">
                <li class = "nav-item"><a class = "nav-link" href = "./index.php"> Add Feedback</a></li>
                <li class = "nav-item"><a class = "nav-link" href = "./feedback.php"> Past Feedbacks</a></li>
                <li class = "nav-item"><a class = "nav-link" href = "./about.php"> About Us</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="container d-flex flex-column align-items-center">

        
