<?php
/**
 * Template Name: GDPR Cookie Banner
 *
 * @package fergus
 */
 
get_header(); ?>

<main>
	<section class="gdpr">
		<div class="wrapper">
			<div class="wrapper-inner">
		
	<p>	The code will display a floating banner at the bottom of the website informing the user that the site is using cookies and giving them a link to a another website with more information about cookies. When the user clicks the "✖" button the banner will set a cookie remembering that the banner was acknowledged so the same user will not be bothered again.</p>
	
	<p>If not using this feature, comment out the &lt;script&gt; before the closing &lt;body&gt; in footer.php.</p>
	
	<p>This demo uses attributes from the box below to stylize the banner.</p>

<pre>font-size - text size of the message and the link (default: 14px)
font-family - font family of the message and the link (default: verdana, arial, sans-serif)
text-align - position of the text (default: center)
height - banner height (default: 31 pixels)
fg - banner text color (default: #333)
bg - banner background color (default: #eee)
link - link text color (default: #31A8F0)
divlink - button text color (default: #000)
divlinkbg - button background color (default: #F1D600)
position - banner position, top or bottom (default: bottom)
message - message text (default: We use cookies to enhance your experience. By continuing to visit this site you agree to our use of cookies.)
linkmsg - link text (default: More info)
moreinfo - where the visitor can read more about cookies (default: https://wikipedia.org/wiki/HTTP_cookie
close-text - the text/symbol for the close button (default: ✖)
effect - effect to use (default: null)
cookie - name for the cookie to store the cookiebanner acceptance information (default: we-love-cookies)
expires - cookie expiry date/time (default is Infinity aka "Fri, 31 Dec 9999 23:59:59 GMT").
cookie-path - Path to set for the cookie
mask - whether to create a mask over the viewport (default: false). Clicking anywhere on the mask is considered as acceptance.
mask-opacity - the opacity to use for the window mask (default: 0.5)
mask-background - optional background style you wish to apply to the mask (default: #999)
zindex - z-index to set on the notice (default: 255). If mask is used, the notice's z-index is automatically incremented by 1 so it appears above the mask)
accept-on-scroll - when is set true window scrolling is considered as acceptance. (default: false)
tracking - Tracking pixel (default: Off - To enable you will need to enter a (image) tracking url or script. Example: http://www.yourdomain.com/tracking.php?pixel)</pre>
			</div>
		</div>
	</section>
</main>

		
<?php get_footer(); ?>

</body>
</html>