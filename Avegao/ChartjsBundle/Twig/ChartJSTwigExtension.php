<?php

namespace Avegao\ChartjsBundle\Twig;

use Avegao\ChartjsBundle\Chart\ChartInterface;
use Avegao\ChartjsBundle\Chart\LinearChart;

class ChartJSTwigExtension extends \Twig_Extension
{
    /**
     * @inheritDoc
     */
    public function getName()
    {
        return 'chartjs_twig_extension';
    }

    /**
     * @inheritDoc
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('chartjs_render_html', [$this, 'renderHTML']),
            new \Twig_SimpleFilter('chartjs_render_js',   [$this, 'renderJS']),
        ];
    }


    /**
     * @param ChartInterface $chart
     * @param int $width
     * @param int $height
     * @return string
     */
    public function renderHTML(ChartInterface $chart, $width = 400, $height = 400)
    {
        return '<canvas id="'.$chart->getId().'" width="'.$width.'" height="'.$height.'"></canvas>';
    }

    /**
     * @param ChartInterface $chart
     * @return string
     */
    public function renderJS(ChartInterface $chart)
    {
        $js  = '$(document).ready(function(){';
        $js .= 'var ctx'.$chart->getId().' = document.getElementById(\''.$chart->getId().'\').getContext(\'2d\');';

        $chartClass = get_class($chart);

        if (LinearChart::class === $chartClass) {
            $js .= 'var '.$chart->getId().' = new Chart(ctx'.$chart->getId().').Line('.json_encode($chart->getData()).', '.json_encode($chart->getOptions()).');';
        }

        $js .= '});';

        return $js;
    }
}
