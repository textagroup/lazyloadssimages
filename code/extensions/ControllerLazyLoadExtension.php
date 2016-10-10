<?php
/**
 * Extension to add jQuery lazy load library to all pages
 *
 * @package lazyloadssimages
 */

class ControllerLazyLoadExtension extends DataExtension {
    public function onAfterInit() {
        $moduleDirectory = basename(dirname(dirname(dirname(__FILE__))));
        Requirements::javascript("$moduleDirectory/js/jquery.lazyload.min.js");
    }
}
