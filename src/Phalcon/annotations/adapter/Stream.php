<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Annotations\Adapter;

/**
 * Stores the parsed annotations in files. This adapter is suitable for production
 *
 *```php
 * use Phalcon\Annotations\Adapter\Stream;
 *
 * $annotations = new Stream(
 *     [
 *         "annotationsDir" => "app/cache/annotations/",
 *     ]
 * );
 *```
 */
class Stream extends AbstractAdapter
{
    /**
     * @var string
     */
    protected $annotationsDir = './';


    /**
     * Phalcon\Annotations\Adapter\Stream constructor
     *
     * @param array $options
     */
    public function __construct(array $options = array())
    {
    }

    /**
     * Reads parsed annotations from files
     *
     * @param string $key
     * @return bool|int|\Phalcon\Annotations\Reflection
     */
    public function read(string $key)
    {
    }

    /**
     * Writes parsed annotations to files
     *
     * @param string $key
     * @param \Phalcon\Annotations\Reflection $data
     */
    public function write(string $key, \Phalcon\Annotations\Reflection $data)
    {
    }
}
