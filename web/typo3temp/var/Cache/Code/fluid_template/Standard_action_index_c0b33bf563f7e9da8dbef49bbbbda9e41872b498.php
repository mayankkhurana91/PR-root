<?php

class Standard_action_index_c0b33bf563f7e9da8dbef49bbbbda9e41872b498 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<?php
namespace ';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.nameSpaceName', $array1)]);

$output0 .= '\\Tests\\Unit\\Domain\\Model;

/**
 * Test case.
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= ' *
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= ' * @author ';
$array12 = array (
);
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('person.name', $array12)]);

$output11 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '<';
$array19 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('person.email', $array19)]);

$output18 .= '>';
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
);$array15['0'] = $renderingContext->getVariableProvider()->getByPath('person.email', $array16);

$expression17 = function($context) {return ($context["node0"]);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$arguments13['__thenClosure'] = $renderChildrenClosure14;

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output11 .= '
';
return $output11;
};
$arguments8 = array();
$arguments8['each'] = NULL;
$arguments8['as'] = NULL;
$arguments8['key'] = NULL;
$arguments8['reverse'] = false;
$arguments8['iteration'] = NULL;
$array10 = array (
);$arguments8['each'] = $renderingContext->getVariableProvider()->getByPath('extension.persons', $array10);
$arguments8['as'] = 'person';

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);
return $output7;
};
$arguments2 = array();
$arguments2['then'] = NULL;
$arguments2['else'] = NULL;
$arguments2['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array4 = array();
$array5 = array (
);$array4['0'] = $renderingContext->getVariableProvider()->getByPath('extension.persons', $array5);

$expression6 = function($context) {return ($context["node0"]);};
$arguments2['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)
					),
					$renderingContext
				);
$arguments2['__thenClosure'] = $renderChildrenClosure3;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= ' */
class ';
$array20 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.name', $array20)]);

$output0 .= 'Test extends \\TYPO3\\CMS\\Core\\Tests\\UnitTestCase
{
    /**
     * @var ';
$array21 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.fullQualifiedClassName', $array21)]);

$output0 .= '
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new ';
$array22 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.fullQualifiedClassName', $array22)]);

$output0 .= '();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output494 = '';

$output494 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure496 = function() use ($renderingContext, $self) {
$output497 = '';

$output497 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure499 = function() use ($renderingContext, $self) {
$output501 = '';

$output501 .= '

    /**
     * @test
     */
    public function get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure503 = function() use ($renderingContext, $self) {
$array504 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array504);
};
$arguments502 = array();

$output501 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments502, $renderChildrenClosure503, $renderingContext)]);

$output501 .= 'ReturnsInitialValueFor';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure506 = function() use ($renderingContext, $self) {
$output523 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure525 = function() use ($renderingContext, $self) {
return 'FileReference';
};
$arguments524 = array();

$output523 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure529 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments528 = array();
$arguments528['then'] = NULL;
$arguments528['else'] = NULL;
$arguments528['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array530 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure532 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments531 = array();
$arguments531['match'] = NULL;
$arguments531['in'] = NULL;
$arguments531['caseSensitive'] = false;
$arguments531['match'] = 'ObjectStorage';
$array533 = array (
);$arguments531['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array533);
$array530['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments531, $renderChildrenClosure532, $renderingContext)]);

$expression534 = function($context) {return ($context["node0"]);};
$arguments528['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression534(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array530)
					),
					$renderingContext
				);
$array535 = array (
);$arguments528['then'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignModelName', $array535)]);
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
$array538 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array538);
};
$arguments536 = array();
$arguments528['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext)]);
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments528, $renderChildrenClosure529, $renderingContext);
};
$arguments526 = array();
$arguments526['if'] = NULL;

$output523 .= '';
return $output523;
};
$arguments505 = array();
$arguments505['then'] = NULL;
$arguments505['else'] = NULL;
$arguments505['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array518 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure520 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments519 = array();
$arguments519['match'] = NULL;
$arguments519['in'] = NULL;
$arguments519['caseSensitive'] = false;
$arguments519['match'] = 'FileReference';
$array521 = array (
);$arguments519['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array521);
$array518['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments519, $renderChildrenClosure520, $renderingContext);

$expression522 = function($context) {return ($context["node0"]);};
$arguments505['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression522(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array518)
					),
					$renderingContext
				);
$arguments505['__thenClosure'] = function() use ($renderingContext, $self) {
return 'FileReference';
};
$arguments505['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure508 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments507 = array();
$arguments507['then'] = NULL;
$arguments507['else'] = NULL;
$arguments507['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array509 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure511 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments510 = array();
$arguments510['match'] = NULL;
$arguments510['in'] = NULL;
$arguments510['caseSensitive'] = false;
$arguments510['match'] = 'ObjectStorage';
$array512 = array (
);$arguments510['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array512);
$array509['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments510, $renderChildrenClosure511, $renderingContext)]);

$expression513 = function($context) {return ($context["node0"]);};
$arguments507['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression513(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array509)
					),
					$renderingContext
				);
$array514 = array (
);$arguments507['then'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignModelName', $array514)]);
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure516 = function() use ($renderingContext, $self) {
$array517 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array517);
};
$arguments515 = array();
$arguments507['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments515, $renderChildrenClosure516, $renderingContext)]);
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments507, $renderChildrenClosure508, $renderingContext);
};

$output501 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments505, $renderChildrenClosure506, $renderingContext);

$output501 .= '()
    {';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure540 = function() use ($renderingContext, $self) {
$output544 = '';

$output544 .= '
        self::assertSame(
            0,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure546 = function() use ($renderingContext, $self) {
$array547 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array547);
};
$arguments545 = array();

$output544 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments545, $renderChildrenClosure546, $renderingContext)]);

$output544 .= '()
        );';
return $output544;
};
$arguments539 = array();
$arguments539['then'] = NULL;
$arguments539['else'] = NULL;
$arguments539['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array541 = array();
$array542 = array (
);$array541['0'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array542);
$array541['1'] = ' == \'int\'';

$expression543 = function($context) {return (($context["node0"]) == 'int');};
$arguments539['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression543(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array541)
					),
					$renderingContext
				);
$arguments539['__thenClosure'] = $renderChildrenClosure540;

$output501 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments539, $renderChildrenClosure540, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure549 = function() use ($renderingContext, $self) {
$output553 = '';

$output553 .= '
        self::assertSame(
            0.0,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure555 = function() use ($renderingContext, $self) {
$array556 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array556);
};
$arguments554 = array();

$output553 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments554, $renderChildrenClosure555, $renderingContext)]);

$output553 .= '()
        );';
return $output553;
};
$arguments548 = array();
$arguments548['then'] = NULL;
$arguments548['else'] = NULL;
$arguments548['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array550 = array();
$array551 = array (
);$array550['0'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array551);
$array550['1'] = ' == \'float\'';

$expression552 = function($context) {return (($context["node0"]) == 'float');};
$arguments548['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression552(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array550)
					),
					$renderingContext
				);
$arguments548['__thenClosure'] = $renderChildrenClosure549;

$output501 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments548, $renderChildrenClosure549, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure558 = function() use ($renderingContext, $self) {
$output562 = '';

$output562 .= '
        self::assertSame(
            \'\',
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure564 = function() use ($renderingContext, $self) {
$array565 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array565);
};
$arguments563 = array();

$output562 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments563, $renderChildrenClosure564, $renderingContext)]);

$output562 .= '()
        );';
return $output562;
};
$arguments557 = array();
$arguments557['then'] = NULL;
$arguments557['else'] = NULL;
$arguments557['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array559 = array();
$array560 = array (
);$array559['0'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array560);
$array559['1'] = ' == \'string\'';

$expression561 = function($context) {return (($context["node0"]) == 'string');};
$arguments557['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression561(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array559)
					),
					$renderingContext
				);
$arguments557['__thenClosure'] = $renderChildrenClosure558;

$output501 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments557, $renderChildrenClosure558, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure567 = function() use ($renderingContext, $self) {
$output571 = '';

$output571 .= '
        self::assertSame(
            false,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure573 = function() use ($renderingContext, $self) {
$array574 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array574);
};
$arguments572 = array();

$output571 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments572, $renderChildrenClosure573, $renderingContext)]);

$output571 .= '()
        );';
return $output571;
};
$arguments566 = array();
$arguments566['then'] = NULL;
$arguments566['else'] = NULL;
$arguments566['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array568 = array();
$array569 = array (
);$array568['0'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array569);
$array568['1'] = ' == \'bool\'';

$expression570 = function($context) {return (($context["node0"]) == 'bool');};
$arguments566['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression570(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array568)
					),
					$renderingContext
				);
$arguments566['__thenClosure'] = $renderChildrenClosure567;

$output501 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments566, $renderChildrenClosure567, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure576 = function() use ($renderingContext, $self) {
$output618 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure620 = function() use ($renderingContext, $self) {
$output621 = '';

$output621 .= '
        $newObjectStorage = new \\TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure623 = function() use ($renderingContext, $self) {
$array624 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array624);
};
$arguments622 = array();

$output621 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments622, $renderChildrenClosure623, $renderingContext)]);

$output621 .= '()
        );';
return $output621;
};
$arguments619 = array();

$output618 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure626 = function() use ($renderingContext, $self) {
$output627 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure629 = function() use ($renderingContext, $self) {
$output633 = '';

$output633 .= '
        self::assertEquals(
            null,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure635 = function() use ($renderingContext, $self) {
$array636 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array636);
};
$arguments634 = array();

$output633 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments634, $renderChildrenClosure635, $renderingContext)]);

$output633 .= '()
        );';
return $output633;
};
$arguments628 = array();
$arguments628['then'] = NULL;
$arguments628['else'] = NULL;
$arguments628['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array630 = array();
$array631 = array (
);$array630['0'] = $renderingContext->getVariableProvider()->getByPath('property.foreignModel', $array631);

$expression632 = function($context) {return ($context["node0"]);};
$arguments628['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression632(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array630)
					),
					$renderingContext
				);
