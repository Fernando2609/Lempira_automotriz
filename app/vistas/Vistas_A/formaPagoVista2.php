<?php include_once("encabezado.php"); ?>
<div class="card" id="contenedor">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Iniciar sesión</a></li>
      <li class="breadcrumb-item"><a href="#">Datos de envío</a></li>
      <li class="breadcrumb-item">Forma de pago</li>
      <li class="breadcrumb-item"><a href="#">Verifica datos</a></li>
    </ol>
  </nav>
  <h2>Forma de Pago</h2>
  <form action="<?php print RUTA;?>carrito/verificar" method="POST">
    <div class="radio">
        <label><input type="radio" name="pago" value="tc1">Tarjeta de Crédito MasterCard</label>
    </div>
    <div class="radio">
        <label><input type="radio" name="pago" value="tc2">Tarjeta de Crédito Visa</label>
    </div>
    <div class="radio">
        <label><input type="radio" name="pago" value="td">Tarjeta de Débito</label>
    </div>
    <div class="radio">
        <label><input type="radio" name="pago" value="efectivo">Efectivo</label>
    </div>
    <div class="radio">
        <label><input type="radio" name="pago" value="paypal">Paypal</label>
    </div>
    <div class="radio">
        <label><input type="radio" name="pago" value="bitcoins">Bitcoins</label>
    </div>
    
    <div class="form-group text-left">
      <label for="enviar"></label>
      <input type="submit" name="enviar" value="enviar" class="btn btn-success" role="button"/>
    </div>
  </form>

  <!--PAYPAL -->
  <div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'blue',
          layout: 'vertical',
          label: 'paypal',
          
        },
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },
        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();

</script>




  






<!--PAYPAL -->

</div>

        
<?php include_once("piepagina.php"); ?>