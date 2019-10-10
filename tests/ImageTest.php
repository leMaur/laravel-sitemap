<?php

namespace Spatie\Sitemap\Test;

use Carbon\Carbon;
use Spatie\Sitemap\Tags\Alternate;
use Spatie\Sitemap\Tags\Image;

class ImageTest extends TestCase
{
    /** @var \Spatie\Sitemap\Tags\Image */
    protected $image;

    public function setUp(): void
    {
        parent::setUp();

        $this->now = Carbon::now();

        Carbon::setTestNow($this->now);

        $this->image = new Image('testImageUrl');
    }

    /** @test */
    public function it_provides_a_create_method()
    {
        $image = Image::create('testImageUrl');

        $this->assertEquals('testImageUrl', $image->url);
    }

    /** @test */
    public function url_can_be_set()
    {
        $image = Image::create('defaultImageUrl');

        $image->setUrl('testImageUrl');

        $this->assertEquals('testImageUrl', $image->url);
    }

    /** @test */
    public function caption_can_be_set()
    {
        $image = Image::create('defaultImageUrl');

        $image->setCaption('testCaption');

        $this->assertEquals('testCaption', $image->caption);
    }

    /** @test */
    public function geo_location_can_be_set()
    {
        $image = Image::create('defaultImageUrl');

        $image->setGeoLocation('testGeoLocation');

        $this->assertEquals('testGeoLocation', $image->geoLocation);
    }

    /** @test */
    public function title_can_be_set()
    {
        $image = Image::create('defaultImageUrl');

        $image->setTitle('testTitle');

        $this->assertEquals('testTitle', $image->title);
    }

    /** @test */
    public function license_can_be_set()
    {
        $image = Image::create('defaultImageUrl');

        $image->setLicense('testLicense');

        $this->assertEquals('testLicense', $image->license);
    }
}
