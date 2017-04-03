<?php
namespace CM\Flow\Markdown\Service;

use CM\Flow\Markdown\Util\Parsedown;
use Neos\Flow\Annotations as Flow;

/**
 * @Flow\Scope("singleton")
 */
class MarkdownService {
    /**
     * @var Parsedown
     */
    protected $parsedown;

    public function __construct() {
        $this->parsedown = new Parsedown();
    }

    /**
     * This will parse the markdown $content and return it as html.
     *
     * @param string $content some md content
     * @param boolean $nofollow Add nofollow to links
     * @param integer $increaseHeadlineLevelBy If added <h1> tags will be build like <h(1+value)>
     *
     * @return string the created html content
     */
    public function parse($content, $nofollow, $increaseHeadlineLevelBy) {
        $this->parsedown->setLinksNofollow($nofollow);
        $this->parsedown->setIncreaseHeadlineLevelBy($increaseHeadlineLevelBy);

        return $this->parsedown->text($content);
    }
}