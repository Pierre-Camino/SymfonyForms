<?php

namespace Container614OmOq;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderee5ff = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere8d68 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties12e0b = [
        
    ];

    public function getConnection()
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'getConnection', array(), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'getMetadataFactory', array(), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'getExpressionBuilder', array(), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'beginTransaction', array(), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'getCache', array(), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->getCache();
    }

    public function transactional($func)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'transactional', array('func' => $func), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->transactional($func);
    }

    public function commit()
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'commit', array(), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->commit();
    }

    public function rollback()
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'rollback', array(), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'getClassMetadata', array('className' => $className), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'createQuery', array('dql' => $dql), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'createNamedQuery', array('name' => $name), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'createQueryBuilder', array(), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'flush', array('entity' => $entity), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'clear', array('entityName' => $entityName), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->clear($entityName);
    }

    public function close()
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'close', array(), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->close();
    }

    public function persist($entity)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'persist', array('entity' => $entity), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'remove', array('entity' => $entity), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'refresh', array('entity' => $entity), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'detach', array('entity' => $entity), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'merge', array('entity' => $entity), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'getRepository', array('entityName' => $entityName), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'contains', array('entity' => $entity), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'getEventManager', array(), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'getConfiguration', array(), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'isOpen', array(), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'getUnitOfWork', array(), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'getProxyFactory', array(), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'initializeObject', array('obj' => $obj), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'getFilters', array(), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'isFiltersStateClean', array(), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'hasFilters', array(), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return $this->valueHolderee5ff->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializere8d68 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderee5ff) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderee5ff = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderee5ff->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, '__get', ['name' => $name], $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        if (isset(self::$publicProperties12e0b[$name])) {
            return $this->valueHolderee5ff->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee5ff;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderee5ff;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee5ff;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderee5ff;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, '__isset', array('name' => $name), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee5ff;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderee5ff;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, '__unset', array('name' => $name), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee5ff;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderee5ff;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, '__clone', array(), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        $this->valueHolderee5ff = clone $this->valueHolderee5ff;
    }

    public function __sleep()
    {
        $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, '__sleep', array(), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;

        return array('valueHolderee5ff');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere8d68 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere8d68;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere8d68 && ($this->initializere8d68->__invoke($valueHolderee5ff, $this, 'initializeProxy', array(), $this->initializere8d68) || 1) && $this->valueHolderee5ff = $valueHolderee5ff;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderee5ff;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderee5ff;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
