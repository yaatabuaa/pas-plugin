<?php if (! defined('ABSPATH')) exit; // Exit if accessed directly
class Front_Conf_List_Update_Controller_LC_HC_MVC
{
	public function execute()
	{
		$form = $this->app->make('/front.conf/list/form');
		return $this->app->make('/conf/update/controller')
			->execute( $form )
			;
	}
}