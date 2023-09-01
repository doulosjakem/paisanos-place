<!DOCTYPE html>
<html>

<head>
    <?php include "HeadLinks.php" ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="menu.js"></script>
    <title>Paisano's Menu</title>
</head>

<body>
    <?php include "TopNav.php" ?>
    <main>

        <div class="modal fade" id="buildCartModal" aria-hidden=" true" aria-labelledby="exampleModalToggleLabel"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content PPgreen text-center">
                    <div class="modal-header text-center">
                        <h5 class="modal-title text-center" id="exampleModalToggleLabel">Build Your Cart</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body PPtan rounded m-1">

                        <table class="table table-striped table-bordered rounded">
                            <thead>
                            </thead>
                            <tbody class="PPgreen rounded">
                                <tr class=" PPgreen">
                                    <td>Lasagna
                                        <p id="lasagnaInitial"></p>
                                    </td>
                                    <td>
                                        <img width="150px" class="img-fluid rounded" src="images/lasagna.jpg"
                                            alt="lasagna on a plate with a fork">
                                        <br>
                                        <small>
                                            Photo by Dana Tentis: https://www.pexels.com/photo/salted-pasta-725990/
                                        </small>
                                    </td>
                                    <td>
                                        <button id="addLasagna" type="button" class="btn btn-primary"
                                            data-bs-toggle="button" autocomplete="off">Add to Cart</button>
                                        <br>
                                        <div class="my-3 rounded PPred text-white">
                                            <div class="" id="lasagnaAmt">0 in
                                                cart
                                            </div>
                                            <div id="lasagnaPrice"></div>
                                        </div>

                                        <button id="removeLasagna" type="button" class="btn btn-primary"
                                            data-bs-toggle="button" autocomplete="off">Remove from Cart</button>
                                    </td>
                                </tr>
                                <tr class="rounded">
                                    <td>Spaghetti
                                        <p id="spaghettiInitial">$</p>
                                    </td>
                                    <td>
                                        <img width="150px" class="img-fluid rounded" src="images/spaghetti.jpg"
                                            alt="spaghetti in a bowl">
                                        <br>
                                        <small>
                                            Photo by Anna Guerrero:
                                            https://www.pexels.com/photo/lasagna-on-white-ceramic-plate-4079520/
                                        </small>
                                    </td>
                                    <td>
                                        <button id="addSpaghetti" type="button" class="btn btn-primary"
                                            data-bs-toggle="button" autocomplete="off">Add to Cart</button>
                                        <br>
                                        <div class="my-3 rounded PPred text-white">
                                            <div class="" id="spaghettiAmt">0 in
                                                cart
                                            </div>
                                            <div id="spaghettiPrice"></div>
                                        </div>
                                        <button id="removeSpaghetti" type="button" class="btn btn-primary"
                                            data-bs-toggle="button" autocomplete="off">Remove from Cart</button>
                                    </td>
                                </tr>
                                <tr class="rounded">
                                    <td>Chicken Fettucini
                                        <p id="chickenFettuciniInitial">$</p>
                                    </td>
                                    <td>
                                        <img width="150px" class="img-fluid rounded" src="images/chickenFettucini.jpg"
                                            alt="chicken fettucini in a bowl">
                                        <br>
                                        <small>
                                            Photo by Engin Akyurt:
                                            https://www.pexels.com/photo/oval-white-bowl-2697229/
                                        </small>
                                    </td>
                                    <td>
                                        <button id="addChickenFettucini" type="button" class="btn btn-primary"
                                            data-bs-toggle="button" autocomplete="off">Add to Cart</button>
                                        <br>
                                        <div class="my-3 rounded PPred text-white">
                                            <div class="" id="chickenFettuciniAmt">0 in
                                                cart
                                            </div>
                                            <div id="chickenFettuciniPrice"></div>
                                        </div>
                                        <button id="removeChickenFettucini" type="button" class="btn btn-primary"
                                            data-bs-toggle="button" autocomplete="off">Remove from Cart</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <p class="p-2 rounded PPred text-white" id="totalAmt">0 in
                            cart
                        </p>
                        <p class="p-2 rounded PPred text-white" id="totalPrice">$0 Subtotal
                        </p>
                        <p class="p-2 rounded btn btn-primary text-white" data-bs-target="#checkoutModal"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Checkout</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="checkoutModal" aria-hidden="true" aria-labelledby="CheckoutButton" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content PPgreen">
                    <div class="modal-header">
                        <h5 class="modal-title" id="CheckoutButton">Checkout</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body PPtan rounded m-1">
                        <h4>Your Cart</h4>
                        <p id="cartWarning" class="d-none">There are no items in the cart.</p>
                        <table class="table table-striped table-bordered rounded">
                            <thead>
                            </thead>
                            <tbody class="PPgreen rounded">
                                <tr id="lasagnaCartRow" class="d-none">
                                    <td>Lasagna
                                        <p id="lasagnaInitialCart"></p>
                                    </td>
                                    <td>
                                        <img width="150px" class="img-fluid rounded" src="images/lasagna.jpg"
                                            alt="lasagna on a plate with a fork">
                                        <br>
                                        <small>
                                            Photo by Dana Tentis: https://www.pexels.com/photo/salted-pasta-725990/
                                        </small>
                                    </td>
                                    <td>
                                        <button id="addLasagna" type="button" class="btn btn-primary"
                                            data-bs-toggle="button" autocomplete="off">Add to Cart</button>
                                        <br>
                                        <div class="my-3 rounded PPred text-white">
                                            <div class="" id="lasagnaAmt">0 in
                                                cart
                                            </div>
                                            <div id="lasagnaPrice"></div>
                                        </div>

                                        <button id="removeLasagna" type="button" class="btn btn-primary"
                                            data-bs-toggle="button" autocomplete="off">Remove from Cart</button>
                                    </td>
                                </tr>
                                <tr id="spaghettiCartRow" class="d-none">
                                    <td>Spaghetti
                                        <p id="spaghettiInitialCart">$</p>
                                    </td>
                                    <td>
                                        <img width="150px" class="img-fluid rounded" src="images/spaghetti.jpg"
                                            alt="spaghetti in a bowl">
                                        <br>
                                        <small>
                                            Photo by Anna Guerrero:
                                            https://www.pexels.com/photo/lasagna-on-white-ceramic-plate-4079520/
                                        </small>
                                    </td>
                                    <td>
                                        <button id="addSpaghetti" type="button" class="btn btn-primary"
                                            data-bs-toggle="button" autocomplete="off">Add to Cart</button>
                                        <br>
                                        <div class="my-3 rounded PPred text-white">
                                            <div class="" id="spaghettiAmt">0 in
                                                cart
                                            </div>
                                            <div id="spaghettiPrice"></div>
                                        </div>
                                        <button id="removeSpaghetti" type="button" class="btn btn-primary"
                                            data-bs-toggle="button" autocomplete="off">Remove from Cart</button>
                                    </td>
                                </tr>
                                <tr id="chickenFettuciniCartRow" class="d-none">
                                    <td>Chicken Fettucini
                                        <p id="chickenFettuciniInitialCart">$</p>
                                    </td>
                                    <td>
                                        <img width="150px" class="img-fluid rounded" src="images/chickenFettucini.jpg"
                                            alt="chicken fettucini in a bowl">
                                        <br>
                                        <small>
                                            Photo by Engin Akyurt:
                                            https://www.pexels.com/photo/oval-white-bowl-2697229/
                                        </small>
                                    </td>
                                    <td>
                                        <button id="addChickenFettucini" type="button" class="btn btn-primary"
                                            data-bs-toggle="button" autocomplete="off">Add to Cart</button>
                                        <br>
                                        <div class="my-3 rounded PPred text-white">
                                            <div class="" id="chickenFettuciniAmt">0 in
                                                cart
                                            </div>
                                            <div id="chickenFettuciniPrice"></div>
                                        </div>
                                        <button id="removeChickenFettucini" type="button" class="btn btn-primary"
                                            data-bs-toggle="button" autocomplete="off">Remove from Cart</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button class="btn PPredHov PPred text-white" data-bs-target="#buildCartModal"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Back to Build Your Cart</button>
                        <button id="placeOrder" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Place
                            Order</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid PPblack PPwhitetxt text-center border-bottom border-danger border-5 py-4">
            <h2>Our Menu</h2>
            <a class="btn btn-primary my-2" data-bs-toggle="modal" href="#buildCartModal" role="button">Open
                Menu</a>
            <br>
            <img class="img-fluid rounded" src="images/menu.jpg" alt="a menu on a table">
        </div>
    </main>
    <?php include "BotFooter.php" ?>
</body>

</html>