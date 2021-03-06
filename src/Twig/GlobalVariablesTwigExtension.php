<?php

declare(strict_types=1);

namespace TomasVotruba\Website\Twig;

use Twig\Environment;
use Twig\Extension\AbstractExtension;

final class GlobalVariablesTwigExtension extends AbstractExtension
{
    public function __construct(Environment $environment, array $clusters, array $contributors = [])
    {
        $environment->addGlobal('contributors_count', count($contributors));
        $environment->addGlobal('clusters', $clusters);
    }
}
