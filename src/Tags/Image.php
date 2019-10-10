<?php

namespace Spatie\Sitemap\Tags;

class Image
{
    /** @var string */
    public $url = '';

    /** @var string */
    public $caption;

    /** @var string */
    public $geoLocation;

    /** @var string */
    public $title;

    /** @var string */
    public $license;

    /**
     * @param  string|\Spatie\Sitemap\Tags\Tag  $url
     *
     * @return static
     */
    public static function create(string $url): self
    {
        return new static($url);
    }

    /**
     * @param  string|\Spatie\Sitemap\Tags\Tag  $url
     *
     * @return void
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * @param  string  $url
     *
     * @return $this
     */
    public function setUrl(string $url = '')
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @param  string  $caption
     *
     * @return $this
     */
    public function setCaption(string $caption = '')
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * @param  string  $geoLocation
     *
     * @return $this
     */
    public function setGeoLocation(string $geoLocation = '')
    {
        $this->geoLocation = $geoLocation;

        return $this;
    }

    /**
     * @param  string  $title
     *
     * @return $this
     */
    public function setTitle(string $title = '')
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param  string  $license
     *
     * @return $this
     */
    public function setLicense(string $license = '')
    {
        $this->license = $license;

        return $this;
    }
}
