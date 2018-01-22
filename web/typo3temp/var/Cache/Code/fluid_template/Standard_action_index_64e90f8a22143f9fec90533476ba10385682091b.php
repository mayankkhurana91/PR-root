<?php

class Standard_action_index_64e90f8a22143f9fec90533476ba10385682091b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\TrimViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
#
# Table structure for table \'';
$array11 = array (
);
$output10 .= $renderingContext->getVariableProvider()->getByPath('domainObject.databaseTableName', $array11);

$output10 .= '\'
#
CREATE TABLE ';
$array12 = array (
);
$output10 .= $renderingContext->getVariableProvider()->getByPath('domainObject.databaseTableName', $array12);

$output10 .= ' (
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output18 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();

$output18 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return '
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT \'0\' NOT NULL,';
};
$arguments21 = array();
$arguments21['if'] = NULL;

$output18 .= '';
return $output18;
};
$arguments13 = array();
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$arguments13['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.mapToTable', $array16);

$expression17 = function($context) {return ($context["node0"]);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$arguments13['__thenClosure'] = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT \'0\' NOT NULL,';
};

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output10 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
	';
$array30 = array (
);
$output29 .= $renderingContext->getVariableProvider()->getByPath('relation.foreignKeyName', $array30);

$output29 .= ' int(11) unsigned DEFAULT \'0\' NOT NULL,';
return $output29;
};
$arguments23 = array();
$arguments23['each'] = NULL;
$arguments23['as'] = NULL;
$arguments23['key'] = NULL;
$arguments23['reverse'] = false;
$arguments23['iteration'] = NULL;
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\ListForeignKeyRelationsViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['extension'] = NULL;
$arguments25['domainObject'] = NULL;
$array27 = array (
);$arguments25['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array27);
$array28 = array (
);$arguments25['domainObject'] = $renderingContext->getVariableProvider()->getByPath('domainObject', $array28);
$arguments23['each'] = EBT\ExtensionBuilder\ViewHelpers\ListForeignKeyRelationsViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);
$arguments23['as'] = 'relation';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output10 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
	';
$array35 = array (
);
$output34 .= $renderingContext->getVariableProvider()->getByPath('property.sqlDefinition', $array35);
return $output34;
};
$arguments31 = array();
$arguments31['each'] = NULL;
$arguments31['as'] = NULL;
$arguments31['key'] = NULL;
$arguments31['reverse'] = false;
$arguments31['iteration'] = NULL;
$array33 = array (
);$arguments31['each'] = $renderingContext->getVariableProvider()->getByPath('domainObject.properties', $array33);
$arguments31['as'] = 'property';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output10 .= '
';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MappingViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return '
	tx_extbase_type varchar(255) DEFAULT \'\' NOT NULL,
';
};
$arguments36 = array();
$arguments36['then'] = NULL;
$arguments36['else'] = NULL;
$arguments36['condition'] = false;
$arguments36['domainObject'] = NULL;
$arguments36['renderCondition'] = NULL;
$arguments36['renderCondition'] = 'needsTypeField';
$array38 = array (
);$arguments36['domainObject'] = $renderingContext->getVariableProvider()->getByPath('domainObject', $array38);
$arguments36['__thenClosure'] = $renderChildrenClosure37;

$output10 .= EBT\ExtensionBuilder\ViewHelpers\MappingViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output10 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output85 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();

$output85 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
	tstamp int(11) unsigned DEFAULT \'0\' NOT NULL,
	crdate int(11) unsigned DEFAULT \'0\' NOT NULL,
	cruser_id int(11) unsigned DEFAULT \'0\' NOT NULL,
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return '	deleted smallint(5) unsigned DEFAULT \'0\' NOT NULL,';
};
$arguments91 = array();
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$arguments91['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array93 = array();
$array94 = array (
);$array93['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.addDeletedField', $array94);

$expression95 = function($context) {return ($context["node0"]);};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
$arguments91['__thenClosure'] = $renderChildrenClosure92;

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output90 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return '	hidden smallint(5) unsigned DEFAULT \'0\' NOT NULL,';
};
$arguments96 = array();
$arguments96['then'] = NULL;
$arguments96['else'] = NULL;
$arguments96['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array98 = array();
$array99 = array (
);$array98['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.addHiddenField', $array99);

$expression100 = function($context) {return ($context["node0"]);};
$arguments96['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression100(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array98)
					),
					$renderingContext
				);
