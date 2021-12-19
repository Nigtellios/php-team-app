<?php
	include 'header.php';
?>

<main>
    <div class="row">
		<?php
			include 'views/modules/sidebar/sidebar.php';
			include 'views/modules/members/members.php';
		?>
    </div>
</main>

<?php
	include 'data/db.php';
	include 'footer.php';