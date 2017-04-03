<?php
namespace CM\Flow\Markdown\ViewHelpers;

use CM\Flow\Markdown\Service\MarkdownService;
use Neos\FluidAdaptor\Core\ViewHelper\AbstractViewHelper;
use Neos\Flow\Annotations as Flow;

class MarkdownViewHelper extends AbstractViewHelper {
    /**
     * @var MarkdownService
     * @Flow\Inject
     */
    protected $markdownService;

    /**
     * @param string $content
     * @param boolean $nofollow Add nofollow to links
     * @param integer $increaseHeadlineLevelBy If added <h1> tags will be build like <h(1+value)>, good to prevent duplicated h1 tags
     *
	 * @return string
     */
    public function render($content = null, $nofollow = false, $increaseHeadlineLevelBy = 0) {
        if($content == null) {
            $content = $this->renderChildren();
        }

        return $this->markdownService->parse($content, $nofollow, $increaseHeadlineLevelBy);
    }
}