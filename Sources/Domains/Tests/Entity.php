<?php

namespace Liloi\Examo\Domains\Tests;

use Liloi\Tools\Entity as AbstractEntity;
use Liloi\Stylo\Parser as StyloParser;

/**
 * @method string getTitle()
 * @method void setTitle(string $value)
 *
 * @method string getProgram()
 * @method void setProgram(string $value)
 *
 * @method string getStatus()
 * @method void setStatus(string $value)
 *
 * @method string getType()
 * @method void setType(string $value)
 *
 * @method string getDone()
 * @method void setDone(string $value)
 *
 * @method string getHint()
 * @method void setHint(string $value)
 *
 * @method string getNote()
 * @method void setNote(string $value)
 */
class Entity extends AbstractEntity
{
    public function getKey(): string
    {
        return $this->getField('key_test');
    }

    public function getKeySuite(): string
    {
        return $this->getField('key_suite');
    }

    public function setKeySuite(string $value): string
    {
        $this->setField('key_suite', $value);
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