<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace Pimcore\Model\DataObject\ClassDefinition\Layout;

use Pimcore\Model;

class Tabpanel extends Model\DataObject\ClassDefinition\Layout
{
    /**
     * Static type of this element
     *
     * @var string
     */
    public $fieldtype = 'tabpanel';

    /**
     * @var bool
     */
    public $border = false;

    /**
     * @var string|null
     */
    public $tabPosition = 'top';

    /**
     * @return bool
     */
    public function getBorder(): bool
    {
        return $this->border;
    }

    /**
     * @param bool $border
     */
    public function setBorder(bool $border): void
    {
        $this->border = $border;
    }

    /**
     * @return string
     */
    public function getTabPosition(): string
    {
        return $this->tabPosition ?? 'top';
    }

    /**
     * @param string $tabPosition|null
     */
    public function setTabPosition($tabPosition): void
    {
        $this->tabPosition = $tabPosition;
    }
}
