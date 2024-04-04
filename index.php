<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilos.css">
    <script src="app.js" async></script>
    <title>Tenda do Mario | </title>
</head>
<body>
    <section class="header-container">
        <header>
            <h1>TENDA DO MARIO</h1>
        </header>
    </section>
    <section class="subtitulo">
        <h1>Produtos</h1>
    </section>
    <section class="buscadorContainer">
        <input type="text" name="buscador" id="buscador" placeholder="Buscar...">
        <select id="selector">
            <option value="1">A</option>
            <option value="2">B</option>
            <option value="3">C</option>
        </select>
    </section>
    <section class="contenedor">
        <!-- Contenedor de elementos -->
                <div class="contenedor-items ">
                <?php
                $cnx = mysqli_connect("localhost","root","","Tienda");
                $sql = "select * from productos";
                $rta = mysqli_query($cnx,$sql);

                while($mostrar = mysqli_fetch_row($rta)){
                    ?>
                    <div class="item">
                        <span class="titulo-item"><?php echo $mostrar['1']?></span>
                        <img src="data:image/jpg;base64,<?php echo base64_encode($mostrar['4']);?>" alt="" class="img-item">
                        <div class="desc-item"><?php echo $mostrar['2']?></div>
                        <span class="precio-item"><?php echo $mostrar['3']?>$</span>
                        <button class="boton-item">Agregar al Carrito</button>
                    </div>
                    <?php
                }
                ?>
                </div>
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">
                <!-- 
                <div class="carrito-item">
                    <img src="img/boxengasse.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Box Engasse</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="1" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$15.000,00</span>
                    </div>
                   <span class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </span>
                </div>
                <div class="carrito-item">
                    <img src="img/skinglam.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Skin Glam</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="3" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$18.000,00</span>
                    </div>
                   <button class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </button>
                </div>
                 -->
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>