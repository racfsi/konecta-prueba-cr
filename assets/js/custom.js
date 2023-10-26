jQuery(function ($) {
  //SAVE DATA | PRODUCTOS FORM
  $("#form-new-prod").submit(function (e) {
    e.preventDefault();
    saveProd();
  });
  function saveProd() {
    $.ajax({
      type: "POST",
      url: "?c=ajax&a=SaveProd",
      data: $("#form-new-prod").serialize(),
      dataType: "json",
      beforeSend: function (e) {
        respAjaxBefore();
      },
    })
      .done(function (e) {
        respAjaxDone();
        window.location.replace("?c=productos");
      })
      .fail(function (e) {
        console.log(e);
        respAjaxFail();
      });
  }
//UPDATE PRICE | NEW VENTA FPRM
$('body').on('change', '#cantidad', function(e) {
  const cantVenta = $(this).val();
  const priceProd = $("#currPrecio").val();
  const newPrice = priceProd * cantVenta;
  $("#newPrice").val(newPrice);
})
  //SAVE DATA | NEW VENTA FORM
  $("#form-new-venta").submit(function (e) {
    e.preventDefault();
    const currStock = $("#stockcurr").val();
    const cantVendida = $("#cantidad").val();
    const totalVendida = $("#cantvendidas").val();
    const newStock = currStock - cantVendida;
    const newTotalVendida = parseInt(totalVendida) + parseInt(cantVendida);
    $.ajax({
      type: "POST",
      url: "?c=ajax&a=SaveVenta",
      data: {
        stock: newStock,
        cant_vendida: newTotalVendida,
        idprod: $("#idprod").val(),
      },
      dataType: "json",
    })
      .done(function (e) {
        respAjaxDone();
        window.location.replace("?c=productos");
      })
      .fail(function (e) {
        console.log(e);
      });
  });

  //===================RESPUESTAS AJAX
  // RESPONSE AJAX | BEFORE SEND
  function respAjaxBefore() {
    $("#responseAjax").addClass("responseAjax-beforeSend");
    $("#responseAjax").html("<p>Enviando...</p>");
  }

  // RESPONSE AJAX | DONE
  function respAjaxDone() {
    $("#responseAjax").removeClass("responseAjax-beforeSend");
    $("#responseAjax").addClass("responseAjax-done");
    $("#responseAjax").html("<p>Enviado con éxito</p>");
    setTimeout(function () {
      $("#responseAjax").removeClass("responseAjax-done");
      $("#responseAjax").html("");
    }, 5000);
  }

  // RESPONSE AJAX | FAIL
  function respAjaxFail() {
    $("#responseAjax").removeClass("responseAjax-beforeSend");
    $("#responseAjax").addClass("responseAjax-fail");
    $("#responseAjax").html("<p>Error!! revisar la consola....</p>");
    setTimeout(function () {
      $("#responseAjax").removeClass("responseAjax-fail");
      $("#responseAjax").html("");
    }, 5000);
  }
});
