<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="/../index.js" type="module"></script>
    <link rel="stylesheet" href="./css/popup.css">
    <title>Weinberger Péter | Ingatlanok</title>
</head>
<body>
    <main>
        <header>
            <button class="button" id="ujHirdetes">Új hírdetés</button>
        </header>
        <article></article>
        <section>
            <div class="overlay">
                <div class="popup">
                    <p id="bezar" class="close">&times;</p>
                    <h3>Új hírdetés elküldése</h3>
                    <div class="tartalom">
                        <select class="kategoria"></select>
                    </div>
                </div>
            </div>
        </section>
        <footer></footer>
    </main>
</body>
</html>