<?php
  wp_head();
  get_header();
?>
<main>
  <section data-anchor="intro">
    <div>
      <ippm-intro>
        <ippm-hex></ippm-hex>
        <div>
          <h2>Interactive Posts</h2>
          <h3>IPPM: A WordPress Package Manager</h3>
          <p>Craft beautiful and highly interactive posts with WordPress packages. Packages contain assets that can be attached to each post to enhance the experience.</p>
          <p><ippm-button link="https://wordpress.org/plugins/interactive-posts-ippm/">Download @WordPress</ippm-button></p>
          <br />
          <ippm-nav hide-bar></ippm-nav>
        </div>
      </ippm-intro>
    </div>
  </section>
  <section data-anchor="demo">
    <div>
      <ippm-gallery-container>
        <label>
          Show:&nbsp;&nbsp;
          <select>
            <option value="all">All</option>
            <option value="nature">Nature</option>
            <option value="business">Business</option>
            <option value="animal">Animal</option>
            <option value="food">Food</option>
            <option value="beauty">Beauty</option>
          </select>
        </label>
        <ippm-gallery>
          <ippm-card
            size="2x2"
            image="https://burst.shopifycdn.com/photos/aerial-photo-of-paved-road-surrounded-by-trees.jpg"
            data-groups='["nature"]'
            heading="Nature 1">
          </ippm-card>
          <ippm-card
            size="2x1"
            image="https://burst.shopifycdn.com/photos/tech-meeting-flatlay.jpg"
            data-groups='["business"]'
            heading="Business 1">
          </ippm-card>
          <ippm-card
            size="2x1"
            image="https://burst.shopifycdn.com/photos/grey-and-white-cat.jpg"
            data-groups='["animal"]'
            heading="Animal 2">
          </ippm-card>
          <ippm-card
            size="1x1"
            image="https://burst.shopifycdn.com/photos/hand-holds-up-a-two-scoop-ice-cream-cone.jpg"
            data-groups='["food"]'
            heading="Food 1">
          </ippm-card>
          <ippm-card
            size="1x1"
            image="https://burst.shopifycdn.com/photos/open-laptop-and-cell-phone-on-table.jpg"
            data-groups='["business"]'
            heading="Business 2">
          </ippm-card>
          <ippm-card
            size="2x1"
            image="https://burst.shopifycdn.com/photos/woman-grasping-flowers.jpg"
            data-groups='["beauty"]'
            heading="Beauty 1">
          </ippm-card>
          <ippm-card
            size="1x1"
            image="https://burst.shopifycdn.com/photos/makeup-powders-and-brush.jpg"
            data-groups='["beauty"]'
            heading="Beauty 2">
          </ippm-card>
          <ippm-card
            size="1x1"
            image="https://burst.shopifycdn.com/photos/person-enjoys-lunch-alone-in-a-sunlit-restaurant.jpg"
            data-groups='["food"]'
            heading="Food 2">
          </ippm-card>
          <ippm-card
            size="1x1"
            image="https://burst.shopifycdn.com/photos/green-snake-on-black-background.jpg"
            data-groups='["animal"]'
            heading="Animal 1">
          </ippm-card>
        </ippm-gallery>
      </ippm-gallery-container>
    </div>
  </section>
  <section data-anchor="spd">
    <div>
      <ippm-demo-cards>
        <?php
          $spdArgs = array(
            'post_type' => 'single-page-demo',
            'post_status' => 'publish',
            'posts_per_page' => 99,
          );

          $spdLoop = new WP_Query( $spdArgs );

          while ( $spdLoop->have_posts() ) : $spdLoop->the_post();
            $spdURL = get_post_meta(get_the_ID(), 'url');
            echo '<ippm-demo-card heading="'. get_the_title() .'" excerpt="'. get_the_excerpt() .'" image="'. get_the_post_thumbnail_url() .'" url="'. $spdURL[0] .'"></ippm-demo-card>';
          endwhile;

          wp_reset_postdata();
        ?>
      </ippm-demo-cards>
    </div>
  </section>
  <section data-anchor="screenshots">
    <div>
    </div>
  </section>
  <section data-anchor="faqs">
    <div>
      <!-- <h2>FAQs</h2> -->
    </div>
  </section>
</main>
<?php
  get_footer();
  wp_footer();
