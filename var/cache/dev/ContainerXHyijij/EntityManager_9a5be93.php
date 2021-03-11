<?php

namespace ContainerXHyijij;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera6b8d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeracc79 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8821b = [
        
    ];

    public function getConnection()
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'getConnection', array(), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'getMetadataFactory', array(), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'getExpressionBuilder', array(), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'beginTransaction', array(), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'getCache', array(), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->getCache();
    }

    public function transactional($func)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'transactional', array('func' => $func), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->transactional($func);
    }

    public function commit()
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'commit', array(), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->commit();
    }

    public function rollback()
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'rollback', array(), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'getClassMetadata', array('className' => $className), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'createQuery', array('dql' => $dql), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'createNamedQuery', array('name' => $name), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'createQueryBuilder', array(), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'flush', array('entity' => $entity), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'clear', array('entityName' => $entityName), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->clear($entityName);
    }

    public function close()
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'close', array(), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->close();
    }

    public function persist($entity)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'persist', array('entity' => $entity), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'remove', array('entity' => $entity), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'refresh', array('entity' => $entity), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'detach', array('entity' => $entity), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'merge', array('entity' => $entity), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'getRepository', array('entityName' => $entityName), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'contains', array('entity' => $entity), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'getEventManager', array(), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'getConfiguration', array(), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'isOpen', array(), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'getUnitOfWork', array(), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'getProxyFactory', array(), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'initializeObject', array('obj' => $obj), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'getFilters', array(), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'isFiltersStateClean', array(), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'hasFilters', array(), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return $this->valueHoldera6b8d->hasFilters();
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

        $instance->initializeracc79 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera6b8d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera6b8d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera6b8d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, '__get', ['name' => $name], $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        if (isset(self::$publicProperties8821b[$name])) {
            return $this->valueHoldera6b8d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6b8d;

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

        $targetObject = $this->valueHoldera6b8d;
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
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6b8d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera6b8d;
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
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, '__isset', array('name' => $name), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6b8d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera6b8d;
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
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, '__unset', array('name' => $name), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6b8d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera6b8d;
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
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, '__clone', array(), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        $this->valueHoldera6b8d = clone $this->valueHoldera6b8d;
    }

    public function __sleep()
    {
        $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, '__sleep', array(), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;

        return array('valueHoldera6b8d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeracc79 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeracc79;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeracc79 && ($this->initializeracc79->__invoke($valueHoldera6b8d, $this, 'initializeProxy', array(), $this->initializeracc79) || 1) && $this->valueHoldera6b8d = $valueHoldera6b8d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera6b8d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera6b8d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
