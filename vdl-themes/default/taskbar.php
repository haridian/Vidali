<div id=taskbar>
	<nav id=buttons>
		<?php if ($visitor == ADMIN){?>
			<div class="grid_1">
					<a href="index.php?pg=admin" title="Panel de Administración"><img src="style/icons/network.png"></a>
				</div>
		<?php } ?>
		<div class="grid_1">
			<span id="pulsa"><img src="style/icons/comment.png"></span>
		</div>
		<div class="grid_1">
			<img src="style/icons/mail.png">
		</div>
		<div class="grid_1">
			<img src="style/icons/flag.png">
		</div>
		<div class="grid_1">
			<?php echo'<a href="vdl-includes/log.php?func=logout" title="'.M_LOU.'"><img src="style/icons/lock.png"></a>';?>
		</div>
	</nav>
</div>