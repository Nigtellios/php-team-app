<div class="current-party">
    <?php
        require 'controllers/parties.php';
        Party::get_party( 0 );
        // TODO -> CHECK WHY IT MAKES AGAIN EVERY CALL FOR CONFIG ETC.
    ?>
    <figure class="current-party__image">
        <img src="views/images/dummy-party-avatar.jpg" alt="Avatar"/>
    </figure>
	<div class="current-party__content">
        <h1>Epic Gamers</h1>
        <span class="content__status content__status--online">
            Online
        </span>
        <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
        <a class="button button--logout" href="#">
            Leave Party
        </a>
	</div>
</div>