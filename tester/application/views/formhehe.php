<!DOCTYPE HTML>
<html>
<head>
<title>Sistem Progress Camin</title>
<!-- Custom Theme files -->
<link href="<?php echo base_url()?>templog/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
<script>var __links = document.querySelectorAll('a');function __linkClick(e) { parent.window.postMessage(this.href, '*');} ;for (var i = 0, l = __links.length; i < l; i++) {if ( __links[i].getAttribute('data-t') == '_blank' ) { __links[i].addEventListener('click', __linkClick, false);}}</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>$(document).ready(function(c) {
  $('.sinup-close').on('click', function(c){
    $('.setting').fadeOut('slow', function(c){
        $('.setting').remove();
    });
  });   
});
</script>
<!---Google Analytics Designmaz.net-->
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-35751449-15', 'auto');ga('send', 'pageview');</script>
  <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/kat.ico">
</head>
<body>
<!--login start here-->
<h1>Sistem Progress Camin</h1>
<div class="login">
  <h2>Login</h2>
 <!--  <a href="<?php echo base_url()?>welcome/index">Login</a> -->
  <form action="<?php echo base_url()?>welcome/coba" method="post">
    <input type="text" class="user active" value="User name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User name';}"/>
    <input type="password" class="lock active" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"/>
    <div class="forgot">
     <div class="login-check">
       <label class="checkbox"><input type="checkbox" name="checkbox" checked><i> </i> Remember Me</label>

      </div>
      <div class="login-para">
      <p><a href="#"> Forgot Password? </a></p>
     </div>
    <div class="clear"> </div>
  </div>
    <div class="login-bwn">
     <input type="submit"  value="Log in"/>
  </div>
  </form>
  <!-- <div class="forgot">
     <div class="login-check">
       <label class="checkbox"><input type="checkbox" name="checkbox" checked><i> </i> Remember Me</label>

      </div>
      <div class="login-para">
      <p><a href="#"> Forgot Password? </a></p>
     </div>
    <div class="clear"> </div>
  </div> -->
  <!-- <div class="login-bwn">
     <input type="submit" value="Log in" href="application/views/test.php"/>
  </div> -->
  <div class="login-bottom">
<!--     <h3>Login</h3>
    <p>With your social media account</p>
   <div class="social-icons"> -->
    <div class="button">
<!--       <a class="tw" href="#"> <i class="anc-tw"> </i> <span>Twitter</span>
      <div class="clear"> </div></a>
      <a class="fa" href="#"> <i class="anc-fa"> </i> <span>Log In</span>
      <div class="clear"> </div></a>
      <a class="go" href="#"><i class="anc-go"> </i><span>Google+</span>
      <div class="clear"> </div></a> -->
        <div class="clear"> </div>
    </div>
    <h4>Don,t have an Account? <!-- <a href="#"> Register Now!</a> --></h4>
    <div class="reg-bwn"><a href="<?php echo base_url()?>welcome/regis">REGISTER</a></div>
  </div>
  </div>
</div>
<div style="text-align:center; margin-top:10px;">
        <ins class="adsbygoogle"
style="display:block"
data-ad-client="ca-pub-8011246932591811"
data-ad-slot="9844648019"
data-ad-format="auto"></ins> <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        </div>

<!-- <div class="copyright">
  <p>Template by <a href="https://www.designmaz.net/" target="_blank"> DesignMaz </a></p>
</div> -->
<!--login end here-->
</body>
</html>