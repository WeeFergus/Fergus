<?php
/**
 * Template Name: Flexbox
 *
 * @package blimey
 */
 
get_header(); ?>


<main>
	<section class="flexbox">
		<div class="wrapper">
			<div class="wrapper-inner">
		
			<h1>Flexbox grid</h1><br>
			 	<h3>Evenly Distributed Columns</h3>
			 	
<!-- 1 column -->
			 		<div class="grid grid--full">
				 		<div class="grid-cell">
					 		<div class="demo col-1of1">
						 	</div>
					 	</div>
					</div>
					
<!-- 2 columns -->	
					<div class="grid gutters grid--cols-2">
						<div class="grid-cell">
							<div class="demo col-1of2">
							</div>
						</div>
						<div class="grid-cell">
							<div class="demo col-1of2">
							</div>
						</div>
					</div>
					
<!-- 3 columns -->					
					<div class="grid gutters grid--cols-3">
						<div class="grid-cell">
							<div class="demo col-1of3">
							</div>
						</div>
						<div class="grid-cell">
							<div class="demo col-1of3">
							</div>
						</div>
						<div class="grid-cell">
							<div class="demo col-1of3">
							</div>
						</div>
					</div>

<!-- 4 columns -->	
				<div class="grid gutters grid--cols-4">
					<div class="grid-cell">
						<div class="demo col-1of4">
						</div>
					</div>
					<div class="grid-cell">
						<div class="demo col-1of4">
						</div>
					</div>
					<div class="grid-cell">
						<div class="demo col-1of4">
						</div>
					</div>
					<div class="grid-cell">
						<div class="demo col-1of4">
						</div>
					</div>
				</div>
				
<!-- 6 columns -->
				<div class="grid gutters grid--cols-6">
					<div class="grid-cell">
						<div class="demo col-1of6">
						</div>
					</div>
					<div class="grid-cell">
						<div class="demo col-1of6">
						</div>
					</div>
					<div class="grid-cell">
						<div class="demo col-1of6">
						</div>
					</div>
					<div class="grid-cell">
						<div class="demo col-1of6">
						</div>
					</div>
					<div class="grid-cell">
						<div class="demo col-1of6">
						</div>
					</div>
					<div class="grid-cell">
						<div class="demo col-1of6">
						</div>
					</div>
				</div>

