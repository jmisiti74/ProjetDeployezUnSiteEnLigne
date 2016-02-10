<!-- Corps du cadre création de news -->
<span id="cadreCreationNews" class="whiteText">
    <form class="cadreVert" action="../PHP/creationNews.php" method="post">
        <div>
            <h2>Creation de news</h2>
            <label for="titreNews">*Titre :</label>
            <br>
            <input type="text" placeholder="Titre de la news" id="titreNews" name="titre" />
        </div>
        <div>
            <label for="texteNews">*Texte de la news :</label>
            <br>
            <textarea placeholder="Texte de la news" id="texteNews" name="texte" ></textarea>
        </div>
        <div>
            <label for="imageNews">Lien d'une image :</label>
            <br>
            <input type="text" id="imageNews" placeholder="http://static.wamiz.fr/images/animaux/chiens/large/chien-courant-de-posavatz.jpg" name="image" /><br><br>
        </div>
        <p>* Obligatoire &nbsp;</p>
        <input class="blackText" type="submit" name="Valider" />
    </form>
</span>

<!-- Corps du cadre création d'activités -->
<span id="cadreCreationActivite" class="whiteText">
    <form class="cadreVert" action="../PHP/creationActivite.php" method="post">
        <div>
            <h2>Creation d'activités</h2>
            <label for="titreActivit">*Titre :</label>
            <br>
            <input type="text" placeholder="Titre de l'activité" id="titreActivit" name="titre" />
        </div>
        <div>
            <label for="texteActivit">*Texte de l'activité :</label>
            <br>
            <textarea placeholder="Texte de l'activité" id="texteActivit" name="texte" ></textarea>
        </div>
        <div>
            <label for="dateActivit">*Date de l'évenement :</label>
            <br>
            <input type="text" id="dateActivit" placeholder="18 février 2016 à 18H30" name="date" /><br><br>
        </div>
        <p>* Obligatoire &nbsp;</p>
        <input class="blackText" type="submit" name="Valider" />
    </form>
</span>