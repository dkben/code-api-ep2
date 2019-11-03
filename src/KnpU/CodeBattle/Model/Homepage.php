<?php


namespace KnpU\CodeBattle\Model;

use Hateoas\Configuration\Annotation as Hateoas;

/**
 * @Hateoas\Relation(
 *      "self",
 *      href = @Hateoas\Route(
 *          "api_homepage"
 *      ),
 *     attributes={"title": "The API Homepage"}
 * )
 * @Hateoas\Relation(
 *      "programmers",
 *      href = @Hateoas\Route(
 *          "api_programmers_list"
 *      ),
 *     attributes={"title": "All of the programmers in the system"}
 * )
 */
class Homepage
{
    private $message = '歡迎來到 CodeBattle API! Weee! 文檔說明連結請至 http://...';
}