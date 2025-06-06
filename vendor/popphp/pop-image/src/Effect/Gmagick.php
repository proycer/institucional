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
namespace Pop\Image\Effect;

use Pop\Image\Color;

/**
 * Effect class for Gmagick
 *
 *  This class has been deprecated as of 2/6/2020 and will no longer be maintained.
 *  Please use the Imagick classes instead.
 *
 * @category   Pop
 * @package    Pop\Image
 * @author     Nick Sagona, III <dev@nolainteractive.com>
 * @copyright  Copyright (c) 2009-2020 NOLA Interactive, LLC. (http://www.nolainteractive.com)
 * @license    http://www.popphp.org/license     New BSD License
 * @version    3.4.0
 * @deprecated
 */
class Gmagick extends AbstractEffect
{

    /**
     * Draw a border around the image.
     *
     * @param  Color\ColorInterface $color
     * @param  int                  $w
     * @param  int                  $h
     * @return Gmagick
     */
    public function border(Color\ColorInterface $color, $w = 1, $h = null)
    {
        if ($this->hasImage()) {
            $h = (null === $h) ? $w : $h;
            $this->image->getResource()->borderImage($this->image->createColor($color), $w, $h);
        }
        return $this;
    }

    /**
     * Flood the image with a color fill.
     *
     * @param  Color\ColorInterface $color
     * @return Gmagick
     */
    public function fill(Color\ColorInterface $color)
    {
        if ($this->hasImage()) {
            $draw = new \GmagickDraw();
            $draw->setfillcolor($this->image->createColor($color));
            $draw->rectangle(0, 0, $this->image->getWidth(), $this->image->getHeight());
            $this->image->getResource()->drawImage($draw);
        }
        return $this;
    }

}
