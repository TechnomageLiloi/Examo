<?php

namespace Liloi\Examo\Domains\Suites;

use Liloi\TARDIS\Domains\Manager as DomainManager;
use Liloi\TARDIS\Application;

class Manager extends DomainManager
{
    /**
     * Get table name.
     *
     * @return string
     */
    public static function getTableName(): string
    {
        return self::getTablePrefix() . 'suites';
    }

    public static function loadCollection(): Collection
    {
        $name = self::getTableName();

        $rows = self::getAdapter()->getArray(sprintf(
            'select * from %s where key_suite order by key_suite desc;',
            $name
        ));

        $collection = new Collection();

        foreach($rows as $row)
        {
            $collection[$row['key_suite']] = Entity::create($row);
        }

        return $collection;
    }

    /**
     * Load problem from database.
     *
     * @param string $keyQuest
     * @return Entity
     */
    public static function load(string $keyQuest): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s where key_suite="%s"',
            $name,
            $keyQuest
        ));

        return Entity::create($row);
    }

    /**
     * Load current quest.
     *
     * @return Entity
     */
    public static function loadCurrent(): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s order by key_suite desc limit 1', $name
        ));

        return Entity::create($row);
    }

    /**
     * Save problem to database.
     *
     * @param Entity $entity
     */
    public static function save(Entity $entity): void
    {
        $name = self::getTableName();
        $data = $entity->get();

        $keyQuest = $data['key_suite'];

        self::update(
            $name,
            $data,
            sprintf('key_suite = "%s"', $keyQuest)
        );
    }

    /**
     * Create problem in database.
     */
    public static function create(): Entity
    {
        $name = self::getTableName();
        $data = [
            'title' => '-',
            'program' => '-',
            'mark' => '0',
            'data' => '{}'
        ];

        self::insert($name, $data);
        return Entity::create($data);
    }
}