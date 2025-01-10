<html>
<body>
<style>
body {padding: 0;margin: auto;}
.order_box{width:600px; border:1px solid #13658B; margin:auto;}
.order_heading {background: #13658B;color: #fff;padding:30px; font-size:22px}
.order_detail {padding: 20px;}
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
<div class='order_box' style='width:600px; border:1px solid #b31117; margin:auto;'>
	<div class='order_heading' style='background: #b31117;color: #fff;padding:30px; font-size:22px'>New Order {{$refId}}</div>
<div class='order_detail' style='padding: 20px;'>
	<br><font size='2'>{{$msg}} <strong>{{$u_name}}</strong></font><br><br>
	<font size='2' color='#13658B'><strong>Date : {{$date}}</strong></font><br>
	<font size='2' color='#13658B'><strong>Order ID : {{$refId}}</strong></font><br>
	<font size='2' color='#13658B'><strong>Txn ID : {{$txn_id}}</strong></font><br>
	<font size='2' color='#13658B'><strong>Plan Duration : {{$date}} To {{$last_date}}</strong></font><br><br><br>

<table style='font-family: arial, sans-serif; border-collapse: collapse; width:100%;'>
  <tr>
    <th style='border: 1px solid #dddddd; text-align: left; padding: 8px; color:#4C4F50; font-size:15px'>Product</th>
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
<br><br><br>
<font size='3' color='#13658B'>Billing Address:</font><br><br>
<table style='font-family: arial, sans-serif; border-collapse: collapse; width:100%;'>
<tr>
	<td style='border: 1px solid #dddddd; text-align: left; padding: 8px; color:#4C4F50; font-size:15px'><i>{{$u_name}}<br>{{$u_add1}}<br>{{$u_add2}}<br>Ph: {{$u_phne}}<br>{{$u_email}}</i></td>
</tr>
</table>
<br><center><p color='#3A8EB5'>Powered by: <a href='https://www.advsoft.us/'>ADVSoft LLC</a></center>
</div>
</div>
</body>
<br/>
</html>