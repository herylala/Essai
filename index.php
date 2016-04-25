<!DOCTYPE html>
<html>


<head>

<meta charset="UTF-8" lang="fr"/>
<meta name="EXO NFA017"  content="Exercie au regroupement du nfa017 "/>
<title>EXO NFA017 A L IUT </title>

</head>

<body>

<h1> EXO NFA017 A L IUT </h1>

<span >
<h2> Liste des devoir a faire</h2>

<ul>

<li><a href="formulaire-post.php">lien vers le formulaire</a></li>

<li><a href="url-get.php"> lien vers url get</a></li>

<li><a href="session.php"> lien vers session</a></li>

<li><a href="cookies.php"> lien vers cookies</a></li>

<li><a href="bdd-insert.php"> lien vers bdd insert</a></li>

<li><a href="bdd-update.php"> lien vers bdd update</a></li>

<li><a href="url-get.php"> lien vers fichier</a></li>

</ul>
</span>

<span>
<h2>AFFICHAGE</h2>
<h2>Prenom saisi dans le formulaire</h2>
<ul> 
<li><?php if (isset($_POST['prenom'])){echo $_POST['prenom'];}?></li>
</ul>

<h2>Url get</h2>
<ul> 
<li><?php if (isset($_GET['text'])){echo $_GET['text'];}?></li>
</ul>


<h2>Session</h2>
<ul> 
<li><?php if (isset($_GET['koto'])){echo $_GET['koto'];}?></li>
</ul>



<h2> données en BDD via bdd-insert</h2>
<ul> 
<li><?php include("bdd-insert.php");?></li>
</ul>

<h2> BDD update</h2>
<p>regarde sur la ligne précédente si l'id augmente apres une visite sur bdd-update</p>


<h2> BDD update</h2>
<ul> 
<li></li>
</ul>
</body>
</html>