$arguments96['__thenClosure'] = $renderChildrenClosure97;

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output90 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return '	starttime int(11) unsigned DEFAULT \'0\' NOT NULL,
	endtime int(11) unsigned DEFAULT \'0\' NOT NULL,';
};
$arguments101 = array();
$arguments101['then'] = NULL;
$arguments101['else'] = NULL;
$arguments101['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array103 = array();
$array104 = array (
);$array103['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.addStarttimeEndtimeFields', $array104);

$expression105 = function($context) {return ($context["node0"]);};
$arguments101['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)
					),
					$renderingContext
				);
$arguments101['__thenClosure'] = $renderChildrenClosure102;

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output90 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return '
	t3ver_oid int(11) DEFAULT \'0\' NOT NULL,
	t3ver_id int(11) DEFAULT \'0\' NOT NULL,
	t3ver_wsid int(11) DEFAULT \'0\' NOT NULL,
	t3ver_label varchar(255) DEFAULT \'\' NOT NULL,
	t3ver_state smallint(6) DEFAULT \'0\' NOT NULL,
	t3ver_stage int(11) DEFAULT \'0\' NOT NULL,
	t3ver_count int(11) DEFAULT \'0\' NOT NULL,
	t3ver_tstamp int(11) DEFAULT \'0\' NOT NULL,
	t3ver_move_id int(11) DEFAULT \'0\' NOT NULL,
';
};
$arguments106 = array();
$arguments106['then'] = NULL;
$arguments106['else'] = NULL;
$arguments106['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array108 = array();
$array109 = array (
);$array108['0'] = $renderingContext->getVariableProvider()->getByPath('extension.supportVersioning', $array109);

$expression110 = function($context) {return ($context["node0"]);};
$arguments106['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression110(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array108)
					),
					$renderingContext
				);
$arguments106['__thenClosure'] = $renderChildrenClosure107;

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return '	sorting int(11) DEFAULT \'0\' NOT NULL,';
};
$arguments111 = array();
$arguments111['then'] = NULL;
$arguments111['else'] = NULL;
$arguments111['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array113 = array();
$array114 = array (
);$array113['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.sorting', $array114);

$expression115 = function($context) {return ($context["node0"]);};
$arguments111['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression115(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array113)
					),
					$renderingContext
				);
$arguments111['__thenClosure'] = $renderChildrenClosure112;

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output90 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return '
	sys_language_uid int(11) DEFAULT \'0\' NOT NULL,
	l10n_parent int(11) DEFAULT \'0\' NOT NULL,
	l10n_diffsource mediumblob,
	l10n_state text,
';
};
$arguments116 = array();
$arguments116['then'] = NULL;
$arguments116['else'] = NULL;
$arguments116['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['0'] = $renderingContext->getVariableProvider()->getByPath('extension.supportLocalization', $array119);

$expression120 = function($context) {return ($context["node0"]);};
$arguments116['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)
					),
					$renderingContext
				);
$arguments116['__thenClosure'] = $renderChildrenClosure117;

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output90 .= '
	PRIMARY KEY (uid),
	KEY parent (pid),';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return '
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),';
};
$arguments121 = array();
$arguments121['then'] = NULL;
$arguments121['else'] = NULL;
$arguments121['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array123 = array();
$array124 = array (
);$array123['0'] = $renderingContext->getVariableProvider()->getByPath('extension.supportVersioning', $array124);

$expression125 = function($context) {return ($context["node0"]);};
$arguments121['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression125(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array123)
					),
					$renderingContext
				);
$arguments121['__thenClosure'] = $renderChildrenClosure122;

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return '
	KEY language (l10n_parent,sys_language_uid)';
};
$arguments126 = array();
$arguments126['then'] = NULL;
$arguments126['else'] = NULL;
$arguments126['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array128 = array();
$array129 = array (
);$array128['0'] = $renderingContext->getVariableProvider()->getByPath('extension.supportLocalization', $array129);

$expression130 = function($context) {return ($context["node0"]);};
$arguments126['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression130(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array128)
					),
					$renderingContext
				);
$arguments126['__thenClosure'] = $renderChildrenClosure127;

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output90 .= '
';
return $output90;
};
$arguments88 = array();
$arguments88['if'] = NULL;

$output85 .= '';

