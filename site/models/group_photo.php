<?php
// Защита от прямого доступа к файлу
defined('_JEXEC') or die('Restricted access');
// подключаем библеотеку modelitem Joomla 
jimport('joomla.application.component.modelitem');
// Создаем класс модели
class vgalleryModelGroup_photo extends JModelItem
{
        /**
         * @var string msg
         */
        protected $api_id = null;
		protected $secret_key = null;
		protected $group_id = null;

		public function getApiId()
		{
			if(!$this->api_id)
			{
				$this->api_id = JRequest::getString('api_id');
			}
			return $this->api_id;
		}

		public function getSecretKey()
		{
			if(!$this->secret_key)
			{
				$this->secret_key = JRequest::getString('secret_key');
			}
			return $this->secret_key;
		}

		public function getGroupId()
		{
			if(!$this->group_id)
			{
				$this->group_id = JRequest::getString('group_id');
			}
			return $this->group_id;
		}

		public function getAlbums()
		{

		}
}
