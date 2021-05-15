<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>

	<link rel="stylesheet" href="{{asset('front/')}}/invoice_style.css"> 
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="{{asset('front/')}}/images/logo.png">
       </div>
      <div id="company" class="clearfix">
        <h4>Invoice Number : #001</h4>
        <div>Tushar Taneja</div>
        <div>124, laxman colony shyam nagar, jaipur</div>
        <div>8107056721</div>
        <div><a href="mailto:company@example.com">tushar.taneja61@gmail.com</a></div>
      </div>
     
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">SERVICE</th>
            <th class="desc">DESCRIPTION</th>
            <th>PRICE</th>
            <th>QTY</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service">Consultation</td>
            <td class="desc">with Dr. Raj Kumar</td>
            <td class="unit">₹400.00</td>
            <td class="qty">-</td>
            <td class="total">₹400.00</td>
          </tr>
          <tr>
            <td class="service">Medecines</td>
            <td class="desc">Medecine name, Medecine Name 2</td>
            <td class="unit">₹400.00</td>
            <td class="qty">2</td>
            <td class="total">₹800.00</td>
          </tr>
          <tr>
            <td class="service">Lab Test</td>
            <td class="desc">CBC Tese, Covid Test</td>
            <td class="unit">₹4000.00</td>
            <td class="qty">-</td>
            <td class="total">₹4000.00</td>
          </tr>
          
          <tr>
            <td colspan="4">SUBTOTAL</td>
            <td class="total">₹5,200.00</td>
          </tr>
          <tr>
            <td colspan="4">TAX 25%</td>
            <td class="total">₹1,300.00</td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total">₹6,500.00</td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>