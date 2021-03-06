<html>

<head>
		<meta charset="utf-8" />
		<title>Dashboard - AMI</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->
 
		<!--fonts-->

		<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->

		<!--ace styles-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font.css" />

		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/admin/custom.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any-->

		<!-- Print Print Print  -->
		<style type="text/css" media ="screen">
		.foot{display: none;}
		
	
		</style>

		<style type="text/css" media ="print">
			body,td,tr,a{ margin:0;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:12px;line-height:20px;color:#333;background-color:#fff}
			form{ display: none;}
			h1{ color: red !important; }
			a{ color:#005580 !important;}
    		a[href]:after {content: none !important;}
		</style> 

		<!-- /Print Print Print  --> 

	</head>
<body>
<div class="center">
	<a class="brand" href="#">
	<img width="120px" src="<?php echo base_url();?>assets/images/logo.jpg" alt=""> AMI - Human Resource Training and Management System</a>	
</div>
<!--
<form class="form-inline" method="POST" action="<?php echo "";?>">
<fieldset>
<label for="byBatch">&nbsp;by Batch :</label>
<select id="byBatch">
	<?php if(isset($records2)) : foreach($records2 as $row) : ?>
		<option><?php echo $row->batch_control_no;?></option>
	<?php endforeach;?>
	<?php endif; ?>


</select>
	<button onclick="return false;" class="btn btn-info btn-small">
		Submit
	</button>
</fieldset>
</form>
-->
<h1 class="">Gradesheet : <?php echo $this->input->post('batch')?></h1>
<table class="table table-striped table-bordered"> 
	<thead>
	<tr>
		<th class="center">
			Training ID
		</th>
		<th class="center"> Name
		</th>
		<th class="center">
			Scores
		</th>
		<th  class="center">
			Status
		</th>
	</tr> 
	</thead>
	<tbody>
		<?php if(isset($records)) : foreach($records as $row) : ?>
				<tr> 
					<td width="200px" height="10px"><?php echo $row->trainee_id;?></td>
					<td width="500px" height=""><?php echo $row->last_name.', '.$row->first_name.' '.$row->middle_name;?></td>
					<td width="20px" class="center"><?php echo $row->scores."/".$row->over;?></td>
					<td width="30px" class="center"><?php echo $row->status?></td>
				</tr>
				<?php endforeach;?> 

			<?php endif; ?>
	</tbody>

</table> 
 <p class="foot">
  	Printed by : <u> <?php echo $this->session->userdata("first_name") . " " . $this->session->userdata("last_name");?></u> <br>
  	Date : <u><?php echo date('Y-m-d');?></u><br>
  	Time : <u><?php echo date('h:i'); if(date('H')<"12"){echo " AM";}else{echo " PM";}?></u><br>
  	Signed : <u>__________________</u>
  </p>
<footer>
			<p class="pull-left">&copy; <a href="" target="_blank">Alliance Mansols Incorporated</a> 2013</p>
			<p class="pull-right">Powered by: <a href="">TDC</a></p>
</footer>

</body>		
</html> 