<?php

/*
 * This file is part of the Studio Fact package.
 *
 * (c) Kulichkin Denis (onEXHovia) <onexhovia@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Citfact\Form\View\Type\UserField;

class DateType extends BaseUserFieldType
{
    /**
     * @inheritdoc
     */
    public function detected()
    {
        return $this->field['USER_TYPE_ID'] == 'datetime';
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'date';
    }
}