$output85 .= '
';
return $output85;
};
$arguments39 = array();
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$arguments39['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array82 = array();
$array83 = array (
);$array82['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.mapToTable', $array83);

$expression84 = function($context) {return ($context["node0"]);};
$arguments39['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression84(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array82)
					),
					$renderingContext
				);
$arguments39['__thenClosure'] = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39['__elseClosures'][] = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
	tstamp int(11) unsigned DEFAULT \'0\' NOT NULL,
	crdate int(11) unsigned DEFAULT \'0\' NOT NULL,
	cruser_id int(11) unsigned DEFAULT \'0\' NOT NULL,
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return '	deleted smallint(5) unsigned DEFAULT \'0\' NOT NULL,';
};
$arguments42 = array();
$arguments42['then'] = NULL;
$arguments42['else'] = NULL;
$arguments42['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array44 = array();
$array45 = array (
);$array44['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.addDeletedField', $array45);

$expression46 = function($context) {return ($context["node0"]);};
$arguments42['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression46(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)
					),
					$renderingContext
				);
$arguments42['__thenClosure'] = $renderChildrenClosure43;

$output41 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return '	hidden smallint(5) unsigned DEFAULT \'0\' NOT NULL,';
};
$arguments47 = array();
$arguments47['then'] = NULL;
$arguments47['else'] = NULL;
$arguments47['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.addHiddenField', $array50);

$expression51 = function($context) {return ($context["node0"]);};
$arguments47['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)
					),
					$renderingContext
				);
$arguments47['__thenClosure'] = $renderChildrenClosure48;

$output41 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output41 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return '	starttime int(11) unsigned DEFAULT \'0\' NOT NULL,
	endtime int(11) unsigned DEFAULT \'0\' NOT NULL,';
};
$arguments52 = array();
$arguments52['then'] = NULL;
$arguments52['else'] = NULL;
$arguments52['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.addStarttimeEndtimeFields', $array55);

$expression56 = function($context) {return ($context["node0"]);};
$arguments52['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression56(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);
$arguments52['__thenClosure'] = $renderChildrenClosure53;

$output41 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output41 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return '
	t3ver_oid int(11) DEFAULT \'0\' NOT NULL,
	t3ver_id int(11) DEFAULT \'0\' NOT NULL,
	t3ver_wsid int(11) DEFAULT \'0\' NOT NULL,
	t3ver_label varchar(255) DEFAULT \'\' NOT NULL,
	t3ver_state smallint(6) DEFAULT \'0\' NOT NULL,
	t3ver_stage int(11) DEFAULT \'0\' NOT NULL,
	t3ver_count int(11) DEFAULT \'0\' NOT NULL,
	t3ver_tstamp int(11) DEFAULT \'0\' NOT NULL,
	t3ver_move_id int(11) DEFAULT \'0\' NOT NULL,
';
};
$arguments57 = array();
$arguments57['then'] = NULL;
$arguments57['else'] = NULL;
$arguments57['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array59 = array();
$array60 = array (
);$array59['0'] = $renderingContext->getVariableProvider()->getByPath('extension.supportVersioning', $array60);

$expression61 = function($context) {return ($context["node0"]);};
$arguments57['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression61(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)
					),
					$renderingContext
				);
$arguments57['__thenClosure'] = $renderChildrenClosure58;

$output41 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return '	sorting int(11) DEFAULT \'0\' NOT NULL,';
};
$arguments62 = array();
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$arguments62['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.sorting', $array65);

$expression66 = function($context) {return ($context["node0"]);};
$arguments62['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)
					),
					$renderingContext
				);
$arguments62['__thenClosure'] = $renderChildrenClosure63;

$output41 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output41 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return '
	sys_language_uid int(11) DEFAULT \'0\' NOT NULL,
	l10n_parent int(11) DEFAULT \'0\' NOT NULL,
	l10n_diffsource mediumblob,
	l10n_state text,
