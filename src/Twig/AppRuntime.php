<?php
/**
 * Created by  paginapersonal
 * User: Sebastian Hernandez
 * Date: 24/04/2020
 * Time: 4:11 PM
 */

namespace App\Twig;


use App\Service\MarkdownHelper;
use Twig\Extension\RuntimeExtensionInterface;

class AppRuntime implements RuntimeExtensionInterface
{
    /**
     * @var MarkdownHelper
     */
    private $markdownHelper;

    public function __construct(MarkdownHelper $markdownHelper)
    {

        $this->markdownHelper = $markdownHelper;
    }

    /**
     * @param $value
     * @return string
     * @throws \Psr\Cache\InvalidArgumentException
     */
    public function processMarkdown($value)
    {
        return $this->markdownHelper->parse($value);
    }
}