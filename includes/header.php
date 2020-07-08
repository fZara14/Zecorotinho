

<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <p class="mb-0 phone pl-md-2">
                    <?php
                   
                    if (isset($_SESSION['login'])) {
                       echo "<a href='#'><span class='fa fa-paper-plane mr-1'></span>" . $_SESSION['login'] ."</a>  ";
                       echo "<a href='#'><span class='fa fa-paper-plane mr-1'></span>" . $_SESSION['nome'] ."</a>";
                    }
                    ?>
                   
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end">
                <div class="social-media mr-4">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                    </p>
                </div>
                <div class="reg">
                    <p class="mb-0"><a href="register.php" class="mr-2">Cadastrar</a> <a action="login.php">Login</a> <a href="./includes/logout.php">LogOut</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">Zé <span>Corotinho</span></a>
        <div class="order-lg-last btn-group">
            <a href="#" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="flaticon-shopping-bag"></span>
                <div class="d-flex justify-content-center align-items-center"><small>3</small></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-item d-flex align-items-start" href="#">
                    <div class="img" style="background-image: url(images/prod-1.jpg);"></div>
                    <div class="text pl-3">
                        <h4>Bacardi 151</h4>
                        <p class="mb-0"><a href="#" class="price">$25.99</a><span class="quantity ml-3">Quantity: 01</span></p>
                    </div>
                </div>
                <div class="dropdown-item d-flex align-items-start" href="#">
                    <div class="img" style="background-image: url(images/prod-2.jpg);"></div>
                    <div class="text pl-3">
                        <h4>Jim Beam Kentucky Straight</h4>
                        <p class="mb-0"><a href="#" class="price">$30.89</a><span class="quantity ml-3">Quantity: 02</span></p>
                    </div>
                </div>
                <div class="dropdown-item d-flex align-items-start" href="#">
                    <div class="img" style="background-image: url(images/prod-3.jpg);"></div>
                    <div class="text pl-3">
                        <h4>Citadelle</h4>
                        <p class="mb-0"><a href="#" class="price">$22.50</a><span class="quantity ml-3">Quantity: 01</span></p>
                    </div>
                </div>
                <a class="dropdown-item text-center btn-link d-block w-100" href="cart.php">
                    View All
                    <span class="ion-ios-arrow-round-forward"></span>
                </a>
            </div>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="product.php?categoria=todos">Produtos</a>
                        <!-- <a class="dropdown-item" href="product-single.php">Produto Unico</a> -->
                        <a class="dropdown-item" href="cart.php">Carrinho</a>
                        <a class="dropdown-item" href="checkout.php">Finalizar compra</a>
                        <?php
                        if (isset($_SESSION)) {
                      if ($_SESSION['permission'] === "1") {
                            echo "<a class='dropdown-item' href='addProduct.php'>Adicionar Produto</a>";
                        } 
                        }
                   
                        ?>
                        
                    </div>
                </li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contato</a></li>
            </ul>
        </div>
        <form name="frmBusca" method="post" action="./includes/searchController.php" >
    <input type="text" name="palavra" />
    <input type="submit" name="searchProduct" value="Buscar" class="btn btn-primary mb-1" />
</form>
    </div>
</nav>