$(document).ready(function () {
  $lasagna = 0;
  $spaghetti = 0;
  $chickenFettucini = 0;
  $totalItems = 0;

  $lasagnaPrice = 12.99;
  $spaghettiPrice = 10.99;
  $chickenFettuciniPrice = 11.99;
  $totalPrice = 0;

  $displayTxt = "There are no items in the cart. ";
  initialPrices();

  function initialPrices() {
    $("#lasagnaInitial").text("$" + $lasagnaPrice);
    $("#spaghettiInitial").text("$" + $spaghettiPrice);
    $("#chickenFettuciniInitial").text("$" + $chickenFettuciniPrice);
    countUpdate();
  }

  // function updateCartTxt() {
  //   $displayTxt = "";
  //   if ($lasagna > 0) {
  //     $displayTxt += $lasagna + " Order(s) of Lasagna. ";
  //   }
  //   if ($spaghetti > 0) {
  //     $displayTxt += $spaghetti + " Order(s) of Spaghetti. ";
  //   }
  //   if ($chickenFettucini > 0) {
  //     $displayTxt += $chickenFettucini + " Order(s) of Chicken Fettucini. ";
  //   }
  //   if ($lasagna == 0 && $spaghetti == 0 && $chickenFettucini == 0) {
  //     $displayTxt = "There are no items in the cart. ";
  //   }
  //   $("#cartTxt").text($displayTxt);
  // }

  function updateCartPage() {
    $("#lasagnaInitialCart").text("$" + $lasagnaPrice);
    $("#spaghettiInitialCart").text("$" + $spaghettiPrice);
    $("#chickenFettuciniInitialCart").text("$" + $chickenFettuciniPrice);

    if ($lasagna == 0 && $spaghetti == 0 && $chickenFettucini == 0) {
      $("#cartWarning").removeClass("d-none");
    } else {
      $("#cartWarning").addClass("d-none");
    }

    //displays each only if there are some in the cart
    if ($lasagna > 0) {
      $("#lasagnaCartRow").removeClass("d-none");
    } else {
      $("#lasagnaCartRow").addClass("d-none");
    }

    if ($spaghetti > 0) {
      $("#spaghettiCartRow").removeClass("d-none");
    } else {
      $("#spaghettiCartRow").addClass("d-none");
    }

    if ($chickenFettucini > 0) {
      $("#chickenFettuciniCartRow").removeClass("d-none");
    } else {
      $("#chickenFettuciniCartRow").addClass("d-none");
    }
  }

  function countUpdate() {
    $("#lasagnaAmt").text($lasagna + " in cart");
    $("#spaghettiAmt").text($spaghetti + " in cart");
    $("#chickenFettuciniAmt").text($chickenFettucini + " in cart");
    $totalItems = $lasagna + $spaghetti + $chickenFettucini;
    $("#totalAmt").text($totalItems + " in cart");
    priceUpdate();
    updateCartPage();
  }

  function priceUpdate() {
    $("#lasagnaPrice").text("$" + $lasagna * $lasagnaPrice);
    $("#spaghettiPrice").text("$" + $spaghetti * $spaghettiPrice);
    $("#chickenFettuciniPrice").text(
      "$" + $chickenFettucini * $chickenFettuciniPrice
    );
    $totalPrice = 0;
    $totalPrice =
      $lasagna * $lasagnaPrice +
      $spaghetti * $spaghettiPrice +
      $chickenFettucini * $chickenFettuciniPrice;
    $("#totalPrice").text("$" + $totalPrice + " Subtotal");
  }

  //   Lasagna
  $("#addLasagna").click(function () {
    $lasagna++;
    countUpdate();
  });
  $("#removeLasagna").click(function () {
    if ($lasagna > 0) {
      $lasagna--;
    }
    countUpdate();
  });

  //   Spaghetti
  $("#addSpaghetti").click(function () {
    $spaghetti++;
    countUpdate();
  });
  $("#removeSpaghetti").click(function () {
    if ($spaghetti > 0) {
      $spaghetti--;
    }
    countUpdate();
  });

  //   chickenFettucini
  $("#addChickenFettucini").click(function () {
    $chickenFettucini++;
    countUpdate();
  });
  $("#removeChickenFettucini").click(function () {
    if ($chickenFettucini > 0) {
      $chickenFettucini--;
    }
    countUpdate();
  });

  // Place Order
  $("#placeOrder").click(function () {
    if ($totalItems > 0) {
      alert("Your order has been placed.");
    } else {
      alert("You did not order anything.");
    }
  });
});
