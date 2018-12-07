<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Simulation du modeMCU</h1>
    <p>Ce formulaire permet de tester l'envoi d'une température vers le serveur comme le ferait le NodeMCU.</p>
<form method="post" action="store_temp.php">
  Temperature:  
    <input type="text" name="temperature">
    <input type="submit" value="Envoyer">
    <br>
Exemple: {"temperature":"20","humidite":"20"}
</form>

  </body>
</html>
