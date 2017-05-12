<?php

namespace Avegao\ChartjsBundle\DataSet;

/**
 * Class LinearDataSet
 *
 * @author Alvaro de la Vega Olmedilla <alvarodlvo@gmail.com>
 *
 * @see http://www.chartjs.org/docs/#line-chart-data-structure
 */
class LinearDataSet implements DataSetInterface
{
    /**
     * @var array The data to plot in a line
     */
    private $data;
    
    /**
     * @var string The label for the dataset which appears in the legend and tooltips
     */
    private $label;

    /**
     * @var string The ID of the x axis to plot this dataset on
     */
    private $xAxisID;

    /**
     * @var string The ID of the y axis to plot this dataset on
     */
    private $yAxisID;

    /**
     * @var bool If true, fill the area under the line
     */
    private $fill;

    /**
     * @var int Bezier curve tension of the line. Set to 0 to draw straightlines.
     *          Note This was renamed from 'tension' but the old name still works.
     */
    private $lineTension;

    /**
     * @var string The fill color under the line
     *
     * @see http://www.chartjs.org/docs/#chart-configuration-colors
     */
    private $backgroundColor;

    /**
     * @var int The width of the line in pixels
     */
    private $borderWidth;

    /**
     * @var string The color of the line
     *
     * @see http://www.chartjs.org/docs/#chart-configuration-colors
     */
    private $borderColor;

    /**
     * @var string Cap style of the line
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/API/CanvasRenderingContext2D/lineCap
     */
    private $borderCapStyle;

    /**
     * @var array Length and spacing of dashes
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/API/CanvasRenderingContext2D/setLineDash
     */
    private $borderDash;

    /**
     * @var int Offset for line dashes
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/API/CanvasRenderingContext2D/lineDashOffset
     */
    private $borderDashOffset;

    /**
     * @var string Line joint style
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/API/CanvasRenderingContext2D/lineJoin
     */
    private $borderJoinStyle;

    /**
     * @var string|array The border color for points.
     */
    private $pointBorderColor;

    /**
     * @var string|array The fill color for points
     */
    private $pointBackgrounColor;

    /**
     * @var int|array The width of the point border in pixels
     */
    private $pointBorderWidth;

    /**
     * @var int|array The radius of the point shape. If set to 0, nothing is rendered.
     */
    private $pointHoverRadius;

    /**
     * @var int|array The pixel size of the non-displayed point that reacts to mouse events
     */
    private $pointHitRadius;

    /**
     * @var string|array Point background color when hovered
     */
    private $pointHoverBackgroundColor;

    /**
     * @var string|array Point border color when hovered
     */
    private $pointHoverBorderColor;
    /**
     * @var int|array Border width of point when hovered
     */
    private $pointHoverBorderWidth;

