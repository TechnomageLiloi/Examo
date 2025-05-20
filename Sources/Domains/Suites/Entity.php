<?php

namespace Liloi\Examo\Domains\Suites;

use Liloi\Tools\Entity as AbstractEntity;
use Liloi\Stylo\Parser as StyloParser;

/**
 * @method string getTitle()
 * @method void setTitle(string $value)
 *
 * @method string getProgram()
 * @method void setProgram(string $value)
 *
 * @method string getMark()
 * @method void setMark(string $value)
 *
 * @method string getData()
 * @method void setData(string $value)
 */
class Entity extends AbstractEntity
{
    public function getKey(): string
    {
        return $this->getField('key_suite');
    }

    public function getProgramParse(): string
    {
        return StyloParser::parseString($this->getProgram());
    }

    public function save(): void
    {
        Manager::save($this);
    }
}