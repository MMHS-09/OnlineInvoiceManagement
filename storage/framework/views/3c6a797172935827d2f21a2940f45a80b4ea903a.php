<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Oinvoice-<?php echo e($req->invoice_No); ?></title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
         font-size: 15px;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    img {
  vertical-align: top;
}


    


</style>

</head>
<body>

  <table width="100%">
    <tr >
        <td valign="left" >
          
           <h1> <?php echo e($req->invoice_type); ?> #<?php echo e($req->invoice_number); ?></h1>
         <strong  > <?php echo e($req->billto); ?> </strong> <br>
          <?php echo e($req->invoice_to); ?> <br>
          <?php echo e($req->mail_to); ?>

          <br>
          <br>
          <hr>
          <br>
          <?php if($req->invoice_type === 'Invoice'): ?>
          <?php if($req->due_balance === '0'): ?>
          <strong  >Invoice Status:</strong> <span class="gray" >Paid</span> <br>
          <?php else: ?>
          <strong  ><?php echo e($req->duebanalcex); ?>:</strong> <span class="gray" ><?php echo e(session('c_currency')); ?> <?php echo e($req->due_balance); ?> </span> <br>
          <?php endif; ?>
          <?php endif; ?>

          <strong  ><?php echo e($req->datex); ?>:</strong> <?php echo e($req->date); ?> <br>
          <strong><?php echo e($req->duedatex); ?>:</strong> <?php echo e($req->due_date); ?> <br>
        </td>
        <td align="right"> 
        <img  src="assets/img/company_logo/<?php echo e(session('c_logo')); ?>" width="100" height="125"    >
          <pre> 
            <?php echo e($req->invoice_from); ?>

              <?php echo e(session('c_address')); ?>

              <?php echo e(session('c_phone')); ?>

              <?php echo e(session('c_email')); ?>

            </pre>
        </td>
      </tr>
      <tr>
        <td>
          
          

        </td>
       
    </tr>

  </table>

  <table width="100%">
   
      <tr>
        
        
        <td align="left" >
          

        </td>

        
          
        
    </tr>

  </table>

  <br/>

  <table width="100%">
    <thead style="background-color: #464f47; color: #fff;">
      <tr align="center" >
        
        <th colspan="2" >ITEM</th>
        <th>Quantity</th>
        <th>Unit Price $</th>
        <th>Total $</th>
      </tr>
    </thead>
    <tbody>

      <?php for($x=0;$x<count($req->invoiceItem);$x++)
{
  ?>
      <tr>
        
        <td align="center"><?php echo e($req->invoiceItem[$x]); ?></td>
        <td style="color: #a0aec0;" align="left" ><?php echo e($req->invoiceItemDes[$x]); ?></td>
        <td align="center"><?php echo e($req->invoiceQuantity[$x]); ?></td>
        <td align="center"><?php echo e($req->invoiceRate[$x]); ?></td>
        <td align="center"><?php echo e($req->invoiceAmount[$x]); ?></td>
      </tr>
      

      <?php
      }
  ?>
      
      
    </tbody>
     </table>

    <table align="right"  width="30%" >
      
        <tr>
           
            <td align="center"><?php echo e($req->subTotalx); ?></td>
            <td align="center"><?php echo e(session('c_currency')); ?> <?php echo e($req->Sub_total); ?></td>
        </tr>
        <tr>
            
            <td align="center"><?php echo e($req->taxx); ?></td>
            <td align="center"><?php echo e($req->tax); ?></td>
        </tr>
        <tr>
            
            <td align="center"><?php echo e($req->discountx); ?></td>
            <td align="center"><?php echo e($req->discount); ?></td>
        </tr>
        <tr>
            
            <td align="center"><?php echo e($req->shippingx); ?></td>
            <td align="center"><?php echo e(session('c_currency')); ?> <?php echo e($req->shipping); ?></td>
        </tr>

        
        <tr>
           
            <td align="center"><?php echo e($req->totalx); ?></td>
            <td align="center" class="gray"><?php echo e(session('c_currency')); ?> <?php echo e($req->total); ?></td>
        </tr>
 <?php if($req->invoice_type === 'Invoice'): ?>
        <tr>
           
            <td align="center"><?php echo e($req->paidx); ?></td>
            <td align="center" class="gray"><?php echo e(session('c_currency')); ?> <?php echo e($req->amount_paid); ?></td>
        </tr>
<?php endif; ?>
<hr width="99%" align="left" >


        
    <table align="left"  width="70%" style="padding: 50px;
  " >
    
      
        <tr>
           
            <td align="left" width="20%" ><?php echo e($req->descriptionx); ?>: </td>
            <td align="left" width="50%"  ><?php echo e($req->description); ?></td>
        </tr>

        <tr>
           
            <td align="left" width="20%" ><?php echo e($req->termsx); ?>: </td>
            <td align="left" ><?php echo e($req->terms); ?></td>
        </tr>
    </table>
  

</body>
</html><?php /**PATH C:\xampp\htdocs\onlineInvoice\resources\views/page/portal/user/invoice.blade.php ENDPATH**/ ?>