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
		
		$option = $app->input->getCmd('option', '');
		
	 	if($option == "com_k2"){ 
	 		$link = $article->link;
	 		$title = $article->title;
	 		if($this->params->get('facebook')==1){ $html .= '<a href="https://www.facebook.com/dialog/feed?app_id=145634995501895&display=popup&caption='.$_SERVER[SERVER_NAME].'&link=http://'.$_SERVER[SERVER_NAME].$link.'&p[title]='.$title.'" target="_blank"><img src="'.JUri::root().'plugins/content/suichesocial/img/facebook.png" alt="Compartir en Facebook" style="margin: 0px 2px;"></a>'; };
	 		if($this->params->get('google')==1){ $html .= '<a href="https://plus.google.com/share?url=http://'.$_SERVER[SERVER_NAME].$link.'" target="_blank"><img src="'. JUri::root() . 'plugins/content/suichesocial/img/google.png" alt="Compartir en google plus"  style="margin: 0px 2px;"/></a>'; };
	 		if($this->params->get('twitter')==1){ $html .= '<a href="https://twitter.com/?status=Quiero compartir con tigo algo de Merkagreen que me gustó http://'.$_SERVER[SERVER_NAME].$link.'" target="_blank"><img src="'. JUri::root() . 'plugins/content/suichesocial/img/twitter.png" alt="Compartir en twitter"  style="margin: 0px 2px;"/></a>';};
	 	};	

		return $html;
	}
}
?>