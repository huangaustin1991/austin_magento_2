<?php
/**
 * Refer to LICENSE.txt distributed with the Temando Shipping module for notice of license
 */
namespace Temando\Shipping\Rest\Request;

/**
 * Temando API Stream Event Listing Operation
 *
 * @package  Temando\Shipping\Rest
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     http://www.temando.com/
 */
interface StreamEventListRequestInterface
{
    /**
     * Obtain query/post parameters.
     *
     * @return string[]
     */
    public function getRequestParams();

    /**
     * Obtain url path parameters, i.e. entity ids, in order of appearance.
     *
     * @return string[]
     */
    public function getPathParams();
}
