<?php
/**
 * Hidden
 *
 * @author Andres Gutierrez <andres@phalconphp.com>
 * @author Eduar Carvajal <eduar@phalconphp.com>
 * @author Wenzel Pünter <wenzel@phelix.me>
 * @version 1.2.6
 * @package Phalcon
*/
namespace Phalcon\Forms\Element;

use \Phalcon\Tag;
use \Phalcon\Forms\Element;
use \Phalcon\Forms\ElementInterface;
use \Phalcon\Forms\Exception;

/**
 * Phalcon\Forms\Element\Hidden
 *
 * Component INPUT[type=hidden] for forms
 *
 * @see https://github.com/phalcon/cphalcon/blob/1.2.6/ext/forms/element/hidden.c
 */
class Hidden extends Element implements ElementInterface
{
    /**
     * Renders the element widget returning html
     *
     * @param array|null $attributes
     * @return string
     * @throws Exception
     */
    public function render($attributes = null)
    {
        if (is_array($attributes) === false &&
            is_null($attributes) === false) {
            throw new Exception('Invalid parameter type.');
        }

        return Tag::hiddenField($this->prepareAttributes($attributes));
    }
}