    /**
     * @var string|array The style of point. Options include 'circle', 'triangle', 'rect', 'rectRot', 'cross',
     *                   'crossRot', 'star', 'line', and 'dash'
     */
    private $pointStyle;

//    /**
//     * LinearDataSet constructor.
//     * @param string $label
//     * @param string $fillColor
//     * @param string $strokeColor
//     * @param string $pointColor
//     * @param string $pointStrokeColor
//     * @param string $pointHighlightFill
//     * @param string $pointHighlightStroke
//     * @param array $data
//     */
//    public function __construct(
//        $label                = 'Label',
//        $fillColor            = 'rgba(220,220,220,0.2)',
//        $strokeColor          = 'rgba(220,220,220,1)',
//        $pointColor           = 'rgba(220,220,220,1)',
//        $pointStrokeColor     = '#FFF',
//        $pointHighlightFill   = '#FFF',
//        $pointHighlightStroke = 'rgba(220,220,220,1)',
//        array $data           = []
//    )
//    {
//        $this->label                = $label;
//        $this->fillColor            = $fillColor;
//        $this->strokeColor          = $strokeColor;
//        $this->pointColor           = $pointColor;
//        $this->pointStrokeColor     = $pointStrokeColor;
//        $this->pointHighlightFill   = $pointHighlightFill;
//        $this->pointHighlightStroke = $pointHighlightStroke;
//        $this->data                 = $data;
//    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return LinearDataSet
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param mixed $data
     * @return LinearDataSet
     */
    public function addData($data)
    {
        $this->data[] = $data;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return LinearDataSet
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getXAxisID()
    {
        return $this->xAxisID;
    }

    /**
     * @param string $xAxisID
     * @return LinearDataSet
     */
    public function setXAxisID($xAxisID)
    {
        $this->xAxisID = $xAxisID;
        return $this;
    }

    /**
     * @return string
     */
    public function getYAxisID()
    {
        return $this->yAxisID;
    }

    /**
     * @param string $yAxisID
     * @return LinearDataSet
     */
    public function setYAxisID($yAxisID)
    {
        $this->yAxisID = $yAxisID;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isFill()
    {
        return $this->fill;
    }

    /**
     * @param boolean $fill
     * @return LinearDataSet
     */
    public function setFill($fill)
    {
        $this->fill = $fill;
        return $this;
    }

    /**
     * @return int
     */
    public function getLineTension()
    {
        return $this->lineTension;
    }

    /**
     * @param int $lineTension
     * @return LinearDataSet
     */
    public function setLineTension($lineTension)
    {
        $this->lineTension = $lineTension;
        return $this;
    }

    /**
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * @param string $backgroundColor
     * @return LinearDataSet
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * @return int
     */
    public function getBorderWidth()
    {
        return $this->borderWidth;
    }

    /**
     * @param int $borderWidth
     * @return LinearDataSet
     */
    public function setBorderWidth($borderWidth)
    {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * @return string
     */
    public function getBorderColor()
    {
        return $this->borderColor;
    }

    /**
     * @param string $borderColor
     * @return LinearDataSet
     */
    public function setBorderColor($borderColor)
    {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * @return string
     */
    public function getBorderCapStyle()
    {
        return $this->borderCapStyle;
    }

    /**
     * @param string $borderCapStyle
     * @return LinearDataSet
     */
    public function setBorderCapStyle($borderCapStyle)
    {
        $this->borderCapStyle = $borderCapStyle;
        return $this;
    }

    /**
     * @return array
     */
    public function getBorderDash()
    {
        return $this->borderDash;
    }

    /**
     * @param array $borderDash
     * @return LinearDataSet
     */
    public function setBorderDash($borderDash)
    {
        $this->borderDash = $borderDash;
        return $this;
    }

    /**
     * @return int
     */
    public function getBorderDashOffset()
    {
        return $this->borderDashOffset;
    }

    /**
     * @param int $borderDashOffset
     * @return LinearDataSet
     */
    public function setBorderDashOffset($borderDashOffset)
    {
        $this->borderDashOffset = $borderDashOffset;
        return $this;
    }

    /**
     * @return string
     */
    public function getBorderJoinStyle()
    {
        return $this->borderJoinStyle;
    }

    /**
     * @param string $borderJoinStyle
     * @return LinearDataSet
     */
    public function setBorderJoinStyle($borderJoinStyle)
    {
        $this->borderJoinStyle = $borderJoinStyle;
        return $this;
    }

    /**
     * @return array|string
     */
    public function getPointBorderColor()
    {
        return $this->pointBorderColor;
    }

    /**
     * @param array|string $pointBorderColor
     * @return LinearDataSet
     */
    public function setPointBorderColor($pointBorderColor)
    {
        $this->pointBorderColor = $pointBorderColor;
        return $this;
    }

    /**
     * @return array|string
     */
    public function getPointBackgrounColor()
    {
        return $this->pointBackgrounColor;
    }

    /**
     * @param array|string $pointBackgrounColor
     * @return LinearDataSet
     */
    public function setPointBackgrounColor($pointBackgrounColor)
    {
        $this->pointBackgrounColor = $pointBackgrounColor;
        return $this;
    }

    /**
     * @return array|int
     */
    public function getPointBorderWidth()
    {
        return $this->pointBorderWidth;
    }

    /**
     * @param array|int $pointBorderWidth
     * @return LinearDataSet
     */
    public function setPointBorderWidth($pointBorderWidth)
    {
        $this->pointBorderWidth = $pointBorderWidth;
        return $this;
    }

    /**
     * @return array|int
     */
    public function getPointHoverRadius()
    {
        return $this->pointHoverRadius;
    }

    /**
     * @param array|int $pointHoverRadius
     * @return LinearDataSet
     */
    public function setPointHoverRadius($pointHoverRadius)
    {
        $this->pointHoverRadius = $pointHoverRadius;
        return $this;
    }

    /**
     * @return array|int
     */
    public function getPointHitRadius()
    {
        return $this->pointHitRadius;
    }

    /**
     * @param array|int $pointHitRadius
     * @return LinearDataSet
     */
    public function setPointHitRadius($pointHitRadius)
    {
        $this->pointHitRadius = $pointHitRadius;
        return $this;
    }

    /**
     * @return array|string
     */
    public function getPointHoverBackgroundColor()
    {
        return $this->pointHoverBackgroundColor;
    }

    /**
     * @param array|string $pointHoverBackgroundColor
     * @return LinearDataSet
     */
    public function setPointHoverBackgroundColor($pointHoverBackgroundColor)
    {
        $this->pointHoverBackgroundColor = $pointHoverBackgroundColor;
        return $this;
    }

    /**
     * @return array|string
     */
    public function getPointHoverBorderColor()
    {
        return $this->pointHoverBorderColor;
    }

    /**
     * @param array|string $pointHoverBorderColor
     * @return LinearDataSet
     */
    public function setPointHoverBorderColor($pointHoverBorderColor)
    {
        $this->pointHoverBorderColor = $pointHoverBorderColor;
        return $this;
    }

    /**
     * @return array|int
     */
    public function getPointHoverBorderWidth()
    {
        return $this->pointHoverBorderWidth;
    }

    /**
     * @param array|int $pointHoverBorderWidth
     * @return LinearDataSet
     */
    public function setPointHoverBorderWidth($pointHoverBorderWidth)
    {
        $this->pointHoverBorderWidth = $pointHoverBorderWidth;
        return $this;
    }

    /**
     * @return array|string
     */
    public function getPointStyle()
    {
        return $this->pointStyle;
    }

    /**
     * @param array|string $pointStyle
     * @return LinearDataSet
     */
    public function setPointStyle($pointStyle)
    {
        $this->pointStyle = $pointStyle;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $vars = get_object_vars($this);

        $array = [];

        foreach ($vars as $index => $var) {
            if (!is_null($var)) {
                $array[$index] = $var;
            }
        }

        return $array;
    }
}