<!-- 12 columns -->
				<div class="grid gutters grid--cols-12">
					<div class="grid-cell">
						<div class="demo col-1of12">
						</div>
					</div>
					<div class="grid-cell">
						<div class="demo col-1of12">
						</div>
					</div> 
					<div class="grid-cell">
						<div class="demo col-1of12">
						</div>
					</div> 
					<div class="grid-cell">
						<div class="demo col-1of12">
						</div>
					</div> 
					<div class="grid-cell">
						<div class="demo col-1of12">
						</div>
					</div> 
					<div class="grid-cell">
						<div class="demo col-1of12">
						</div>
					</div> 
					<div class="grid-cell">
						<div class="demo col-1of12">
						</div>
					</div> 
					<div class="grid-cell">
						<div class="demo col-1of12">
						</div>
					</div> 
					<div class="grid-cell">
						<div class="demo col-1of12">
						</div>
					</div> 
					<div class="grid-cell">
						<div class="demo col-1of12">
						</div>
					</div> 
					<div class="grid-cell">
						<div class="demo col-1of12">
						</div>
					</div> 
					<div class="grid-cell">
						<div class="demo col-1of12">
						</div>
					</div> 
				</div>  

				<br><br>  

				<h3>Sidebar and main content</h3>
				
				<div class="grid gutters grid--1of6">
					<div class="grid-cell">
						<div class="demo col-1of6">
						</div>
					</div>
					<div class="grid-cell">
						<div class="demo">auto
						</div>
					</div>
				</div>
				
				<div class="grid gutters grid--1of4">
					<div class="grid-cell">
						<div class="demo col-1of4">
						</div>
					</div>
					<div class="grid-cell">
						<div class="demo">auto
						</div>
					</div>
				</div>
				
				<div class="grid gutters grid--1of3">
					<div class="grid-cell">
						<div class="demo col-1of3">
						</div>
					</div>
					<div class="grid-cell">
						<div class="demo">auto
						</div>
					</div>
				</div>

				<br><br>  

				<h3>Left / Center / Right content alignment</h3>
				
				<div class="grid gutters grid--1of2">
					<div class="grid-cell">
						<div class="demo col-1of2">
						</div>
					</div>
				</div>

				<div class="grid gutters grid--1of2 grid--center">
					<div class="grid-cell">
						<div class="demo col-1of2">
						</div>
					</div>
				</div>

				<div class="grid gutters grid--1of2 grid--right">
					<div class="grid-cell">
						<div class="demo col-1of2">
						</div>
					</div>
				</div>

				<br><br>
				
				<h3>Nesting</h3>
				
				<div class="grid gutters grid--1of3 grid--nested">
					<div class="grid-cell">
						<div class="demo col-1of3">
						</div>
					</div>
					<div class="grid-cell">
						<div class="demo">     
							<div class="grid gutters grid--1of3 grid--nested">
								<div class="grid-cell">
									<div class="demo col-1of3">
									</div>
								</div>
								<div class="grid-cell">
									<div class="demo">
										<div class="grid gutters grid--1of3 grid--nested">
											<div class="grid-cell">
												<div class="demo col-1of3">
												</div>
											</div>
											<div class="grid-cell">
												<div class="demo">auto
												</div>
											</div>
										</div>        
									</div>
								</div>
							</div>      
						</div>
					</div>
				</div>
				  
				 <br><br>  
				 
				<h3>Vertical alignment</h3>
				
				<div class="grid gutters grid--cols-3 grid--top">
				    <div class="grid-cell">
					    <div class="demo">These cells should be <strong>top-aligned</strong>.
					    </div>
					</div>
					<div class="grid-cell">
						<div class="demo">The first time I stole so that I wouldn't starve, yes. I lost many assumptions about the simple nature of right and wrong. And when I traveled I learned the fear before a crime and the thrill of success. But I never became one of them.
						</div>
					</div>
					<div class="grid-cell">
						<div class="demo">Every man who has lotted here over the centuries, has looked up to the light and imagined climbing to freedom. So easy, so simple! And like shipwrecked men turning to seawater foregoing uncontrollable thirst, many have died trying. And then here there can be no true despair without hope. So as I terrorize Gotham, I will feed its people hope to poison their souls. I will let them believe that they can survive so that you can watch them climbing over each other to stay in the sun. You can watch me torture an entire city. And then when you've truly understood the depth of your failure, we will fulfill Ra's Al Ghul's destiny. We will destroy Gotham.
						</div>
					</div>
				</div>
				
				<div class="grid gutters grid--cols-3 grid--center">
					<div class="grid-cell">
						<div class="demo">These cells should be <strong>center-aligned</strong>.
						</div>
					</div>
					<div class="grid-cell">
						<div class="demo">You want order in Gotham. Batman must take off his mask and turn himself in. Oh, and every day he doesn't, people will die. Starting tonight. I'm a man of my word.
						</div>
					</div>
					<div class="grid-cell">
						<div class="demo"> I had a vision of a world without Batman. The Mob ground out a little profit and the police tried to shut them down one block at a time. And it was so boring. I've had a change of heart. I don't want Mr Reese spoiling everything but why should I have all the fun? Let's give someone else a chance. If Coleman Reese isn't dead in 60 minutes then I blow up a hospital.
						</div>
					</div>
				</div>

				<div class="grid gutters grid--cols-3 grid--bottom">
					<div class="grid-cell">
						<div class="demo">These cells should be <strong>bottom-aligned</strong>.
						</div>
					</div>
					<div class="grid-cell">
						<div class="demo">Now, our operation is small but there is a lot of potential for aggressive expansion. So which of you fine gentlemen would like to join our team? Oh. There's only one spot open right now, so we're gonna have... tryouts.
						</div>
					</div>
					<div class="grid-cell">
						<div class="demo">LYou wanna know how I got them? So I had a wife. She was beautiful, like you, who tells me I worry too much, who tells me I ought to smile more, who gambles and gets in deep with the sharks. Hey. One day they carve her face. And we have no money for surgeries. She can't take it. I just wanna see her smile again. I just want her to know that I don't care about the scars. So, I do this to myself. And you know what? She can't stand the sight of me. She leaves. Now I see the funny side. Now I'm always smiling. 
						</div>
					</div>
				</div>
			</div><!--wrapper-inner-->
		</div><!--wrapper-->
	</section>
</main>

<?php get_footer(); ?>

</body>
</html>