<?php

namespace ZnDomain\Domain\Traits;

use ZnDomain\Domain\Events\EntityEvent;
use ZnDomain\Domain\Events\QueryEvent;
use ZnCore\EventDispatcher\Traits\EventDispatcherTrait;
use ZnCore\Query\Entities\Query;

trait DispatchEventTrait
{

    use EventDispatcherTrait;

    protected function dispatchQueryEvent(Query $query, string $eventName): QueryEvent
    {
        $event = new QueryEvent($query);
        $this->getEventDispatcher()->dispatch($event, $eventName);
        return $event;
    }

    protected function dispatchEntityEvent(object $entity, string $eventName): EntityEvent
    {
        $event = new EntityEvent($entity);
        $this->getEventDispatcher()->dispatch($event, $eventName);
        return $event;
    }
}
