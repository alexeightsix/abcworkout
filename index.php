<?php require_once("functions.php");?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='style.css' rel='stylesheet' type='text/css'>
<title><?php echo abc_title();?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
<![endif]-->
</head>
<body <?php echo body_class();?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1162192603796850";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h1 class="title"> USE YOUR FULL NAME, <span class="text-red">THATS THE WORKOUT!</span></h1>
    </div>
    
    <?php if(!is_results()) : ?>
    <div class="col-md-12 text-center">
      <form action="#" id="name" name="name" method="POST">
        <input type="text" class="search-input" placeholder="Full Name">
        <input type="submit" class="button button-green" value="Start">
      </form>
    </div>
  <?php endif; ?>

  <?php echo abc_results();?>

      <?php if (is_results()) : ?>    
      <div class="col-md-12 text-center">
        <h1>REPEAT IF NESSASSARY!</h1>
      </div>
    <?php endif;?>

   <?php echo social_icons();?>
    <div class="col-md-12 text-center">
  
      <div class="no-print">
        <div class="fb-share-button" data-href="<?php echo $myUrl.$queryString;?>" data-layout="button"></div>
        <a href="javascript:window.print();"><i class="fa fa-print"></i></a> </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script> 
<script src="app.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script> 
</body>