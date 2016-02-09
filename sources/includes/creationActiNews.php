<!-- Corps du cadre création de news -->
<span id="cadreCreationNews" class="whiteText">
    <form class="cadreVert" action="../PHP/creationNews.php" methode="post">
        <div>
            <h2>Creation de news</h2>
            <label for="titre">*Titre :</label>
            <br>
            <input name="titre" type="text" placeholder="Titre de la news"/>
        </div>
        <div>
            <label for="texte">*Texte de la news :</label>
            <br>
            <textarea name="texte" placeholder="Texte de la news"></textarea>
        </div>
        <div>
            <label for="image">Lien d\'une image :</label>
            <input name="image" type="text" placeholder="http://static.wamiz.fr/images/animaux/chiens/large/chien-courant-de-posavatz.jpg"/>
            <br>
            <br>
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
            <label for="titre">*Titre :</label>
            <br>
            <input type="text" placeholder="Titre de l'activité" name="titre" />
        </div>
        <div>
            <label for="texte">*Texte de l'activité :</label>
            <br>
            <textarea placeholder="Texte de l'activité" name="texte" ></textarea>
        </div>
        <div>
            <label for="date">*Date de l'évenement :</label>
            <br>
            <input type="text" placeholder="18 février 2016" name="date" /><br><br>
        </div>
        <p>* Obligatoire &nbsp;</p>
        <input class="blackText" type="submit" name="Valider" />
    </form>
</span>