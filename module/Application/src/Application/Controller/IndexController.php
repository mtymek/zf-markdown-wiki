<?php

namespace Application\Controller;

use Zend\Mvc\Controller\ActionController;

class IndexController extends ActionController
{
    public function indexAction()
    {
        return array();
    }

    public function wikiAction()
    {
        $module = $this->getLocator()->get('Application\Module');
        $config = $module->getConfig();

        $routeMatch = $this->getEvent()->getRouteMatch();

        // TODO: some validation, redirect to 404 if md file doesn't exist, check for LFI, etc etc.
        $mdPath = $config['wiki_page_directory'] . '/' . $routeMatch->getParam('location') . '.md';

        if (!file_exists($mdPath)) {
            $markdownData = '404: not found.';
        } else {
            $markdownData = file_get_contents($mdPath);
        }

        return array(
            'markdownData' => $markdownData
        );
    }
}
