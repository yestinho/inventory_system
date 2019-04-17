<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $this->lang->line('items_generate_barcodes'); ?></title>
</head>
<body>
<table id="printableArea" width='50%' align='center' cellpadding='20' border="1">
<tr>
<?php 
$count = 0;
foreach($items as $item)
{
	$barcode = $item['id'];
	$text = $item['item_number'];
	
	if ($count % 2 ==0 and $count!=0)
	{
		echo '</tr><tr>';
	}
	
?>
	
		
<td ><img src= '<?php echo "index.php?c=barcode&barcode=$barcode&text=$text&width=256";?>' /> 

<?php
	$count++;
	}
?>
	
</tr>
</table>
<input type="button" onclick="printDiv('printableArea')" value="print a div!" /></td>
<script type="text/javascript">
function printDiv(printableArea) {
     var printContents = document.getElementById(printableArea).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
</body>
</html>
