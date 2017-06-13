<?php get_header(); ?>

<div class="advantage" id="js-advantage">
  <div class="container">
    <ul class="advantage-left advantage-list">
      <li class="advantage-item">
        <div class="advantage-icon">
          <svg class="svg-icon" width="37" height="45">
            <use xlink:href="#pin"></use>
          </svg>
        </div>10 км до Киева
      </li>
      <li class="advantage-item">
        <div class="advantage-icon">
          <svg class="svg-icon" width="45" height="44">
            <use xlink:href="#settings"></use>
          </svg>
        </div>Евроремонт
      </li>
      <li class="advantage-item">
        <div class="advantage-icon">
          <svg class="svg-icon" width="30" height="44">
            <use xlink:href="#flag"></use>
          </svg>
        </div>Участок 5 соток
      </li>
      <li class="advantage-item">
        <div class="advantage-icon">
          <svg class="svg-icon" width="43" height="45">
            <use xlink:href="#flower"></use>
          </svg>
        </div>2 сотки под сад
      </li>
      <li class="advantage-item">
        <div class="advantage-icon">
          <svg class="svg-icon" width="49" height="40">
            <use xlink:href="#rain"></use>
          </svg>
        </div>Собственная скважина
      </li>
      <li class="advantage-item">
        <div class="advantage-icon">
          <svg class="svg-icon" width="46" height="46">
            <use xlink:href="#award"></use>
          </svg>
        </div>Качественная сантехника
      </li>
    </ul>
    <div class="advantage-center">
      <span class="points">
        <span class="points-item"></span>
        <span class="points-item"></span>
        <span class="points-item"></span>
        <span class="points-item"></span>
        <span class="points-item"></span>
        <span class="points-item"></span>
        <span class="points-item"></span>
        <span class="points-item"></span>
      </span>
      <div class="advantage-icon">
        <svg class="svg-icon" width="283" height="316">
          <use xlink:href="#home"></use>
        </svg>
      </div>
      <p>5 лет гарантии</p>
    </div>
    <ul class="advantage-right advantage-list">
      <li class="advantage-item">
        <div class="advantage-icon">
          <svg class="svg-icon" width="47" height="35">
            <use xlink:href="#card"></use>
          </svg>
        </div>5-ти камерные панорамные окна
      </li>
      <li class="advantage-item">
        <div class="advantage-icon">
          <svg class="svg-icon" width="64" height="46">
            <use xlink:href="#parking"></use>
          </svg>
        </div>Парковка на 2 машины
      </li>
      <li class="advantage-item">
        <div class="advantage-icon">
          <svg class="svg-icon" width="49" height="46">
            <use xlink:href="#window"></use>
          </svg>
        </div>Мансардные окна
      </li>
      <li class="advantage-item">
        <div class="advantage-icon">
          <svg class="svg-icon" width="47" height="47">
            <use xlink:href="#sun"></use>
          </svg>
        </div>Теплый пол
      </li>
      <li class="advantage-item">
        <div class="advantage-icon">
          <svg class="svg-icon" width="79" height="51">
            <use xlink:href="#gates"></use>
          </svg>
        </div>Откатные ворота
      </li>
      <li class="advantage-item">
        <div class="advantage-icon">
          <svg class="svg-icon" width="72" height="40">
            <use xlink:href="#timber"></use>
          </svg>
        </div>Деревянная доска
      </li>
    </ul>
  </div>
</div>
<?php if (function_exists('ot_get_option')) {
  $view_house = ot_get_option('view_house');
  ?>
  <div class="preview">
    <div class="container">
      <div class="form preview-form">
        <?php if ($view_house) : ?>
          <?php echo do_shortcode($view_house); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php } ?>

<?php
$query = new WP_Query(array(
  'post_type' => 'plan',
  'post_status' => 'publish',
  'posts_per_page' => '2',
  //'order'    => 'ASC',
));
if ($query->have_posts()) : ?>
  <div class="plan">
    <div class="container">
      <?php while ($query->have_posts()) { $query->the_post(); ?>
        <div class="plan-item">
          <article class="plan-content">
            <h2 class="plan-title"><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </article>
          <?php if (has_post_thumbnail()) : ?>
          <div class="plan-preview">
            <a class="plan-floor" href="<?php the_post_thumbnail_url(); ?>" data-lightbox="floor-plan">
              <img class="plan-thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_caption(); ?>">
            </a>
          </div>
          <?php endif; ?>
        </div>
      <?php }
      wp_reset_postdata();
      ?>
    </div>
  </div>
<?php endif; ?>

<?php
$query = new WP_Query(array(
  'post_type' => 'house_photo',
  'post_status' => 'publish',
  'posts_per_page' => '6',
  //'order' => 'ASC',
));
if ($query->have_posts()) : ?>
  <div class="photo">
    <div class="container">
      <div class="photo-list">
        <?php while ($query->have_posts()) {
          $query->the_post(); ?>
          <?php if (has_post_thumbnail()) : ?>
            <div class="photo-item">
              <a class="photo-preview" href="<?php the_post_thumbnail_url(); ?>" data-lightbox="house-photo">
                <img class="photo-thumbnail" src="<?php the_post_thumbnail_url('house-photo'); ?>" alt="<?php the_post_thumbnail_caption(); ?>">
              </a>
            </div>
          <?php endif; ?>
        <?php }
        wp_reset_postdata();
        ?>
        <div class="btn-center">
          <a class="btn btn-primary js-house-value" href="#">
            <?php _e('Узнать стоимость дома', 'brainworks'); ?>
          </a>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php get_footer(); ?>