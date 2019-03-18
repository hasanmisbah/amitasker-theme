<?php
// Adds widget: Amitasker Pricing Plan
class Amitaskerpricingplan_Widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            'amitaskerpricingplan_widget',
            esc_html__('Amitasker Pricing Plan', 'amitasker'),
            array('description' => esc_html__('Pricing Plan', 'amitasker')) // Args
        );
    }

    private $widget_fields = array(
        array(
            'label' => 'Packages Name',
            'id' => 'name',
            'type' => 'text',
        ),
        array(
            'label' => 'Package Description',
            'id' => 'description',
            'type' => 'text',
        ),
        array(
            'label' => 'Package Content',
            'id' => 'content',
            'type' => 'tinymce',
        ),
        array(
            'label' => 'Action Text',
            'id' => 'action_text',
            'type' => 'text',
        ),
        array(
            'label' => 'action Link',
            'id' => 'action_link',
            'type' => 'url',
        ),
    );

    public function widget($args, $instance)
    {
        echo $args['before_widget'];

        echo('
            <div class="single-package">
                <h2 class="package-title">'. $instance['name'] .'</h2>
                <span>'. $instance['description'] .'</span>
                <div class="package-item">
                    <p>'. $instance['content'] .'</p>
                </div>
                <a href="'. $instance['action_link'] .'" class="btn btn-ami btn-primary">'. $instance['action_text'] .'</a>
            </div>
        ');

        echo $args['after_widget'];
    }

    public function field_generator($instance)
    {
        $output = '';

        foreach ($this->widget_fields as $widget_field) {
            $default = '';

            if (isset($widget_field['default'])) {
                $default = $widget_field['default'];
            }
            $widget_value = !empty($instance[$widget_field['id']]) ? $instance[$widget_field['id']] : esc_html__($default, 'amitasker');
            switch ($widget_field['type']) {
                case 'textarea':
                    // $output .= '<p>';
                    // $output .= '<label for="' . esc_attr($this->get_field_id($widget_field['id'])) . '">' . esc_attr($widget_field['label'], 'amitasker') . ':</label> ';
                    // $output .= '<textarea class="widefat" id="' . esc_attr($this->get_field_id($widget_field['id'])) . '" name="' . esc_attr($this->get_field_name($widget_field['id'])) . '" rows="6" cols="6" value="' . esc_attr($widget_value) . '">' . $widget_value . '</textarea>';
                    // $output .= '</p>';

                        /*** add this code ***/
                        //$rand = rand(0, 999);

                        printf(
                            '<input type="hidden" id="%s" name="%s" value="%d" />',
                            $this->get_field_id('the_random_number'),
                            $this->get_field_name('the_random_number'),
                            $rand
                        );



                        /*** add this code ***/
                            $rand    = rand( 0, 999 );
                            $ed_id   = $this->get_field_id( 'wp_editor_' . $rand );
                            $ed_name = $this->get_field_name( 'wp_editor_' . $rand );

                            $content   = 'Hello World!';
                            $editor_id = $ed_id;

                            $settings = array(
                            'media_buttons' => false,
                            'textarea_rows' => 3,
                            'textarea_name' => $ed_name,
                            'teeny'         => true,
                            );

                            wp_editor( $content, $editor_id, $settings );
                        /*** end edit ***/



                    break;
                default:
                    $output .= '<p>';
                    $output .= '<label for="' . esc_attr($this->get_field_id($widget_field['id'])) . '">' . esc_attr($widget_field['label'], 'amitasker') . ':</label> ';
                    $output .= '<input class="widefat" id="' . esc_attr($this->get_field_id($widget_field['id'])) . '" name="' . esc_attr($this->get_field_name($widget_field['id'])) . '" type="' . $widget_field['type'] . '" value="' . esc_attr($widget_value) . '">';
                    $output .= '</p>';
            }
        }
        echo $output;
        

    }

    public function form($instance)
    {
        $this->field_generator($instance);
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        foreach ($this->widget_fields as $widget_field) {
            switch ($widget_field['type']) {
                default:
                    $instance[$widget_field['id']] = (!empty($new_instance[$widget_field['id']])) ? strip_tags($new_instance[$widget_field['id']]) : '';
            }
        }
        return $instance;
    }
}

function register_amitaskerpricingplan_widget()
{
    register_widget('Amitaskerpricingplan_Widget');
}
add_action('widgets_init', 'register_amitaskerpricingplan_widget');

if (!function_exists('price_widgets')) {
    function price_widgets()
    {
        {
            register_sidebar(array(
                'name' => __('Price Widgets', 'amitasker'),
                'id' => 'price_widgets',
                'description' => __('Pricing Plan Widgets Area', 'amitasker'),
                'before_widget' => '<div id="%1$s" class="col-12 col-sm-4 col-md-4 col-lg-4 mx-auto">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            ));
        }
    }
    add_action('widgets_init', 'price_widgets');
}