$arguments628['__thenClosure'] = $renderChildrenClosure629;

$output627 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments628, $renderChildrenClosure629, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure638 = function() use ($renderingContext, $self) {
$output644 = '';

$output644 .= '
        self::assertEquals(
            null,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure646 = function() use ($renderingContext, $self) {
$array647 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array647);
};
$arguments645 = array();

$output644 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments645, $renderChildrenClosure646, $renderingContext)]);

$output644 .= '()
        );';
return $output644;
};
$arguments637 = array();
$arguments637['then'] = NULL;
$arguments637['else'] = NULL;
$arguments637['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array639 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure641 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments640 = array();
$arguments640['match'] = NULL;
$arguments640['in'] = NULL;
$arguments640['caseSensitive'] = false;
$arguments640['match'] = 'DateTime';
$array642 = array (
);$arguments640['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array642);
$array639['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments640, $renderChildrenClosure641, $renderingContext);

$expression643 = function($context) {return ($context["node0"]);};
$arguments637['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression643(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array639)
					),
					$renderingContext
				);
$arguments637['__thenClosure'] = $renderChildrenClosure638;

$output627 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments637, $renderChildrenClosure638, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure649 = function() use ($renderingContext, $self) {
$output655 = '';

$output655 .= '
        self::assertEquals(
            null,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure657 = function() use ($renderingContext, $self) {
$array658 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array658);
};
$arguments656 = array();

$output655 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments656, $renderChildrenClosure657, $renderingContext)]);

$output655 .= '()
        );';
return $output655;
};
$arguments648 = array();
$arguments648['then'] = NULL;
$arguments648['else'] = NULL;
$arguments648['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array650 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure652 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments651 = array();
$arguments651['match'] = NULL;
$arguments651['in'] = NULL;
$arguments651['caseSensitive'] = false;
$arguments651['match'] = 'FileReference';
$array653 = array (
);$arguments651['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array653);
$array650['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments651, $renderChildrenClosure652, $renderingContext);

$expression654 = function($context) {return ($context["node0"]);};
$arguments648['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression654(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array650)
					),
					$renderingContext
				);
$arguments648['__thenClosure'] = $renderChildrenClosure649;

$output627 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments648, $renderChildrenClosure649, $renderingContext);
return $output627;
};
$arguments625 = array();
$arguments625['if'] = NULL;

$output618 .= '';
return $output618;
};
$arguments575 = array();
$arguments575['then'] = NULL;
$arguments575['else'] = NULL;
$arguments575['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array613 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure615 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments614 = array();
$arguments614['match'] = NULL;
$arguments614['in'] = NULL;
$arguments614['caseSensitive'] = false;
$arguments614['match'] = 'ObjectStorage';
$array616 = array (
);$arguments614['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array616);
$array613['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments614, $renderChildrenClosure615, $renderingContext);

$expression617 = function($context) {return ($context["node0"]);};
$arguments575['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression617(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array613)
					),
					$renderingContext
				);
$arguments575['__thenClosure'] = function() use ($renderingContext, $self) {
$output577 = '';

$output577 .= '
        $newObjectStorage = new \\TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure579 = function() use ($renderingContext, $self) {
$array580 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array580);
};
$arguments578 = array();

$output577 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments578, $renderChildrenClosure579, $renderingContext)]);

$output577 .= '()
        );';
return $output577;
};
$arguments575['__elseClosures'][] = function() use ($renderingContext, $self) {
$output581 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure583 = function() use ($renderingContext, $self) {
$output587 = '';

$output587 .= '
        self::assertEquals(
            null,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure589 = function() use ($renderingContext, $self) {
$array590 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array590);
};
$arguments588 = array();

$output587 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments588, $renderChildrenClosure589, $renderingContext)]);

$output587 .= '()
        );';
return $output587;
};
$arguments582 = array();
$arguments582['then'] = NULL;
$arguments582['else'] = NULL;
$arguments582['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array584 = array();
$array585 = array (
);$array584['0'] = $renderingContext->getVariableProvider()->getByPath('property.foreignModel', $array585);

$expression586 = function($context) {return ($context["node0"]);};
$arguments582['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression586(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array584)
					),
					$renderingContext
				);
$arguments582['__thenClosure'] = $renderChildrenClosure583;

$output581 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments582, $renderChildrenClosure583, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure592 = function() use ($renderingContext, $self) {
$output598 = '';

$output598 .= '
        self::assertEquals(
            null,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure600 = function() use ($renderingContext, $self) {
$array601 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array601);
};
$arguments599 = array();

$output598 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments599, $renderChildrenClosure600, $renderingContext)]);

$output598 .= '()
        );';
return $output598;
};
$arguments591 = array();
$arguments591['then'] = NULL;
$arguments591['else'] = NULL;
$arguments591['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array593 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure595 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments594 = array();
$arguments594['match'] = NULL;
$arguments594['in'] = NULL;
$arguments594['caseSensitive'] = false;
$arguments594['match'] = 'DateTime';
$array596 = array (
);$arguments594['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array596);
$array593['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments594, $renderChildrenClosure595, $renderingContext);

$expression597 = function($context) {return ($context["node0"]);};
$arguments591['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression597(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array593)
					),
					$renderingContext
				);
$arguments591['__thenClosure'] = $renderChildrenClosure592;

$output581 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments591, $renderChildrenClosure592, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure603 = function() use ($renderingContext, $self) {
$output609 = '';

$output609 .= '
        self::assertEquals(
            null,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure611 = function() use ($renderingContext, $self) {
$array612 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array612);
};
$arguments610 = array();

$output609 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments610, $renderChildrenClosure611, $renderingContext)]);

$output609 .= '()
        );';
return $output609;
};
$arguments602 = array();
$arguments602['then'] = NULL;
$arguments602['else'] = NULL;
$arguments602['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array604 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure606 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments605 = array();
$arguments605['match'] = NULL;
$arguments605['in'] = NULL;
$arguments605['caseSensitive'] = false;
$arguments605['match'] = 'FileReference';
$array607 = array (
);$arguments605['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array607);
$array604['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments605, $renderChildrenClosure606, $renderingContext);

$expression608 = function($context) {return ($context["node0"]);};
$arguments602['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression608(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array604)
					),
					$renderingContext
				);
$arguments602['__thenClosure'] = $renderChildrenClosure603;

$output581 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments602, $renderChildrenClosure603, $renderingContext);
return $output581;
};

$output501 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments575, $renderChildrenClosure576, $renderingContext);

$output501 .= '
    }

    /**
     * @test
     */
    public function set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure660 = function() use ($renderingContext, $self) {
$array661 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array661);
};
$arguments659 = array();

$output501 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments659, $renderChildrenClosure660, $renderingContext)]);

$output501 .= 'For';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure663 = function() use ($renderingContext, $self) {
$output681 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure683 = function() use ($renderingContext, $self) {
return 'FileReference';
};
$arguments682 = array();

$output681 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure685 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure687 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments686 = array();
$arguments686['then'] = NULL;
$arguments686['else'] = NULL;
$arguments686['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array688 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure690 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments689 = array();
$arguments689['match'] = NULL;
$arguments689['in'] = NULL;
$arguments689['caseSensitive'] = false;
$arguments689['match'] = 'ObjectStorage';
$array691 = array (
);$arguments689['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array691);
$array688['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments689, $renderChildrenClosure690, $renderingContext)]);

$expression692 = function($context) {return ($context["node0"]);};
$arguments686['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression692(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array688)
					),
					$renderingContext
				);
$output693 = '';

$output693 .= 'ObjectStorageContaining';
$array694 = array (
);
$output693 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignModelName', $array694)]);
$arguments686['then'] = $output693;
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure696 = function() use ($renderingContext, $self) {
$array697 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array697);
};
$arguments695 = array();
$arguments686['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments695, $renderChildrenClosure696, $renderingContext)]);
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments686, $renderChildrenClosure687, $renderingContext);
};
$arguments684 = array();
$arguments684['if'] = NULL;

$output681 .= '';
return $output681;
};
$arguments662 = array();
$arguments662['then'] = NULL;
$arguments662['else'] = NULL;
$arguments662['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array676 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure678 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments677 = array();
$arguments677['match'] = NULL;
$arguments677['in'] = NULL;
$arguments677['caseSensitive'] = false;
$arguments677['match'] = 'FileReference';
$array679 = array (
);$arguments677['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array679);
$array676['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments677, $renderChildrenClosure678, $renderingContext);

$expression680 = function($context) {return ($context["node0"]);};
$arguments662['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression680(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array676)
					),
					$renderingContext
				);
$arguments662['__thenClosure'] = function() use ($renderingContext, $self) {
return 'FileReference';
};
$arguments662['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure665 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments664 = array();
$arguments664['then'] = NULL;
$arguments664['else'] = NULL;
$arguments664['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array666 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure668 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments667 = array();
$arguments667['match'] = NULL;
$arguments667['in'] = NULL;
$arguments667['caseSensitive'] = false;
$arguments667['match'] = 'ObjectStorage';
$array669 = array (
);$arguments667['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array669);
$array666['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments667, $renderChildrenClosure668, $renderingContext)]);

$expression670 = function($context) {return ($context["node0"]);};
$arguments664['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression670(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array666)
					),
					$renderingContext
				);
$output671 = '';

$output671 .= 'ObjectStorageContaining';
$array672 = array (
);
$output671 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignModelName', $array672)]);
$arguments664['then'] = $output671;
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure674 = function() use ($renderingContext, $self) {
$array675 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array675);
};
$arguments673 = array();
$arguments664['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments673, $renderChildrenClosure674, $renderingContext)]);
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments664, $renderChildrenClosure665, $renderingContext);
};

$output501 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments662, $renderChildrenClosure663, $renderingContext);

$output501 .= 'Sets';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure699 = function() use ($renderingContext, $self) {
$array700 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array700);
};
$arguments698 = array();

$output501 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments698, $renderChildrenClosure699, $renderingContext)]);

