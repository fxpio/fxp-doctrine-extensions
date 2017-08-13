<?php

/*
 * This file is part of the Sonatra package.
 *
 * (c) François Pluchino <francois.pluchino@sonatra.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonatra\Component\DoctrineExtensions\Tests\Mocks;

use Doctrine\DBAL\Driver\Connection;

/**
 * Mock class for DriverConnection.
 *
 * @author François Pluchino <francois.pluchino@sonatra.com>
 */
class DriverConnectionMock implements Connection
{
    /**
     * @var \Doctrine\DBAL\Driver\Statement
     */
    private $statementMock;

    /**
     * @return \Doctrine\DBAL\Driver\Statement
     */
    public function getStatementMock()
    {
        return $this->statementMock;
    }

    /**
     * @param \Doctrine\DBAL\Driver\Statement $statementMock
     */
    public function setStatementMock($statementMock)
    {
        $this->statementMock = $statementMock;
    }

    /**
     * {@inheritdoc}
     */
    public function prepare($prepareString)
    {
        return $this->statementMock ?: new StatementMock();
    }

    /**
     * {@inheritdoc}
     */
    public function query()
    {
        return $this->statementMock ?: new StatementMock();
    }

    /**
     * {@inheritdoc}
     */
    public function quote($input, $type = \PDO::PARAM_STR)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function exec($statement)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function lastInsertId($name = null)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function beginTransaction()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function rollBack()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function errorCode()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function errorInfo()
    {
    }
}
