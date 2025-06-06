<?php
/**
 * Pop PHP Framework (http://www.popphp.org/)
 *
 * @link       https://github.com/popphp/popphp-framework
 * @author     Nick Sagona, III <dev@nolainteractive.com>
 * @copyright  Copyright (c) 2009-2020 NOLA Interactive, LLC. (http://www.nolainteractive.com)
 * @license    http://www.popphp.org/license     New BSD License
 */

/**
 * @namespace
 */
namespace Pop\Image\Layer;

/**
 * Layer class for Imagick
 *
 * @category   Pop
 * @package    Pop\Image
 * @author     Nick Sagona, III <dev@nolainteractive.com>
 * @copyright  Copyright (c) 2009-2020 NOLA Interactive, LLC. (http://www.nolainteractive.com)
 * @license    http://www.popphp.org/license     New BSD License
 * @version    3.4.0
 */
class Imagick extends AbstractLayer
{

    /**
     * Opacity
     * @var float
     */
    protected $opacity = 1.0;

    /**
     * Overlay style
     * @var int
     */
    protected $overlay = \Imagick::COMPOSITE_ATOP;

    /**
     * Get the overlay
     *
     * @return int
     */
    public function getOverlay()
    {
        return $this->overlay;
    }

    /**
     * Get the overlay
     *
     * @param  int $overlay
     * @return Imagick
     */
    public function setOverlay($overlay)
    {
        $this->overlay = $overlay;
        return $this;
    }

    /**
     * Overlay an image onto the current image.
     *
     * @param  string $image
     * @param  int    $x
     * @param  int    $y
     * @return Imagick
     */
    public function overlay($image, $x = 0, $y = 0)
    {
        if ($this->hasImage()) {
            $overlayImage = new \Imagick($image);
            $this->image->getResource()->compositeImage($overlayImage, $this->overlay, $x, $y);
        }

        return $this;
    }

    /**
     * Flatten the image layers
     *
     * @param  int $method
     * @return Imagick
     */
    public function flatten($method = \Imagick::LAYERMETHOD_FLATTEN)
    {
        if ($this->hasImage()) {
            $this->image->getResource()->mergeImageLayers($method);
        }
        return $this;
    }

}
