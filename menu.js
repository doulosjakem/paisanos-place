$(document).ready(function () {
  $lasagna = 0;
  $spaghetti = 0;
  $chickenFettucini = 0;
  $totalItems = 0;
  $displayTxt = "";

  function updateCartTxt() {
    $displayTxt = "";
    if ($lasagna > 0) {
      $displayTxt += $lasagna + " Order(s) of Lasagna. ";
    }
    if ($spaghetti > 0) {
      $displayTxt += $spaghetti + " Order(s) of Spaghetti. ";
    }
    if ($chickenFettucini > 0) {
      $displayTxt += $chickenFettucini + " Order(s) of Chicken Fettucini. ";
    }
    if ($lasagna == 0 && $spaghetti == 0 && $chickenFettucini == 0) {
      $displayTxt = "There are no items in the cart. ";
    }
    $("#cartTxt").text($displayTxt);
  }

  function countUpdate() {
    $("#lasagnaAmt").text($lasagna + " in cart");
    $("#spaghettiAmt").text($spaghetti + " in cart");
    $("#chickenFettuciniAmt").text($chickenFettucini + " in cart");
    $totalItems = $lasagna + $spaghetti + $chickenFettucini;
    $("#totalAmt").text($totalItems + " in cart");
    updateCartTxt();
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
});
