<?php

namespace Avegao\ChartjsBundle\Chart;

use Avegao\ChartjsBundle\DataSet\DataSetException;
use Avegao\ChartjsBundle\DataSet\DataSetInterface;
use Avegao\ChartjsBundle\DataSet\LinearDataSet;

class LinearChart implements ChartInterface
{
    /** @var string */
    private $id;

    /** @var array */
    private $labels;

    /** @var LinearDataSet[] */
    private $dataSets;

    /** @var array */
    private $data;

    /** @var array */
    private $options;

    /**
     * LinearChart constructor.
     */
    public function __construct()
    {
        $this->id     = 'chart'.mt_rand(0, 4096);
        $this->labels = [];
    }

    /**
     * @inheritDoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritDoc
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @inheritDoc
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function addLabel($label)
    {
        $this->labels[] = $label;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getDataSets()
    {
        return $this->dataSets;
    }

    /**
     * @inheritDoc
     */
    public function setDataSets($dataSets)
    {
        $this->dataSets = $dataSets;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function addDataSet(DataSetInterface $dataSet)
    {
        $this->dataSets[] = $dataSet;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @inheritDoc
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @inheritDoc
     */
    public function setOptions($options)
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function generateData()
    {
        $data = [
            'labels' => $this->getLabels(),
            'datasets' => [],
        ];

        foreach ($this->getDataSets() as $dataSet) {
            if (!$dataSet instanceof LinearDataSet) {
                throw new DataSetException('DataSet must be an instance of LinearDataSet, '.get_class($dataSet).' given');
            }

            $data['datasets'][] = [
                'label'                => $dataSet->getLabel(),
                'fillColor'            => $dataSet->getFillColor(),
                'strokeColor'          => $dataSet->getStrokeColor(),
                'pointColor'           => $dataSet->getPointColor(),
                'pointStrokeColor'     => $dataSet->getPointStrokeColor(),
                'pointHighlightFill'   => $dataSet->getPointHighlightFill(),
                'pointHighlightStroke' => $dataSet->getPointHighlightStroke(),
                'data'                 => (array) $dataSet->getData(),
            ];
        }

        $this->setData($data);
    }
}
