<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - title [input]
 * - subtitle [input]
 * - teaser [textarea]
 * - content [wysiwyg]
 * - image [image]
 */

return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'dao' => NULL,
   'id' => '1',
   'name' => 'Blog',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1655124778,
   'userOwner' => 2,
   'userModification' => 2,
   'parentClass' => '',
   'implementsInterfaces' => '',
   'listingParentClass' => '',
   'useTraits' => '',
   'listingUseTraits' => '',
   'encryption' => false,
   'encryptedTables' => 
  array (
  ),
   'allowInherit' => false,
   'allowVariants' => false,
   'showVariants' => false,
   'fieldDefinitions' => 
  array (
  ),
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'name' => 'pimcore_root',
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => 0,
     'height' => 0,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'children' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Region::__set_state(array(
         'name' => 'Base Data',
         'type' => NULL,
         'region' => NULL,
         'title' => 'Base Data',
         'width' => NULL,
         'height' => NULL,
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'children' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'Layout',
             'type' => NULL,
             'region' => 'center',
             'title' => '',
             'width' => '',
             'height' => '',
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'name' => 'title',
                 'title' => 'Title',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => NULL,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'input',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => true,
                 'visibleSearch' => true,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => 300,
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'regexFlags' => 
                array (
                ),
                 'unique' => false,
                 'showCharCount' => false,
                 'defaultValueGenerator' => '',
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'name' => 'subtitle',
                 'title' => 'Subtitle',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => NULL,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'input',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => 300,
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'regexFlags' => 
                array (
                ),
                 'unique' => false,
                 'showCharCount' => false,
                 'defaultValueGenerator' => '',
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Textarea::__set_state(array(
                 'name' => 'teaser',
                 'title' => 'Teaser',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => NULL,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'textarea',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => 300,
                 'height' => '',
                 'maxLength' => NULL,
                 'showCharCount' => false,
                 'excludeFromSearchIndex' => false,
              )),
              3 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Wysiwyg::__set_state(array(
                 'name' => 'content',
                 'title' => 'Content',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => NULL,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'wysiwyg',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'height' => '',
                 'toolbarConfig' => '',
                 'excludeFromSearchIndex' => false,
                 'maxCharacters' => '',
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'labelWidth' => 100,
             'labelAlign' => 'left',
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'Image',
             'type' => NULL,
             'region' => 'east',
             'title' => '',
             'width' => 450,
             'height' => '',
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Image::__set_state(array(
                 'name' => 'image',
                 'title' => 'Image',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => NULL,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'image',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => 412,
                 'height' => 330,
                 'uploadPath' => '',
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'labelWidth' => 100,
             'labelAlign' => 'left',
          )),
        ),
         'locked' => false,
         'blockedVarsForExport' => 
        array (
        ),
         'fieldtype' => 'region',
         'icon' => NULL,
      )),
    ),
     'locked' => false,
     'blockedVarsForExport' => 
    array (
    ),
     'fieldtype' => 'panel',
     'layout' => NULL,
     'border' => false,
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'icon' => '/bundles/pimcoreadmin/img/flat-color-icons/news.svg',
   'previewUrl' => '',
   'group' => '',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => '@App\\Website\\LinkGenerator\\NewsLinkGenerator',
   'previewGeneratorReference' => '',
   'compositeIndices' => 
  array (
  ),
   'generateTypeDeclarations' => true,
   'showFieldLookup' => false,
   'propertyVisibility' => 
  array (
    'grid' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => false,
      'creationDate' => false,
    ),
    'search' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => false,
      'creationDate' => false,
    ),
  ),
   'enableGridLocking' => false,
   'deletedDataComponents' => 
  array (
    0 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\Localizedfields::__set_state(array(
       'name' => 'localizedfields',
       'title' => '',
       'tooltip' => '',
       'mandatory' => false,
       'noteditable' => false,
       'index' => NULL,
       'locked' => false,
       'style' => '',
       'permissions' => NULL,
       'datatype' => 'data',
       'fieldtype' => 'localizedfields',
       'relationType' => false,
       'invisible' => false,
       'visibleGridView' => true,
       'visibleSearch' => true,
       'blockedVarsForExport' => 
      array (
      ),
       'children' => 
      array (
        0 => 
        Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
           'name' => 'title1',
           'title' => 'Title',
           'tooltip' => '',
           'mandatory' => false,
           'noteditable' => false,
           'index' => false,
           'locked' => false,
           'style' => '',
           'permissions' => NULL,
           'datatype' => 'data',
           'fieldtype' => 'input',
           'relationType' => false,
           'invisible' => false,
           'visibleGridView' => true,
           'visibleSearch' => true,
           'blockedVarsForExport' => 
          array (
          ),
           'width' => 300,
           'defaultValue' => NULL,
           'queryColumnType' => 'varchar',
           'columnType' => 'varchar',
           'columnLength' => 190,
           'regex' => '',
           'regexFlags' => 
          array (
          ),
           'unique' => false,
           'showCharCount' => false,
           'defaultValueGenerator' => '',
        )),
        1 => 
        Pimcore\Model\DataObject\ClassDefinition\Data\Textarea::__set_state(array(
           'name' => 'shortText1',
           'title' => 'Short Text',
           'tooltip' => '',
           'mandatory' => false,
           'noteditable' => false,
           'index' => false,
           'locked' => false,
           'style' => '',
           'permissions' => NULL,
           'datatype' => 'data',
           'fieldtype' => 'textarea',
           'relationType' => false,
           'invisible' => false,
           'visibleGridView' => false,
           'visibleSearch' => false,
           'blockedVarsForExport' => 
          array (
          ),
           'width' => 300,
           'height' => '',
           'maxLength' => NULL,
           'showCharCount' => false,
           'excludeFromSearchIndex' => false,
           'queryColumnType' => 'longtext',
           'columnType' => 'longtext',
        )),
      ),
       'region' => '',
       'layout' => NULL,
       'width' => '',
       'height' => '',
       'maxTabs' => NULL,
       'border' => false,
       'provideSplitView' => false,
       'tabPosition' => 'top',
       'hideLabelsWhenTabsReached' => NULL,
       'referencedFields' => 
      array (
      ),
       'fieldDefinitionsCache' => NULL,
       'permissionView' => NULL,
       'permissionEdit' => NULL,
       'labelWidth' => 100,
       'labelAlign' => 'left',
       'childs' => 
      array (
        0 => 
        Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
           'name' => 'title1',
           'title' => 'Title',
           'tooltip' => '',
           'mandatory' => false,
           'noteditable' => false,
           'index' => false,
           'locked' => false,
           'style' => '',
           'permissions' => NULL,
           'datatype' => 'data',
           'fieldtype' => 'input',
           'relationType' => false,
           'invisible' => false,
           'visibleGridView' => true,
           'visibleSearch' => true,
           'blockedVarsForExport' => 
          array (
          ),
           'width' => 300,
           'defaultValue' => NULL,
           'queryColumnType' => 'varchar',
           'columnType' => 'varchar',
           'columnLength' => 190,
           'regex' => '',
           'regexFlags' => 
          array (
          ),
           'unique' => false,
           'showCharCount' => false,
           'defaultValueGenerator' => '',
        )),
        1 => 
        Pimcore\Model\DataObject\ClassDefinition\Data\Textarea::__set_state(array(
           'name' => 'shortText1',
           'title' => 'Short Text',
           'tooltip' => '',
           'mandatory' => false,
           'noteditable' => false,
           'index' => false,
           'locked' => false,
           'style' => '',
           'permissions' => NULL,
           'datatype' => 'data',
           'fieldtype' => 'textarea',
           'relationType' => false,
           'invisible' => false,
           'visibleGridView' => false,
           'visibleSearch' => false,
           'blockedVarsForExport' => 
          array (
          ),
           'width' => 300,
           'height' => '',
           'maxLength' => NULL,
           'showCharCount' => false,
           'excludeFromSearchIndex' => false,
           'queryColumnType' => 'longtext',
           'columnType' => 'longtext',
        )),
      ),
    )),
    1 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\Fieldcollections::__set_state(array(
       'name' => 'content1',
       'title' => 'Content',
       'tooltip' => '',
       'mandatory' => false,
       'noteditable' => false,
       'index' => false,
       'locked' => false,
       'style' => '',
       'permissions' => NULL,
       'datatype' => 'data',
       'fieldtype' => 'fieldcollections',
       'relationType' => false,
       'invisible' => false,
       'visibleGridView' => false,
       'visibleSearch' => false,
       'blockedVarsForExport' => 
      array (
      ),
       'allowedTypes' => 
      array (
      ),
       'lazyLoading' => true,
       'maxItems' => '',
       'disallowAddRemove' => false,
       'disallowReorder' => false,
       'collapsed' => false,
       'collapsible' => false,
       'border' => false,
    )),
  ),
   'blockedVarsForExport' => 
  array (
  ),
   'activeDispatchingEvents' => 
  array (
  ),
));
