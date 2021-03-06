<?php

declare(strict_types=1);

namespace Bolt\Storage\Query\Handler;

use Bolt\Entity\Content;
use Bolt\Storage\Query\ContentQueryParser;

/**
 * Handler to fetch a single record if an identifier is set in the query.
 *
 * @return bool|Content
 */
class IdentifiedSelectHandler
{
    public function __invoke(ContentQueryParser $contentQuery)
    {
        if (is_numeric($contentQuery->getIdentifier())) {
            $contentQuery->setParameter('id', $contentQuery->getIdentifier());
        } else {
            $contentQuery->setParameter('slug', $contentQuery->getIdentifier());
        }
        if (count($contentQuery->getContentTypes()) === 1) {
            $contentQuery->setDirective('returnsingle', true);
        }

        return call_user_func($contentQuery->getHandler('select'), $contentQuery);
    }
}
