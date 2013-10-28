<?php
//fungsi untuk nampilin menu gan
function menu($menu = array()){
	?>
	<ul>
		<?php
		foreach($menu AS $menu1){
		?>
		<li><a href="index.php?halaman=<?php echo nospace($menu1); ?>"><?php echo $menu1; ?></a></li>
		<?php } ?>
		<div style="clear:both;"></div>
	</ul>
	<?php
}
//fungsi untuk ngilangin spasi di URL menu gan
function nospace($string){
	$out = str_replace(' ','-',$string);
	return $out;
}
?>
