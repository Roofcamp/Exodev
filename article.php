<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Creer votre profil</title>
</head>
<body>

    <main>


    </main>

    <h1>Votre article</h1>

    <form action="article-process.php" method="post" enctype="multipart/form-data">
        <div>
            Titre : <input type="text" name="titre"/>
        </div>
        <div>
             Article : <input type="text" name="text"/>
        </div>
        <div>
            <input type="file" name="article" id="">

        </div>
        <input type="submit" value="Envoyer"/>
        

    </form>

    
</body>
