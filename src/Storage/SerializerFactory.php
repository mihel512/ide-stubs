<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Storage;

use Phalcon\Factory\AbstractFactory;
use Phalcon\Storage\Serializer\SerializerInterface;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class SerializerFactory extends AbstractFactory
{

    protected $exception = 'Phalcon\\\\Storage\\\\Exception';


    /**
     * SerializerFactory constructor.
     *
     * @param array $services
     */
    public function __construct(array $services = [])
    {
    }

    /**
     * @param string $name *
     * @return SerializerInterface
     * @throws Exception
     */
    public function newInstance(string $name): SerializerInterface
    {
    }

    /**
     * @return array
     */
    protected function getAdapters(): array
    {
    }
}
