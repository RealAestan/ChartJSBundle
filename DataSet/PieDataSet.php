<?php

namespace Avegao\ChartjsBundle\DataSet;

/**
 * Class PieDataSet
 * @package Avegao\ChartjsBundle\DataSet
 *
 * @author Anthony Margerand <anthony.margerand@gmail.com>
 *
 * @see http://www.chartjs.org/docs/#doughnut-pie-chart-dataset-structure
 */
class PieDataSet implements DataSetInterface
{
    /**
     * @var array The data to plot as arcs
     */
    private $data;

    /**
     * @var string The label for the dataset which appears in the legend and tooltips
    */
    private $label;

    /**
     * @var array The fill color of the arcs
     *
     * @see http://www.chartjs.org/docs/#chart-configuration-colors
     */
    private $backgroundColor;

    /**
     * @var array Border width of arcs in pixels
     */
    private $borderWidth;

    /**
     * @var array Arc border color
     *
     * @see http://www.chartjs.org/docs/#chart-configuration-colors
     */
    private $borderColor;

    /**
     * @var array Arc background color when hovered
     */
    private $hoverBackgroundColor;

    /**
     * @var array Arc border color when hovered
     */
    private $hoverBorderColor;
    /**
     * @var array Border width of arc when hovered
     */
    private $hoverBorderWidth;

    public function __construct()
    {
        $this->backgroundColor      = [];
        $this->borderWidth          = [];
        $this->borderColor          = [];
        $this->hoverBackgroundColor = [];
        $this->hoverBorderColor     = [];
        $this->hoverBorderWidth     = [];
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return $this
     */
    public function setData(array $data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param mixed $data
     * @return $this
     */
    public function addData($data)
    {
        $this->data[] = $data;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return $this
     */
    public function setLabel(string $label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return array
     */
    public function getBackgroundColor(): array
    {
        return $this->backgroundColor;
    }

    /**
     * @param array $backgroundColor
     * @return $this
     */
    public function setBackgroundColor(array $backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * @param $backgroundColor
     */
    public function addBackgroundColor($backgroundColor)
    {
        $this->backgroundColor[] = $backgroundColor;
    }

    /**
     * @return array
     */
    public function getBorderWidth(): array
    {
        return $this->borderWidth;
    }

    /**
     * @param array $borderWidth
     * @return $this
     */
    public function setBorderWidth(array $borderWidth)
    {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * @param $borderWidth
     */
    public function addBorderWidth($borderWidth)
    {
        $this->borderWidth[] = $borderWidth;
    }

    /**
     * @return array
     */
    public function getBorderColor(): array
    {
        return $this->borderColor;
    }

    /**
     * @param array $borderColor
     * @return $this
     */
    public function setBorderColor(array $borderColor)
    {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * @param $borderColor
     */
    public function addBorderColor($borderColor)
    {
        $this->borderColor[] = $borderColor;
    }
    
    /**
     * @return array
     */
    public function getHoverBackgroundColor(): array
    {
        return $this->hoverBackgroundColor;
    }

    /**
     * @param array $hoverBackgroundColor
     * @return $this
     */
    public function setHoverBackgroundColor(array $hoverBackgroundColor)
    {
        $this->hoverBackgroundColor = $hoverBackgroundColor;
        return $this;
    }

    /**
     * @param $hoverBackgroundColor
     */
    public function addHoverBackgroundColor($hoverBackgroundColor)
    {
        $this->hoverBackgroundColor = $hoverBackgroundColor;
    }

    /**
     * @return array
     */
    public function getHoverBorderColor(): array
    {
        return $this->hoverBorderColor;
    }

    /**
     * @param array $hoverBorderColor
     * @return $this
     */
    public function setHoverBorderColor(array $hoverBorderColor)
    {
        $this->hoverBorderColor = $hoverBorderColor;
        return $this;
    }

    /**
     * @param $hoverBorderColor
     */
    public function addHoverBorderColor($hoverBorderColor)
    {
        $this->hoverBorderColor[] = $hoverBorderColor;
    }

    /**
     * @return array
     */
    public function getHoverBorderWidth(): array
    {
        return $this->hoverBorderWidth;
    }

    /**
     * @param array $hoverBorderWidth
     * @return $this
     */
    public function setHoverBorderWidth(array $hoverBorderWidth)
    {
        $this->hoverBorderWidth = $hoverBorderWidth;
        return $this;
    }

    /**
     * @param $hoverBorderWidth
     */
    public function addHoverBorderWidth($hoverBorderWidth)
    {
        $this->hoverBorderWidth[] = $hoverBorderWidth;
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
