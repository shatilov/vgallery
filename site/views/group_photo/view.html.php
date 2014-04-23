<?php
// Защита от прямого доступа к файлу
defined('_JEXEC') or die('Restricted access');
// Подключаем библиотеку представления Joomla
jimport('joomla.application.component.view');
// Создаем свой класс, расширяя JView
require 'vkapi.class.php';
class vgalleryViewGroup_photo extends JView {
		public $albums;
        // Перезаписуем метод display класса JView
        function display($tpl = null) {
				/**
				 * @var HelloModelGroup_photo $model
				 */
				$model =& $this->getModel();

				$aid = $model->getApiId();
				$gid = $model->getGroupId();
				$secret = '';//$model->getSecretKey();

				$VK = new vkapi( $aid , $secret );
				if($VK)
				{
					$thumb = $VK->api('photos.getById',array(
						'photos'=>'1_278184324,1_295770249'));
					print_r($thumb);

					$vk_albums = $VK->api('photos.getAlbums', array('gid'=>$gid));
					if($vk_albums)
					{
						$this->albums = $vk_albums['response'];
					}

					foreach($this->albums as $id=>$album)
					{
						$thumb = $VK->api('photos.getById',array(
								'photos'=>$album['owner_id'].'_'.$album['thumb_id'] ,
						));
						$this->albums[$id]['thumb'] = $thumb;
					}
				}

                parent::display($tpl);
        }
}