$output501 .= '()
    {';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure702 = function() use ($renderingContext, $self) {
$output706 = '';

$output706 .= '
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure708 = function() use ($renderingContext, $self) {
$array709 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array709);
};
$arguments707 = array();

$output706 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments707, $renderChildrenClosure708, $renderingContext)]);

$output706 .= '(\'Conceived at T3CON10\');

        self::assertAttributeEquals(
            \'Conceived at T3CON10\',
            \'';
$array710 = array (
);
$output706 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array710)]);

$output706 .= '\',
            $this->subject
        );';
return $output706;
};
$arguments701 = array();
$arguments701['then'] = NULL;
$arguments701['else'] = NULL;
$arguments701['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array703 = array();
$array704 = array (
);$array703['0'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array704);
$array703['1'] = ' == \'string\'';

$expression705 = function($context) {return (($context["node0"]) == 'string');};
$arguments701['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression705(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array703)
					),
					$renderingContext
				);
$arguments701['__thenClosure'] = $renderChildrenClosure702;

$output501 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments701, $renderChildrenClosure702, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure712 = function() use ($renderingContext, $self) {
$output716 = '';

$output716 .= '
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure718 = function() use ($renderingContext, $self) {
$array719 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array719);
};
$arguments717 = array();

$output716 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments717, $renderChildrenClosure718, $renderingContext)]);

$output716 .= '(12);

        self::assertAttributeEquals(
            12,
            \'';
$array720 = array (
);
$output716 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array720)]);

$output716 .= '\',
            $this->subject
        );';
return $output716;
};
$arguments711 = array();
$arguments711['then'] = NULL;
$arguments711['else'] = NULL;
$arguments711['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array713 = array();
$array714 = array (
);$array713['0'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array714);
$array713['1'] = '  == \'int\'';

$expression715 = function($context) {return (($context["node0"]) == 'int');};
$arguments711['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression715(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array713)
					),
					$renderingContext
				);
$arguments711['__thenClosure'] = $renderChildrenClosure712;

$output501 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments711, $renderChildrenClosure712, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure722 = function() use ($renderingContext, $self) {
$output726 = '';

$output726 .= '
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure728 = function() use ($renderingContext, $self) {
$array729 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array729);
};
$arguments727 = array();

$output726 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments727, $renderChildrenClosure728, $renderingContext)]);

$output726 .= '(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            \'';
$array730 = array (
);
$output726 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array730)]);

$output726 .= '\',
            $this->subject,
            \'\',
            0.000000001
        );';
return $output726;
};
$arguments721 = array();
$arguments721['then'] = NULL;
$arguments721['else'] = NULL;
$arguments721['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array723 = array();
$array724 = array (
);$array723['0'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array724);
$array723['1'] = ' == \'float\'';

$expression725 = function($context) {return (($context["node0"]) == 'float');};
$arguments721['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression725(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array723)
					),
					$renderingContext
				);
$arguments721['__thenClosure'] = $renderChildrenClosure722;

$output501 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments721, $renderChildrenClosure722, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure732 = function() use ($renderingContext, $self) {
$output736 = '';

$output736 .= '
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure738 = function() use ($renderingContext, $self) {
$array739 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array739);
};
$arguments737 = array();

$output736 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments737, $renderChildrenClosure738, $renderingContext)]);

$output736 .= '(true);

        self::assertAttributeEquals(
            true,
            \'';
$array740 = array (
);
$output736 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array740)]);

$output736 .= '\',
            $this->subject
        );';
return $output736;
};
$arguments731 = array();
$arguments731['then'] = NULL;
$arguments731['else'] = NULL;
$arguments731['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array733 = array();
$array734 = array (
);$array733['0'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array734);
$array733['1'] = ' == \'bool\'';

$expression735 = function($context) {return (($context["node0"]) == 'bool');};
$arguments731['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression735(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array733)
					),
					$renderingContext
				);
$arguments731['__thenClosure'] = $renderChildrenClosure732;

$output501 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments731, $renderChildrenClosure732, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure742 = function() use ($renderingContext, $self) {
$output821 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure823 = function() use ($renderingContext, $self) {
$output824 = '';

$output824 .= '
        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure826 = function() use ($renderingContext, $self) {
$array827 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array827);
};
$arguments825 = array();

$output824 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments825, $renderChildrenClosure826, $renderingContext)]);

$output824 .= ' = new ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\PregReplaceViewHelper
$renderChildrenClosure829 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments828 = array();
$arguments828['match'] = NULL;
$arguments828['replace'] = NULL;
$arguments828['subject'] = NULL;
$arguments828['match'] = '/^.*<(.*)>$/';
$arguments828['replace'] = '\\1';
$array830 = array (
);$arguments828['subject'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array830);

$output824 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\PregReplaceViewHelper::renderStatic($arguments828, $renderChildrenClosure829, $renderingContext)]);

$output824 .= '();
        $objectStorageHoldingExactlyOne';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure832 = function() use ($renderingContext, $self) {
$array833 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array833);
};
$arguments831 = array();

$output824 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments831, $renderChildrenClosure832, $renderingContext)]);

$output824 .= ' = new \\TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage();
        $objectStorageHoldingExactlyOne';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure835 = function() use ($renderingContext, $self) {
$array836 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array836);
};
$arguments834 = array();

$output824 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments834, $renderChildrenClosure835, $renderingContext)]);

$output824 .= '->attach($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure838 = function() use ($renderingContext, $self) {
$array839 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array839);
};
$arguments837 = array();

$output824 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments837, $renderChildrenClosure838, $renderingContext)]);

$output824 .= ');
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure841 = function() use ($renderingContext, $self) {
$array842 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array842);
};
$arguments840 = array();

$output824 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments840, $renderChildrenClosure841, $renderingContext)]);

$output824 .= '($objectStorageHoldingExactlyOne';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure844 = function() use ($renderingContext, $self) {
$array845 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array845);
};
$arguments843 = array();

$output824 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments843, $renderChildrenClosure844, $renderingContext)]);

$output824 .= ');

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOne';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure847 = function() use ($renderingContext, $self) {
$array848 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array848);
};
$arguments846 = array();

$output824 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments846, $renderChildrenClosure847, $renderingContext)]);

$output824 .= ',
            \'';
$array849 = array (
);
$output824 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array849)]);

$output824 .= '\',
            $this->subject
        );';
return $output824;
};
$arguments822 = array();

$output821 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure851 = function() use ($renderingContext, $self) {
$output852 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure854 = function() use ($renderingContext, $self) {
$output858 = '';

$output858 .= '
        $';
$array859 = array (
);
$output858 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array859)]);

$output858 .= 'Fixture = new ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure861 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments860 = array();
$arguments860['then'] = NULL;
$arguments860['else'] = NULL;
$arguments860['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array862 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure864 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments863 = array();
$arguments863['match'] = NULL;
$arguments863['in'] = NULL;
$arguments863['caseSensitive'] = false;
$arguments863['match'] = 'ObjectStorage';
$array865 = array (
);$arguments863['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array865);
$array862['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments863, $renderChildrenClosure864, $renderingContext)]);

$expression866 = function($context) {return ($context["node0"]);};
$arguments860['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression866(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array862)
					),
					$renderingContext
				);
$output867 = '';

$output867 .= 'ObjectStorageContaining';

$output867 .= '{property.foreignModelName)}';
$arguments860['then'] = $output867;
$array868 = array (
);$arguments860['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignModel.fullQualifiedClassName', $array868)]);

$output858 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments860, $renderChildrenClosure861, $renderingContext);

$output858 .= '();
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure870 = function() use ($renderingContext, $self) {
$array871 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array871);
};
$arguments869 = array();

$output858 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments869, $renderChildrenClosure870, $renderingContext)]);

$output858 .= '($';
$array872 = array (
);
$output858 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array872)]);

$output858 .= 'Fixture);

        self::assertAttributeEquals(
            $';
$array873 = array (
);
$output858 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array873)]);

$output858 .= 'Fixture,
            \'';
$array874 = array (
);
$output858 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array874)]);

$output858 .= '\',
            $this->subject
        );';
return $output858;
};
$arguments853 = array();
$arguments853['then'] = NULL;
$arguments853['else'] = NULL;
$arguments853['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array855 = array();
$array856 = array (
);$array855['0'] = $renderingContext->getVariableProvider()->getByPath('property.foreignModel', $array856);

$expression857 = function($context) {return ($context["node0"]);};
$arguments853['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression857(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array855)
					),
					$renderingContext
				);
$arguments853['__thenClosure'] = $renderChildrenClosure854;

$output852 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments853, $renderChildrenClosure854, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure876 = function() use ($renderingContext, $self) {
$output882 = '';

$output882 .= '
        $dateTimeFixture = new \\DateTime();
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure884 = function() use ($renderingContext, $self) {
$array885 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array885);
};
$arguments883 = array();

$output882 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments883, $renderChildrenClosure884, $renderingContext)]);

$output882 .= '($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            \'';
$array886 = array (
);
$output882 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array886)]);

$output882 .= '\',
            $this->subject
        );';
