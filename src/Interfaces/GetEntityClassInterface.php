<?php

namespace ZnDomain\Domain\Interfaces;

interface GetEntityClassInterface
{

    /**
     * Получить имя класса сущности, с которой работает сервис
     * @return string
     */
    public function getEntityClass(): string;

}