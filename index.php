<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Mon Dec 11 2017 14:10:06 GMT+0000 (UTC)  -->
<html data-wf-page="5a258b4eb1a83e0001a68c80" data-wf-site="598eb015fda8db00018389b1">

<head>
  <meta charset="utf-8">
  <title>Feature</title>
  <meta content="Feature" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/123-c3b852.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: ["Open Sans:400"]
      }
    });

  </script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">
    ! function(o, c) {
      var n = c.documentElement,
        t = " w-mod-";
      n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }(window, document);

  </script>
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
</head>

<body class="body-2">


  <?php
  require "facebook.php";
$fb = new Facebook\Facebook([
  'app_id' => '2392673924292017',
  'app_secret' => '7769d387a4e40b5b62bcfe343b5a72f9',
  'default_graph_version' => 'v2.11',
  ]);

try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get('/me?fields=id,name', '{access-token}');
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$user = $response->getGraphUser();

echo 'Name: ' . $user['name'];
  echo 'Id: ' . $user['id'];
// OR
// echo 'Name: ' . $user->getName();
  ?>
    
    <button onclick="fbLogin()"> Login with Facebook </button>


    <form>
      <label>Имя</label>
      <input type="text">
      <label>Email</label>
      <input type="text">
      <label>Телефон</label>
      <input type="text">
      <input type="submit">
    </form>
  
<script src="//static-login.sendpulse.com/apps/fc3/build/loader.js" sp-form-id="db946c3ba9cfe0c815a839862dd2eddcf861a2099ee51fed640ce4010b778fed"></script>
</body>

</html>
