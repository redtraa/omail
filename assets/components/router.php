<?php
	if (isset($_GET['menu'])) {
		if ($_GET['menu'] == 'suratmasuk') {
			require_once 'surat_masuk.php';
		}
	}else {
		require_once 'dashboard.php';
	}
?>