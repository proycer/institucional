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
namespace Pop\Image\Type;

/**
 * Type class for Gmagick
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
class Gmagick extends AbstractType
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
     * Set and apply the text on the image
     *
     * @param  string $string
     * @throws Exception
     * @return Gmagick
     */
    public function text($string)
    {
        if ($this->hasImage()) {
            $draw = new \GmagickDraw();

            // Set the font if passed
            if (null !== $this->font) {
                if (!$draw->setfont($this->font)) {
                    throw new Exception("Error: The font '" . $this->font . "' is not recognized by the Gmagick extension.");
                }
                // Else, attempt to set a basic, default system font
            } else {
                $fonts = $this->image->getResource()->queryFonts();
                if (in_array('Arial', $fonts)) {
                    $this->font = 'Arial';
                } else if (in_array('Helvetica', $fonts)) {
                    $this->font = 'Helvetica';
                } else if (in_array('Tahoma', $fonts)) {
                    $this->font = 'Tahoma';
                } else if (in_array('Verdana', $fonts)) {
                    $this->font = 'Verdana';
                } else if (in_array('System', $fonts)) {
                    $this->font = 'System';
                } else if (in_array('Fixed', $fonts)) {
                    $this->font = 'Fixed';
                } else if (in_array('system', $fonts)) {
                    $this->font = 'system';
                } else if (in_array('fixed', $fonts)) {
                    $this->font = 'fixed';
                } else if (isset($fonts[0])) {
                    $this->font = $fonts[0];
                } else {
                    throw new Exception('Error: No default font could be found by the Gmagick extension.');
                }
            }

            $draw->setfont($this->font);
            $draw->setfontsize($this->size);
            $draw->setfillcolor($this->image->createColor($this->fillColor, $this->opacity));

            if (null !== $this->rotation) {
                $draw->rotate($this->rotation);
            }

            if (null !== $this->strokeColor) {
                $draw->setstrokecolor($this->image->createColor($this->strokeColor, $this->opacity));
                $draw->setstrokewidth((int)$this->strokeWidth);
            }

            $draw->annotate($this->x, $this->y, $string);
            $this->image->getResource()->drawImage($draw);
        }

        return $this;
    }

}
