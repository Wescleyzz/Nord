<?php 
$animes = [
    [
    "imagem" => "https://img.ibxk.com.br/2021/10/05/05091942528062.jpg",
    "nome" => "Naruto Shippuden",
    "descricao" => "Guiado pelo espírito demoníaco dentro dele, o órfão Naruto aprende a controlar seus poderes como um ninja nesta série de aventura anime.",
],
[
    "imagem" => "https://tm.ibxk.com.br/2022/05/02/02121730170218.jpg",
    "nome" => "Dragon Ball Z",
    "descricao" => "A história de Son Goku, guerreiro que descobre ser parte de um legado de poderosos conquistadores alienígenas - e passa a defender seu planeta adotivo, a Terra, de outros seres igualmente superfortes e capazes de feitos descomunais.",
],
[
    "imagem" => "https://animeshouse.net/wp-content/uploads/2022/09/39820749083724908.jpg",
    "nome" => "Jujutsu Kaisen",
    "descricao" => " um anime sombrio que lida com elementos sobrenaturais como maldições, espíritos e feitiçaria.",
],
[
    "imagem" => "https://www.fayerwayer.com/resizer/QLE040OzUwDrnw2ZR0txVzbgEms=/800x0/filters:format(jpg):quality(70)/cloudfront-us-east-1.images.arcpublishing.com/metroworldnews/OLKKK2NHZNGY3LKJEW724KQRXQ.PNG",
    "nome" => "Kimetsu no Yaba",
    "descricao" => "A história de Tanjiro Kamado, um jovem que teve toda a família atacada por Onis.",
],
[
    "imagem" => "https://images2.alphacoders.com/516/516664.jpg",
    "nome" => "One Piece",
    "descricao" => " O capitão Luffy navega com sua tripulação à procura de um tesouro que pode torná-lo o novo rei dos piratas.",
],
[
    "imagem" => "https://wallpapers.com/images/hd/konosuba-satou-kazuma-and-aqua-j79p7ep6aa6myzzc-j79p7ep6aa6myzzc.jpg",
    "nome" => "Konosuba",
    "descricao" => "Após uma morte prematura e embaraçosa, Kazuma Satō, um adolescente japonês hikikomori e NEET, conhece uma deusa chamada Aqua.",
],
[
    "imagem" => "https://i0.wp.com/metagalaxia.com.br/wp-content/uploads/2020/04/er4khNt-1.jpg?resize=1024%2C640&ssl=1",
    "nome" => "Death Note",
    "descricao" => "O jovem estudante Light Yagami achar um caderno com poderes sobrenaturais, chamado Death Note, no qual era possível matar uma pessoa apenas escrevendo seu nome no caderno.",
],
[
    "imagem" => "https://i.pinimg.com/originals/da/92/83/da9283156e1ce37d737ec513baeacfb3.jpg",
    "nome" => "Sword Art Online",
    "descricao" => "Sword Art Online é um anime que o vai deixar sentindo estar preso em um mundo virtual.",
],
[
    "imagem" => "https://i.pinimg.com/564x/bf/89/60/bf8960ebc9070fe97e15475a6b2a03bb.jpg",
    "nome" => "Kuroku no Basket",
    "descricao" => "Kuroko no Basket acompanha as aventuras de Tetsuya Kuroko, um jovem de 16 anos que, sob a aparência normal, esconde um formidável jogador de basquete.",
],
[
    "imagem" => "https://img.ibxk.com.br/2021/10/05/05091942528062.jpg",
    "nome" => "Naruto Shippuden",
    "descricao" => "Guiado pelo espírito demoníaco dentro dele, o órfão Naruto aprende a controlar seus poderes como um ninja nesta série de aventura anime.",
],
];

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Nord -  Home</title>
</head>

<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <img src="img/logo.png" class="logo" alt="" srcset="">
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li class="menu-list-item active"><a href="">Inicio</a></li>
                    <li class="menu-list-item"><a href="">Filmes</a></li>
                    <li class="menu-list-item"><a href="">Series</a></li>
                    <li class="menu-list-item"><a href="">Populares</a></li>
                    

                </ul>
            </div>
            <div class="profile-container">
                <img class="profile-picture" src="img/Perfil.png" alt="">
                <div class="profile-text-container">
                    <span class="profile-text">Perfil</span>
                    <i class="fas fa-caret-down"></i>
                </div>
                <div class="toggle">
                    <i class="fas fa-moon toggle-icon"></i>
                    <i class="fas fa-sun toggle-icon"></i>
                    <div class="toggle-ball"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar">
        <i class="left-menu-icon fas fa-search"></i>
        <i class="left-menu-icon fas fa-home"></i>
        <i class="left-menu-icon fas fa-users"></i>
        <i class="left-menu-icon fas fa-bookmark"></i>
        <i class="left-menu-icon fas fa-tv"></i>
        <i class="left-menu-icon fas fa-hourglass-start"></i>
        <i class="left-menu-icon fas fa-shopping-cart"></i>
    </div>
    <div class="container">
        <div class="content-container">
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('https://wallpapercave.com/wp/wp8948742.jpg');">
                <img class="featured-title" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Naruto_logo.svg/1280px-Naruto_logo.svg.png" alt="">
                <p class="featured-desc">Guiado pelo espírito demoníaco dentro dele, o órfão Naruto aprende a controlar seus poderes como um ninja nesta série de aventura anime.</p>
                <button class="featured-button">ASSISTIR</button>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">Novos Animes</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                    <?php foreach ($animes as $anime) : ?>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?php echo $anime['imagem']?>" alt="">
                            <span class="movie-list-item-title"><?php echo $anime['nome']?></span>
                            <p class="movie-list-item-desc"><?php echo $anime['descricao']?></p>
                            <button class="movie-list-item-button">Assistir</button>
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">Mais Populares</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                    <?php foreach ($animes as $anime) : ?>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?php echo $anime['imagem']?>" alt="">
                            <span class="movie-list-item-title"><?php echo $anime['nome']?></span>
                            <p class="movie-list-item-desc"><?php echo $anime['descricao']?></p>
                            <button class="movie-list-item-button">Assistir</button>
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('https://www.acessogeek.com/wp-content/uploads/2018/09/black-clover_open-beta-e1537300972534.jpg');">
                <img class="featured-title" src="https://upload.wikimedia.org/wikipedia/commons/f/fd/Black_Clover_Logo.png" alt="">
                <p class="featured-desc">Black Clover conta a história de Asta e Yuno, dois órfãos que foram abandonados ainda bebês, no mesmo dia, na porta de uma igreja na Vila Hage.</p>
                <button class="featured-button">Assistir</button>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">Recomendados</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                    <?php foreach ($animes as $anime) : ?>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?php echo $anime['imagem']?>" alt="">
                            <span class="movie-list-item-title"><?php echo $anime['nome']?></span>
                            <p class="movie-list-item-desc"><?php echo $anime['descricao']?></p>
                            <button class="movie-list-item-button">Assistir</button>
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">Minha Lista</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                    <?php foreach ($animes as $anime) : ?>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?php echo $anime['imagem']?>" alt="">
                            <span class="movie-list-item-title"><?php echo $anime['nome']?></span>
                            <p class="movie-list-item-desc"><?php echo $anime['descricao']?></p>
                            <button class="movie-list-item-button">Assistir</button>
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>

</html>