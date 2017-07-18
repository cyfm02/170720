		<div data-role="header" data-position="fixed">
			<h3>Lab</h3>
			<div data-role="navbar">
				<ul>
					<li><a href="index.php" data-icon="home" data-theme="b" data-ajax="false">Home</a></li>
					<?php if (!isset($_COOKIE["userName"])) : ?>
					<li><a href="login.php" data-icon="star" data-theme="b" data-ajax="false">Login</a></li>
					<?php else: ?>
					<li><a href="login.php?logout=1" data-icon="star" data-theme="b" data-ajax="false">Logout</a></li>
					<?php endif; ?>
					<li><a href="member.php" data-icon="gear" data-theme="b" data-ajax="false">MemberOnly</a></li>
				</ul>
			</div>
		</div>
