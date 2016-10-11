<?php
/**
 * @module lazyloadssimages
 *
 * Test that the lazy load jquery library is added
 */
class RequireLazyLoadJSTest extends FunctionalTest {

	protected static $fixture_file = 'LazyLoadControllersTest.yml';

    public function testLazyLoadJSInclusion() {
        $page = Page::get()->filter('Title', 'Home')->first();
        $page->publish('Stage', 'Live');
        $response = Director::test('/');
        $this->assertRegExp('/jquery\.lazyload\.min\.js/', $response->getBody());
    }
}
