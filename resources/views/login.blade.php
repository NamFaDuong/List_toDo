<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in</title>
    <link rel="icon" href="/img/To-Do_icon.png">
    <style>
      @import url(https://fonts.googleapis.com/css?family=Anonymous+Pro);

    /* Global */
    html{
      min-height: 100vh;
      overflow: hidden;
    }
    body{
      height: calc(100vh - 8em);
      padding: 4em;
      color: rgba(7, 7, 7, 0.75);
      font-family: 'Anonymous Pro', monospace;  
      background-color: rgb(255, 255, 255);  
    }
    .line-1{
        position: relative;
        top: 5 0%;  
        width: 24em;
        margin: 0 auto;
        border-right: 2px solid rgba(255,255,255,.75);
        font-size: 180%;
        text-align: center;
        white-space: nowrap;
        overflow: hidden;
        transform: translateY(-50%);    
    }

    /* Animation */
    .anim-typewriter{
      animation: typewriter 4s steps(44) 1s 1 normal both,
                blinkTextCursor 500ms steps(44) infinite normal;
    }
    @keyframes typewriter{
      from{width: 0;}
      to{width: 24em;}
    }
    @keyframes blinkTextCursor{
      from{border-right-color: rgba(255,255,255,.75);}
      to{border-right-color: transparent;}
    }
    </style>
</head>
<body>
    <div class="container">
        <center>
          <p class="line-1 anim-typewriter">Welcome back ! This is note Application</p>
        </center>
    </div>
</body>
</html>