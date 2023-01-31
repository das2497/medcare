<?php

session_start();

require "connection.php";

?>
<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>eMTi ShoP | eMTi Cart</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="icon" href="resources/single.svg">

</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <?php

            include "header.php";

            require "connection.php";

            if (isset($_SESSION["u"])) {

            ?>

                <div class="col-12">
                    <div class="row">

                        <div class="col-12 justify-content-center">
                            <div class="row mb-3 mt-3">

                                <a href="home.php" class="offset-5 offset-lg-2 col-2 col-lg-1 icon btc"></a>

                                <div class="col-12 col-lg-5">
                                    <div class="mt-2 mb-2">
                                        <input type="text" class="form-control d-grid" aria-label="Text input with dropdown button" placeholder="Search with any text..." />
                                    </div>
                                </div>

                                <div class="col-12 col-lg-2 d-grid">
                                    <button class="btn btn-primary mt-2 mb-2 d-grid">Search</button>
                                </div>

                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <nav class="mt-1 mb-1" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">eMTi Cart</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <label class="fs-1 fw-bolder text-warning mt-1 mb-1">eMTi Cart&nbsp;&nbsp;<i class="bi bi-cart3 fs-1"></i></label>
                            </div>
                        </div>

                        <div class="col-12">
                            <hr class="border border-2 border-warning" />
                        </div>

                        <div class="col-12 col-lg-2 col-12 d-grid mx-2">
                            <div class="row mb-2">
                                <nav class="nav flex-column nav-pills align-items-center align-items-lg-start">
                                    <a class="nav-link" href="watchlist.php">eMTi Watchlist</a>
                                    <a class="nav-link active" aria-current="page" href="cart.php">eMTi Cart</a>
                                </nav>
                            </div>
                        </div>

                        <div class="col-12">
                            <hr class="border border-2 border-warning" />
                        </div>

                        <div class="col-12">
                            <div class="row">

                                <?php

                                $grand_total = 0;

                                $cart_rs = Database::search("SELECT * FROM `cart` WHERE `user_email`='" . $_SESSION["u"]["email"] . "'");
                                $cart_num = $cart_rs->num_rows;

                                for ($x = 0; $x < $cart_num; $x++) {
                                    $cart_data = $cart_rs->fetch_assoc();

                                    $seller_rs = Database::search("SELECT * FROM `product` INNER JOIN `user` ON product.user_email=user.email WHERE `id`='" . $cart_data["product_id"] . "'");
                                    $seller_data = $seller_rs->fetch_assoc();

                                ?>
                                    <div class="card mb-3 col-12 offset-lg-1 col-lg-10" style="background-color: #f2f3f5;">
                                        <div class="row g-0">

                                            <div class="col-md-12 mt-3 mb-3">
                                                <div class="row">
                                                    <div class="col-12">

                                                        <span class="fw-bold text-black-50 fs-5">Seller :</span>&nbsp;
                                                        <span class="fw-bold text-black fs-5">Mr. <?php echo $seller_data["fname"] . ' ' . $seller_data["lname"]; ?></span>
                                                        &nbsp;&nbsp; | &nbsp;&nbsp;
                                                        <span class="fw-bold text-black-50 fs-5">Ratings :</span>&nbsp;
                                                        <span class="badge">
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-fill text-secondary fs-6"></i>

                                                            &nbsp;

                                                            <label class="text-dark fs-6">(120)</label>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="col-md-4">
                                                <?php

                                                $image_rs = Database::search("SELECT * FROM `image` WHERE `product_id`='" . $cart_data["product_id"] . "'");
                                                $image_num = $image_rs->num_rows;

                                                if ($image_num != 0) {
                                                    $image_data = $image_rs->fetch_assoc();
                                                ?>
                                                    <img src="<?php echo $image_data["code"]; ?>" class="img-fluid rounded-start" style="max-width: 200px;">
                                                <?php
                                                } else {
                                                ?>
                                                    <img src="resources/empty-img.png" class="img-fluid rounded-start" style="max-width: 200px;">
                                                <?php
                                                }

                                                ?>

                                            </div>
                                            <div class="col-md-5">
                                                <div class="card-body">

                                                    <h1 class="card-title fw-bold"><?php echo $seller_data["title"]; ?></h1><br />

                                                    <span class="text-dark fs-4"><b class="fs-4">Price :</b>
                                                        Rs. <?php echo $seller_data["price"]; ?> .00</span><br />
                                                    <span class="text-dark"><b>Condition :</b>
                                                        <?php

                                                        $condition_rs = Database::search("SELECT * FROM `product` INNER JOIN `condition` ON product.condition_id=condition.id WHERE product.id='" . $cart_data["product_id"] . "'");
                                                        $condition_data = $condition_rs->fetch_assoc();

                                                        ?>
                                                        <?php echo $condition_data["name"]; ?></span>
                                                    <br>
                                                    <span class="text-black fs-6"><b>Colour :</b></span>&nbsp;
                                                    <?php

                                                    $color_rs = Database::search("SELECT * FROM `product` INNER JOIN `colour` ON product.colour_id=colour.id WHERE product.id='" . $cart_data["product_id"] . "'");
                                                    $color_data = $color_rs->fetch_assoc();

                                                    ?>
                                                    <span class="text-black fs-6"><?php echo $color_data["name"]; ?></span>
                                                    <br>
                                                    <span class="fw-bold text-black-50 fs-5">Quantity :</span>&nbsp;
                                                    <input type="number" class="mt-3 border border-2 border-secondary fs-4 fw-bold px-3 cardqtytext" style="height: 35px; width: 80px;" value="<?php echo $cart_data["qty"]; ?>">
                                                    <br><br>
                                                    <span class="fw-bold text-black-50 fs-5">Delivery Fee :</span>&nbsp;
                                                    <?php

                                                    $address_rs = Database::search("SELECT district.id AS did FROM `user_has_address` INNER JOIN city ON user_has_address.city_id=city.id 
                                                INNER JOIN district ON city.district_id=district.id WHERE user_email = '" . $_SESSION["u"]["email"] . "'");
                                                    $address_data = $address_rs->fetch_assoc();

                                                    $delivery = 0;

                                                    if ($address_data["did"] == 7) {
                                                        $delivery = $seller_data["delivery_fee_colombo"];
                                                    } else {
                                                        $delivery = $seller_data["delivery_fee_other"];
                                                    }

                                                    ?>
                                                    <span class="fw-bold text-black fs-5">Rs.<?php echo $delivery; ?>.00</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card-body d-grid">
                                                    <a class="btn btn-success mt-5 mb-3"><i class="bi bi-cash-coin"></i> Buy Now</a>
                                                    <a class="btn btn-danger"><i class="bi bi-shield-x"></i> Remove</a>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="col-md-12 mt-3 mb-3">
                                                <div class="row">
                                                    <div class="col-6 col-md-6">
                                                        <span class="fw-bold fs-5 text-black">Requested Total <i class="bi bi-info-circle"></i></span>
                                                    </div>
                                                    <div class="col-6 col-md-6 text-end">
                                                        <span class="fw-bold fs-5 text-black-50">Rs. <?php echo ($seller_data["price"] * $cart_data["qty"]) + $delivery; ?> .00</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                <?php

                                    $grand_total += ($seller_data["price"] * $cart_data["qty"]) + $delivery;
                                }

                                ?>

                                <div class="col-12 mb-5 mt-2">
                                    <hr class="border border-2 fw-bold border-dark" />
                                </div>

                                <!-- check out -->

                                <div class="col-12">
                                    <div class="row">

                                        <div class="col-12 mt-2">
                                            <span class="fs-4 fw-bold">Sub Total :</span>
                                        </div>

                                        <div class="col-12">
                                            <hr />
                                        </div>

                                        <div class="col-6">
                                            <label class="form-label fs-2 fw-bold">eMTi CART CHECK OUT</label>
                                        </div>

                                        <div class="col-6 mt-2 text-end">
                                            <span class="fs-4 fw-bold text-danger">Rs. <?php echo $grand_total; ?> .00</span>
                                        </div>

                                        <div class="col-12 mt-3">
                                            <hr />
                                        </div>

                                        <div class="col-6 mt-2 text-start">
                                            <div class="form-check">
                                                <input class="form-check-input fs-5" type="checkbox" id="tc">
                                                <label class="form-check-label fs-5" for="tc">
                                                    Agree with our <a href="#" class="fs-5">terms & conditions</a> and <a href="#" class="fs-5">privacy statements</a>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-6 mt-3 mb-3 d-grid">
                                            <button class="btn btn-warning fs-5 fw-bold text-dark">CHECK OUT</button>
                                        </div>

                                    </div>
                                </div>

                                <!-- check out -->

                            </div>
                        </div>

                    </div>
                </div>

            <?php

            } else {
                echo ("Please LogIn to use your cart");
            }

            ?>

            <div class="col-12 mb-5 mt-2">
                <hr class="border border-2 fw-bold border-dark" />
            </div>

            <?php include "footer.php"; ?>

        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>