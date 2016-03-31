<?php

/**
 * @copyright Copyright (c) 2016 dianakaal
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @author dianakaal <dianakaal@gmail.com>
 * @Date: 12/02/16
 * @Description: Combination of Yii framework's Input Mask and yii2-date-picker widget.
 * @package dianakaal\DatePickerMaskedWidget
 */

namespace dianakaal\DatePickerMaskedWidget;

use yii\web\AssetBundle;

/**
 * DateRangePickerMaskedWidgetAsset
 *
 */
class DateRangePickerMaskedWidgetAsset extends AssetBundle
{
    public $sourcePath = '@vendor/dianakaal/datePickerMaskedWidget';

    public $css = [
        'bootstrap-daterangepicker.css'
    ];

    public $js = [
        'jquery.inputmask/dist/jquery.inputmask.bundle.js'
    ];

    public $depends = [
	    'dianakaal\DatePickerMaskedWidget\DatePickerMaskedWidgetAsset'
    ];

}

