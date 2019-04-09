<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Mohamed Amin Hadrich">
    <meta name="description" content="this is a advance cms system developed with udemy">
    <link rel="shortcut icon" href="../images/logo.ico" type="image/x-icon">
    <title>The AminPress CMS</title>
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<?php require_once '../includes/nav.php' ?>
<header>
    <div class="container-fluid text-center">
        <h1>The CMS Blog</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>
    <div class="row m-0">
        <div class="col-2 m-auto text-center"><i onclick="showNavbarSub()" class="fas fa-angle-double-down fa-3x"></i>
        </div>
    </div>
</header>
<div class="container-fluid">
    <div class="row">
        <?php require_once 'includes/blog-nav.php' ?>
        <div class="col-8">
            <div class="post">
                <h1 class="post-title">The first post</h1>
                <div class="meta small"><a href="#">06-05-2019</a> | <a href="#">Tachnology</a> | <a href="#">Mohamed
                        Amin HADRICH</a></div>
                <img class="img-fluid mb-3 mt-3" src="../images/posts%20images/1.jpg" alt="tech">
                <p class="lead text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate
                    deleniti laborum
                    sapiente sint! Amet iste provident sint sit soluta! Aliquam assumenda beatae dolor, facere hic optio
                    quaerat recusandae reiciendis sint Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                    consequatur, debitis deserunt dolor doloremque dolores earum eveniet expedita fugit harum libero,
                    nisi officiis perspiciatis quam quasi quis ratione soluta veniam Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Cum et in ipsa vero! Cupiditate dignissimos molestiae pariatur quod
                    quos! Alias enim laudantium maxime quos tenetur totam. Enim fugiat itaque magni.</p>
                <p class="lead text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate
                    deleniti laborum
                    sapiente sint! Amet iste provident sint sit soluta! Aliquam assumenda beatae dolor, facere hic optio
                    quaerat recusandae reiciendis sint Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                    consequatur, debitis deserunt dolor doloremque dolores earum eveniet expedita fugit harum libero,
                    nisi officiis perspiciatis quam quasi quis ratione soluta veniam Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Cum et in ipsa vero! Cupiditate dignissimos molestiae pariatur quod
                    quos! Alias enim laudantium maxime quos tenetur totam. Enim fugiat itaque magni.</p>
                <p class="lead text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate
                    deleniti laborum
                    sapiente sint! Amet iste provident sint sit soluta! Aliquam assumenda beatae dolor, facere hic optio
                    quaerat recusandae reiciendis sint Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                    consequatur, debitis deserunt dolor doloremque dolores earum eveniet expedita fugit harum libero,
                    nisi officiis perspiciatis quam quasi quis ratione soluta veniam Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Cum et in ipsa vero! Cupiditate dignissimos molestiae pariatur quod
                    quos! Alias enim laudantium maxime quos tenetur totam. Enim fugiat itaque magni.</p>
                <a href="label.php" class="badge badge-secondary">What is Technology ?</a>
                <a href="label.php" class="badge badge-secondary">How Technology works?</a>
                <a href="label.php" class="badge badge-secondary">Intro to the Technology</a>
            </div>
        </div>
        <?php require_once 'includes/blog-sidebar.php' ?>
    </div>
</div>
<?php require_once '../includes/footer.php' ?>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>