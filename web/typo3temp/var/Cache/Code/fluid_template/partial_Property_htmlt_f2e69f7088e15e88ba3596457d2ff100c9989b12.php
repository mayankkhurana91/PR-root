<?php

class partial_Property_htmlt_f2e69f7088e15e88ba3596457d2ff100c9989b12 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SwitchViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
	';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CaseViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= 'f:for each="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output51 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$array54 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array54);
};
$arguments52 = array();

$output51 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '.';
$array55 = array (
);
$output51 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array55);
return $output51;
};
$arguments49 = array();

$output48 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '" as="image" ';
return $output48;
};
$arguments46 = array();

$output45 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
					';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= 'f:image src="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return 'image.originalResource.publicUrl';
};
$arguments59 = array();

$output58 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '" width="200"/';
return $output58;
};
$arguments56 = array();

$output45 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output45 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return '/f:for';
};
$arguments61 = array();

$output45 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output45 .= '
			';
return $output45;
};
$arguments43 = array();

$output42 .= '';

$output42 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= 'f:image src="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output71 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$array74 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array74);
};
$arguments72 = array();

$output71 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '.';
$array75 = array (
);
$output71 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array75);

$output71 .= '.originalResource.publicUrl';
return $output71;
};
$arguments69 = array();

$output68 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output68 .= '" width="200"/';
return $output68;
};
$arguments66 = array();

$output65 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
			';
return $output65;
};
$arguments63 = array();
$arguments63['if'] = NULL;

$output42 .= '';

$output42 .= '
		';
return $output42;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array39 = array();
$array40 = array (
);$array39['0'] = $renderingContext->getVariableProvider()->getByPath('property.zeroToManyRelation', $array40);

$expression41 = function($context) {return ($context["node0"]);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression41(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= 'f:for each="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output16 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$array19 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array19);
};
$arguments17 = array();

$output16 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '.';
$array20 = array (
);
$output16 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array20);
return $output16;
};
$arguments14 = array();

$output13 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '" as="image" ';
return $output13;
};
$arguments11 = array();

$output10 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
					';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= 'f:image src="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return 'image.originalResource.publicUrl';
};
$arguments24 = array();

$output23 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '" width="200"/';
return $output23;
};
$arguments21 = array();

$output10 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output10 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return '/f:for';
};
$arguments26 = array();

$output10 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output10 .= '
			';
return $output10;
};
$arguments8['__elseClosures'][] = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= 'f:image src="';
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

$output34 .= '.';
$array38 = array (
);
$output34 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array38);

$output34 .= '.originalResource.publicUrl';
return $output34;
};
$arguments32 = array();

$output31 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '" width="200"/';
return $output31;
};
$arguments29 = array();

$output28 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
			';
return $output28;
};

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
	';
return $output7;
};
$arguments5 = array();
$arguments5['value'] = NULL;
$arguments5['default'] = false;
$arguments5['value'] = 'Image';

$output4 .= EBT\ExtensionBuilder\ViewHelpers\CaseViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
	';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CaseViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= 'f:for each="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output125 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$array128 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array128);
};
$arguments126 = array();

$output125 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output125 .= '.';
$array129 = array (
);
$output125 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array129);
return $output125;
};
$arguments123 = array();

$output122 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output122 .= '" as="file" ';
return $output122;
};
$arguments120 = array();

$output119 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output119 .= '
					<a href="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return 'file.originalResource.publicUrl';
};
$arguments130 = array();

$output119 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output119 .= '">
						';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return 'file.originalResource.name';
};
$arguments132 = array();

$output119 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output119 .= '
					</a>
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return '/f:for';
};
$arguments134 = array();

$output119 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output119 .= '
			';
return $output119;
};
$arguments117 = array();

$output116 .= '';

$output116 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
				<a href="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$output141 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$array144 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array144);
};
$arguments142 = array();

$output141 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output141 .= '.';
$array145 = array (
);
$output141 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array145);

$output141 .= '.originalResource.publicUrl';
return $output141;
};
$arguments139 = array();

$output138 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= '">
					';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output148 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$array151 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array151);
};
$arguments149 = array();

$output148 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output148 .= '.';
$array152 = array (
);
$output148 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array152);

$output148 .= '.originalResource.name';
return $output148;
};
$arguments146 = array();

$output138 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output138 .= '
				</a>
			';
return $output138;
};
$arguments136 = array();
$arguments136['if'] = NULL;

$output116 .= '';

$output116 .= '
		';
return $output116;
};
$arguments79 = array();
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$arguments79['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array113 = array();
$array114 = array (
);$array113['0'] = $renderingContext->getVariableProvider()->getByPath('property.zeroToManyRelation', $array114);

$expression115 = function($context) {return ($context["node0"]);};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression115(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array113)
					),
					$renderingContext
				);
$arguments79['__thenClosure'] = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= 'f:for each="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output87 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$array90 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array90);
};
$arguments88 = array();

$output87 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '.';
$array91 = array (
);
$output87 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array91);
return $output87;
};
$arguments85 = array();

$output84 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '" as="file" ';
return $output84;
};
$arguments82 = array();

$output81 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
					<a href="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return 'file.originalResource.publicUrl';
};
$arguments92 = array();

$output81 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output81 .= '">
						';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return 'file.originalResource.name';
};
$arguments94 = array();

$output81 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output81 .= '
					</a>
				';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return '/f:for';
};
$arguments96 = array();

$output81 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output81 .= '
			';
return $output81;
};
$arguments79['__elseClosures'][] = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
				<a href="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output101 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$array104 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array104);
};
$arguments102 = array();

$output101 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output101 .= '.';
$array105 = array (
);
$output101 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array105);

$output101 .= '.originalResource.publicUrl';
return $output101;
};
$arguments99 = array();

$output98 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output98 .= '">
					';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output108 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$array111 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array111);
};
$arguments109 = array();

$output108 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '.';
$array112 = array (
);
$output108 .= $renderingContext->getVariableProvider()->getByPath('property.name', $array112);

$output108 .= '.originalResource.name';
return $output108;
};
$arguments106 = array();

$output98 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output98 .= '
				</a>
			';
return $output98;
};

$output78 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
	';
return $output78;
};
$arguments76 = array();
$arguments76['value'] = NULL;
$arguments76['default'] = false;
$arguments76['value'] = 'File';

$output4 .= EBT\ExtensionBuilder\ViewHelpers\CaseViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output4 .= '
	';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CaseViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
		';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$output158 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$array161 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.name', $array161);
};
$arguments159 = array();

$output158 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output158 .= '.';
$array162 = array (
);
$output158 .= $renderingContext->getVariableProvider()->getByPath('property.nameToBeDisplayedInFluidTemplate', $array162);
return $output158;
};
$arguments156 = array();

$output155 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output155 .= '
	';
return $output155;
};
$arguments153 = array();
$arguments153['value'] = NULL;
$arguments153['default'] = false;
$arguments153['value'] = '';

$output4 .= EBT\ExtensionBuilder\ViewHelpers\CaseViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output4 .= '
';
return $output4;
};
$arguments1 = array();
$arguments1['expression'] = NULL;
$array3 = array (
);$arguments1['expression'] = $renderingContext->getVariableProvider()->getByPath('property.type', $array3);

$output0 .= EBT\ExtensionBuilder\ViewHelpers\SwitchViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

return $output0;
}


}
#