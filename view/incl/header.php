<!DOCTYPE html>
<meta charset="utf-8">
<head>
  <title><?= $title[0] ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href=<?=$title[1]?>>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=$app->url->create("")?>">Me-sida</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="<?=$app->url->create("")?>">Home</a></li>
        <?php
        $all_url = ["", "about", "report", "remserver", "comment", "book"];

        for ($i=0; $i < count($all_url); $i++) {
            $cur_url = $app->url->create($all_url[$i]);
            echo '<li><a href=' . $cur_url . '>' . $all_url[$i] . "</a></li>";
        }
        $session = $di->get("session");
        $cur_user = $session->get("current_user");
        $login_url = $app->url->create("user/logout");
        $profile_url = $app->url->create("user/profile");
        $login_name = "Logout";
        if (!$cur_user) {
            $login_url = $app->url->create("user/login");
            $login_name = "Login";
        }
        ?>

    </ul>
    <?php if ($cur_user) : ?>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?=$profile_url?>"><?=$cur_user?></a></li>
        </ul>
    <?php endif; ?>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="<?=$login_url?>"><?=$login_name?></a></li>
    </ul>
    </div>
  </div>
</nav>
<div class="container-fluid text-center">
  <div class="row content">