return $output882;
};
$arguments875 = array();
$arguments875['then'] = NULL;
$arguments875['else'] = NULL;
$arguments875['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array877 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure879 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments878 = array();
$arguments878['match'] = NULL;
$arguments878['in'] = NULL;
$arguments878['caseSensitive'] = false;
$arguments878['match'] = 'DateTime';
$array880 = array (
);$arguments878['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array880);
$array877['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments878, $renderChildrenClosure879, $renderingContext);

$expression881 = function($context) {return ($context["node0"]);};
$arguments875['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression881(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array877)
					),
					$renderingContext
				);
$arguments875['__thenClosure'] = $renderChildrenClosure876;

$output852 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments875, $renderChildrenClosure876, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure888 = function() use ($renderingContext, $self) {
$output894 = '';

$output894 .= '
        $fileReferenceFixture = new \\TYPO3\\CMS\\Extbase\\Domain\\Model\\FileReference();
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure896 = function() use ($renderingContext, $self) {
$array897 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array897);
};
$arguments895 = array();

$output894 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments895, $renderChildrenClosure896, $renderingContext)]);

$output894 .= '($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            \'';
$array898 = array (
);
$output894 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array898)]);

$output894 .= '\',
            $this->subject
        );';
return $output894;
};
$arguments887 = array();
$arguments887['then'] = NULL;
$arguments887['else'] = NULL;
$arguments887['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array889 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure891 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments890 = array();
$arguments890['match'] = NULL;
$arguments890['in'] = NULL;
$arguments890['caseSensitive'] = false;
$arguments890['match'] = 'FileReference';
$array892 = array (
);$arguments890['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array892);
$array889['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments890, $renderChildrenClosure891, $renderingContext);

$expression893 = function($context) {return ($context["node0"]);};
$arguments887['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression893(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array889)
					),
					$renderingContext
				);
$arguments887['__thenClosure'] = $renderChildrenClosure888;

$output852 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments887, $renderChildrenClosure888, $renderingContext);
return $output852;
};
$arguments850 = array();
$arguments850['if'] = NULL;

$output821 .= '';
return $output821;
};
$arguments741 = array();
$arguments741['then'] = NULL;
$arguments741['else'] = NULL;
$arguments741['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array816 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure818 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments817 = array();
$arguments817['match'] = NULL;
$arguments817['in'] = NULL;
$arguments817['caseSensitive'] = false;
$arguments817['match'] = 'ObjectStorage';
$array819 = array (
);$arguments817['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array819);
$array816['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments817, $renderChildrenClosure818, $renderingContext);

$expression820 = function($context) {return ($context["node0"]);};
$arguments741['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression820(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array816)
					),
					$renderingContext
				);
$arguments741['__thenClosure'] = function() use ($renderingContext, $self) {
$output743 = '';

$output743 .= '
        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure745 = function() use ($renderingContext, $self) {
$array746 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array746);
};
$arguments744 = array();

$output743 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments744, $renderChildrenClosure745, $renderingContext)]);

$output743 .= ' = new ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\PregReplaceViewHelper
$renderChildrenClosure748 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments747 = array();
$arguments747['match'] = NULL;
$arguments747['replace'] = NULL;
$arguments747['subject'] = NULL;
$arguments747['match'] = '/^.*<(.*)>$/';
$arguments747['replace'] = '\\1';
$array749 = array (
);$arguments747['subject'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array749);

$output743 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\PregReplaceViewHelper::renderStatic($arguments747, $renderChildrenClosure748, $renderingContext)]);

$output743 .= '();
        $objectStorageHoldingExactlyOne';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure751 = function() use ($renderingContext, $self) {
$array752 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array752);
};
$arguments750 = array();

$output743 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments750, $renderChildrenClosure751, $renderingContext)]);

$output743 .= ' = new \\TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage();
        $objectStorageHoldingExactlyOne';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure754 = function() use ($renderingContext, $self) {
$array755 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array755);
};
$arguments753 = array();

$output743 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments753, $renderChildrenClosure754, $renderingContext)]);

$output743 .= '->attach($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure757 = function() use ($renderingContext, $self) {
$array758 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array758);
};
$arguments756 = array();

$output743 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments756, $renderChildrenClosure757, $renderingContext)]);

$output743 .= ');
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure760 = function() use ($renderingContext, $self) {
$array761 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array761);
};
$arguments759 = array();

$output743 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments759, $renderChildrenClosure760, $renderingContext)]);

$output743 .= '($objectStorageHoldingExactlyOne';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure763 = function() use ($renderingContext, $self) {
$array764 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array764);
};
$arguments762 = array();

$output743 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments762, $renderChildrenClosure763, $renderingContext)]);

$output743 .= ');

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOne';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure766 = function() use ($renderingContext, $self) {
$array767 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array767);
};
$arguments765 = array();

$output743 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments765, $renderChildrenClosure766, $renderingContext)]);

$output743 .= ',
            \'';
$array768 = array (
);
$output743 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array768)]);

$output743 .= '\',
            $this->subject
        );';
return $output743;
};
$arguments741['__elseClosures'][] = function() use ($renderingContext, $self) {
$output769 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure771 = function() use ($renderingContext, $self) {
$output775 = '';

$output775 .= '
        $';
$array776 = array (
);
$output775 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array776)]);

$output775 .= 'Fixture = new ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure778 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments777 = array();
$arguments777['then'] = NULL;
$arguments777['else'] = NULL;
$arguments777['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array779 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure781 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments780 = array();
$arguments780['match'] = NULL;
$arguments780['in'] = NULL;
$arguments780['caseSensitive'] = false;
$arguments780['match'] = 'ObjectStorage';
$array782 = array (
);$arguments780['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array782);
$array779['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments780, $renderChildrenClosure781, $renderingContext)]);

$expression783 = function($context) {return ($context["node0"]);};
$arguments777['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression783(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array779)
					),
					$renderingContext
				);
$output784 = '';

$output784 .= 'ObjectStorageContaining';

$output784 .= '{property.foreignModelName)}';
$arguments777['then'] = $output784;
$array785 = array (
);$arguments777['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignModel.fullQualifiedClassName', $array785)]);

$output775 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments777, $renderChildrenClosure778, $renderingContext);

$output775 .= '();
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure787 = function() use ($renderingContext, $self) {
$array788 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array788);
};
$arguments786 = array();

$output775 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments786, $renderChildrenClosure787, $renderingContext)]);

$output775 .= '($';
$array789 = array (
);
$output775 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array789)]);

$output775 .= 'Fixture);

        self::assertAttributeEquals(
            $';
$array790 = array (
);
$output775 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array790)]);

$output775 .= 'Fixture,
            \'';
$array791 = array (
);
$output775 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array791)]);

$output775 .= '\',
            $this->subject
        );';
return $output775;
};
$arguments770 = array();
$arguments770['then'] = NULL;
$arguments770['else'] = NULL;
$arguments770['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array772 = array();
$array773 = array (
);$array772['0'] = $renderingContext->getVariableProvider()->getByPath('property.foreignModel', $array773);

$expression774 = function($context) {return ($context["node0"]);};
$arguments770['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression774(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array772)
					),
					$renderingContext
				);
$arguments770['__thenClosure'] = $renderChildrenClosure771;

$output769 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments770, $renderChildrenClosure771, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure793 = function() use ($renderingContext, $self) {
$output799 = '';

$output799 .= '
        $dateTimeFixture = new \\DateTime();
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure801 = function() use ($renderingContext, $self) {
$array802 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array802);
};
$arguments800 = array();

$output799 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments800, $renderChildrenClosure801, $renderingContext)]);

$output799 .= '($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            \'';
$array803 = array (
);
$output799 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array803)]);

$output799 .= '\',
            $this->subject
        );';
return $output799;
};
$arguments792 = array();
$arguments792['then'] = NULL;
$arguments792['else'] = NULL;
$arguments792['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array794 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure796 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments795 = array();
$arguments795['match'] = NULL;
$arguments795['in'] = NULL;
$arguments795['caseSensitive'] = false;
$arguments795['match'] = 'DateTime';
$array797 = array (
);$arguments795['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array797);
$array794['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments795, $renderChildrenClosure796, $renderingContext);

$expression798 = function($context) {return ($context["node0"]);};
$arguments792['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression798(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array794)
					),
					$renderingContext
				);
$arguments792['__thenClosure'] = $renderChildrenClosure793;

$output769 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments792, $renderChildrenClosure793, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure805 = function() use ($renderingContext, $self) {
$output811 = '';

$output811 .= '
        $fileReferenceFixture = new \\TYPO3\\CMS\\Extbase\\Domain\\Model\\FileReference();
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure813 = function() use ($renderingContext, $self) {
$array814 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array814);
};
$arguments812 = array();

$output811 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments812, $renderChildrenClosure813, $renderingContext)]);

$output811 .= '($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            \'';
$array815 = array (
);
$output811 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array815)]);

$output811 .= '\',
            $this->subject
        );';
return $output811;
};
$arguments804 = array();
$arguments804['then'] = NULL;
$arguments804['else'] = NULL;
$arguments804['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array806 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure808 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments807 = array();
$arguments807['match'] = NULL;
$arguments807['in'] = NULL;
$arguments807['caseSensitive'] = false;
$arguments807['match'] = 'FileReference';
$array809 = array (
);$arguments807['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array809);
$array806['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments807, $renderChildrenClosure808, $renderingContext);

$expression810 = function($context) {return ($context["node0"]);};
$arguments804['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression810(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array806)
					),
					$renderingContext
				);
$arguments804['__thenClosure'] = $renderChildrenClosure805;

$output769 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments804, $renderChildrenClosure805, $renderingContext);
return $output769;
};

$output501 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments741, $renderChildrenClosure742, $renderingContext);

$output501 .= '
    }';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure900 = function() use ($renderingContext, $self) {
$output906 = '';

$output906 .= '

    /**
     * @test
     */
    public function add';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure908 = function() use ($renderingContext, $self) {
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure910 = function() use ($renderingContext, $self) {
$array911 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array911);
};
$arguments909 = array();
return EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments909, $renderChildrenClosure910, $renderingContext);
};
$arguments907 = array();

$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments907, $renderChildrenClosure908, $renderingContext)]);

