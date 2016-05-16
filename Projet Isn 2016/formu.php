<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
<link rel="stylesheet" href="style.css" />
        <title>Ton cv</title>
    </head>

    <body>
<p>Rempli les informations pour qu'on puisse faire ton cv</p>

<form method="post" action="cible.php">





 <p> <label>Votre prenom et nom </label> : <input type="text" name="pseudo" id="pseudo"/> </p>

<p><label for="date">date de naissance :</label>
<input type="date" name="date" id="date"></code> </p>
<p>


 <p> <label>ton adresse mail </label> : <input type="text" name="email" id="email"/> </p>

<p> <label>Votre adresse postale </label> : <input type="text" name="adresse" id="adresse"/> </p>


<label for="tel">ton numero de telephone :</label>
<input type="tel" name="tel" id="tel" ></code></p>
<p>
. </p>
 <p>
. </p> 

<p> <label for="interet">
       Donne nous quelques uns de tes centres d'interets 
       </label>
       <br />
       
       <textarea name="interet" id="interet" rows="10" cols="50">
      CONSEIL: Reviens a la ligne apres chaque centre d'interet.
       </textarea> </p>

<p> <label for="comp">
       Donne nous quelques une de tes competences et aptitudes.
       </label>
       <br />
       
       <textarea name="comp" id="comp" rows="10" cols="50">
      CONSEIL: Reviens a la ligne apres chaque compétence
       </textarea> </p>


<p>
. </p>
 <p>
. </p>               
<p>
. </p>

<p>
       <label for="exper">Choisi un domaine d'experience</label><br />
       <select name="exper" id="exper">
           <option value="sport">sport</option>
           <option value="audiovisuel">audiovisuel</option>
           <option value="professionelle">professionelle</option>
           <option value="photo">photo</option>
           <option value="musique">musique</option>
           <option value="informatique">informatique</option>
           <option value="social">social</option> 
           <option value="autres">autres</option>
           <option value="divers">divers</option>
         
       </select>
   </p>


<p> <label for="expe">
       Decris tes experiences
       </label>
       <br />
       
       <textarea name="expe" id="expe" rows="10" cols="50">
      CONSEIL: Fais des phrases simple du style: "delegue en classe de 3em" et non pas "en classe de 3em, j'ai etait delegue ect.."
       </textarea> </p>


<p>
. </p>
 <p>
. </p>               




<p>
       <label for="experr">Choisi un autre domaine d'experience</label><br />
       <select name="experr" id="experr">
           <option value="sport">sport</option>
           <option value="audiovisuel">audiovisuel</option>
           <option value="professionelle">professionelle</option>
           <option value="photo">photo</option>
           <option value="musique">musique</option>
           <option value="informatique">informatique</option>
           <option value="social">social</option>  
           <option value="autres">autres</option>
           <option value="divers">divers</option>
         
       </select>
   </p>


<p> <label for="expee">
       Decris tes experiences dans ce domaine
       </label>
       <br />
       
       <textarea name="expee" id="expee" rows="10" cols="50">
      CONSEIL: Ecris tes experiences sous forme de listes! 
       </textarea> </p>




<form action="cible.php" method="post" enctype="multipart/form-data">
    <p>la photo de profil de votre CV:<br />
                <input type="file" name="monfichier" /><br />
<p>
. </p>
 <p>
. </p>               
<p>
. </p>

<input type="submit" value="Envoyer le formulaire" />
</p>



















</form>


    
    </body>
</html>