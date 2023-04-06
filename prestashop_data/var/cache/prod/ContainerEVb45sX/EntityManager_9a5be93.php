<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderb6e2e = null;
    private $initializer5aef7 = null;
    private static $publicProperties80b63 = [
        
    ];
    public function getConnection()
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'getConnection', array(), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'getMetadataFactory', array(), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'getExpressionBuilder', array(), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'beginTransaction', array(), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'getCache', array(), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->getCache();
    }
    public function transactional($func)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'transactional', array('func' => $func), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'commit', array(), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->commit();
    }
    public function rollback()
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'rollback', array(), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'getClassMetadata', array('className' => $className), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'createQuery', array('dql' => $dql), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'createNamedQuery', array('name' => $name), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'createQueryBuilder', array(), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'flush', array('entity' => $entity), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'clear', array('entityName' => $entityName), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->clear($entityName);
    }
    public function close()
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'close', array(), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->close();
    }
    public function persist($entity)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'persist', array('entity' => $entity), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'remove', array('entity' => $entity), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'refresh', array('entity' => $entity), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'detach', array('entity' => $entity), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'merge', array('entity' => $entity), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'contains', array('entity' => $entity), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'getEventManager', array(), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'getConfiguration', array(), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'isOpen', array(), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'getUnitOfWork', array(), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'getProxyFactory', array(), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'initializeObject', array('obj' => $obj), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'getFilters', array(), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'isFiltersStateClean', array(), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'hasFilters', array(), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return $this->valueHolderb6e2e->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer5aef7 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderb6e2e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb6e2e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderb6e2e->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, '__get', ['name' => $name], $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        if (isset(self::$publicProperties80b63[$name])) {
            return $this->valueHolderb6e2e->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb6e2e;
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
        $targetObject = $this->valueHolderb6e2e;
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
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb6e2e;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderb6e2e;
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
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, '__isset', array('name' => $name), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb6e2e;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderb6e2e;
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
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, '__unset', array('name' => $name), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb6e2e;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderb6e2e;
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
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, '__clone', array(), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        $this->valueHolderb6e2e = clone $this->valueHolderb6e2e;
    }
    public function __sleep()
    {
        $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, '__sleep', array(), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
        return array('valueHolderb6e2e');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5aef7 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5aef7;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer5aef7 && ($this->initializer5aef7->__invoke($valueHolderb6e2e, $this, 'initializeProxy', array(), $this->initializer5aef7) || 1) && $this->valueHolderb6e2e = $valueHolderb6e2e;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb6e2e;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb6e2e;
    }
}
