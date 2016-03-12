<?php

namespace Avegao\ChartjsBundle\DataSet;

class LinearDataSet implements DataSetInterface
{
    /** @var string */
    private $label;

    /** @var string */
    private $fillColor;

    /** @var string */
    private $strokeColor;

    /** @var string */
    private $pointColor;

    /** @var string */
    private $pointStrokeColor;

    /** @var string */
    private $pointHighlightFill;

    /** @var string */
    private $pointHighlightStroke;

    /** @var array */
    private $data;

    /**
     * LinearDataSet constructor.
     * @param string $label
     * @param string $fillColor
     * @param string $strokeColor
     * @param string $pointColor
     * @param string $pointStrokeColor
     * @param string $pointHighlightFill
     * @param string $pointHighlightStroke
     * @param array $data
     */
    public function __construct(
        $label                = 'Label',
        $fillColor            = 'rgba(220,220,220,0.2)',
        $strokeColor          = 'rgba(220,220,220,1)',
        $pointColor           = 'rgba(220,220,220,1)',
        $pointStrokeColor     = '#FFF',
        $pointHighlightFill   = '#FFF',
        $pointHighlightStroke = 'rgba(220,220,220,1)',
        array $data           = []
    )
    {
        $this->label                = $label;
        $this->fillColor            = $fillColor;
        $this->strokeColor          = $strokeColor;
        $this->pointColor           = $pointColor;
        $this->pointStrokeColor     = $pointStrokeColor;
        $this->pointHighlightFill   = $pointHighlightFill;
        $this->pointHighlightStroke = $pointHighlightStroke;
        $this->data                 = $data;
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
    public function getFillColor()
    {
        return $this->fillColor;
    }

    /**
     * @param string $fillColor
     * @return LinearDataSet
     */
    public function setFillColor($fillColor)
    {
        $this->fillColor = $fillColor;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrokeColor()
    {
        return $this->strokeColor;
    }

    /**
     * @param string $strokeColor
     * @return LinearDataSet
     */
    public function setStrokeColor($strokeColor)
    {
        $this->strokeColor = $strokeColor;
        return $this;
    }

    /**
     * @return string
     */
    public function getPointColor()
    {
        return $this->pointColor;
    }

    /**
     * @param string $pointColor
     * @return LinearDataSet
     */
    public function setPointColor($pointColor)
    {
        $this->pointColor = $pointColor;
        return $this;
    }

    /**
     * @return string
     */
    public function getPointStrokeColor()
    {
        return $this->pointStrokeColor;
    }

    /**
     * @param string $pointStrokeColor
     * @return LinearDataSet
     */
    public function setPointStrokeColor($pointStrokeColor)
    {
        $this->pointStrokeColor = $pointStrokeColor;
        return $this;
    }

    /**
     * @return string
     */
    public function getPointHighlightFill()
    {
        return $this->pointHighlightFill;
    }

    /**
     * @param string $pointHighlightFill
     * @return LinearDataSet
     */
    public function setPointHighlightFill($pointHighlightFill)
    {
        $this->pointHighlightFill = $pointHighlightFill;
        return $this;
    }

    /**
     * @return string
     */
    public function getPointHighlightStroke()
    {
        return $this->pointHighlightStroke;
    }

    /**
     * @param string $pointHighlightStroke
     * @return LinearDataSet
     */
    public function setPointHighlightStroke($pointHighlightStroke)
    {
        $this->pointHighlightStroke = $pointHighlightStroke;
        return $this;
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
}
