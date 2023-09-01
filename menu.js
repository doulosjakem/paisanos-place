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
      $("#totalsTable").addClass("d-none");
      $("#placeOrder").prop("disabled", true);
    } else {
      $("#cartWarning").addClass("d-none");
      $("#totalsTable").removeClass("d-none");
      $("#placeOrder").prop("disabled", false);
      $("#subtotal").text(
        "Subtotal = $" +
          ($lasagnaPrice * $lasagna +
            $spaghettiPrice * $spaghetti +
            $chickenFettuciniPrice * $chickenFettucini)
      );
      $("#tax").text(
        "Tax = $" +
          (
            ($lasagnaPrice * $lasagna +
              $spaghettiPrice * $spaghetti +
              $chickenFettuciniPrice * $chickenFettucini) *
            0.08
          ).toFixed(2)
      );

      $("#total").text(
        "Total = $" +
          (
            ($lasagnaPrice * $lasagna +
              $spaghettiPrice * $spaghetti +
              $chickenFettuciniPrice * $chickenFettucini) *
            1.08
          ).toFixed(2)
      );
    }

    //displays each only if there are some in the cart
    if ($lasagna > 0) {
      $("#lasagnaCartRow").removeClass("d-none");
      $("#lasagnaCartAmt").text($lasagna + "\xa0in\xa0cart");
      $("#lasagnaCartPrice").text("$" + $lasagna * $lasagnaPrice);
    } else {
      $("#lasagnaCartRow").addClass("d-none");
    }

    if ($spaghetti > 0) {
      $("#spaghettiCartRow").removeClass("d-none");
      $("#spaghettiCartAmt").text($spaghetti + "\xa0in\xa0cart");
      $("#spaghettiCartPrice").text("$" + $spaghetti * $spaghettiPrice);
    } else {
      $("#spaghettiCartRow").addClass("d-none");
    }

    if ($chickenFettucini > 0) {
      $("#chickenFettuciniCartRow").removeClass("d-none");
      $("#chickenFettuciniCartAmt").text($chickenFettucini + "\xa0in\xa0cart");
      $("#chickenFettuciniCartPrice").text(
        "$" + $chickenFettucini * $chickenFettuciniPrice
      );
    } else {
      $("#chickenFettuciniCartRow").addClass("d-none");
    }
  }

  function countUpdate() {
    $("#lasagnaAmt").text($lasagna + "\xa0in\xa0cart");
    $("#spaghettiAmt").text($spaghetti + "\xa0in\xa0cart");
    $("#chickenFettuciniAmt").text($chickenFettucini + "\xa0in\xa0cart");
    $totalItems = $lasagna + $spaghetti + $chickenFettucini;
    $("#totalAmt").text($totalItems + "\xa0in\xa0cart");
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
