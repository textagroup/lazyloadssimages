<?php
/**
 * Extension to get images showing in the TinyMCE window when they have had
 * the src attribute replace by data-original
 *
 * @package lazyloading
 */

class SiteTreeLazyLoadExtension extends DataExtension {
    public function updateCMSFields(FieldList $fields) {
        $this->owner->Content = str_replace('data-original', 'src', $this->owner->Content);
    }
}
