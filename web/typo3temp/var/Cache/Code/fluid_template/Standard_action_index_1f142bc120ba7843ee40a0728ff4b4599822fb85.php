<?php

class Standard_action_index_1f142bc120ba7843ee40a0728ff4b4599822fb85 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '#
# Extension Builder settings for extension ';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array1)]);

$output0 .= '
# generated ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['date'] = NULL;
$arguments2['format'] = '';
$arguments2['base'] = NULL;
$arguments2['format'] = 'Y-m-d\\TH:i:00\\Z';
$arguments2['date'] = 'now';
$renderChildrenClosure3 = $arguments2['date'] ? function() use ($arguments2) { return $arguments2['date']; } : $renderChildrenClosure3;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext)]);

$output0 .= '
#
# See http://www.yaml.org/spec/1.2/spec.html
#

---

###########    Overwrite settings  ###########
#
# These settings only apply, if the roundtrip feature of the extension builder
# is enabled in the extension manager
#
# Usage:
# nesting reflects the file structure
# a setting applies to a file or recursive to all files and subfolders
#
# merge:
#   means for classes: All properties ,methods and method bodies
#   of the existing class will be modified according to the new settings
#   but not overwritten
#
#   for locallang xlf files: Existing keys and labels are always
#   preserved (renaming a property or DomainObject will result in new keys and new labels)
#
#   for other files: You will find a Split token at the end of the file
#   see: \\EBT\\ExtensionBuilder\\Service\\RoundTrip::SPLIT_TOKEN
#
#   After this token you can write whatever you want and it will be appended
#   everytime the code is generated
#
# keep:
#   files are never overwritten
#   These settings may break the functionality of the extension builder!
#   Handle with care!
#
#

############  extension settings  ##############

overwriteSettings:
  Classes:
    Controller: merge
    Domain:
      Model: merge
      Repository: merge

  Configuration:
    #TCA merge not possible - use overrides directory
    #TypoScript: keep

  Resources:
    Private:
      #Language: merge
      #Templates: keep

  user_extension.svg: keep

#  ext_localconf.php: merge

#  ext_tables.php: merge

#  ext_tables.sql: merge

## use static date attribute in xliff files ##
#staticDateInXliffFiles: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['date'] = NULL;
$arguments4['format'] = '';
$arguments4['base'] = NULL;
$arguments4['format'] = 'Y-m-d\\TH:i:00\\Z';
$arguments4['date'] = 'now';
$renderChildrenClosure5 = $arguments4['date'] ? function() use ($arguments4) { return $arguments4['date']; } : $renderChildrenClosure5;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output0 .= '

## skip docComment (license header) ##
#skipDocComment

## list of error codes for warnings that should be ignored ##
#ignoreWarnings:
  #503

######### settings for classBuilder #############################
#
# here you may define default parent classes for your classes
# these settings only apply for new generated classes
# you may also just change the parent class in the generated class file.
# It will be kept on next code generation, if the overwrite settings
# are configured to merge it
#
#################################################################

classBuilder:

  Controller:
    parentClass: \\TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController

  Model:
    AbstractEntity:
      parentClass: \\TYPO3\\CMS\\Extbase\\DomainObject\\AbstractEntity

    AbstractValueObject:
      parentClass: \\TYPO3\\CMS\\Extbase\\DomainObject\\AbstractValueObject

  Repository:
    parentClass: \\TYPO3\\CMS\\Extbase\\Persistence\\Repository

  setDefaultValuesForClassProperties: true';

return $output0;
}


}
#