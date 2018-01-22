<?php

class Standard_action_index_7695398434d1cdcf980dae0d82b90fff823108b4 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return 'f:form.validationResults';
};
$arguments5 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output2 .= '
	';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= 'f:if condition="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return 'validationResults.flattenedErrors';
};
$arguments10 = array();

$output9 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '"';
return $output9;
};
$arguments7 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output2 .= '
		<ul>
		';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= 'f:for each="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return 'validationResults.flattenedErrors';
};
$arguments15 = array();

$output14 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '" key="propertyPath" as="errors"';
return $output14;
};
$arguments12 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output2 .= '
			<li>
			';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return 'propertyPath';
};
$arguments17 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output2 .= ': <ul>
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= 'f:for each="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return 'errors';
};
$arguments22 = array();

$output21 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '" as="error"';
return $output21;
};
$arguments19 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output2 .= '<li>';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return 'error';
};
$arguments24 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output2 .= '</li>';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return '/f:for';
};
$arguments26 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output2 .= '
				</ul>
			</li>
		';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return '/f:for';
};
$arguments28 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output2 .= '</ul>
';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return '/f:if';
};
$arguments30 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output2 .= '
';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return '/f:form.validationResults';
};
$arguments32 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output2 .= '
';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return '/html';
};
$arguments34 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);
return $output2;
};
$arguments0 = array();
$arguments0['value'] = NULL;

return isset($arguments0['value']) ? $arguments0['value'] : $renderChildrenClosure1();
}


}
#