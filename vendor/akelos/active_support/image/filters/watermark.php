<?php

/**
 * Crop filter
 *
 * Options are:
 * 'mark'       Watermark image
 * 'width'      Width of logo
 * 'height'     Height of logo
 * 'marginx     Horizontal margin from the border of the image
 * 'marginy     Vertical margin from the border of the image
 * 'horipos'    Horizontal position of the logo on destination image
 * 'vertpos'    Vertical position of the logo on destination image
 * 'blend'      Optional blending mode to use on composite operation.
 *              it may one of normal, multiply, screen, darken, lighten,
 *              difference, exclusion, negation, interpolation, stamp,
 *              softlight, hardlight, overlay, colordodge, colorburn,
 *              softdodge, softburn, additive, subtractive, reflect, glow,
 *              freeze, heat, logicXOR, logicAND or logicOR
 *
 * Example:
 *
 *      $Image = new AkImage('/original/image.jpg');
 *      $Image->transform('watermark',array('mark'=>'/watermark/image_or_logo.png'));
 *      $Image->save('/watermarked/image.jpg');
 *
 */
class AkImageWatermarkFilter extends AkImageFilter
{
    public function setOptions($options = array()) {
        require_once(AK_CONTRIB_DIR.DS.'pear'.DS.'Image'.DS.'Tools.php');
        $this->Image->Transform =& Image_Tools::factory('Watermark');

        $default_options = array(
        'image'=> $this->Image->Transform->createImage($this->Image->image_path),
        );

        $this->options = array_merge($default_options, $options);

        if(empty($this->options['mark']) || !is_file($this->options['mark'])){
            trigger_error(Ak::t('Option "mark" does not contain a valid Watermark image path'), E_USER_ERROR);
        }

        $this->_variablizeOptions_($this->options);
        $this->Image->Transform->set($this->options);
    }

    public function apply() {
        $this->Image->Transform->preRender();
        $this->Image->Transform->render();
    }

    public function getName() {
        return 'watermark';
    }
}
