<?php get_header(); ?>
  <div id="main">
  <a name="About"></a>
    <h1 class="w3-center w3-text-black">THE BRAND</h1>
    <p class="w3-text-dark-gray">
      My name is Kyle C Moore. Welcome to my brand. This website is all about and dedicated to my fans. Thank you for visiting me. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <blockquote class="w3-panel w3-leftbar w3-grey">
      <p class="w3-xlarge w3-serif">
      <i>"Make it as simple as possible, but not simpler."</i></p>
      <p>Albert Einstein</p>
    </blockquote>
  </div>
  <!-- / end main -->

  <a name="Blog"></a>
  <div class="para-two">
    <h2 class="w3-center w3-text-blue-gray w3-wide w3-xxxlarge">THE BLOG</h2>
  </div> <!-- parallax img -->

  <div class="w3-blue-gray" id="content">
    	   <?php if (!is_single() && !is_page() && !is_front_page()) : ?>

           <h1 class="w3-center"><?php wp_title(' ', true, 'right'); ?></h1>

         <?php endif; ?>

        <?php /* begin the loop */ if (have_posts()) : ?>

		    <?php while (have_posts()) : the_post(); ?>

			  <?php if (is_page()) : /* show page contents */ ?>

                <div class="pagecontent" id="post-<?php the_ID(); ?>">
                  <h5 class=""><?php the_title(); ?></h5>
                  <?php the_content('Read more &gt;'); ?>
                  <p><?php wp_link_pages('next_or_number=number&pagelink=page %'); ?></p>
                  <p><?php edit_post_link('Edit', '[ ', ' ]'); ?></p>
                </div>
                <?php comments_template(); ?>

            <?php elseif (is_search()) : /* show search results */ ?>

                <div class="searchresults">
                <div class="post" id="post-<?php the_ID(); ?>">
                  <div class="postcontents">
                    <h1 class=""><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                    <?php the_excerpt(); ?> <a href="<?php the_permalink() ?>">
                    <?php the_permalink() ?></a>
                  </div>
                </div>
                </div>

            <?php else : /* show post contents */ ?>

      <div class="post" id="post-<?php the_ID(); ?>">
          <div class="postcontents">

          <?php if (!is_single()) : ?>
        <h2 class="w3-center" id="blog-title-link">
          <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </h2>   <!-- / Blog Title Control -->
                        <?php else : ?>
                          <h1 class="w3-center w3-text-light-gray"><?php the_title(); ?></h1>
                        <?php endif; ?>

                        <?php the_content('Read more &gt;'); ?>
                        <p class="w3-text-light-gray"><?php wp_link_pages('next_or_number=number&pagelink=page %'); ?></p>
                    </div>
                    <div class="postmeta">
                    <p class="w3-text-light-gray">
                      <?php the_tags('Tags: ', ', ', ' | '); ?>
                      <?php the_category(', ') ?> | <a href="<?php the_permalink() ?>">Permalink</a> |
                      <?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?> | <?php edit_post_link('Edit', ' ', ' | '); ?> Posted <?php the_date() ?> by  <?php the_author_link(); ?>
                    </p>
                    </div>
                    <?php if(is_single) comments_template(); ?>
                </div>
            <?php endif; /* end if page or post */ ?>

        <?php endwhile;/* end the main loop */ ?>


        <?php /* post navigation */ ?>
        <?php if (is_single()) : ?>
            <div class="postnavigation">
                <?php previous_post_link('%link | ', '<span>&lt;</span> Previous post') ?>
                <?php next_post_link('%link', 'Next post <span>&gt;</span>') ?>
            </div>
        <?php endif; ?>
        <?php if (  $wp_query->max_num_pages > 1 ) : ?>
            <div class="postnavigation">
                <?php next_posts_link('Older posts <span>&gt;</span>') ?>
                <?php previous_posts_link('<span>&lt;</span> Newer posts') ?>
            </div>
        <?php endif; ?>

        <?php else : /* show page not found message */ ?>

        <div class="pagecontent pagenotfound">

            <h1>Page not found</h1>

            <p>Sorry, the page you are looking for is not available. It may have moved, or you may have followed a bad link. Please
            <a href="<?php bloginfo('url') ?>">visit our homepage</a> to find what you're looking for.</p>

        </div>

        <?php endif; /* end if have_posts */ ?>


  </div><!-- / end content -->
  <a name="Contact"></a>
    <div class="para-three">
      <h2 class="w3-center w3-wide w3-xxxlarge w3-text-lime">CONTACT ME</h2>
    </div>

<?php /* footer */ get_footer(); ?>
