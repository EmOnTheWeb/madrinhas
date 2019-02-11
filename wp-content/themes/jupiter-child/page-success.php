<?php /* Template Name: Success Page */ 


get_header();

Mk_Static_Files::addAssets('mk_button'); 
Mk_Static_Files::addAssets('mk_audio');
Mk_Static_Files::addAssets('mk_swipe_slideshow');

mk_build_main_wrapper( mk_get_view('singular', 'wp-success', true) );

?>
<div class = 'specialization-stats-background'>
	<div class = 'custom-container specialization-stats'>
		
			<div class = 'specialization'>
				<div class = 'half-width'>
					<i class="fa fa-graduation-cap specicalization__icon" aria-hidden="true"></i>

					<div class = 'specialization__text'>
						<span class = 'text__number'><span class='count'>5</span></span>  Graduated in <br><span class = 'text__specialization'>teaching</span>

					</div>
				</div>

				<div class = 'half-width'>
					<i class="fa fa-briefcase specicalization__icon" aria-hidden="true"></i>

					<div class = 'specialization__text'>
						<span class = 'text__number'><span class='count'>2</span></span>  Graduated in <br><span class = 'text__specialization'>business studies</span>

					</div>
				</div>
			</div>

			<div class = 'specialization'>
				<div class = 'half-width'>
					<i class="fa fa-stethoscope specicalization__icon" aria-hidden="true"></i>


					<div class = 'specialization__text'>
						<span class = 'text__number'><span class='count'>8</span></span>  Graduated in <br><span class = 'text__specialization'>medicine / medical science</span>

					</div>
				</div>

				<div class = 'half-width'>
					<i class="fa fa-users specicalization__icon" aria-hidden="true"></i>

					<div class = 'specialization__text'>
						<span class = 'text__number'><span class='count'>2</span></span>  Graduated in <br><span class = 'text__specialization'>performing arts</span>

					</div>
				</div>
			</div>

			<div class = 'specialization'>
				<div class = 'half-width'>
					<i class="fa fa-medkit specicalization__icon" aria-hidden="true"></i>

					<div class = 'specialization__text'>
						<span class = 'text__number'><span class='count'>1</span></span>  Graduated in <br><span class = 'text__specialization'>nursing</span>

					</div>
				</div>
				<div class = 'half-width'>
					<i class="fa fa-paw specicalization__icon" aria-hidden="true"></i>

					<div class = 'specialization__text'>
						<span class = 'text__number'><span class='count'>1</span></span>  Graduated in <br><span class = 'text__specialization'>veterinary science</span>

					</div>
				</div>
			</div>

			<div class = 'specialization'>
				<div class = 'half-width'>
					<i class="fa fa-wrench specicalization__icon" aria-hidden="true"></i>

					<div class = 'specialization__text'>
						<span class = 'text__number'><span class='count'>2</span></span>  Graduated in <br><span class = 'text__specialization'>Engineering</span>

					</div>
				</div>
				<div class = 'half-width'>
					<i class="fa fa-building specicalization__icon" aria-hidden="true"></i>

					<div class = 'specialization__text'>
						<span class = 'text__number'><span class='count'>1</span></span>  Graduated in <br><span class = 'text__specialization'>Interior Design</span>

					</div>
				</div>
			</div>
	
	</div>
</div>
<?php 
get_footer();













