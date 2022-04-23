<?php

namespace WilokeCard\Controllers;

use Elementor\Controls_Manager;
use Elementor\Widget_Base;
use Timber\Timber;
use WilokeCard\Share\App;
use WilokeCard\Share\TraitHandleAutoRenderSettingControls;

class PluginAddon extends Widget_Base
{
	use TraitHandleAutoRenderSettingControls;

	public static $aSettings               = [];
	public function get_name()
	{
		return App::get('dataConfig')['name'];
	}

	public function get_stack($with_common_controls = true)
	{
		return parent::get_stack(false);
	}

	public function get_title()
	{
		return App::get('dataConfig')['title'];
	}

	public function get_script_depends()
	{
		return App::get('handleJs');
	}

	public function get_icon()
	{
		return App::get('dataConfig')['icon'];
	}

	public function get_style_depends()
	{
		return App::get('handleCss');
	}

	public function get_categories()
	{
		return ['basic'];
	}

	public function get_keywords()
	{
		return App::get('dataConfig')['keywords'];
	}

	protected function register_controls()
	{
		$aConfigs = $this->getDataConfigField();
		$this->handle($aConfigs, $this);
	}

	public function getDataConfigField(): array
	{
		return json_decode(file_get_contents(plugin_dir_path(__FILE__) . '../Configs/schema.json'), true);
	}

	protected function render()
	{
		Timber::$locations = WILOKE_WILOKECARD_VIEWS_PATH . 'src/Views';
		self::$aSettings = $this->get_settings_for_display();
		Timber::render(plugin_dir_path(__FILE__) . "../Views/section.twig", [
			"data" => $this->parseItems(self::$aSettings)
		]);
	}
}