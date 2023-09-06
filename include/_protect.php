<?php
if(!isset($_SESSION["connected"]) && $_SESSION["connected"] != "ok") {
	header("Location: /index.php");
}