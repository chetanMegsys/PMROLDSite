<?php
	if(!isset($_SESSION['flag']) || $_SESSION['flag']!=1){
		redirect(WEBSITE_URL."login");		
	}else{
?>
<div class="logoutBtn"style="position:fixed;left:12px;bottom:12px;z-index:999">
	<a class="btn btnPrimary mx-2" href="<?php echo WEBSITE_URL."logout"; ?>" style="padding: 2px 10px;border-radius:5px;">
		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16" style="vertical-align:middle;">
		  <path d="M7.5 1v7h1V1h-1z"/>
		  <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
		</svg>
	Logout
</a>
</div>
<?php
	}
?>