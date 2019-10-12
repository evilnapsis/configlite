<div class="container">
<div class="row">
<div class="col-md-12">
<div class="jumbotron">
<h2>Bienvenido a ConfigLite</h2>
<p>ConfigLite es un modulo de configuraciones para sistemas en PHP y MySQL.</p>
</div>



</div>
</div>


<div class="row">
<div class="col-md-12">
<h2>Resultados</h2>
<?php
$company_name = ConfigurationData::getByPreffix("company_name");
?>
<p><?php echo $company_name->label; ?>: <?php echo $company_name->val; ?></p>
<?php
$company_name = ConfigurationData::getByPreffix("company_name");
?>
<p><?php echo $company_name->label; ?>: <?php echo $company_name->val; ?></p>

<?php
$title = ConfigurationData::getByPreffix("title");
?>
<p><?php echo $title->label; ?>: <?php echo $title->val; ?></p>

<?php
$admin_email = ConfigurationData::getByPreffix("admin_email");
?>
<p><?php echo $admin_email->label; ?>: <?php echo $admin_email->val; ?></p>

<?php
$logo = ConfigurationData::getByPreffix("logo");
?>
<p><?php echo $logo->label; ?>: <img src="storage/configuration/<?php echo $logo->val; ?>"  style="width: 640px; height: 480px; "></p>

<?php
$otra_imagen = ConfigurationData::getByPreffix("otra_imagen");
?>
<p><?php echo $otra_imagen->label; ?>: <img src="storage/configuration/<?php echo $otra_imagen->val; ?>"  style="width: 640px; height: 480px; "></p>



</div>
</div>

</div>