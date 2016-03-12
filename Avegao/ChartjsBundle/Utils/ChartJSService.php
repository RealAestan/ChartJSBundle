<?php

namespace Avegao\ChartjsBundle\Utils;

use Avegao\ChartjsBundle\Chart\ChartInterface;
use Avegao\ChartjsBundle\Chart\LinearChart;

class ChartJSService
{
    public function renderHTML(ChartInterface $chart, $width = 400, $height = 400)
    {
        return '<canvas id="'.$chart->getId().'" width="'.$width.'" height="'.$height.'"></canvas>';
    }

    public function renderJS(ChartInterface $chart)
    {
        $js = 'var ctx'.$chart->getId().' = document.getElementById(\''.$chart->getId().'\').getContext(\'2d\');';

        $chartClass = get_class($chart);

        if (LinearChart::class === $chartClass) {
            $js .= 'var '.$chart->getId().' = new Chart(ctx'.$chart->getId().').Line('.json_encode($chart->getData()).', '.json_encode($chart->getOptions()).');';
        }

        return $js;
    }
}
