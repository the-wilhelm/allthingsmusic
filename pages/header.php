<!DOCTYPE html>
<html>
  <head>
    <title>All Things Music, LLC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <div class="wrapper">
          <header>
                <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                                <a class="navbar-brand" href="index.php?q=home"><img src="images/logo.png" alt="All Things Music, LLC" title="All Things Music, LLC" /></a>
                        </div>
                
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li <?php echo (($page='about') ? 'class="active"' : '' ); ?>><a href="index.php?q=about"><i class="glyphicon glyphicon-headphones"></i>About</a></li>
                                <li <?php echo (($page='bio') ? 'class="active"' : '' ); ?>><a href="index.php?q=bio"><i class="glyphicon glyphicon-user"></i>Bio</a></li>
                                <li <?php echo (($page='tuition') ? 'class="active"' : '' ); ?>><a href="index.php?q=tuition"><i class="glyphicon glyphicon-usd"></i>Tuition</a></li>
                                <li <?php echo (($page='contact') ? 'class="active"' : '' ); ?>><a href="index.php?q=about"><i class="glyphicon glyphicon-earphone"></i>Contact</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>
                </nav>    
          </header>
          <div class="content">