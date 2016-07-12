<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Puzzle Game</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1738646006349818',
      xfbml      : true,
      version    : 'v2.6'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

    <h2>Number Puzzle</h2>



<p>Moves: <span id="moves">0</span> - Use arrow keys to move pieces</p>

<div class="canvas"></div>

<div class="win">
    <p>You win !</p>
    <a class="btn" href="#">New Game</a>
</div>

<p>
    <a class="btn" href="#">New Game</a>
</p>
    
        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
