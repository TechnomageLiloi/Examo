<?php

namespace Liloi\Examo\Domains\Tests;

use Liloi\Examo\Domains\Manager as DomainManager;
use Liloi\Examo\Application;

class Manager extends DomainManager
{
    /**
     * Get table name.
     *
     * @return string
     */
    public static function getTableName(): string
    {
        return self::getTablePrefix() . 'tests';
    }

    public static function loadCollection(string $keyQuest): Collection
    {
        $name = self::getTableName();

        $rows = self::getAdapter()->getArray(sprintf(
            'select * from %s where key_suite="%s" order by key_test asc;',
            $name, $keyQuest
        ));

        $collection = new Collection();

        foreach($rows as $row)
        {
            $collection[$row['key_test']] = Entity::create($row);
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
            'select * from %s where key_test="%s"',
            $name,
            $keyQuest
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

        $keyQuest = $data['key_test'];
        $keySuite = $data['key_suite'];

        self::update(
            $name,
            $data,
            sprintf('key_test = "%s" and key_suite = "%s"', $keyQuest, $keySuite)
        );
    }

    /**
     * Create problem in database.
     */
    public static function create(string $keyTest, string $keySuite): Entity
    {
        $name = self::getTableName();
        $data = [
            'key_test' => $keyTest,
            'key_suite' => $keySuite,
            'title' => '-',
            'program' => '-',
            'hint' => '-',
            'note' => '-'
        ];

        self::insert($name, $data);
        return Entity::create($data);
    }
}