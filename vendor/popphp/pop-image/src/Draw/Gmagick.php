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
namespace Pop\Image\Draw;

/**
 * Draw class for Gmagick
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
class Gmagick extends AbstractDraw
{

    /**
     * Opacity
     * @var float
     */
    protected $opacity = 1.0;

    /**
     * Set the opacity
     *
     * @param  float $opacity
     * @return Gmagick
     */
    public function setOpacity($opacity)
    {
        $this->opacity = $opacity;
        return $this;
    }

    /**
     * Draw a line on the image.
     *
     * @param  int $x1
     * @param  int $y1
     * @param  int $x2
     * @param  int $y2
     * @return Gmagick
     */
    public function line($x1, $y1, $x2, $y2)
    {
        if ($this->hasImage()) {
            $draw = new \GmagickDraw();
            $draw->setstrokecolor($this->image->createColor($this->strokeColor, $this->opacity));
            $draw->setstrokewidth((null === $this->strokeWidth) ? 1 : $this->strokeWidth);
            $draw->line($x1, $y1, $x2, $y2);
            $this->image->getResource()->drawImage($draw);
        }

        return $this;
    }

    /**
     * Draw a rectangle on the image.
     *
     * @param  int $x
     * @param  int $y
     * @param  int $w
     * @param  int $h
     * @return Gmagick
     */
    public function rectangle($x, $y, $w, $h = null)
    {
        if ($this->hasImage()) {
            $x2 = $x + $w;
            $y2 = $y + ((null === $h) ? $w : $h);

            $draw = new \GmagickDraw();

            if (null !== $this->fillColor) {
                $draw->setfillcolor($this->image->createColor($this->fillColor, $this->opacity));
            }

            if ($this->strokeWidth > 0) {
                $draw->setstrokecolor($this->image->createColor($this->strokeColor, $this->opacity));
                $draw->setstrokewidth($this->strokeWidth);
            }

            $draw->rectangle($x, $y, $x2, $y2);
            $this->image->getResource()->drawImage($draw);
        }

        return $this;
    }

    /**
     * Draw a square on the image.
     *
     * @param  int     $x
     * @param  int     $y
     * @param  int     $w
     * @return Gmagick
     */
    public function square($x, $y, $w)
    {
        return $this->rectangle($x, $y, $w, $w);
    }

    /**
     * Draw a rounded rectangle on the image.
     *
     * @param  int $x
     * @param  int $y
     * @param  int $w
     * @param  int $h
     * @param  int $rx
     * @param  int $ry
     * @return Gmagick
     */
    public function roundedRectangle($x, $y, $w, $h = null, $rx = 10, $ry = null)
    {
        if ($this->hasImage()) {
            $x2 = $x + $w;
            $y2 = $y + ((null === $h) ? $w : $h);
            if (null === $ry) {
                $ry = $rx;
            }

            $draw = new \GmagickDraw();

            if (null !== $this->fillColor) {
                $draw->setfillcolor($this->image->createColor($this->fillColor, $this->opacity));
            }

            if ($this->strokeWidth > 0) {
                $draw->setstrokecolor($this->image->createColor($this->strokeColor, $this->opacity));
                $draw->setstrokewidth($this->strokeWidth);
            }

            $draw->roundrectangle($x, $y, $x2, $y2, $rx, $ry);
            $this->image->getResource()->drawImage($draw);
        }

        return $this;
    }

    /**
     * Draw a rounded square on the image.
     *
     * @param  int $x
     * @param  int $y
     * @param  int $w
     * @param  int $rx
     * @param  int $ry
     * @return Gmagick
     */
    public function roundedSquare($x, $y, $w, $rx = 10, $ry = null)
    {
        return $this->roundedRectangle($x, $y, $w, $w, $rx, $ry);
    }

    /**
     * Draw an ellipse on the image.
     *
     * @param  int $x
     * @param  int $y
     * @param  int $w
     * @param  int $h
     * @return Gmagick
     */
    public function ellipse($x, $y, $w, $h = null)
    {
        if ($this->hasImage()) {
            $wid = $w;
            $hgt = (null === $h) ? $w : $h;

            $draw = new \GmagickDraw();

            if (null !== $this->fillColor) {
                $draw->setfillcolor($this->image->createColor($this->fillColor, $this->opacity));
            }

            if ($this->strokeWidth > 0) {
                $draw->setstrokecolor($this->image->createColor($this->strokeColor, $this->opacity));
                $draw->setstrokewidth($this->strokeWidth);
            }

            $draw->ellipse($x, $y, $wid, $hgt, 0, 360);
            $this->image->getResource()->drawImage($draw);
        }

        return $this;
    }

    /**
     * Method to add a circle to the image.
     *
     * @param  int     $x
     * @param  int     $y
     * @param  int     $w
     * @return Gmagick
     */
    public function circle($x, $y, $w)
    {
        return $this->ellipse($x, $y, $w, $w);
    }

    /**
     * Draw an arc on the image.
     *
     * @param  int $x
     * @param  int $y
     * @param  int $start
     * @param  int $end
     * @param  int $w
     * @param  int $h
     * @return Gmagick
     */
    public function arc($x, $y, $start, $end, $w, $h = null)
    {
        if ($this->hasImage()) {
            if ($this->strokeWidth == 0) {
                $this->setStrokeWidth(1);
            }

            $wid = $w;
            $hgt = (null === $h) ? $w : $h;

            $draw = new \GmagickDraw();
            $draw->setfillcolor('transparent');
            $draw->setstrokecolor($this->image->createColor($this->strokeColor, $this->opacity));
            $draw->setstrokewidth($this->strokeWidth);

            $draw->ellipse($x, $y, $wid, $hgt, $start, $end);

            $this->image->getResource()->drawImage($draw);
        }

        return $this;
    }

    /**
     * Draw a chord on the image.
     *
     * @param  int $x
     * @param  int $y
     * @param  int $start
     * @param  int $end
     * @param  int $w
     * @param  int $h
     * @return Gmagick
     */
    public function chord($x, $y, $start, $end, $w, $h = null)
    {
        if ($this->hasImage()) {
            $wid = $w;
            $hgt = (null === $h) ? $w : $h;

            $draw = new \GmagickDraw();
            $draw->setfillcolor($this->image->createColor($this->fillColor));

            $x1 = $w * cos($start / 180 * pi());
            $y1 = $h * sin($start / 180 * pi());
            $x2 = $w * cos($end / 180 * pi());
            $y2 = $h * sin($end / 180 * pi());

            $draw->ellipse($x, $y, $wid, $hgt, $start, $end);
            $this->image->getResource()->drawImage($draw);

            if ($this->strokeWidth > 0) {
                $draw = new \GmagickDraw();

                $draw->setfillcolor($this->image->createColor($this->fillColor));
                $draw->setstrokecolor($this->image->createColor($this->strokeColor));
                $draw->setstrokewidth($this->strokeWidth);

                $draw->ellipse($x, $y, $wid, $hgt, $start, $end);
                $draw->line($x + $x1, $y + $y1, $x + $x2, $y + $y2);

                $this->image->getResource()->drawImage($draw);
            }
        }

        return $this;
    }

    /**
     * Draw a pie slice on the image.
     *
     * @param  int $x
     * @param  int $y
     * @param  int $start
     * @param  int $end
     * @param  int $w
     * @param  int $h
     * @return Gmagick
     */
    public function pie($x, $y, $start, $end, $w, $h = null)
    {
        if ($this->hasImage()) {
            $wid = $w;
            $hgt = (null === $h) ? $w : $h;

            $draw = new \GmagickDraw();
            $draw->setfillcolor($this->image->createColor($this->fillColor));

            $x1 = $w * cos($start / 180 * pi());
            $y1 = $h * sin($start / 180 * pi());
            $x2 = $w * cos($end / 180 * pi());
            $y2 = $h * sin($end / 180 * pi());

            $points = [
                ['x' => $x, 'y' => $y],
                ['x' => $x + $x1, 'y' => $y + $y1],
                ['x' => $x + $x2, 'y' => $y + $y2]
            ];

            $draw->polygon($points);

            $draw->ellipse($x, $y, $wid, $hgt, $start, $end);
            $this->image->getResource()->drawImage($draw);

            if ($this->strokeWidth > 0) {
                $draw = new \GmagickDraw();

                $draw->setfillcolor($this->image->createColor($this->fillColor));
                $draw->setstrokecolor($this->image->createColor($this->strokeColor));
                $draw->setstrokewidth($this->strokeWidth);

                $draw->ellipse($x, $y, $wid, $hgt, $start, $end);
                $draw->line($x, $y, $x + $x1, $y + $y1);
                $draw->line($x, $y, $x + $x2, $y + $y2);

                $this->image->getResource()->drawImage($draw);
            }
        }

        return $this;
    }

    /**
     * Draw a polygon on the image.
     *
     * @param  array $points
     * @return Gmagick
     */
    public function polygon($points)
    {
        if ($this->hasImage()) {
            $draw = new \GmagickDraw();

            if (null !== $this->fillColor) {
                $draw->setfillcolor($this->image->createColor($this->fillColor, $this->opacity));
            }

            if ($this->strokeWidth > 0) {
                $draw->setstrokecolor($this->image->createColor($this->strokeColor, $this->opacity));
                $draw->setstrokewidth($this->strokeWidth);
            }

            $draw->polygon($points);
            $this->image->getResource()->drawImage($draw);
        }

        return $this;
    }

}
