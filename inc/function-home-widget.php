<?php
if (!function_exists('home_widget')) {


function home_widget()
{
     register_sidebar(array(
        'name' => __('Home Page Right Sidebar', 'amitasker'),
        'id' => 'home-right',
        'description' => __('Home pages Right services Widgets', 'amitasker'),
        'before_widget' => '<div id="%1$s" class="col-12 col-md-6 mx-auto">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'home_widget');
}

// Adds widget: Amitasker Home Services widget
class Amitaskerhomeservice_Widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            'amitaskerhomeservice_widget',
            esc_html__('Amitasker Home Services widget', 'amitasker'),
            array('description' => esc_html__('Amitasker Home Services widget', 'amitasker')) // Args
        );
    }

    private $widget_fields = array(
        array(
            'label' => 'Link',
            'id' => 'link',
            'default' => 'javascript:void(0)',
            'type' => 'url',
        ),
        array(
            'label' => 'icon (Font awesome icon)',
            'id' => 'icon',
            'type' => 'text',
        ),
        array(
            'label' => 'Services Name',
            'id' => 'name',
            'type' => 'text',
        ),
        array(
            'label' => 'Services Description',
            'id' => 'description',
            'type' => 'textarea',
        ),
    );

    public function widget($args, $instance)
    {
        echo $args['before_widget'];

        print ('
            <div class="services-block-three">
                <a href="'.$instance['link'].'">
                    <div class="padding-15px-bottom">
                        <i class="'. $instance['icon'] .'"></i>
                    </div>
                    <h4>'. $instance['name'] .'</h4>
                    <p class="xs-font-size13 xs-line-height-22">'.$instance['description'].'</p>
                </a>
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
                    $output .= '<p>';
                    $output .= '<label for="' . esc_attr($this->get_field_id($widget_field['id'])) . '">' . esc_attr($widget_field['label'], 'amitasker') . ':</label> ';
                    $output .= '<textarea class="widefat" id="' . esc_attr($this->get_field_id($widget_field['id'])) . '" name="' . esc_attr($this->get_field_name($widget_field['id'])) . '" rows="6" cols="6" value="' . esc_attr($widget_value) . '">' . $widget_value . '</textarea>';
                    $output .= '</p>';
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

function register_amitaskerhomeservice_widget()
{
    register_widget('Amitaskerhomeservice_Widget');
}
add_action('widgets_init', 'register_amitaskerhomeservice_widget');
