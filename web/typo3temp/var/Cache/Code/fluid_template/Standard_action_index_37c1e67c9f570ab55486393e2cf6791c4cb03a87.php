<?php

class Standard_action_index_37c1e67c9f570ab55486393e2cf6791c4cb03a87 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'k' => 
  array (
    0 => 'EBT\\ExtensionBuilder\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure1 = function() use ($renderingContext, $self) {
$output2 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return 'html xmlns:f="https://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers" data-namespace-typo3-fluid="true"';
};
$arguments3 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output2 .= '
	<div class="';
$array5 = array (
);
$output2 .= $renderingContext->getVariableProvider()->getByPath('extension.cssClassName', $array5);

$output2 .= '">
		';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return 'f:render section="content" /';
};
$arguments6 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output2 .= '
	</div>
';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return '/html';
};
$arguments8 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);
return $output2;
};
$arguments0 = array();
$arguments0['value'] = NULL;

return isset($arguments0['value']) ? $arguments0['value'] : $renderChildrenClosure1();
}


}
#