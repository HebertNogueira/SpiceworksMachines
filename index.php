<?php

if (isset($_GET["orderby"])){
	$orderby = $_GET["orderby"];
}else{
	$orderby = "current_user";
}
	try {
		$myPDO = new PDO('sqlite:spiceworks_prod.db');	
		$myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}

$result = $myPDO->query("SELECT * FROM devices order by $orderby DESC");
	
	
?>
	<table border=1 CELLSPACING=0>
		<tr>
			<td nowrap><a href="?orderby=raw_manufacturer">raw_manufacturer</a></td>
			<td nowrap><a href="?orderby=name">name</a></td>
			<td nowrap><a href="?orderby=serial_number">serial_number</a></td>
			<td nowrap><a href="?orderby=processor_type">processor_type</a></td>
			<td nowrap><a href="?orderby=operating_system">operating_system</a></td>
			<td nowrap><a href="?orderby=ip_address">ip_address</a></td>
			<td nowrap><a href="?orderby=mac_address">mac_address</a></td>
			<td nowrap><a href="?orderby=model">model</a></td>
			<td nowrap><a href="?orderby=raw_model">raw_model</a></td>
			<td nowrap><a href="?orderby=raw_operating_system">raw_operating_system</a></td>
			<td nowrap><a href="?orderby=memory">memory</a></td>
			<td nowrap><a href="?orderby=version">version</a></td>
			<td nowrap><a href="?orderby=processor_architecture">processor_architecture</a></td>
			<td nowrap><a href="?orderby=os_architecture">os_architecture</a></td>
			<td nowrap><a href="?orderby=current_user">current_user</a></td>
			<td nowrap><a href="?orderby=type">type</a></td>
			<td nowrap><a href="?orderby=description">description</a></td>
			<td nowrap><a href="?orderby=domain">domain</a></td>
			<td nowrap><a href="?orderby=manufacturer">manufacturer</a></td>
			<td nowrap><a href="?orderby=last_boot_up_time">last_boot_up_time</a></td>
			<td nowrap><a href="?orderby=created_on">created_on</a></td>
			<td nowrap><a href="?orderby=updated_on">updated_on</a></td>
			
		</tr>
			<?php
				foreach($result as $row){
			?>
		<tr>
			<td nowrap><?php print $row['raw_manufacturer']?></td>
			<td nowrap><?php print $row['name']?></td>
			<td nowrap><a href='https://www.dell.com/support/home/br/pt/brbsdt1/product-support/servicetag/<?php print $row['serial_number']?>/warranty'><?php print $row['serial_number']?></a></td>
			<td nowrap><?php print $row['processor_type']?></td>
			<td nowrap><?php print $row['operating_system']?></td>
			<td nowrap><?php print $row['ip_address']?></td>
			<td nowrap><?php print $row['mac_address']?></td>
			<td nowrap><?php print $row['model']?></td>
			<td nowrap><?php print $row['raw_model']?></td>
			<td nowrap><?php print $row['raw_operating_system']?></td>
			<td nowrap><?php print $row['memory']?></td>
			<td nowrap><?php print $row['version']?></td>
			<td nowrap><?php print $row['processor_architecture']?></td>
			<td nowrap><?php print $row['os_architecture']?></td>
			<td nowrap><?php print $row['current_user']?></td>
			<td nowrap><?php print $row['type']?></td>
			<td nowrap><?php print $row['description']?></td>
			<td nowrap><?php print $row['domain']?></td>
			<td nowrap><?php print $row['manufacturer']?></td>
			<td nowrap><?php print $row['last_boot_up_time']?></td>
			<td nowrap><?php print $row['created_on']?></td>
			<td nowrap><?php print $row['updated_on']?></td>

		</tr>	
		<?php
			}
		?>		
	</table>
