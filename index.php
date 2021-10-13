<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="main">
        <header>
            <nav id="navbar">
                <ul>
                    <i class="fas fa-bars" id="menuToggle"></i>
                    <li><a href="index.html">Home</a></li>
                    <li> <a href="#">Articoli</a></li>
                    <li><a href="#">Contatti</a></li>
                </ul>
            </nav>
        </header>
        <div id="flexBox">
            <div class="flexChild" id="flexFirstChild">
            <img src='inset.jpg' alt='Imagen'>
            </div>
            
            <div id="container" class="flexChild">
                <div class="flexChild" id='article'>
                    <article>
                    <h2>Article title</h2>
                    <div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo iste rem quasi laudantium aspernatur perferendis, cum exercitationem sed eos, voluptatem dolorum beatae quam explicabo ducimus facere enim sunt maxime modi.</div>
                    </article>
                    <div id="readMore">Leggi <i class="fas fa-arrow-circle-right"></i></div>
                </div>
                <div>
                    <form method="get" action='dati.php'>
                        <div>
                            <input type ='text' name ='nome' placeholder='inserisci il tuo nome'>
                        </div>
                        <div>
                            <input type='text' name ='cognome' placeholder='cognome'>
                        </div>
                        <div>
                            <input type='email' name='email' placeholder='inserisci email'>
                        </div>
                        <div >
                        Acconsento 
                        <input type="checkbox" name="consenso" value="1">
                        </div>
            
                        <input type="submit" value="Iscriviti" id='bottone'>
                </form>

                </div>
            </div>
        </div>
    </div>
    <script>
        var toggleMenu = document.getElementById('menu');
    </script>
</body>
</html>