$output906 .= 'ToObjectStorageHolding';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure913 = function() use ($renderingContext, $self) {
$array914 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array914);
};
$arguments912 = array();

$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments912, $renderChildrenClosure913, $renderingContext)]);

$output906 .= '()
    {
        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure916 = function() use ($renderingContext, $self) {
$array917 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array917);
};
$arguments915 = array();

$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments915, $renderChildrenClosure916, $renderingContext)]);

$output906 .= ' = new ';
$array918 = array (
);
$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignClassName', $array918)]);

$output906 .= '();
        $';
$array919 = array (
);
$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array919)]);

$output906 .= 'ObjectStorageMock = $this->getMockBuilder(\\TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage::class)
            ->setMethods([\'attach\'])
            ->disableOriginalConstructor()
            ->getMock();

        $';
$array920 = array (
);
$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array920)]);

$output906 .= 'ObjectStorageMock->expects(self::once())->method(\'attach\')->with(self::equalTo($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure922 = function() use ($renderingContext, $self) {
$array923 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array923);
};
$arguments921 = array();

$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments921, $renderChildrenClosure922, $renderingContext)]);

$output906 .= '));
        $this->inject($this->subject, \'';
$array924 = array (
);
$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array924)]);

$output906 .= '\', $';
$array925 = array (
);
$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array925)]);

$output906 .= 'ObjectStorageMock);

        $this->subject->add';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure927 = function() use ($renderingContext, $self) {
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure929 = function() use ($renderingContext, $self) {
$array930 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array930);
};
$arguments928 = array();
return EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments928, $renderChildrenClosure929, $renderingContext);
};
$arguments926 = array();

$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments926, $renderChildrenClosure927, $renderingContext)]);

$output906 .= '($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure932 = function() use ($renderingContext, $self) {
$array933 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array933);
};
$arguments931 = array();

$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments931, $renderChildrenClosure932, $renderingContext)]);

$output906 .= ');
    }

    /**
     * @test
     */
    public function remove';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure935 = function() use ($renderingContext, $self) {
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure937 = function() use ($renderingContext, $self) {
$array938 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array938);
};
$arguments936 = array();
return EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments936, $renderChildrenClosure937, $renderingContext);
};
$arguments934 = array();

$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments934, $renderChildrenClosure935, $renderingContext)]);

$output906 .= 'FromObjectStorageHolding';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure940 = function() use ($renderingContext, $self) {
$array941 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array941);
};
$arguments939 = array();

$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments939, $renderChildrenClosure940, $renderingContext)]);

$output906 .= '()
    {
        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure943 = function() use ($renderingContext, $self) {
$array944 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array944);
};
$arguments942 = array();

$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments942, $renderChildrenClosure943, $renderingContext)]);

$output906 .= ' = new ';
$array945 = array (
);
$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignClassName', $array945)]);

$output906 .= '();
        $';
$array946 = array (
);
$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array946)]);

$output906 .= 'ObjectStorageMock = $this->getMockBuilder(\\TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage::class)
            ->setMethods([\'detach\'])
            ->disableOriginalConstructor()
            ->getMock();

        $';
$array947 = array (
);
$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array947)]);

$output906 .= 'ObjectStorageMock->expects(self::once())->method(\'detach\')->with(self::equalTo($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure949 = function() use ($renderingContext, $self) {
$array950 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array950);
};
$arguments948 = array();

$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments948, $renderChildrenClosure949, $renderingContext)]);

$output906 .= '));
        $this->inject($this->subject, \'';
$array951 = array (
);
$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array951)]);

$output906 .= '\', $';
$array952 = array (
);
$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array952)]);

$output906 .= 'ObjectStorageMock);

        $this->subject->remove';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure954 = function() use ($renderingContext, $self) {
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure956 = function() use ($renderingContext, $self) {
$array957 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array957);
};
$arguments955 = array();
return EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments955, $renderChildrenClosure956, $renderingContext);
};
$arguments953 = array();

$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments953, $renderChildrenClosure954, $renderingContext)]);

$output906 .= '($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure959 = function() use ($renderingContext, $self) {
$array960 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array960);
};
$arguments958 = array();

$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments958, $renderChildrenClosure959, $renderingContext)]);

$output906 .= ');
    }';
return $output906;
};
$arguments899 = array();
$arguments899['then'] = NULL;
$arguments899['else'] = NULL;
$arguments899['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array901 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure903 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments902 = array();
$arguments902['match'] = NULL;
$arguments902['in'] = NULL;
$arguments902['caseSensitive'] = false;
$arguments902['match'] = 'ObjectStorage';
$array904 = array (
);$arguments902['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array904);
$array901['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments902, $renderChildrenClosure903, $renderingContext);

$expression905 = function($context) {return ($context["node0"]);};
$arguments899['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression905(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array901)
					),
					$renderingContext
				);
$arguments899['__thenClosure'] = $renderChildrenClosure900;

$output501 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments899, $renderChildrenClosure900, $renderingContext);
return $output501;
};
$arguments498 = array();
$arguments498['each'] = NULL;
$arguments498['as'] = NULL;
$arguments498['key'] = NULL;
$arguments498['reverse'] = false;
$arguments498['iteration'] = NULL;
$array500 = array (
);$arguments498['each'] = $renderingContext->getVariableProvider()->getByPath('domainObject.properties', $array500);
$arguments498['as'] = 'property';

$output497 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments498, $renderChildrenClosure499, $renderingContext);
return $output497;
};
$arguments495 = array();

$output494 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure962 = function() use ($renderingContext, $self) {
return '
    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }';
};
$arguments961 = array();
$arguments961['if'] = NULL;

$output494 .= '';
return $output494;
};
$arguments23 = array();
$arguments23['then'] = NULL;
$arguments23['else'] = NULL;
$arguments23['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array489 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments490 = array();
$arguments490['subject'] = NULL;
$array492 = array (
);$arguments490['subject'] = $renderingContext->getVariableProvider()->getByPath('domainObject.properties', $array492);
$renderChildrenClosure491 = $arguments490['subject'] ? function() use ($arguments490) { return $arguments490['subject']; } : $renderChildrenClosure491;$array489['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext);
$array489['1'] = ' > 0';

$expression493 = function($context) {return (($context["node0"]) > 0);};
$arguments23['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression493(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array489)
					),
					$renderingContext
				);
$arguments23['__thenClosure'] = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '

    /**
     * @test
     */
    public function get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$array32 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array32);
};
$arguments30 = array();

$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output29 .= 'ReturnsInitialValueFor';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output51 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return 'FileReference';
};
$arguments52 = array();

$output51 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['then'] = NULL;
$arguments56['else'] = NULL;
$arguments56['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array58 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['match'] = NULL;
$arguments59['in'] = NULL;
$arguments59['caseSensitive'] = false;
$arguments59['match'] = 'ObjectStorage';
$array61 = array (
);$arguments59['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array61);
$array58['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$expression62 = function($context) {return ($context["node0"]);};
$arguments56['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression62(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array58)
					),
					$renderingContext
				);
$array63 = array (
);$arguments56['then'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignModelName', $array63)]);
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$array66 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array66);
};
$arguments64 = array();
$arguments56['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);
};
$arguments54 = array();
$arguments54['if'] = NULL;

$output51 .= '';
return $output51;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['match'] = NULL;
$arguments47['in'] = NULL;
$arguments47['caseSensitive'] = false;
$arguments47['match'] = 'FileReference';
$array49 = array (
);$arguments47['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array49);
$array46['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$expression50 = function($context) {return ($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression50(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments33['__thenClosure'] = function() use ($renderingContext, $self) {
return 'FileReference';
};
$arguments33['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['then'] = NULL;
$arguments35['else'] = NULL;
$arguments35['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['match'] = NULL;
$arguments38['in'] = NULL;
$arguments38['caseSensitive'] = false;
$arguments38['match'] = 'ObjectStorage';
$array40 = array (
);$arguments38['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array40);
$array37['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$expression41 = function($context) {return ($context["node0"]);};
$arguments35['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression41(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$array42 = array (
);$arguments35['then'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignModelName', $array42)]);
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$array45 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array45);
};
$arguments43 = array();
$arguments35['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);
};

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output29 .= '()
    {';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
        self::assertSame(
            0,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$array75 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array75);
};
$arguments73 = array();

$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output72 .= '()
        );';
return $output72;
};
$arguments67 = array();
$arguments67['then'] = NULL;
$arguments67['else'] = NULL;
$arguments67['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['0'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array70);
$array69['1'] = ' == \'int\'';

$expression71 = function($context) {return (($context["node0"]) == 'int');};
$arguments67['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression71(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);
$arguments67['__thenClosure'] = $renderChildrenClosure68;

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
        self::assertSame(
            0.0,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$array84 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array84);
};
$arguments82 = array();

$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext)]);

$output81 .= '()
        );';
return $output81;
};
$arguments76 = array();
$arguments76['then'] = NULL;
$arguments76['else'] = NULL;
$arguments76['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array78 = array();
$array79 = array (
);$array78['0'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array79);
$array78['1'] = ' == \'float\'';

$expression80 = function($context) {return (($context["node0"]) == 'float');};
$arguments76['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression80(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)
					),
					$renderingContext
				);
$arguments76['__thenClosure'] = $renderChildrenClosure77;

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
        self::assertSame(
            \'\',
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$array93 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array93);
};
$arguments91 = array();

$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext)]);

$output90 .= '()
        );';
return $output90;
};
$arguments85 = array();
$arguments85['then'] = NULL;
$arguments85['else'] = NULL;
$arguments85['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array87 = array();
$array88 = array (
);$array87['0'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array88);
$array87['1'] = ' == \'string\'';

$expression89 = function($context) {return (($context["node0"]) == 'string');};
$arguments85['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression89(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array87)
					),
					$renderingContext
				);
