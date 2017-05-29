<?php

namespace Avegao\ChartjsBundle\Twig;

use Avegao\ChartjsBundle\Chart\ChartInterface;
use Avegao\ChartjsBundle\Chart\LinearChart;
use Symfony\Bundle\TwigBundle\TwigEngine;

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
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('chartjs_render_html', [$this, 'renderHTML'], ['is_safe' => ['html'], 'needs_environment' => false]),
            new \Twig_SimpleFunction('chartjs_render_js', [$this, 'renderJS'], ['is_safe' => ['html'], 'needs_environment' => false]),
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
        return '<canvas id="' . $chart->getId() . '" width="' . $width . '" height="' . $height . '"></canvas>';
    }

    /**
     * @param ChartInterface $chart
     * @return string
     */
    public function renderJS(ChartInterface $chart)
    {
        $legendCode = '';
        $js         = 'jQuery(document).ready(function(){';
        $js .= 'var ctx' . $chart->getId() . ' = jQuery(\'#' . $chart->getId() . '\');';

        $js .= 'var chart' . $chart->getId() . ' = new Chart(ctx' . $chart->getId() . ', {';
        $js .= '"type": "' . $chart->getType() . '",';
        $js .= '"data": ' . json_encode($chart->getData());

        if (!is_null($chart->getOptions())) {
            $legendFunction = '';
            $options        = $chart->getOptions();

            if (key_exists('legendCallback', $chart->getOptions())) {
                $legendFunction = 'legendCallback: function(chart) {';
                $legendFunction .= $options['legendCallback'];
                $legendFunction .= '}';
                $legendCode = 'jQuery(".chart-legend-' . $chart->getId() . '").html(chart' . $chart->getId() . '.generateLegend());';
                unset($options['legendCallback']);
                $chart->setOptions($options);
            }

            $jsonedOptions = json_encode($chart->getOptions());
            $jsonedOptions = substr($jsonedOptions, 0, -1) . ',';

            $js .= ',"options":' . $jsonedOptions . $legendFunction . '}';
        }

        $js .= '});';

        $js .= $legendCode;

        $js .= '});';

        return $js;
    }
}
