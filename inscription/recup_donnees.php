<!doctype html>
<html lang="fr">  
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" 
              content="width=device-width,
    user-scalable=no, initial-scale=1.0,
    maximun-scale=1.0, minimum-scale=1.0">
       <meta http-equiv="X-UA-Compatible"
    content="ie=edge">
    <link rel="stylesheet" href="wing.css">
    <link rel="stylesheet" href="style.css">
       <title>Document</title>
</head>
<body>
<h1>Affichage des données issues du formulaire</h1>

<ul>
   <li><?php echo $_POST{'nom'}; ?></li>
   <li><?php echo $_POST{'Postnom'}; ?></li>
   <li><?php echo $_POST{'Prenom'}; ?></li>
   <li><?php echo $_POST{'Sexe'}; ?></li>
   <li><?php echo $_POST{'Residence Actuelle'}; ?></li>
   <li><?php echo $_POST{'tel'}; ?></li>
   <li><?php echo $_POST{'E-mail'}; ?></li>
   <li><?php echo $_POST{'Pays'}; ?></li>
   <li><?php echo $_POST{'Commentaire'}; ?></li>
   <li><?php echo $_POST{'date'}; ?></li>
   <li><?php echo $_POST{'Nationalité'}; ?></li>
</ul>

</body>
</html>
    