$arguments85['__thenClosure'] = $renderChildrenClosure86;

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
        self::assertSame(
            false,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$array102 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array102);
};
$arguments100 = array();

$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext)]);

$output99 .= '()
        );';
return $output99;
};
$arguments94 = array();
$arguments94['then'] = NULL;
$arguments94['else'] = NULL;
$arguments94['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array96 = array();
$array97 = array (
);$array96['0'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array97);
$array96['1'] = ' == \'bool\'';

$expression98 = function($context) {return (($context["node0"]) == 'bool');};
$arguments94['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression98(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array96)
					),
					$renderingContext
				);
$arguments94['__thenClosure'] = $renderChildrenClosure95;

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output146 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
        $newObjectStorage = new \\TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$array152 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array152);
};
$arguments150 = array();

$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext)]);

$output149 .= '()
        );';
return $output149;
};
$arguments147 = array();

$output146 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$output155 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$output161 = '';

$output161 .= '
        self::assertEquals(
            null,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$array164 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array164);
};
$arguments162 = array();

$output161 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext)]);

$output161 .= '()
        );';
return $output161;
};
$arguments156 = array();
$arguments156['then'] = NULL;
$arguments156['else'] = NULL;
$arguments156['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array158 = array();
$array159 = array (
);$array158['0'] = $renderingContext->getVariableProvider()->getByPath('property.foreignModel', $array159);

$expression160 = function($context) {return ($context["node0"]);};
$arguments156['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression160(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array158)
					),
					$renderingContext
				);
$arguments156['__thenClosure'] = $renderChildrenClosure157;

$output155 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '
        self::assertEquals(
            null,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$array175 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array175);
};
$arguments173 = array();

$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext)]);

$output172 .= '()
        );';
return $output172;
};
$arguments165 = array();
$arguments165['then'] = NULL;
$arguments165['else'] = NULL;
$arguments165['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array167 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments168 = array();
$arguments168['match'] = NULL;
$arguments168['in'] = NULL;
$arguments168['caseSensitive'] = false;
$arguments168['match'] = 'DateTime';
$array170 = array (
);$arguments168['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array170);
$array167['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$expression171 = function($context) {return ($context["node0"]);};
$arguments165['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression171(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array167)
					),
					$renderingContext
				);
$arguments165['__thenClosure'] = $renderChildrenClosure166;

$output155 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output183 = '';

$output183 .= '
        self::assertEquals(
            null,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$array186 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array186);
};
$arguments184 = array();

$output183 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext)]);

$output183 .= '()
        );';
return $output183;
};
$arguments176 = array();
$arguments176['then'] = NULL;
$arguments176['else'] = NULL;
$arguments176['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array178 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['match'] = NULL;
$arguments179['in'] = NULL;
$arguments179['caseSensitive'] = false;
$arguments179['match'] = 'FileReference';
$array181 = array (
);$arguments179['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array181);
$array178['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$expression182 = function($context) {return ($context["node0"]);};
$arguments176['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression182(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array178)
					),
					$renderingContext
				);
$arguments176['__thenClosure'] = $renderChildrenClosure177;

$output155 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);
return $output155;
};
$arguments153 = array();
$arguments153['if'] = NULL;

$output146 .= '';
return $output146;
};
$arguments103 = array();
$arguments103['then'] = NULL;
$arguments103['else'] = NULL;
$arguments103['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array141 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['match'] = NULL;
$arguments142['in'] = NULL;
$arguments142['caseSensitive'] = false;
$arguments142['match'] = 'ObjectStorage';
$array144 = array (
);$arguments142['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array144);
$array141['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$expression145 = function($context) {return ($context["node0"]);};
$arguments103['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression145(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array141)
					),
					$renderingContext
				);
$arguments103['__thenClosure'] = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
        $newObjectStorage = new \\TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$array108 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array108);
};
$arguments106 = array();

$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext)]);

$output105 .= '()
        );';
return $output105;
};
$arguments103['__elseClosures'][] = function() use ($renderingContext, $self) {
$output109 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
        self::assertEquals(
            null,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$array118 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array118);
};
$arguments116 = array();

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext)]);

$output115 .= '()
        );';
return $output115;
};
$arguments110 = array();
$arguments110['then'] = NULL;
$arguments110['else'] = NULL;
$arguments110['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array112 = array();
$array113 = array (
);$array112['0'] = $renderingContext->getVariableProvider()->getByPath('property.foreignModel', $array113);

$expression114 = function($context) {return ($context["node0"]);};
$arguments110['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array112)
					),
					$renderingContext
				);
$arguments110['__thenClosure'] = $renderChildrenClosure111;

$output109 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
        self::assertEquals(
            null,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$array129 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array129);
};
$arguments127 = array();

$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext)]);

$output126 .= '()
        );';
return $output126;
};
$arguments119 = array();
$arguments119['then'] = NULL;
$arguments119['else'] = NULL;
$arguments119['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array121 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments122 = array();
$arguments122['match'] = NULL;
$arguments122['in'] = NULL;
$arguments122['caseSensitive'] = false;
$arguments122['match'] = 'DateTime';
$array124 = array (
);$arguments122['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array124);
$array121['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$expression125 = function($context) {return ($context["node0"]);};
$arguments119['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression125(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array121)
					),
					$renderingContext
				);
$arguments119['__thenClosure'] = $renderChildrenClosure120;

$output109 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
        self::assertEquals(
            null,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$array140 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array140);
};
$arguments138 = array();

$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext)]);

$output137 .= '()
        );';
return $output137;
};
$arguments130 = array();
$arguments130['then'] = NULL;
$arguments130['else'] = NULL;
$arguments130['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array132 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['match'] = NULL;
$arguments133['in'] = NULL;
$arguments133['caseSensitive'] = false;
$arguments133['match'] = 'FileReference';
$array135 = array (
);$arguments133['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array135);
$array132['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$expression136 = function($context) {return ($context["node0"]);};
$arguments130['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression136(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array132)
					),
					$renderingContext
				);
$arguments130['__thenClosure'] = $renderChildrenClosure131;

$output109 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);
return $output109;
};

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output29 .= '
    }

    /**
     * @test
     */
    public function set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$array189 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array189);
};
$arguments187 = array();

$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext)]);

$output29 .= 'For';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$output209 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return 'FileReference';
};
$arguments210 = array();

$output209 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments214 = array();
$arguments214['then'] = NULL;
$arguments214['else'] = NULL;
$arguments214['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array216 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['match'] = NULL;
$arguments217['in'] = NULL;
$arguments217['caseSensitive'] = false;
$arguments217['match'] = 'ObjectStorage';
$array219 = array (
);$arguments217['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array219);
$array216['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext)]);

$expression220 = function($context) {return ($context["node0"]);};
$arguments214['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression220(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array216)
					),
					$renderingContext
				);
$output221 = '';

$output221 .= 'ObjectStorageContaining';
$array222 = array (
);
$output221 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignModelName', $array222)]);
$arguments214['then'] = $output221;
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$array225 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array225);
};
$arguments223 = array();
$arguments214['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext)]);
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);
};
$arguments212 = array();
$arguments212['if'] = NULL;

$output209 .= '';
return $output209;
};
$arguments190 = array();
$arguments190['then'] = NULL;
$arguments190['else'] = NULL;
$arguments190['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array204 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments205 = array();
$arguments205['match'] = NULL;
$arguments205['in'] = NULL;
$arguments205['caseSensitive'] = false;
$arguments205['match'] = 'FileReference';
$array207 = array (
);$arguments205['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array207);
$array204['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$expression208 = function($context) {return ($context["node0"]);};
$arguments190['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression208(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array204)
					),
					$renderingContext
				);
$arguments190['__thenClosure'] = function() use ($renderingContext, $self) {
return 'FileReference';
};
$arguments190['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments192 = array();
$arguments192['then'] = NULL;
$arguments192['else'] = NULL;
$arguments192['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array194 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments195 = array();
$arguments195['match'] = NULL;
$arguments195['in'] = NULL;
$arguments195['caseSensitive'] = false;
$arguments195['match'] = 'ObjectStorage';
$array197 = array (
);$arguments195['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array197);
$array194['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext)]);

$expression198 = function($context) {return ($context["node0"]);};
$arguments192['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression198(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array194)
					),
					$renderingContext
				);
$output199 = '';

$output199 .= 'ObjectStorageContaining';
$array200 = array (
);
$output199 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignModelName', $array200)]);
$arguments192['then'] = $output199;
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$array203 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array203);
};
$arguments201 = array();
$arguments192['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext)]);
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);
};

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output29 .= 'Sets';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$array228 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array228);
};
$arguments226 = array();

$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext)]);

$output29 .= '()
    {';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
$output234 = '';

$output234 .= '
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$array237 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array237);
};
$arguments235 = array();

$output234 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext)]);

$output234 .= '(\'Conceived at T3CON10\');

        self::assertAttributeEquals(
            \'Conceived at T3CON10\',
            \'';
$array238 = array (
);
$output234 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array238)]);

$output234 .= '\',
            $this->subject
        );';
return $output234;
};
$arguments229 = array();
$arguments229['then'] = NULL;
$arguments229['else'] = NULL;
$arguments229['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array231 = array();
$array232 = array (
);$array231['0'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array232);
$array231['1'] = ' == \'string\'';

$expression233 = function($context) {return (($context["node0"]) == 'string');};
$arguments229['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression233(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array231)
					),
					$renderingContext
				);
$arguments229['__thenClosure'] = $renderChildrenClosure230;

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$output244 = '';

$output244 .= '
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
$array247 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array247);
};
$arguments245 = array();

$output244 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext)]);

$output244 .= '(12);

        self::assertAttributeEquals(
            12,
            \'';
$array248 = array (
);
$output244 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array248)]);

$output244 .= '\',
            $this->subject
        );';
