<?php
namespace common\repositories\models;

use common\models\essence\Product;
use common\modules\elasticsearch\components\indexes\ModelPopulate;

final class CategoryPopulate extends ModelPopulate implements \common\modules\elasticsearch\contracts\Populate
{

    public $modelClass = Product::class;

}