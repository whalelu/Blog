<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Space Shooter</title>
    <link rel="shortcut icon" href="/SpaceShooter/TemplateData/favicon.ico">
    <link rel="stylesheet" href="/SpaceShooter/TemplateData/style.css">
    <script src="/SpaceShooter/TemplateData/UnityProgress.js"></script>  
    <script src="/SpaceShooter/Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "/SpaceShooter/Build/CompleteBulids.json", {onProgress: UnityProgress});
    </script>
  </head>
  <body>
    <div class="webgl-content">
      <div id="gameContainer" style="width: 960px; height: 600px"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
        <div class="title">Space Shooter</div>
      </div>
    </div>
  </body>
</html>