return $output244;
};
$arguments239 = array();
$arguments239['then'] = NULL;
$arguments239['else'] = NULL;
$arguments239['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array241 = array();
$array242 = array (
);$array241['0'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array242);
$array241['1'] = '  == \'int\'';

$expression243 = function($context) {return (($context["node0"]) == 'int');};
$arguments239['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression243(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array241)
					),
					$renderingContext
				);
$arguments239['__thenClosure'] = $renderChildrenClosure240;

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
$output254 = '';

$output254 .= '
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
$array257 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array257);
};
$arguments255 = array();

$output254 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext)]);

$output254 .= '(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            \'';
$array258 = array (
);
$output254 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array258)]);

$output254 .= '\',
            $this->subject,
            \'\',
            0.000000001
        );';
return $output254;
};
$arguments249 = array();
$arguments249['then'] = NULL;
$arguments249['else'] = NULL;
$arguments249['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array251 = array();
$array252 = array (
);$array251['0'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array252);
$array251['1'] = ' == \'float\'';

$expression253 = function($context) {return (($context["node0"]) == 'float');};
$arguments249['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression253(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array251)
					),
					$renderingContext
				);
$arguments249['__thenClosure'] = $renderChildrenClosure250;

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$output264 = '';

$output264 .= '
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
$array267 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array267);
};
$arguments265 = array();

$output264 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext)]);

$output264 .= '(true);

        self::assertAttributeEquals(
            true,
            \'';
$array268 = array (
);
$output264 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array268)]);

$output264 .= '\',
            $this->subject
        );';
return $output264;
};
$arguments259 = array();
$arguments259['then'] = NULL;
$arguments259['else'] = NULL;
$arguments259['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array261 = array();
$array262 = array (
);$array261['0'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array262);
$array261['1'] = ' == \'bool\'';

$expression263 = function($context) {return (($context["node0"]) == 'bool');};
$arguments259['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression263(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array261)
					),
					$renderingContext
				);
$arguments259['__thenClosure'] = $renderChildrenClosure260;

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$output349 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
$output352 = '';

$output352 .= '
        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
$array355 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array355);
};
$arguments353 = array();

$output352 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext)]);

$output352 .= ' = new ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\PregReplaceViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments356 = array();
$arguments356['match'] = NULL;
$arguments356['replace'] = NULL;
$arguments356['subject'] = NULL;
$arguments356['match'] = '/^.*<(.*)>$/';
$arguments356['replace'] = '\\1';
$array358 = array (
);$arguments356['subject'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array358);

$output352 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\PregReplaceViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext)]);

$output352 .= '();
        $objectStorageHoldingExactlyOne';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
$array361 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array361);
};
$arguments359 = array();

$output352 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments359, $renderChildrenClosure360, $renderingContext)]);

$output352 .= ' = new \\TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage();
        $objectStorageHoldingExactlyOne';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
$array364 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array364);
};
$arguments362 = array();

$output352 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext)]);

$output352 .= '->attach($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
$array367 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array367);
};
$arguments365 = array();

$output352 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext)]);

$output352 .= ');
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
$array370 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array370);
};
$arguments368 = array();

$output352 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments368, $renderChildrenClosure369, $renderingContext)]);

$output352 .= '($objectStorageHoldingExactlyOne';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure372 = function() use ($renderingContext, $self) {
$array373 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array373);
};
$arguments371 = array();

$output352 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments371, $renderChildrenClosure372, $renderingContext)]);

$output352 .= ');

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOne';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure375 = function() use ($renderingContext, $self) {
$array376 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array376);
};
$arguments374 = array();

$output352 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments374, $renderChildrenClosure375, $renderingContext)]);

$output352 .= ',
            \'';
$array377 = array (
);
$output352 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array377)]);

$output352 .= '\',
            $this->subject
        );';
return $output352;
};
$arguments350 = array();

$output349 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure379 = function() use ($renderingContext, $self) {
$output380 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure382 = function() use ($renderingContext, $self) {
$output386 = '';

$output386 .= '
        $';
$array387 = array (
);
$output386 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array387)]);

$output386 .= 'Fixture = new ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments388 = array();
$arguments388['then'] = NULL;
$arguments388['else'] = NULL;
$arguments388['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array390 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments391 = array();
$arguments391['match'] = NULL;
$arguments391['in'] = NULL;
$arguments391['caseSensitive'] = false;
$arguments391['match'] = 'ObjectStorage';
$array393 = array (
);$arguments391['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array393);
$array390['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments391, $renderChildrenClosure392, $renderingContext)]);

$expression394 = function($context) {return ($context["node0"]);};
$arguments388['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression394(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array390)
					),
					$renderingContext
				);
$output395 = '';

$output395 .= 'ObjectStorageContaining';

$output395 .= '{property.foreignModelName)}';
$arguments388['then'] = $output395;
$array396 = array (
);$arguments388['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignModel.fullQualifiedClassName', $array396)]);

$output386 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments388, $renderChildrenClosure389, $renderingContext);

$output386 .= '();
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
$array399 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array399);
};
$arguments397 = array();

$output386 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext)]);

$output386 .= '($';
$array400 = array (
);
$output386 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array400)]);

$output386 .= 'Fixture);

        self::assertAttributeEquals(
            $';
$array401 = array (
);
$output386 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array401)]);

$output386 .= 'Fixture,
            \'';
$array402 = array (
);
$output386 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array402)]);

$output386 .= '\',
            $this->subject
        );';
return $output386;
};
$arguments381 = array();
$arguments381['then'] = NULL;
$arguments381['else'] = NULL;
$arguments381['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array383 = array();
$array384 = array (
);$array383['0'] = $renderingContext->getVariableProvider()->getByPath('property.foreignModel', $array384);

$expression385 = function($context) {return ($context["node0"]);};
$arguments381['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression385(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array383)
					),
					$renderingContext
				);
$arguments381['__thenClosure'] = $renderChildrenClosure382;

$output380 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments381, $renderChildrenClosure382, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
$output410 = '';

$output410 .= '
        $dateTimeFixture = new \\DateTime();
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure412 = function() use ($renderingContext, $self) {
$array413 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array413);
};
$arguments411 = array();

$output410 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments411, $renderChildrenClosure412, $renderingContext)]);

$output410 .= '($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            \'';
$array414 = array (
);
$output410 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array414)]);

$output410 .= '\',
            $this->subject
        );';
return $output410;
};
$arguments403 = array();
$arguments403['then'] = NULL;
$arguments403['else'] = NULL;
$arguments403['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array405 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments406 = array();
$arguments406['match'] = NULL;
$arguments406['in'] = NULL;
$arguments406['caseSensitive'] = false;
$arguments406['match'] = 'DateTime';
$array408 = array (
);$arguments406['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array408);
$array405['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext);

$expression409 = function($context) {return ($context["node0"]);};
$arguments403['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression409(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array405)
					),
					$renderingContext
				);
$arguments403['__thenClosure'] = $renderChildrenClosure404;

$output380 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments403, $renderChildrenClosure404, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure416 = function() use ($renderingContext, $self) {
$output422 = '';

$output422 .= '
        $fileReferenceFixture = new \\TYPO3\\CMS\\Extbase\\Domain\\Model\\FileReference();
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
$array425 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array425);
};
$arguments423 = array();

$output422 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments423, $renderChildrenClosure424, $renderingContext)]);

$output422 .= '($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            \'';
$array426 = array (
);
$output422 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array426)]);

$output422 .= '\',
            $this->subject
        );';
return $output422;
};
$arguments415 = array();
$arguments415['then'] = NULL;
$arguments415['else'] = NULL;
$arguments415['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array417 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments418 = array();
$arguments418['match'] = NULL;
$arguments418['in'] = NULL;
$arguments418['caseSensitive'] = false;
$arguments418['match'] = 'FileReference';
$array420 = array (
);$arguments418['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array420);
$array417['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments418, $renderChildrenClosure419, $renderingContext);

$expression421 = function($context) {return ($context["node0"]);};
$arguments415['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression421(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array417)
					),
					$renderingContext
				);
$arguments415['__thenClosure'] = $renderChildrenClosure416;

$output380 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments415, $renderChildrenClosure416, $renderingContext);
return $output380;
};
$arguments378 = array();
$arguments378['if'] = NULL;

$output349 .= '';
return $output349;
};
$arguments269 = array();
$arguments269['then'] = NULL;
$arguments269['else'] = NULL;
$arguments269['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array344 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments345 = array();
$arguments345['match'] = NULL;
$arguments345['in'] = NULL;
$arguments345['caseSensitive'] = false;
$arguments345['match'] = 'ObjectStorage';
$array347 = array (
);$arguments345['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array347);
$array344['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext);

$expression348 = function($context) {return ($context["node0"]);};
$arguments269['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression348(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array344)
					),
					$renderingContext
				);
$arguments269['__thenClosure'] = function() use ($renderingContext, $self) {
$output271 = '';

$output271 .= '
        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
$array274 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array274);
};
$arguments272 = array();

$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext)]);

$output271 .= ' = new ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\PregReplaceViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments275 = array();
$arguments275['match'] = NULL;
$arguments275['replace'] = NULL;
$arguments275['subject'] = NULL;
$arguments275['match'] = '/^.*<(.*)>$/';
$arguments275['replace'] = '\\1';
$array277 = array (
);$arguments275['subject'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array277);

$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\PregReplaceViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext)]);

$output271 .= '();
        $objectStorageHoldingExactlyOne';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
$array280 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array280);
};
$arguments278 = array();

$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext)]);

$output271 .= ' = new \\TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage();
        $objectStorageHoldingExactlyOne';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
$array283 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array283);
};
$arguments281 = array();

$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext)]);

$output271 .= '->attach($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
$array286 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array286);
};
$arguments284 = array();

$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext)]);

$output271 .= ');
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
$array289 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array289);
};
$arguments287 = array();

$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext)]);

$output271 .= '($objectStorageHoldingExactlyOne';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
$array292 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array292);
};
$arguments290 = array();

