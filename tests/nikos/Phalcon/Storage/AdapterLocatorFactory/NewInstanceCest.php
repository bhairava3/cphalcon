<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Storage\AdapterLocatorFactory;

use UnitTester;

class NewInstanceCest
{
    /**
     * Tests Phalcon\Storage\AdapterLocatorFactory :: newInstance()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-03
     */
    public function storageAdapterLocatorFactoryNewInstance(UnitTester $I)
    {
        $I->wantToTest('Storage\AdapterLocatorFactory - newInstance()');

        $I->skipTest('Need implementation');
    }
}
