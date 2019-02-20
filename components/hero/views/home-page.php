<?php
/**
 * The simple hero.
 *
 * @param string $DATA->title
 * @param string $DATA->description
 * @param array $DATA->buttons
 * @param array $DATA->background_image [Image url]
 */
?>

<div class="hero hero-centered-simple dark-overlay-from-left" style="background-image:url(<?php echo $DATA->background_image; ?>)">

	<div class="hero-content">

		<?php if(isset($DATA->hero_img)){ ?>
			<img src="<?php echo $DATA->hero_img; ?>" class="hero-overlay-image" >
		<?php } ?>

		<?php if(isset($DATA->hero_txt) && !empty($DATA->hero_txt)){ ?>
			<h1><?php echo $DATA->hero_txt; ?></h1>
		<?php } ?>


		<?php if(isset($DATA->description) && !empty($DATA->description)){ ?>
			<div class="hero-description">
				<?php echo $DATA->description; ?>
			</div>
		<?php } ?>

		<?php if(isset($DATA->buttons)){ ?>
			<div class="hero-buttons">

				<?php

				$x=0;
				foreach($DATA->buttons as $button){ ?>

					<a <?php echo ($button->type == 'external')? 'target="_blank"' : ''; ?> href="<?php echo $button->url; ?>" class="btn <?php echo ($x == 1)? 'btn-trans-white' : ''; ?> <?php echo ($button->type == 'lightbox')? 'lightbox-open' : ''; ?>" ><?php echo $button->text; ?></a>

				<?php $x++; } ?>


			</div>
		<?php } ?>

	</div>

</div>
