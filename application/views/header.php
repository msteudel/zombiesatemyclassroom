<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Zombie Ate My Classroom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/css/bootstrap.min.css" rel="stylesheet"/>
    <style>
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>
    <link href="/css/bootstrap-responsive.min.css" rel="stylesheet"/>

    <!-- Any css files -->
    <?php if (!empty($css) && count($css) > 0): ?>
        <?php foreach ($css as $stylesheet): ?>
            <link href="<?php echo $stylesheet ?>" rel="stylesheet"/>
        <?php endforeach ?>
    <?php endif ?>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">



    <!-- Any global javascript variables scripts might need passed in via controller -->
    <?php if (!empty($javascript) && !empty($javascript['vars'])) : ?>
        <script type="text/javascript">
            <?php foreach ($javascript['vars'] as $var_name => $var_value): ?>
                <?php echo 'var ' . $var_name . ' = "' .  $var_value . '";' . PHP_EOL; ?>
            <?php endforeach ?>
        </script>
    <?php endif ?>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="/">Zombie Ate My Classroom</a>

            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Classroom <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/teacher/profile">Show Classrooms</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Attributes <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/attributes">List Attributes</a></li>
                            <li><a href="/attributes/create">Create New Attribute</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <?php if( !Auth::check() ): ?>
                    <form class="navbar-form pull-right" action="/authentication/login" method="post">
                        <?php echo Form::text('username', null, array( 'placeholder' => 'Type username' ) );?>
                        <?php echo Form::password( 'password', array( 'placeholder' => 'Type password' )); ?>
                        <button type="submit" class="btn">Sign in</button>
                    </form>
                <?php else: ?>
                    <ul class="nav pull-right">
                        <li><a href="/authentication/logout">Logout</a></li>
                    </ul>
                <?php endif ?>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">
    <?php if( isset( $messages ) ): ?>
        <?php echo $messages; ?>
    <?php endif ?>

    <div class="row">
        <h2><?php echo !empty($_SESSION['game_name']) ? $_SESSION['game_name'] : '' ?></h2>
    </div>
