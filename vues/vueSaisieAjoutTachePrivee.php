<html>
    <head>
        <title>ToDoList</title>
        <meta charset="UTF-8">
        <link rel="icon" href="css/images/icon.png"/>
        <link href="http://localhost/PHPToDoList/vues/css/prive.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div align="center">
            <h1>Ajout d'une nouvelle tâche privée</h1>

            <form class="form-signin" action="?action=validAjoutPrivee" method="post">
                <section>
                    <h2 id="id">Numéro de la tâche</h2>
                    <input name="idTacheP" class="form-control" id="boxId" required type="number" placeholder="Votre numéro"/>
                </section>
                <section>
                    <h2 id="titre">Titre de la tâche</h2>
                    <input name="titreTacheP" class="form-control" id="boxTitre" required type="text" placeholder="Votre titre"/>
                </section>
                <section>
                    <h2 id="desc">Description de la tâche</h2>
                    <input name="descriptionP" class="form-control" id="boxDesc" required type="text" placeholder="Votre description"/>
                </section>
                <section>
                    <h2 id="time">Durée de la tâche</h2>
                    <input name="dureeP" class="form-control" id="boxTime" required type="text" placeholder="Votre durée estimée"/>
                </section>
                <button type="submit">Valider</button>
            </form>

            <button id="retour">
                <a href="?action=validateAuth">Retour page précédente</a>
            </button>
        </div>
    </body>
</html>