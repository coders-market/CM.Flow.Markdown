# Parse markdown to html

This package includes:
* Service to inject and use it in your php code
* ViewHelper to parse markdown in your Fluid template


## Available Options

+ nofollow (boolen) - If true, all generated links will have a rel="nofollow" tag included
+ increaseHeadlineLevelBy (int) - If value = 1, headline tags (e.g. h1 ) will start with h(1+value). This is to prevent duplicated h1 tags
 
 
## How to use the viewhelper
 
Add this to the head of your Fluid template where you want to use this ViewHelper

`{namespace parse=CM\Flow\Markdown\ViewHelpers}`

Now you can use the viewhelper like this:

`<parse:markdown nofollow="true" increaseHeadlineLevelBy="1">{your_markdown_text}</parse:markdown>`