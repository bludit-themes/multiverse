<footer id="footer" class="panel">

	<div class="inner split">

		<div>

			<section>

				<?php
				// Class name of the plugin
				$className = 'pluginAbout';

				// Get the Plugin-Object
				$plugin = getPlugin($className);

				if (pluginActivated($className)) {
					echo $plugin->label();
					echo $plugin->siteSidebar();
				}

				?>
				
				<p>

			</section>

		</div>

		<div>

			<section>

				<!-- Social Networks -->

				<h2><?php $L->p('Follow me on...') ?></h2>				

					<ul class="icons">

						<?php if ($site->twitter()): ?>
						<li><a href="<?php echo $site->twitter(); ?>" class="icon brands fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
						<?php endif ?>

						<?php if ($site->facebook()): ?>
						<li><a href="<?php echo $site->facebook(); ?>" class="icon brands fa-facebook-f" target="_blank"><span class="label">Facebook</span></a></li>
						<?php endif ?>
						
						<?php if ($site->instagram()): ?>
						<li><a href="<?php echo $site->instagram(); ?>" class="icon brands fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
						<?php endif ?>
						
						<?php if ($site->codepen()): ?>
						<li><a href="<?php echo $site->codepen(); ?>" class="icon brands fa-codepen" target="_blank"><span class="label">Codepen</span></a></li>
						<?php endif ?>
						
						<?php if ($site->gitlab()): ?>
						<li><a href="<?php echo $site->gitlab(); ?>" class="icon brands fa-gitlab" target="_blank"><span class="label">GitLab</span></a></li>
						<?php endif ?>
						
						<?php if ($site->github()): ?>
						<li><a href="<?php echo $site->github(); ?>" class="icon brands fa-github" target="_blank"><span class="label">GitHub</span></a></li>
						<?php endif ?>
						
						<?php if ($site->linkedin()): ?>
						<li><a href="<?php echo $site->linkedin(); ?>" class="icon brands fa-linkedin-in" target="_blank"><span class="label">LinkedIn</span></a></li>
						<?php endif ?>
						
						<?php if ($site->mastodon()): ?>
						<li><a href="<?php echo $site->mastodon(); ?>" class="icon brands fa-mastodon" target="_blank"><span class="label">Mastodon</span></a></li>
						<?php endif ?>
						
						<?php if ($site->dribbble()): ?>
						<li><a href="<?php echo $site->dribbble(); ?>" class="icon brands fa-dribbble"target="_blank"><span class="label">Dribbble</span></a></li>
						<?php endif ?>
						
						<?php if ($site->vk()): ?>
						<li><a href="<?php echo $site->vk(); ?>" class="icon brands fa-vk" target="_blank"><span class="label">VK</span></a></li>
						<?php endif ?>
						
					</ul>
				
			</section>
			
			<p class="copyright">
				<?php echo $site->footer(); ?> | Powered by <a target="_blank" href="https://www.bludit.com">Bludit</a>
			</p>
			
		</div>
		
	</div>
	
</footer>

<footer id="privacy" class="panel">

	<div class="inner">

		<div>
			
			<section>

				<?php
				// Class name of the plugin
				$className = 'pluginTextarea';

				// Get the Plugin-Object
				$plugin = getPlugin($className);

				if (pluginActivated($className)) {
					echo $plugin->label();
					echo $plugin->siteSidebar();
				}
				?>
				
				<p>

			</section>

		</div>

	</div>

</footer>