$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments290, $renderChildrenClosure291, $renderingContext)]);

$output271 .= ');

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOne';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
$array295 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array295);
};
$arguments293 = array();

$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext)]);

$output271 .= ',
            \'';
$array296 = array (
);
$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array296)]);

$output271 .= '\',
            $this->subject
        );';
return $output271;
};
$arguments269['__elseClosures'][] = function() use ($renderingContext, $self) {
$output297 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
$output303 = '';

$output303 .= '
        $';
$array304 = array (
);
$output303 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array304)]);

$output303 .= 'Fixture = new ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments305 = array();
$arguments305['then'] = NULL;
$arguments305['else'] = NULL;
$arguments305['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array307 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments308 = array();
$arguments308['match'] = NULL;
$arguments308['in'] = NULL;
$arguments308['caseSensitive'] = false;
$arguments308['match'] = 'ObjectStorage';
$array310 = array (
);$arguments308['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array310);
$array307['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext)]);

$expression311 = function($context) {return ($context["node0"]);};
$arguments305['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression311(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array307)
					),
					$renderingContext
				);
$output312 = '';

$output312 .= 'ObjectStorageContaining';

$output312 .= '{property.foreignModelName)}';
$arguments305['then'] = $output312;
$array313 = array (
);$arguments305['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignModel.fullQualifiedClassName', $array313)]);

$output303 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output303 .= '();
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
$array316 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array316);
};
$arguments314 = array();

$output303 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext)]);

$output303 .= '($';
$array317 = array (
);
$output303 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array317)]);

$output303 .= 'Fixture);

        self::assertAttributeEquals(
            $';
$array318 = array (
);
$output303 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array318)]);

$output303 .= 'Fixture,
            \'';
$array319 = array (
);
$output303 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array319)]);

$output303 .= '\',
            $this->subject
        );';
return $output303;
};
$arguments298 = array();
$arguments298['then'] = NULL;
$arguments298['else'] = NULL;
$arguments298['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array300 = array();
$array301 = array (
);$array300['0'] = $renderingContext->getVariableProvider()->getByPath('property.foreignModel', $array301);

$expression302 = function($context) {return ($context["node0"]);};
$arguments298['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression302(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array300)
					),
					$renderingContext
				);
$arguments298['__thenClosure'] = $renderChildrenClosure299;

$output297 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
$output327 = '';

$output327 .= '
        $dateTimeFixture = new \\DateTime();
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
$array330 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array330);
};
$arguments328 = array();

$output327 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext)]);

$output327 .= '($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            \'';
$array331 = array (
);
$output327 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array331)]);

$output327 .= '\',
            $this->subject
        );';
return $output327;
};
$arguments320 = array();
$arguments320['then'] = NULL;
$arguments320['else'] = NULL;
$arguments320['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array322 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments323 = array();
$arguments323['match'] = NULL;
$arguments323['in'] = NULL;
$arguments323['caseSensitive'] = false;
$arguments323['match'] = 'DateTime';
$array325 = array (
);$arguments323['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array325);
$array322['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$expression326 = function($context) {return ($context["node0"]);};
$arguments320['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression326(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array322)
					),
					$renderingContext
				);
$arguments320['__thenClosure'] = $renderChildrenClosure321;

$output297 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
$output339 = '';

$output339 .= '
        $fileReferenceFixture = new \\TYPO3\\CMS\\Extbase\\Domain\\Model\\FileReference();
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure341 = function() use ($renderingContext, $self) {
$array342 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array342);
};
$arguments340 = array();

$output339 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments340, $renderChildrenClosure341, $renderingContext)]);

$output339 .= '($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            \'';
$array343 = array (
);
$output339 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array343)]);

$output339 .= '\',
            $this->subject
        );';
return $output339;
};
$arguments332 = array();
$arguments332['then'] = NULL;
$arguments332['else'] = NULL;
$arguments332['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array334 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments335 = array();
$arguments335['match'] = NULL;
$arguments335['in'] = NULL;
$arguments335['caseSensitive'] = false;
$arguments335['match'] = 'FileReference';
$array337 = array (
);$arguments335['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array337);
$array334['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$expression338 = function($context) {return ($context["node0"]);};
$arguments332['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression338(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array334)
					),
					$renderingContext
				);
$arguments332['__thenClosure'] = $renderChildrenClosure333;

$output297 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);
return $output297;
};

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output29 .= '
    }';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
$output434 = '';

$output434 .= '

    /**
     * @test
     */
    public function add';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure438 = function() use ($renderingContext, $self) {
$array439 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array439);
};
$arguments437 = array();
return EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments437, $renderChildrenClosure438, $renderingContext);
};
$arguments435 = array();

$output434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments435, $renderChildrenClosure436, $renderingContext)]);

$output434 .= 'ToObjectStorageHolding';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure441 = function() use ($renderingContext, $self) {
$array442 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array442);
};
$arguments440 = array();

$output434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments440, $renderChildrenClosure441, $renderingContext)]);

$output434 .= '()
    {
        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure444 = function() use ($renderingContext, $self) {
$array445 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array445);
};
$arguments443 = array();

$output434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments443, $renderChildrenClosure444, $renderingContext)]);

$output434 .= ' = new ';
$array446 = array (
);
$output434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignClassName', $array446)]);

$output434 .= '();
        $';
$array447 = array (
);
$output434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array447)]);

$output434 .= 'ObjectStorageMock = $this->getMockBuilder(\\TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage::class)
            ->setMethods([\'attach\'])
            ->disableOriginalConstructor()
            ->getMock();

        $';
$array448 = array (
);
$output434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array448)]);

$output434 .= 'ObjectStorageMock->expects(self::once())->method(\'attach\')->with(self::equalTo($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure450 = function() use ($renderingContext, $self) {
$array451 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array451);
};
$arguments449 = array();

$output434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments449, $renderChildrenClosure450, $renderingContext)]);

$output434 .= '));
        $this->inject($this->subject, \'';
$array452 = array (
);
$output434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array452)]);

$output434 .= '\', $';
$array453 = array (
);
$output434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array453)]);

$output434 .= 'ObjectStorageMock);

        $this->subject->add';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure455 = function() use ($renderingContext, $self) {
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
$array458 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array458);
};
$arguments456 = array();
return EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);
};
$arguments454 = array();

$output434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments454, $renderChildrenClosure455, $renderingContext)]);

$output434 .= '($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
$array461 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array461);
};
$arguments459 = array();

$output434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments459, $renderChildrenClosure460, $renderingContext)]);

$output434 .= ');
    }

    /**
     * @test
     */
    public function remove';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure465 = function() use ($renderingContext, $self) {
$array466 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array466);
};
$arguments464 = array();
return EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments464, $renderChildrenClosure465, $renderingContext);
};
$arguments462 = array();

$output434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext)]);

$output434 .= 'FromObjectStorageHolding';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure468 = function() use ($renderingContext, $self) {
$array469 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array469);
};
$arguments467 = array();

$output434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments467, $renderChildrenClosure468, $renderingContext)]);

$output434 .= '()
    {
        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
$array472 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array472);
};
$arguments470 = array();

$output434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext)]);

$output434 .= ' = new ';
$array473 = array (
);
$output434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignClassName', $array473)]);

$output434 .= '();
        $';
$array474 = array (
);
$output434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array474)]);

$output434 .= 'ObjectStorageMock = $this->getMockBuilder(\\TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage::class)
            ->setMethods([\'detach\'])
            ->disableOriginalConstructor()
            ->getMock();

        $';
$array475 = array (
);
$output434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array475)]);

$output434 .= 'ObjectStorageMock->expects(self::once())->method(\'detach\')->with(self::equalTo($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
$array478 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array478);
};
$arguments476 = array();

$output434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments476, $renderChildrenClosure477, $renderingContext)]);

$output434 .= '));
        $this->inject($this->subject, \'';
$array479 = array (
);
$output434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array479)]);

$output434 .= '\', $';
$array480 = array (
);
$output434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name', $array480)]);

$output434 .= 'ObjectStorageMock);

        $this->subject->remove';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure482 = function() use ($renderingContext, $self) {
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure484 = function() use ($renderingContext, $self) {
$array485 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array485);
};
$arguments483 = array();
return EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments483, $renderChildrenClosure484, $renderingContext);
};
$arguments481 = array();

$output434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments481, $renderChildrenClosure482, $renderingContext)]);

$output434 .= '($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
$array488 = array (
);return $renderingContext->getVariableProvider()->getByPath('property.name', $array488);
};
$arguments486 = array();

$output434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext)]);

$output434 .= ');
    }';
return $output434;
};
$arguments427 = array();
$arguments427['then'] = NULL;
$arguments427['else'] = NULL;
$arguments427['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array429 = array();
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure431 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments430 = array();
$arguments430['match'] = NULL;
$arguments430['in'] = NULL;
$arguments430['caseSensitive'] = false;
$arguments430['match'] = 'ObjectStorage';
$array432 = array (
);$arguments430['in'] = $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType', $array432);
$array429['0'] = EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments430, $renderChildrenClosure431, $renderingContext);

$expression433 = function($context) {return ($context["node0"]);};
$arguments427['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression433(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array429)
					),
					$renderingContext
				);
$arguments427['__thenClosure'] = $renderChildrenClosure428;

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments427, $renderChildrenClosure428, $renderingContext);
return $output29;
};
$arguments26 = array();
$arguments26['each'] = NULL;
$arguments26['as'] = NULL;
$arguments26['key'] = NULL;
$arguments26['reverse'] = false;
$arguments26['iteration'] = NULL;
$array28 = array (
);$arguments26['each'] = $renderingContext->getVariableProvider()->getByPath('domainObject.properties', $array28);
$arguments26['as'] = 'property';

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);
return $output25;
};
$arguments23['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output0 .= '
}
';

return $output0;
}


}
#