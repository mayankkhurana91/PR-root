<?php

class Standard_action_SpecialFeature_668706cb29fa805df160ea699352a0035548d9d4 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
));
}

/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['typoscriptObjectPath'] = NULL;
$arguments1['data'] = NULL;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$arguments1['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array4);
$array3['colPos'] = 3;
$arguments1['data'] = $array3;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

    <div class="section section-default">
        <div class="container">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['typoscriptObjectPath'] = NULL;
$arguments5['data'] = NULL;
$arguments5['currentValueKey'] = NULL;
$arguments5['table'] = '';
$arguments5['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array8);
$array7['colPos'] = 0;
$arguments5['data'] = $array7;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
        </div>
    </div>

    <div class="section section-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['typoscriptObjectPath'] = NULL;
$arguments9['data'] = NULL;
$arguments9['currentValueKey'] = NULL;
$arguments9['table'] = '';
$arguments9['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array12);
$array11['colPos'] = 30;
$arguments9['data'] = $array11;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
                </div>
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['typoscriptObjectPath'] = NULL;
$arguments13['data'] = NULL;
$arguments13['currentValueKey'] = NULL;
$arguments13['table'] = '';
$arguments13['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array16);
$array15['colPos'] = 31;
$arguments13['data'] = $array15;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['typoscriptObjectPath'] = NULL;
$arguments17['data'] = NULL;
$arguments17['currentValueKey'] = NULL;
$arguments17['table'] = '';
$arguments17['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array20);
$array19['colPos'] = 32;
$arguments17['data'] = $array19;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '
                </div>
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['typoscriptObjectPath'] = NULL;
$arguments21['data'] = NULL;
$arguments21['currentValueKey'] = NULL;
$arguments21['table'] = '';
$arguments21['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array24);
$array23['colPos'] = 33;
$arguments21['data'] = $array23;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output0 .= '
                </div>
            </div>
        </div>
    </div>

    <div class="section section-default">
        <div class="container">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['typoscriptObjectPath'] = NULL;
$arguments25['data'] = NULL;
$arguments25['currentValueKey'] = NULL;
$arguments25['table'] = '';
$arguments25['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array28);
$array27['colPos'] = 4;
$arguments25['data'] = $array27;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output0 .= '
        </div>
    </div>

    <div class="section section-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['typoscriptObjectPath'] = NULL;
$arguments29['data'] = NULL;
$arguments29['currentValueKey'] = NULL;
$arguments29['table'] = '';
$arguments29['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array31 = array();
$array32 = array (
);$array31['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array32);
$array31['colPos'] = 34;
$arguments29['data'] = $array31;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output0 .= '
                </div>
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['typoscriptObjectPath'] = NULL;
$arguments33['data'] = NULL;
$arguments33['currentValueKey'] = NULL;
$arguments33['table'] = '';
$arguments33['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array36);
$array35['colPos'] = 35;
$arguments33['data'] = $array35;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output0 .= '
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['typoscriptObjectPath'] = NULL;
$arguments37['data'] = NULL;
$arguments37['currentValueKey'] = NULL;
$arguments37['table'] = '';
$arguments37['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array39 = array();
$array40 = array (
);$array39['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array40);
$array39['colPos'] = 36;
$arguments37['data'] = $array39;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output0 .= '
                </div>
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['typoscriptObjectPath'] = NULL;
$arguments41['data'] = NULL;
$arguments41['currentValueKey'] = NULL;
$arguments41['table'] = '';
$arguments41['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array43 = array();
$array44 = array (
);$array43['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array44);
$array43['colPos'] = 37;
$arguments41['data'] = $array43;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output0 .= '
                </div>
            </div>
        </div>
    </div>

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output45 = '';

$output45 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['name'] = NULL;
$arguments46['name'] = 'Default';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output45 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['typoscriptObjectPath'] = NULL;
$arguments51['data'] = NULL;
$arguments51['currentValueKey'] = NULL;
$arguments51['table'] = '';
$arguments51['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array53 = array();
$array54 = array (
);$array53['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array54);
$array53['colPos'] = 3;
$arguments51['data'] = $array53;

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '

    <div class="section section-default">
        <div class="container">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['typoscriptObjectPath'] = NULL;
$arguments55['data'] = NULL;
$arguments55['currentValueKey'] = NULL;
$arguments55['table'] = '';
$arguments55['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array57 = array();
$array58 = array (
);$array57['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array58);
$array57['colPos'] = 0;
$arguments55['data'] = $array57;

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output50 .= '
        </div>
    </div>

    <div class="section section-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['typoscriptObjectPath'] = NULL;
$arguments59['data'] = NULL;
$arguments59['currentValueKey'] = NULL;
$arguments59['table'] = '';
$arguments59['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array61 = array();
$array62 = array (
);$array61['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array62);
$array61['colPos'] = 30;
$arguments59['data'] = $array61;

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output50 .= '
                </div>
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['typoscriptObjectPath'] = NULL;
$arguments63['data'] = NULL;
$arguments63['currentValueKey'] = NULL;
$arguments63['table'] = '';
$arguments63['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array65 = array();
$array66 = array (
);$array65['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array66);
$array65['colPos'] = 31;
$arguments63['data'] = $array65;

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output50 .= '
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['typoscriptObjectPath'] = NULL;
$arguments67['data'] = NULL;
$arguments67['currentValueKey'] = NULL;
$arguments67['table'] = '';
$arguments67['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array70);
$array69['colPos'] = 32;
$arguments67['data'] = $array69;

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output50 .= '
                </div>
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['typoscriptObjectPath'] = NULL;
$arguments71['data'] = NULL;
$arguments71['currentValueKey'] = NULL;
$arguments71['table'] = '';
$arguments71['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array74);
$array73['colPos'] = 33;
$arguments71['data'] = $array73;

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output50 .= '
                </div>
            </div>
        </div>
    </div>

    <div class="section section-default">
        <div class="container">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['typoscriptObjectPath'] = NULL;
$arguments75['data'] = NULL;
$arguments75['currentValueKey'] = NULL;
$arguments75['table'] = '';
$arguments75['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array77 = array();
$array78 = array (
);$array77['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array78);
$array77['colPos'] = 4;
$arguments75['data'] = $array77;

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output50 .= '
        </div>
    </div>

    <div class="section section-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['typoscriptObjectPath'] = NULL;
$arguments79['data'] = NULL;
$arguments79['currentValueKey'] = NULL;
$arguments79['table'] = '';
$arguments79['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array82);
$array81['colPos'] = 34;
$arguments79['data'] = $array81;

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output50 .= '
                </div>
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['typoscriptObjectPath'] = NULL;
$arguments83['data'] = NULL;
$arguments83['currentValueKey'] = NULL;
$arguments83['table'] = '';
$arguments83['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array85 = array();
$array86 = array (
);$array85['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array86);
$array85['colPos'] = 35;
$arguments83['data'] = $array85;

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output50 .= '
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['typoscriptObjectPath'] = NULL;
$arguments87['data'] = NULL;
$arguments87['currentValueKey'] = NULL;
$arguments87['table'] = '';
$arguments87['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array89 = array();
$array90 = array (
);$array89['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array90);
$array89['colPos'] = 36;
$arguments87['data'] = $array89;

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output50 .= '
                </div>
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['typoscriptObjectPath'] = NULL;
$arguments91['data'] = NULL;
$arguments91['currentValueKey'] = NULL;
$arguments91['table'] = '';
$arguments91['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array93 = array();
$array94 = array (
);$array93['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array94);
$array93['colPos'] = 37;
$arguments91['data'] = $array93;

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output50 .= '
                </div>
            </div>
        </div>
    </div>

';
return $output50;
};
$arguments48 = array();
$arguments48['name'] = NULL;
$arguments48['name'] = 'Main';

$output45 .= NULL;

$output45 .= '

';

return $output45;
}


}
#