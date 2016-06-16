<?php
// no direct access
defined( '_JEXEC' ) or die;
error_reporting(0); 
class plgContentSuichesocial extends JPlugin
{
	protected $autoloadLanguage = true;

	 function onContentAfterDisplay( $context, &$article, &$params, $limitstart )
	 {
		
		$app = JFactory::getApplication();
		$doc = JFactory::getDocument();
		$config = JFactory::getConfig();
		
		$option = $app->input->getCmd('option', '');
		$siteName = $config->get('sitename');
		
	 	if($option == "com_content" && $this->params->get('contenido')==1){ 
	 		$link = $_SERVER[REQUEST_URI];
	 		$title = $article->title;
	 		if($this->params->get('facebook')==1){ $html .= '<a href="https://www.facebook.com/dialog/feed?app_id=145634995501895&display=popup&caption='.$_SERVER[SERVER_NAME].'&link=http://'.$_SERVER[SERVER_NAME].$link.'&p[title]='.$title.'" target="_blank"><img src="'.JUri::root().'plugins/content/suichesocial/img/facebook.png" alt="Compartir en Facebook" style="margin: 0px 2px;"></a>'; };
	 		if($this->params->get('google')==1){ $html .= '<a href="https://plus.google.com/share?url=http://'.$_SERVER[SERVER_NAME].$link.'" target="_blank"><img src="'. JUri::root() . 'plugins/content/suichesocial/img/google.png" alt="Compartir en google plus"  style="margin: 0px 2px;"/></a>'; };
	 		if($this->params->get('twitter')==1){ $html .= '<a href="https://twitter.com/?status=Quiero compartir contigo algo de '.$siteName.' que me gustó http://'.$_SERVER[SERVER_NAME].$link.'" target="_blank"><img src="'. JUri::root() . 'plugins/content/suichesocial/img/twitter.png" alt="Compartir en twitter"  style="margin: 0px 2px;"/></a>';};
	 	};

	 	if($option == "com_k2" && $this->params->get('k2')==1){ 
	 		$link = $article->link;
	 		$title = $article->title;
	 		if($this->params->get('facebook')==1){ $html .= '<a href="https://www.facebook.com/dialog/feed?app_id=145634995501895&display=popup&caption='.$_SERVER[SERVER_NAME].'&link=http://'.$_SERVER[SERVER_NAME].$link.'&p[title]='.$title.'" target="_blank"><img src="'.JUri::root().'plugins/content/suichesocial/img/facebook.png" alt="Compartir en Facebook" style="margin: 0px 2px;"></a>'; };
	 		if($this->params->get('google')==1){ $html .= '<a href="https://plus.google.com/share?url=http://'.$_SERVER[SERVER_NAME].$link.'" target="_blank"><img src="'. JUri::root() . 'plugins/content/suichesocial/img/google.png" alt="Compartir en google plus"  style="margin: 0px 2px;"/></a>'; };
	 		if($this->params->get('twitter')==1){ $html .= '<a href="https://twitter.com/?status=Quiero compartir contigo algo de '.$siteName.' que me gustó http://'.$_SERVER[SERVER_NAME].$link.'" target="_blank"><img src="'. JUri::root() . 'plugins/content/suichesocial/img/twitter.png" alt="Compartir en twitter"  style="margin: 0px 2px;"/></a>';};
	 	};		
	 	
		return $html;
	}
}
?>