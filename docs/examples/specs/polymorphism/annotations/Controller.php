<?php

/**
 * @license Apache 2.0
 */

namespace OpenApi\Examples\Specs\Polymorphism\Annotations;

use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *     title="Polymorphism",
 *     description="Polymorphism example",
 *     version="1",
 *     @OA\Contact(name="Swagger API Team")
 * )
 * @OA\Tag(
 *     name="api",
 *     description="API operations"
 * )
 * @OA\Server(
 *     url="https://example.localhost",
 *     description="API server"
 * )
 */
class Controller
{
    /**
     * @OA\Get(
     *     path="/test",
     *     operationId="test",
     *     description="Get test",
     *     tags={"api"},
     *     @OA\Response(
     *         response="200",
     *         description="Polymorphism",
     *         @OA\JsonContent(ref="#/components/schemas/Request")
     *     )
     * )
     */
    public function getProduct($id)
    {
    }
}
