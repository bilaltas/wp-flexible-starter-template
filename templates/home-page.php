<?php
/*
	Template Name: Home Page
*/
get_header();
?>

<main id="home">
	<section>
		<div class="wrap xl-1 container">
			<div class="col">


				<!-- Remove this sample content -->
				<div class="wrap xl-gutter-40">
					<div class="col xl-1-2">


						<h2>Colors</h2>

						<span class="text-color-dark">Dark Color</span><br>
						<span class="text-color-darker">Darker Color</span><br>
						<span class="text-color-darkest">Darkest Color</span><br>
						<span class="text-color-light">Light Color</span><br>
						<span class="text-color-lighter">Lighter Color</span><br>
						<span class="text-color-lightest" style="background-color: black;">Lightest Color</span><br>
						<br><br>


					</div>
					<div class="col xl-1-2">


						<h2>Fonts</h2>

						<span class="font-primary">Primary Font</span><br>
						<span class="font-secondary">Secondary Font</span><br>
						<br><br>


					</div>
					<div class="col xl-1-2">


						<h2>Text</h2>

						<p><b>Paragraph:</b> <i>Lorem ipsum dolor</i>, <u>sit amet consectetur</u> adipisicing elit. <a href="#">Tempora perspiciatis</a> numquam magni minus libero eveniet sed incidunt sapiente suscipit itaque laudantium iure autem facilis, quidem iste hic eum consectetur in? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima atque voluptate placeat nemo, soluta incidunt id quaerat? Autem in id ab possimus veritatis aliquid inventore distinctio eius, eum nisi. Accusantium!</p>
						<br><br>


					</div>
					<div class="col xl-1-2">


						<h2>Titles</h2>

						<h1>Heading 1</h1>
						<h2>Heading 2</h2>
						<h3>Heading 3</h3>
						<h4>Heading 4</h4>
						<h5>Heading 5</h5>
						<h6>Heading 6</h6>
						<br><br>


					</div>
					<div class="col xl-1-2">


						<h2>Contact Form</h2>

						<input type="text" class="full" placeholder="Full-Width Text Input"><br>
						<input type="text" placeholder="Text Input"><br>
						<input type="email" placeholder="Email Input"><br>
						<input type="tel" placeholder="Phone Input"><br>
						<select>
							<option value="">Select input with options</option>
							<option value="">Option 1</option>
							<option value="">Option 2</option>
							<option value="">Option 3</option>
						</select><br>
						<textarea cols="20" rows="5" placeholder="Textarea Input"></textarea><br>
						<button>Submit</button><br>
						<br><br>


					</div>
					<div class="col xl-1-2">


						<h2>Buttons</h2>

						<a href="#" class="button full">Full-Width Button</a><br>
						<a href="#" class="button large">Large Button</a><br>
						<a href="#" class="button">Multi Line<br>Button</a><br>
						<a href="#" class="button">Standard Button</a><br>
						<a href="#" class="button" disabled>Disabled Button</a><br>
						<br><br>


					</div>
					<div class="col xl-1-2">


						<h2>Figure</h2>

						<figure>
							<img src="<?=get_stylesheet_directory_uri()?>/screenshot.png" alt="">
						</figure>
						<br><br>


					</div>
					<div class="col xl-1-2">


						<h2>Standard Image</h2>

						<img src="<?=get_stylesheet_directory_uri()?>/screenshot.png" alt="">
						<br><br>


					</div>
					<div class="col xl-1-2">


						<h2>Standard Video</h2>

						<div class="video-wrapper">

							<video
								src="https://sample-videos.com/video123/mp4/720/big_buck_bunny_720p_10mb.mp4" 
								poster="http://xounts.twelve12.co/wp-content/themes/xounts/img/intro-video-background.jpg" 
								loop playsinline webkit-playsinline></video>

							<div class="play-button">

								<a href="#">PLAY</a>

							</div>

							<div class="pause-button">

								<a href="#">PAUSE</a>

							</div>

						</div>
						<br><br>


					</div>
					<div class="col xl-1-2">


						<h2>Section Covered Video</h2>

						<div class="video-wrapper full">

							<video 
								class="fill"
								src="https://sample-videos.com/video123/mp4/720/big_buck_bunny_720p_10mb.mp4" 
								poster="http://xounts.twelve12.co/wp-content/themes/xounts/img/intro-video-background.jpg" 
								loop playsinline webkit-playsinline></video>

							<div class="play-button">

								<a href="#">PLAY</a>

							</div>

							<div class="pause-button">

								<a href="#">PAUSE</a>

							</div>

						</div>
						<br><br>


					</div>
					<div class="col xl-1-2">


						<h2>Autoplay Video</h2>

						<div class="video-wrapper">

							<video 
								class="fill"
								src="https://sample-videos.com/video123/mp4/720/big_buck_bunny_720p_10mb.mp4" 
								poster="http://xounts.twelve12.co/wp-content/themes/xounts/img/intro-video-background.jpg" 
								loop playsinline webkit-playsinline preload autoplay muted></video>

							<div class="play-button">

								<a href="#">PLAY</a>

							</div>

							<div class="pause-button">

								<a href="#">PAUSE</a>

							</div>

						</div>
						<br><br>


					</div>
					<div class="col xl-1-2">


						<h2>Background Video with Text</h2>

						<div class="video-wrapper bg-video">

							<video
								src="https://sample-videos.com/video123/mp4/720/big_buck_bunny_720p_10mb.mp4" 
								poster="http://xounts.twelve12.co/wp-content/themes/xounts/img/intro-video-background.jpg" 
								loop playsinline webkit-playsinline preload autoplay muted></video>

							<div class="video-text">

								Test content.

							</div>

						</div>
						<br><br>


					</div>
				</div>
				<!-- Remove this sample content -->


			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>