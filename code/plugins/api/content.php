<?php
/**
 * @package	API
 * @version 1.5
 * @author 	Brian Edgerton
 * @link 	http://www.edgewebworks.com
 * @copyright Copyright (C) 2011 Edge Web Works, LLC. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
*/

defined('_JEXEC') or die( 'Restricted access' );

jimport('joomla.plugin.plugin');

class plgAPIContent extends ApiPlugin {
	
	public function __construct()
	{
		parent::__construct();
		ApiResource::addIncludePath(dirname(__FILE__).'/content');
		
	}
	
	public function articles() {

		$db	= JFactory::getDBO();
		$db->setQuery('SELECT * FROM #__content LIMIT 10');
		$articles	= $db->loadObjectList();
		$this->setResponse($articles);
	}
	
}