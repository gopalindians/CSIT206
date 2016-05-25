<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/semantic-ui/2.1.8/semantic.min.css">

</head>

<body>
<script src="https://cdn.jsdelivr.net/jquery/2.2.4/jquery.min.js"></script>
<div class="ui container">

    <div class="ui attached stackable menu">
        <div class="ui container">
            <a class="item" href="/">
                <i class="home icon"></i> Home
            </a>
            <!--<a class="item">
                <i class="grid layout icon"></i> Browse
            </a>
            <a class="item">
                <i class="mail icon"></i> Messages
            </a>-->

            <!--<div class="right item">
                <div class="ui input"><input type="text" placeholder="Search..."></div>
            </div>-->
            <?php if (isset($_SESSION['la'])): ?>
                <div class="ui simple dropdown right item">
                    <?= $_SESSION['la'] ?>
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <a class="item"><i class="edit icon"></i> Edit Profile</a>
                        <a href="/index.php?r=logout-student.php" class="item"><i
                                class="settings icon"></i> Logout</a>

                    </div>
                </div>
            <?php elseif (isset($_SESSION['u'])): ?>
                <?= $_SESSION['u'] ?>
                <div class="ui simple dropdown right item">
                    <?= $_SESSION['la'] ?>
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <a class="item"><i class="edit icon"></i> Edit Profile</a>
                        <a href="/index.php?r=logout-lecturer.php" class="item"><i
                                class="settings icon"></i> Logout</a>
                    </div>
                </div>

            <?php endif; ?>
        </div>
    </div>


   