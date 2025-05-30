<?php

/**
 * @license Apache 2.0
 */

namespace OpenApi\Examples\Specs\UsingRefs\Annotations;

use OpenApi\Annotations as OA;

/**
 * A common scenario is to let swagger-php generate a definition based on your model class.
 * These definitions can then be referenced with `ref="#/components/schemas/$classname".
 */

/**
 * @OA\Schema(
 *     description="Product model",
 *     type="object",
 *     title="Product model"
 * )
 */
class Product extends Model
{
    /**
     * The unique identifier of a product in our catalog.
     *
     * @var int
     *
     * @OA\Property(format="int64", example=1)
     */
    public $id;

    /**
     * @OA\Property(ref="#/components/schemas/product_status")
     */
    public $status;

    /**
     * @OA\Property
     */
    public StockLevel $stockLevel;
}
