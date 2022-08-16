<?php

/**
 * Adds Blog Widget widget.
 */
class BlogWidget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
                'blog_widget', // Base ID
                'Mademoiselle Blog_Widget', // Name
                array('description' => __('Display 3 Mademoiselle Blog', 'Mademoiselle'),) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);

        echo $before_widget;
        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }

        $queryArgs = array(
            'posts_per_page' => 3,
            'orderby' => 'DSC'
        );
        $blog = new WP_Query($queryArgs);

        while ($blog->have_posts()) {
            $blog->the_post();
            ?>


            <article class="about-item animation text-center mb-5" data-animation="slideUp">
                <a href="<?php the_permalink();  ?>" class="d-block position-relative">
                    <img class="d-block" src="<?php the_post_thumbnail('blog-list'); ?>" alt=""/>
                </a>
                <div class="about-news position-absolute">
                    <p class="date"><?php the_date('j/m/Y'); ?></p>
                    <p class="about-news-text text-uppercase"><?php the_title(); ?></p>
                </div>
            </article>
            <?php
        }




        wp_reset_postdata();

        echo $after_widget;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance) {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'text_domain');
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';

        return $instance;
    }

}

// class Blog Widget
?>

<?php

// Register BlogWidget widget


function mademoiselle_custom_widget() {
    register_widget('BlogWidget');
}

add_action('widgets_init', 'mademoiselle_custom_widget');
?>
