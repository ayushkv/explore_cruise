<html>
<body>
<style>
body {padding: 0;margin: auto;}
.order_box{width:600px; border:1px solid #13658B; margin:auto;}
.order_heading {background: #13658B;color: #fff;padding:20px; font-size:22px}
.order_detail {padding: 20px;font-family: arial, sans-serif;}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width:100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  color:#4C4F50;
  font-size:15px
}

</style>
<br>
<center><img src="assets/images/logo/logo.png" style="width:180px;"></center><br>
<p style='text-align: center; color:#000; font-size:12px'><i>Address: 1318 S Woodstock Street, Philadelphia, PA 19146<br>Email: customercare@advsoft.us<br>Toll Free No: 1833-610-7655<br>Office Hours: 07:30 AM EST To 00:30 AM EST, 365 Days</i></p>
<br>
<div class='order_box' style='width:600px; border:1px solid #b31117; margin:auto;'>
	<div class='order_heading' style='background: #b31117;color: #fff;padding:20px; font-size:22px'><strong>New Order {{$refId}}</strong></div>
<div class='order_detail' style='padding: 20px;'>
	<font size='3'><strong>Name : {{$u_name}}</strong></font><br>
	<font size='3'><strong>Date : {{$date}}</strong></font><br>
	<font size='3'><strong>Order ID : {{$refId}}</strong></font><br>
	<font size='3'><strong>Txn ID : {{$txn_id}}</strong></font><br>
	<font size='3'><strong>Plan Duration : {{$date}} To {{$last_date}}</strong></font><br><br><br>

<table style='font-family: arial, sans-serif; border-collapse: collapse; width:100%;'>
  <tr>
    <th style='border: 1px solid #dddddd; text-align: left; padding: 8px; color:#4C4F50; font-size:15px'>Plan</th>
    <th style='border: 1px solid #dddddd; text-align: left; padding: 8px; color:#4C4F50; font-size:15px'>Quantity</th>
    <th style='border: 1px solid #dddddd; text-align: left; padding: 8px; color:#4C4F50; font-size:15px'>Price</th>
  </tr>
  <tr>
    <td style='border: 1px solid #dddddd; text-align: left; padding: 8px; color:#4C4F50; font-size:15px'>{{$plan}}</td>
    <td style='border: 1px solid #dddddd; text-align: left; padding: 8px; color:#4C4F50; font-size:15px'>1</td>
    <td style='border: 1px solid #dddddd; text-align: left; padding: 8px; color:#4C4F50; font-size:15px'>$ {{$card_amount}}</td>
  </tr>
</table>
<table style='font-family: arial, sans-serif; border-collapse: collapse; width:100%;'>
  <tr>
    <th style='border: 1px solid #dddddd; text-align: left; padding: 8px; color:#4C4F50; font-size:15px'>Sub Total:</th>
   <td style='border: 1px solid #dddddd; text-align: left; padding: 8px; color:#4C4F50; font-size:15px'>$ {{$card_amount}}</td>
  </tr>
  <tr>
    <th style='border: 1px solid #dddddd; text-align: left; padding: 8px; color:#4C4F50; font-size:15px'>Payment Method:</th>
   <td style='border: 1px solid #dddddd; text-align: left; padding: 8px; color:#4C4F50; font-size:15px'>{{$gateway}}</td>
  </tr>
  <tr>
    <th style='border: 1px solid #dddddd; text-align: left; padding: 8px; color:#4C4F50; font-size:15px'>Total Amount:</th>
   <td style='border: 1px solid #dddddd; text-align: left; padding: 8px; color:#4C4F50; font-size:15px'><strong>$ {{$card_amount}}</strong></td>
  </tr>
</table>
<br>
<font size='3'>Billing Address:</font><br><br>
<table style='font-family: arial, sans-serif; border-collapse: collapse; width:100%;'>
<tr>
	<td style='border: 1px solid #dddddd; text-align: left; padding: 8px; color:#4C4F50; font-size:14px'><i>{{$u_name}}<br>{{$u_add1}}<br>{{$u_add2}}<br>Ph: {{$u_phne}}<br>{{$u_email}}</i></td>
</tr>
</table>
<br><p style="font-size:12px;"><i>NOTE: This Payment will reflect on your card statement by company name "ADVSOFT LLC"</i></p>
</div>
</div>
</body>
<br/>
</html>