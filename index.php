<?php get_header(); ?>

<?php get_template_part( 'blocks/header' ); ?>
  

  	<?php if ( have_posts() ) : ?>

      <div class="postWall">

        <div class="featuredOne">
          <ul>
            <?php
              $query = new WP_Query( 'posts_per_page=2&tag=featuredOne&orderby=rand' );
              // The Loop
              while ( $query->have_posts() ) {
                $query->the_post();
                get_template_part( 'blocks/featuredOne', get_post_type() );
              }
              wp_reset_postdata();
            ?>
          </ul>
        </div>

        <div class="categories">
            <a href="/category/google-nest/"><h3>Google Nest</h3></a>
            <a href="/category/robot-vacuums/"><h3>Robot Vacuums</h3></a>
            <a href="/category/electric-cars/"><h3>EVs</h3></a>
            <a href="/category/smart-home/"><h3>Smart Home</h3></a>
        </div>

        <div class="featuredTwo">
          <ul>
            <?php
              $query = new WP_Query( 'posts_per_page=3&tag=featuredTwo&orderby=rand' );
              // The Loop
              while ( $query->have_posts() ) {
                $query->the_post();
                get_template_part( 'blocks/featuredTwo', get_post_type() );
              }
              wp_reset_postdata();
            ?>
          </ul>
        </div>

        <div class="posts">
          <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'blocks/content', get_post_type() ); ?>
          <?php endwhile; ?>
        </div>

      </div>

      <div class="pagination"><?php get_template_part( 'blocks/custom-pager' ); ?></div>

<style>
	
	.postPage {
		padding: 5rem 0 10rem 0;
		width:100%;
		max-width:820px;
	}
	
</style>
<div class="postPage">
<div class="mainContent">
		<div class="postPageContent">
			<h2>
				Living Smarter With Technology
			</h2>
				<!-- wp:paragraph -->
			<p><strong>Living-smarter.com is about living your life smarter together with technology. The topic is broad, but I focus on the things that'll give you inspiration, helpful insights and knowhow to utilize technology in your everyday life. </strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p>Technology has been on an exponential curve over the last couple of decades, not just in hardware but also in intelligence and data gathered. The amount of data gathered is still on an exponential curve and this is because of IoT. You may or may not have heard about IoT, that's okay. It stands for Internet of Things and actually just means that everything is getting connected to the internet. </p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p>A good example, you might even think is too obvious, is your smartphone. The first smartphone was released in 1992, but smartphones didn't really come to market before the iPhone got introduced in 2007. From here it exploded and within a few years, it seemed like everyone had a smartphone and was suddenly connected. </p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p>The explosion of the smartphone market enabled microtechnology to explode as well. This meant that pretty much everything could now be connected to the internet like your watch, fridge, tv, car, lights and so on. It also enabled smart communication between household items and this is when the term "smart" really comes into play. </p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><strong>When devices can connect to the internet and speak to each other you call it a "smart" device. So smart lighting is lighting you can turn on and off from other devices like your phone or watch.</strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p>I write a lot about Smart Home stuff on this blog. You can say it is the primary topic/category or niche for the website. The reason for this is, that your home is probably where you spend most of your spare time and on top of that the place where most devices are connected to each other. So basically this is where you live with technology. </p>
			<!-- /wp:paragraph -->

			<!-- wp:heading -->
			<h2>How do you live smarter with technology?</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><strong>Firstly, you should have the patience to learn the technology. The best way to learn smart technology is to integrate it into your daily habits. My first piece of smart technology, other than my iPhone, was a Samsung smart TV.</strong> </p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p>My smart TV could connect to my WiFi and with both my iPhone and smart TV connected to the same WiFi I could control the TV with my iPhone and use it as a remote. </p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p>So from that moment I haven't used my normal TV remote other than to occasionally turn the TV on and off. </p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p>Bit after bit I've replaced items in my house with smart items instead, like my lighting is smart light bulbs from Philips Hue, my vacuum cleaner is a robot vacuum, my lawnmower is a robot lawnmower, my car connects to my phone with apple car play and the list goes on. </p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p>Living smarter with technology is about removing steps in any process to make stuff easier, faster or more comfortable to do. It's about connecting daily things so all your devices communicate with each other intelligently. One example is, I can ask my Google Nest to turn on the lights or play music through my surround sound or play a specific movie on Netflix. In each example, the smart technology improves my user experience like I don't have to walk up to the light switch for turning it off.</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading -->
			<h2>How does technology make our lives easier?</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><strong>Technology is making every day easier as it evolves. This is because we develop technology around the way we live whether that be to transport easier from A to B, learning stuff more quickly and effectively or making it so we can work from home and actually have a work-life balance. </strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3} -->
			<h3>Ease of information</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Information is increasingly getting more available to everyone on the planet. Soon it'll be available to even the poorest people on earth, which is fantastic. Even twenty years ago it was hard to believe what kind of information we all would possess in the palm of our hands. </p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p>This has greatly impacted the way we educate and get educated ourselves. Half my education was spent online getting educated by someone I've never met and never talked to and most likely never will. The ability to research and browse through millions upon millions of articles, science papers, videos and podcasts is truly one of the great wonders of technology. </p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><strong>Smart technology has improved the availability of information in a very significant way and will continue to for a very long time to come. </strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3} -->
			<h3>Accessibility</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Technology has also helped those with accessibility needs. Hearing aids, contact lenses, computers that can read, voice commands and so on. Think about this, right now it's pretty much only fortunate people who have the freedom of driving a car. In the future everyone, even blind people who will be owning a car and having the freedom to get wherever whenever. </p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3} -->
			<h3>Automation</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>The automation of everything is speeding everything up in so many places. Simple things as robot vacuums, robot mowers or smart lighting are stuff you might not think have a huge impact. But the hour a week you don't need to vacuum, the hour a week you don't need to cut the grass or the energy savings smart lighting brings is truly making a huge impact over time. </p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><strong>In the near future, you'll be able to start your workday in the car, travel across the world in a couple of hours, have AI taking care of all your basic needs like calling your hairdresser or making plans with your family and friends. </strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p>Time is precious to us, so automation will take over 90% of what we do every day today in a matter of 10-15 years. </p>
			<!-- /wp:paragraph -->

			<!-- wp:heading -->
			<h2>The last bit</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>I absolutely love technology and how we use it in our daily lives. I also am very passionate about giving you the resource you need, whether that be finding a funny name for your Roomba or answering your questions about Google Nest or teaching you how to get a better WiFi connection. </p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><strong>Everything about living with technology and getting smarter at it. </strong></p>
			<!-- /wp:paragraph -->	
		</div>
</div>
</div>
  		<?php else : ?>
  		<?php get_template_part( 'blocks/not_found' ); ?>

  	<?php endif; ?>

  

<?php get_footer(); ?>
