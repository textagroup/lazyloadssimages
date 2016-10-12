<?php
/**
 * @module lazyloadssimages
 *
 * Test that the lazy load extensions
 */
class LazyLoadControllersTest extends SapphireTest {

	protected static $fixture_file = 'LazyLoadControllersTest.yml';

	public function testSavingImageInCMS() {
		$page = Page::get()->filter('Title', 'Home')->first();

		$obj = new HtmlEditorFieldTest_Object();
		$editor = new HtmlEditorField('Content');

		$editor->setValue($page->Content);
		$editor->saveInto($obj);

		$this->assertRegExp('/data-original/', $obj->Content);
		$this->assertRegExp('/lazy/', $obj->Content);
		$this->assertRegExp('/leftAlone/', $obj->Content);
	}

	public function testCMSFieldContent() {
		$page = Page::get()->filter('Title', 'Home')->first();
		$siteTree = SiteTree::get_by_id('SiteTree', $page->ID);

		$obj = new HtmlEditorFieldTest_Object();
		$editor = new HtmlEditorField('Content');

		$editor->setValue($page->Content);
		$editor->saveInto($obj);

		$this->assertRegExp('/src/', $siteTree->Content);
		$this->assertRegExp('/leftAlone/', $siteTree->Content);
		$this->assertNotRegExp('/lazy/', $siteTree->Content);
		$this->assertNotEquals($obj->Content, $siteTree->Content);
	}
}
