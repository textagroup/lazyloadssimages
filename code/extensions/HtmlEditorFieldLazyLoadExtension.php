<?php
/**
 * Extension to amend TinyMCE image tags to be lazy loaded
 *
 * @package lazyloading
 */

class HtmlEditorFieldLazyLoadExtension extends DataExtension {
    public function processHTML($html) {
        if($images = $html->getElementsByTagName('img')) foreach($images as $img) {
            // swap out src tags for images to be data-original
            if ($img->hasAttribute('src')) {
                $src = $img->getAttribute('src');
                if ($src) {
                    $img->removeAttribute('src');
                    $img->setAttribute('data-original', $src);
                }
                // add lazy class if it does not exist already
                $classes = $img->getAttribute('class');
                if (!preg_grep('/lazy/i', explode(' ', $classes))) {
                    $class = (empty($class)) ? 'lazy' : ' lazy';
                    $img->setAttribute('class', $class);
                }
            }
        }
    }
}
