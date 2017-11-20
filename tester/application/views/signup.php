<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sistem Progress Camin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>tempup/css/style.css">
  <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/kat.ico">

  
</head>

<body>
  <div class="user">
    <header class="user__header">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
        <h1 class="user__title">Sistem Progress Camin</h1>
    </header>
    
    <form class="form">
        <div class="form__group">
            <input type="text" placeholder="Username" class="form__input" />
        </div>
        
        <div class="form__group">
            <input type="email" placeholder="Email" class="form__input" />
        </div>

         <div class="form__group">
            <input type="NRP" placeholder="NRP" class="form__input" />
        </div>

        <div class="form__group">
            <select id="status" name="status" class="form__input">
              <option value="admin">Calon Admin</option>
              <option value="camin">Admin</option>
            </select>
        </div>

        <div class="form__group">
            <input type="password" placeholder="Password" class="form__input" />
        </div>
        
        <button class="btn" type="button"><a href="<?php echo base_url()?>welcome/coba"/a>Register</button>
    </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="<?php echo base_url()?>tempup/js/index.js"></script>

</body>
</html>
