<?php

namespace WilokeCard\Controllers\Controls;
class CustomPostControl extends \Elementor\Base_Control
{
	public function get_type()
	{
		return 'wil-custom-post';
	}

	public function enqueue()
	{
		wp_register_script(WILOKE_WILOKECARD_NAMESPACE . '_custom_post_script',
			WILOKE_WILOKECARD_VIEWS_URL . 'src/Assets/Js/CustomPostControl.js',
			['jquery'],
			WILOKE_WILOKECARD_NAMESPACE,
			true);
		wp_enqueue_script(WILOKE_WILOKECARD_NAMESPACE . '_custom_post_script');
	}

	public function content_template()
	{

		?>

        <div>
            <div class="elementor-control elementor-control-buttonUrl elementor-control-type-text elementor-label-inline elementor-control-separator-default">
                <div class="elementor-control-content">
                    <div class="elementor-control-field">

                        <label class="elementor-control-title">{{{ data.label }}}</label>

                        <div class="elementor-control-input-wrapper elementor-control-unit-5 elementor-control-dynamic-switcher-wrapper">
                            <select class="post-select" style="width:100%"></select>
                        </div>
                    </div>

                </div>
            </div

            <input type="hidden" class="post-select-save-value" data-setting="{{ data.name }}"/>

            <div class="elementor-control elementor-control-buttonUrl elementor-control-type-text elementor-label-inline elementor-control-separator-default">
                <div class="elementor-control-content">
                    <div class="elementor-control-field">

                        <label for="elementor-control-default-c1218" class="elementor-control-title">Number Post</label>

                        <div class="elementor-control-input-wrapper elementor-control-unit-5 elementor-control-dynamic-switcher-wrapper">
                            <input id="elementor-control-default-c1218" type="text" class="tooltip-target elementor-control-tag-area" data-tooltip="" data-setting="buttonUrl" placeholder="" original-title="">
                        </div>
                    </div>

                </div>
            </div>
        </div>

		<?php

	}
}