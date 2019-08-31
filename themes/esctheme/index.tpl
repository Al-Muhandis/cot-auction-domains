<!-- BEGIN: MAIN -->
    <h3 style="text-align: center;">Запустить сделку</h3><p style="text-align: center;"><a href="{PHP|cot_url('sbr', 'm=add&role=0')}" class="btn btn-large btn-success">Я покупатель</a> 
    <a href="{PHP|cot_url('sbr', 'm=add&role=1')}" class="btn btn-large btn-success">Я продавец</a>
    <a href="{PHP|cot_url('sbr', 'm=add&role=2')}" class="btn btn-large btn-success">Я брокер</a></p>	
<div class="row">
	<div class="span12">


		<!-- IF {PHP.cot_plugins_active.paytop} -->
		{PHP|cot_get_paytop ('top')}
		<!-- ENDIF -->	
	</div>
</div>
<div class="row">
	<div class="span3">

	</div>
	<div class="span9">
		
		<!-- IF {PHP.cot_plugins_active.paypro} -->
			<!-- IF !{PHP|cot_getuserpro()} AND {PHP.cfg.plugin.paypro.projectslimit} > 0 AND {PHP.cfg.plugin.paypro.projectslimit} <= {PHP.usr.id|cot_getcountprjofuser($this)} -->
			<div class="alert alert-warning">{PHP.L.paypro_warning_projectslimit_empty}</div>
			<!-- ENDIF -->
			<!-- IF !{PHP|cot_getuserpro()} AND {PHP.cfg.plugin.paypro.offerslimit} > 0 AND {PHP.cfg.plugin.paypro.offerslimit} <= {PHP.usr.id|cot_getcountoffersofuser($this)} -->
			<div class="alert alert-warning">{PHP.L.paypro_warning_offerslimit_empty}</div>
			<!-- ENDIF -->
		<!-- ENDIF -->
		
	</div>
</div>
	
<!-- END: MAIN -->