';
};
$arguments67 = array();
$arguments67['then'] = NULL;
$arguments67['else'] = NULL;
$arguments67['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['0'] = $renderingContext->getVariableProvider()->getByPath('extension.supportLocalization', $array70);

$expression71 = function($context) {return ($context["node0"]);};
$arguments67['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression71(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);
$arguments67['__thenClosure'] = $renderChildrenClosure68;

$output41 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output41 .= '
	PRIMARY KEY (uid),
	KEY parent (pid),';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return '
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),';
};
$arguments72 = array();
$arguments72['then'] = NULL;
$arguments72['else'] = NULL;
$arguments72['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array74 = array();
$array75 = array (
);$array74['0'] = $renderingContext->getVariableProvider()->getByPath('extension.supportVersioning', $array75);

$expression76 = function($context) {return ($context["node0"]);};
$arguments72['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression76(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array74)
					),
					$renderingContext
				);
$arguments72['__thenClosure'] = $renderChildrenClosure73;

$output41 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return '
	KEY language (l10n_parent,sys_language_uid)';
};
$arguments77 = array();
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$arguments77['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['0'] = $renderingContext->getVariableProvider()->getByPath('extension.supportLocalization', $array80);

$expression81 = function($context) {return ($context["node0"]);};
$arguments77['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)
					),
					$renderingContext
				);
$arguments77['__thenClosure'] = $renderChildrenClosure78;

$output41 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output41 .= '
';
return $output41;
};

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output10 .= '
);
';
return $output10;
};
$arguments7 = array();
$arguments7['each'] = NULL;
$arguments7['as'] = NULL;
$arguments7['key'] = NULL;
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$array9 = array (
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('extension.domainObjects', $array9);
$arguments7['as'] = 'domainObject';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
';
return $output6;
};
$arguments4 = array();

$output3 .= EBT\ExtensionBuilder\ViewHelpers\Format\TrimViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\GroupedForViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
#
# Table structure for table \'';
$array161 = array (
);
$output160 .= $renderingContext->getVariableProvider()->getByPath('tableName', $array161);

$output160 .= '\'
#
CREATE TABLE ';
$array162 = array (
);
$output160 .= $renderingContext->getVariableProvider()->getByPath('tableName', $array162);

$output160 .= ' (
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$output166 = '';

$output166 .= '
	';
$array167 = array (
);
$output166 .= $renderingContext->getVariableProvider()->getByPath('relation.foreignKeyName', $array167);

$output166 .= ' int(11) unsigned DEFAULT \'0\' NOT NULL,
';
return $output166;
};
$arguments163 = array();
$arguments163['each'] = NULL;
$arguments163['as'] = NULL;
$arguments163['key'] = NULL;
$arguments163['reverse'] = false;
$arguments163['iteration'] = NULL;
$array165 = array (
);$arguments163['each'] = $renderingContext->getVariableProvider()->getByPath('relationsWithSameForeignTable', $array165);
$arguments163['as'] = 'relation';

$output160 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output160 .= '
);
        ';
return $output160;
};
$arguments158 = array();
$arguments158['if'] = NULL;
return '';
};
$arguments145 = array();
$arguments145['then'] = NULL;
$arguments145['else'] = NULL;
$arguments145['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array155 = array();
$array156 = array (
);$array155['0'] = $renderingContext->getVariableProvider()->getByPath('tableName', $array156);
$array155['1'] = ' == \'sys_file_reference\'';

$expression157 = function($context) {return (($context["node0"]) == 'sys_file_reference');};
$arguments145['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression157(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array155)
					),
					$renderingContext
				);
$arguments145['__elseClosures'][] = function() use ($renderingContext, $self) {
$output147 = '';

$output147 .= '
#
# Table structure for table \'';
$array148 = array (
);
$output147 .= $renderingContext->getVariableProvider()->getByPath('tableName', $array148);

$output147 .= '\'
#
CREATE TABLE ';
$array149 = array (
);
$output147 .= $renderingContext->getVariableProvider()->getByPath('tableName', $array149);

$output147 .= ' (
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
	';
$array154 = array (
);
$output153 .= $renderingContext->getVariableProvider()->getByPath('relation.foreignKeyName', $array154);

$output153 .= ' int(11) unsigned DEFAULT \'0\' NOT NULL,
';
return $output153;
};
$arguments150 = array();
$arguments150['each'] = NULL;
$arguments150['as'] = NULL;
$arguments150['key'] = NULL;
$arguments150['reverse'] = false;
$arguments150['iteration'] = NULL;
$array152 = array (
);$arguments150['each'] = $renderingContext->getVariableProvider()->getByPath('relationsWithSameForeignTable', $array152);
$arguments150['as'] = 'relation';

$output147 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output147 .= '
);
        ';
return $output147;
};

