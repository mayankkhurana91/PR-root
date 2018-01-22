<?php

class Standard_action_index_d30dacb2dc2ca0bc67a0052098ceaa988df256b7 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
return 'f:layout name="Default" /';
};
$arguments5 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output2 .= '

	This Template is responsible for displaying a single view for a domain object

	If you modify this template, do not forget to change the overwrite settings
	in /Configuration/ExtensionBuilder/settings.yaml:
	  Resources:
		Private:
		  Templates:
			Show.html: keep

	Otherwise your changes will be overwritten the next time you save the extension in the extension builder

	';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return 'f:section name="content"';
};
$arguments7 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output2 .= '
		<h1>Single View for ';
$array9 = array (
);
$output2 .= $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array9);

$output2 .= '</h1>

		';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return 'f:flashMessages /';
};
$arguments10 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output2 .= '
		';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= 'f:render partial="';
$array15 = array (
);
$output14 .= $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array15);

$output14 .= '/Properties" arguments="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output18 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$array21 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array21);
};
$arguments19 = array();

$output18 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= ':';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$array24 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array24);
};
$arguments22 = array();

$output18 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);
return $output18;
};
$arguments16 = array();

$output14 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output14 .= '" /';
return $output14;
};
$arguments12 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output2 .= '
		';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return 'f:link.action action="list"';
};
$arguments25 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output2 .= 'Back to list';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return '/f:link.action';
};
$arguments27 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output2 .= '<br />
		';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return 'f:link.action action="new"';
};
$arguments29 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output2 .= 'New ';
$array31 = array (
);
$output2 .= $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array31);
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return '/f:link.action';
};
$arguments32 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output2 .= '
	';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return '/f:section';
};
$arguments34 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output2 .= '
';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return '/html';
};
$arguments36 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);
return $output2;
};
$arguments0 = array();
$arguments0['value'] = NULL;

return isset($arguments0['value']) ? $arguments0['value'] : $renderChildrenClosure1();
}


}
#