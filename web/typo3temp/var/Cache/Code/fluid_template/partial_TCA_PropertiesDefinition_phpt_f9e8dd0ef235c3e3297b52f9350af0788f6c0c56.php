<?php

class partial_TCA_PropertiesDefinition_phpt_f9e8dd0ef235c3e3297b52f9350af0788f6c0c56 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output0 = '';

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
    \'';
$array5 = array (
);
$output4 .= $renderingContext->getVariableProvider()->getByPath('property.fieldName', $array5);

$output4 .= '\' => [
        \'exclude\' => ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output11 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return 'true';
};
$arguments12 = array();

$output11 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return 'false';
};
$arguments14 = array();
$arguments14['if'] = NULL;

$output11 .= '';
return $output11;
};
$arguments6 = array();
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$arguments6['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array8 = array();
$array9 = array (
);$array8['0'] = $renderingContext->getVariableProvider()->getByPath('property.excludeField', $array9);

$expression10 = function($context) {return ($context["node0"]);};
$arguments6['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression10(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)
					),
					$renderingContext
				);
$arguments6['__thenClosure'] = function() use ($renderingContext, $self) {
return 'true';
};
$arguments6['__elseClosures'][] = function() use ($renderingContext, $self) {
return 'false';
};

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output4 .= ',
        \'label\' => \'LLL:EXT:';
$array16 = array (
);
$output4 .= $renderingContext->getVariableProvider()->getByPath('domainObject.extension.extensionKey', $array16);

$output4 .= '/Resources/Private/Language/locallang_db.xlf:';
$array17 = array (
);
$output4 .= $renderingContext->getVariableProvider()->getByPath('property.labelNamespace', $array17);

$output4 .= '\',
        \'config\' => ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\IndentViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['section'] = NULL;
$arguments20['partial'] = NULL;
$arguments20['delegate'] = NULL;
$arguments20['renderable'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['optional'] = false;
$arguments20['default'] = NULL;
$arguments20['contentAs'] = NULL;
$output22 = '';

$output22 .= 'TCA/';
$array23 = array (
);
$output22 .= $renderingContext->getVariableProvider()->getByPath('property.dataType', $array23);

$output22 .= '.phpt';
$arguments20['partial'] = $output22;
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['property'] = $renderingContext->getVariableProvider()->getByPath('property', $array25);
$array26 = array (
);$array24['extension'] = $renderingContext->getVariableProvider()->getByPath('domainObject.extension', $array26);
$array27 = array (
);$array24['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array27);
$arguments20['arguments'] = $array24;
return TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);
};
$arguments18 = array();
$arguments18['indentation'] = NULL;
$arguments18['indentation'] = 2;

$output4 .= EBT\ExtensionBuilder\ViewHelpers\Format\IndentViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output4 .= '
    ],';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('domainObject.properties', $array3);
$arguments1['as'] = 'property';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#