$output144 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output144 .= '
      ';
return $output144;
};
$arguments139 = array();
$arguments139['then'] = NULL;
$arguments139['else'] = NULL;
$arguments139['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array141 = array();
$array142 = array (
);$array141['0'] = $renderingContext->getVariableProvider()->getByPath('tableName', $array142);

$expression143 = function($context) {return ($context["node0"]);};
$arguments139['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression143(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array141)
					),
					$renderingContext
				);
$arguments139['__thenClosure'] = $renderChildrenClosure140;

$output138 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= '
   ';
return $output138;
};
$arguments135 = array();
$arguments135['each'] = NULL;
$arguments135['as'] = NULL;
$arguments135['groupBy'] = NULL;
$arguments135['groupKey'] = 'groupKey';
$array137 = array (
);$arguments135['each'] = $renderingContext->getVariableProvider()->getByPath('domainObject.zeroToManyRelationProperties', $array137);
$arguments135['as'] = 'relationsWithSameForeignTable';
$arguments135['groupBy'] = 'foreignDatabaseTableName';
$arguments135['groupKey'] = 'tableName';

$output134 .= TYPO3Fluid\Fluid\ViewHelpers\GroupedForViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output134 .= '
   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output173 = '';

$output173 .= '
#
# Table structure for table \'';
$array174 = array (
);
$output173 .= $renderingContext->getVariableProvider()->getByPath('domainObject.databaseTableName', $array174);

$output173 .= '\'
#
CREATE TABLE ';
$array175 = array (
);
$output173 .= $renderingContext->getVariableProvider()->getByPath('domainObject.databaseTableName', $array175);

$output173 .= ' (
	categories int(11) unsigned DEFAULT \'0\' NOT NULL,
);
   ';
return $output173;
};
$arguments168 = array();
$arguments168['then'] = NULL;
$arguments168['else'] = NULL;
$arguments168['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array170 = array();
$array171 = array (
);$array170['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.categorizable', $array171);

$expression172 = function($context) {return ($context["node0"]);};
$arguments168['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression172(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array170)
					),
					$renderingContext
				);
$arguments168['__thenClosure'] = $renderChildrenClosure169;

$output134 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output134 .= '

   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
#
# Table structure for table \'';
$array186 = array (
);
$output185 .= $renderingContext->getVariableProvider()->getByPath('relation.relationTableName', $array186);

$output185 .= '\'
#
CREATE TABLE ';
$array187 = array (
);
$output185 .= $renderingContext->getVariableProvider()->getByPath('relation.relationTableName', $array187);

$output185 .= ' (
	uid_local int(11) unsigned DEFAULT \'0\' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT \'0\' NOT NULL,
	sorting int(11) unsigned DEFAULT \'0\' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT \'0\' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       ';
return $output185;
};
$arguments180 = array();
$arguments180['then'] = NULL;
$arguments180['else'] = NULL;
$arguments180['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array182 = array();
$array183 = array (
);$array182['0'] = $renderingContext->getVariableProvider()->getByPath('relation.useMMTable', $array183);

$expression184 = function($context) {return ($context["node0"]);};
$arguments180['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression184(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array182)
					),
					$renderingContext
				);
$arguments180['__thenClosure'] = $renderChildrenClosure181;

$output179 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output179 .= '
    ';
return $output179;
};
$arguments176 = array();
$arguments176['each'] = NULL;
$arguments176['as'] = NULL;
$arguments176['key'] = NULL;
$arguments176['reverse'] = false;
$arguments176['iteration'] = NULL;
$array178 = array (
);$arguments176['each'] = $renderingContext->getVariableProvider()->getByPath('domainObject.anyToManyRelationProperties', $array178);
$arguments176['as'] = 'relation';

$output134 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output134 .= '
';
return $output134;
};
$arguments131 = array();
$arguments131['each'] = NULL;
$arguments131['as'] = NULL;
$arguments131['key'] = NULL;
$arguments131['reverse'] = false;
$arguments131['iteration'] = NULL;
$array133 = array (
);$arguments131['each'] = $renderingContext->getVariableProvider()->getByPath('extension.domainObjects', $array133);
$arguments131['as'] = 'domainObject';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output3 .= '
';
return $output3;
};
$arguments1 = array();
$arguments1['value'] = NULL;
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$renderChildrenClosure2 = $arguments1['value'] ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#