<?php

class Standard_action_index_99da68d5ace3e7ed6be52db417eb27c003a4975a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

  This template displays a EDIT form for the current domain object.

  If you modify this template, do not forget to change the overwrite settings
  in /Configuration/ExtensionBuilder/settings.yaml:
    Resources:
      Private:
        Templates:
          Edit.html: keep

  Otherwise your changes will be overwritten the next time you save the extension in the extension builder

  ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return 'f:section name="content"';
};
$arguments7 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output2 .= '
    <h1>Edit ';
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
return 'f:render partial="FormErrors" /';
};
$arguments12 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output2 .= '

    ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\RemoveMultipleNewlinesViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
    ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= 'f:form action="update" name="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$array22 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array22);
};
$arguments20 = array();

$output19 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '" object="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$array27 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array27);
};
$arguments25 = array();
return EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);
};
$arguments23 = array();

$output19 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output19 .= '" ';
return $output19;
};
$arguments17 = array();

$output16 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
    ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= 'f:render partial="';
$array31 = array (
);
$output30 .= $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array31);

$output30 .= '/FormFields" arguments="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output34 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$array37 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array37);
};
$arguments35 = array();

$output34 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= ':';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$array40 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array40);
};
$arguments38 = array();

$output34 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);
return $output34;
};
$arguments32 = array();

$output30 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output30 .= '" /';
return $output30;
};
$arguments28 = array();

$output16 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output16 .= '
    ';
return $output16;
};
$arguments14 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\Format\RemoveMultipleNewlinesViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output2 .= '
    ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return 'f:form.submit value="Save" /';
};
$arguments41 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output2 .= '
    ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return '/f:form';
};
$arguments43 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output2 .= '
  ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return '/f:section';
};
$arguments45 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output2 .= '
';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return '/html';
};
$arguments47 = array();

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);
return $output2;
};
$arguments0 = array();
$arguments0['value'] = NULL;

return isset($arguments0['value']) ? $arguments0['value'] : $renderChildrenClosure1();
}


}
#