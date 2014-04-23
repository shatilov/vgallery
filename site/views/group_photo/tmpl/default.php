<?php
// Защита от прямого доступа к файлу
defined('_JEXEC') or die('Restricted access');

/**
 * @var HelloViewGroup_photo $this
 */
?>
<pre>
	<?php
	foreach($this->albums as $album)
	{
		print_r($album);
	}
	?>
</pre>
