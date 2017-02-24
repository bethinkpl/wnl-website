<div class="page thank-you">
	<div class="wrapper">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
			<?php the_content() ?>
		<?php endwhile; endif; ?>
		<div class="aligncenter">
			<a href="<?php echo get_site_url() ?>" class="button button__primary">Przejdź na stronę główną</a>
		</div>
	</div>
</div>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1249125095136018'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1249125095136018&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
