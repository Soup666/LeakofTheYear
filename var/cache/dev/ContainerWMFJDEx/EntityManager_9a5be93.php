<?php

namespace ContainerWMFJDEx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbe640 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6cbeb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties05c2d = [
        
    ];

    public function getConnection()
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'getConnection', array(), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'getMetadataFactory', array(), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'getExpressionBuilder', array(), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'beginTransaction', array(), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'getCache', array(), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'transactional', array('func' => $func), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'commit', array(), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->commit();
    }

    public function rollback()
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'rollback', array(), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'getClassMetadata', array('className' => $className), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'createQuery', array('dql' => $dql), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'createNamedQuery', array('name' => $name), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'createQueryBuilder', array(), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'flush', array('entity' => $entity), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'clear', array('entityName' => $entityName), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->clear($entityName);
    }

    public function close()
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'close', array(), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->close();
    }

    public function persist($entity)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'persist', array('entity' => $entity), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'remove', array('entity' => $entity), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'refresh', array('entity' => $entity), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'detach', array('entity' => $entity), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'merge', array('entity' => $entity), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'contains', array('entity' => $entity), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'getEventManager', array(), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'getConfiguration', array(), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'isOpen', array(), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'getUnitOfWork', array(), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'getProxyFactory', array(), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'initializeObject', array('obj' => $obj), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'getFilters', array(), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'isFiltersStateClean', array(), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'hasFilters', array(), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return $this->valueHolderbe640->hasFilters();
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

        $instance->initializer6cbeb = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderbe640) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbe640 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbe640->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, '__get', ['name' => $name], $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        if (isset(self::$publicProperties05c2d[$name])) {
            return $this->valueHolderbe640->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbe640;

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

        $targetObject = $this->valueHolderbe640;
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
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbe640;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbe640;
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
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, '__isset', array('name' => $name), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbe640;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbe640;
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
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, '__unset', array('name' => $name), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbe640;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbe640;
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
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, '__clone', array(), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        $this->valueHolderbe640 = clone $this->valueHolderbe640;
    }

    public function __sleep()
    {
        $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, '__sleep', array(), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;

        return array('valueHolderbe640');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6cbeb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6cbeb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6cbeb && ($this->initializer6cbeb->__invoke($valueHolderbe640, $this, 'initializeProxy', array(), $this->initializer6cbeb) || 1) && $this->valueHolderbe640 = $valueHolderbe640;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbe640;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbe640;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
