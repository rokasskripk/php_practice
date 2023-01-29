<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="PHP forma">
        <title>Forma</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <div class="container">
                <img src="popup-logo.png" alt="logo">
            </div>
        </header>
        <main>
            <div class="container">
            <form id="contact" action="index.php" method="post">
                <h3>Bendraukime</h3>
                <h4>Susisiekite su mumis šiandien!</h4>
                <p><input type="text" name="vardas" placeholder="Jūsų vardas" required autofocus></p>
                <p><input type="email" name="email" placeholder="Jūsų el. pašto adresas" required></p>
                <p><textarea placeholder="Jūsų žinutė..." name="message" required></textarea></p>
                <p><button name="submit" type="submit" id="contact-submit">Siųsti</button></p>
            </form> 
            </div>
        </main>
        <footer>
            <div class="container">
                <p class="copyright">&copy; 2018. Visos teisės saugomos.</p>
            </div>
        </footer>
    </body>
</html>