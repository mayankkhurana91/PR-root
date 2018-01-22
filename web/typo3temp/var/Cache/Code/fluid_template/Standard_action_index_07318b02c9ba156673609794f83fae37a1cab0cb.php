<?php

class Standard_action_index_07318b02c9ba156673609794f83fae37a1cab0cb extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
plugin.';
$array5 = array (
);
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey', $array5)]);

$output4 .= '_';
$array6 = array (
);
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('plugin.key', $array6)]);

$output4 .= ' {
    view {
        templateRootPaths.0 = EXT:';
$array7 = array (
);
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array7)]);

$output4 .= '/Resources/Private/Templates/
        templateRootPaths.1 = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '$plugin.';
$array11 = array (
);
$output10 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey', $array11);

$output10 .= '_';
$array12 = array (
);
$output10 .= $renderingContext->getVariableProvider()->getByPath('plugin.key', $array12);

$output10 .= '.view.templateRootPath';
return $output10;
};
$arguments8 = array();

$output4 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output4 .= '
        partialRootPaths.0 = EXT:';
$array13 = array (
);
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array13)]);

$output4 .= '/Resources/Private/Partials/
        partialRootPaths.1 = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '$plugin.';
$array17 = array (
);
$output16 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey', $array17);

$output16 .= '_';
$array18 = array (
);
$output16 .= $renderingContext->getVariableProvider()->getByPath('plugin.key', $array18);

$output16 .= '.view.partialRootPath';
return $output16;
};
$arguments14 = array();

$output4 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output4 .= '
        layoutRootPaths.0 = EXT:';
$array19 = array (
);
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array19)]);

$output4 .= '/Resources/Private/Layouts/
        layoutRootPaths.1 = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '$plugin.';
$array23 = array (
);
$output22 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey', $array23);

$output22 .= '_';
$array24 = array (
);
$output22 .= $renderingContext->getVariableProvider()->getByPath('plugin.key', $array24);

$output22 .= '.view.layoutRootPath';
return $output22;
};
$arguments20 = array();

$output4 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output4 .= '
    }
    persistence {
        storagePid = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '$plugin.';
$array28 = array (
);
$output27 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey', $array28);

$output27 .= '_';
$array29 = array (
);
$output27 .= $renderingContext->getVariableProvider()->getByPath('plugin.key', $array29);

$output27 .= '.persistence.storagePid';
return $output27;
};
$arguments25 = array();

$output4 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output4 .= '
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}
';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('extension.plugins', $array3);
$arguments1['as'] = 'plugin';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
# these classes are only used in auto-generated templates
plugin.';
$array36 = array (
);
$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey', $array36)]);

$output35 .= '._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .';
$array37 = array (
);
$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.cssClassName', $array37)]);

$output35 .= ' table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .';
$array38 = array (
);
$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.cssClassName', $array38)]);

$output35 .= ' table th {
        font-weight:bold;
    }

    .';
$array39 = array (
);
$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.cssClassName', $array39)]);

$output35 .= ' table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
';
return $output35;
};
$arguments30 = array();
$arguments30['then'] = NULL;
$arguments30['else'] = NULL;
$arguments30['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array32 = array();
$array33 = array (
);$array32['0'] = $renderingContext->getVariableProvider()->getByPath('extension.plugins', $array33);

$expression34 = function($context) {return ($context["node0"]);};
$arguments30['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression34(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)
					),
					$renderingContext
				);
$arguments30['__thenClosure'] = $renderChildrenClosure31;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
# Module configuration
module.';
$array44 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey', $array44)]);

$output43 .= '_';
$array45 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendModule.mainModule', $array45)]);

$output43 .= '_';
$array46 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.unprefixedShortExtensionKey', $array46)]);
$array47 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendModule.key', $array47)]);

$output43 .= ' {
    persistence {
        storagePid = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '$module.';
$array51 = array (
);
$output50 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey', $array51);

$output50 .= '_';
$array52 = array (
);
$output50 .= $renderingContext->getVariableProvider()->getByPath('backendModule.key', $array52);

$output50 .= '.persistence.storagePid';
return $output50;
};
$arguments48 = array();

$output43 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output43 .= '
    }
    view {
        templateRootPaths.0 = EXT:';
$array53 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array53)]);

$output43 .= '/Resources/Private/Backend/Templates/
        templateRootPaths.1 = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '$module.';
$array57 = array (
);
$output56 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey', $array57);

$output56 .= '_';
$array58 = array (
);
$output56 .= $renderingContext->getVariableProvider()->getByPath('backendModule.key', $array58);

$output56 .= '.view.templateRootPath';
return $output56;
};
$arguments54 = array();

$output43 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output43 .= '
        partialRootPaths.0 = EXT:';
$array59 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array59)]);

$output43 .= '/Resources/Private/Backend/Partials/
        partialRootPaths.1 = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '$module.';
$array63 = array (
);
$output62 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey', $array63);

$output62 .= '_';
$array64 = array (
);
$output62 .= $renderingContext->getVariableProvider()->getByPath('backendModule.key', $array64);

$output62 .= '.view.partialRootPath';
return $output62;
};
$arguments60 = array();

$output43 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output43 .= '
        layoutRootPaths.0 = EXT:';
$array65 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array65)]);

$output43 .= '/Resources/Private/Backend/Layouts/
        layoutRootPaths.1 = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '$module.';
$array69 = array (
);
$output68 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey', $array69);

$output68 .= '_';
$array70 = array (
);
$output68 .= $renderingContext->getVariableProvider()->getByPath('backendModule.key', $array70);

$output68 .= '.view.layoutRootPath';
return $output68;
};
$arguments66 = array();

$output43 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output43 .= '
    }
}
';
return $output43;
};
$arguments40 = array();
$arguments40['each'] = NULL;
$arguments40['as'] = NULL;
$arguments40['key'] = NULL;
$arguments40['reverse'] = false;
$arguments40['iteration'] = NULL;
$array42 = array (
);$arguments40['each'] = $renderingContext->getVariableProvider()->getByPath('extension.backendModules', $array42);
$arguments40['as'] = 'backendModule';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#