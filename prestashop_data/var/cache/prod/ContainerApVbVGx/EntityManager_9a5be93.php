<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder84556 = null;
    private $initializer544fb = null;
    private static $publicPropertiesdafc0 = [
        
    ];
    public function getConnection()
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'getConnection', array(), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'getMetadataFactory', array(), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'getExpressionBuilder', array(), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'beginTransaction', array(), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'getCache', array(), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->getCache();
    }
    public function transactional($func)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'transactional', array('func' => $func), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'wrapInTransaction', array('func' => $func), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'commit', array(), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->commit();
    }
    public function rollback()
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'rollback', array(), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'getClassMetadata', array('className' => $className), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'createQuery', array('dql' => $dql), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'createNamedQuery', array('name' => $name), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'createQueryBuilder', array(), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'flush', array('entity' => $entity), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'clear', array('entityName' => $entityName), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->clear($entityName);
    }
    public function close()
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'close', array(), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->close();
    }
    public function persist($entity)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'persist', array('entity' => $entity), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'remove', array('entity' => $entity), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'refresh', array('entity' => $entity), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'detach', array('entity' => $entity), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'merge', array('entity' => $entity), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'getRepository', array('entityName' => $entityName), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'contains', array('entity' => $entity), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'getEventManager', array(), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'getConfiguration', array(), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'isOpen', array(), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'getUnitOfWork', array(), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'getProxyFactory', array(), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'initializeObject', array('obj' => $obj), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'getFilters', array(), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'isFiltersStateClean', array(), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'hasFilters', array(), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return $this->valueHolder84556->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer544fb = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder84556) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder84556 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder84556->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, '__get', ['name' => $name], $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        if (isset(self::$publicPropertiesdafc0[$name])) {
            return $this->valueHolder84556->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84556;
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
        $targetObject = $this->valueHolder84556;
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
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84556;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder84556;
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
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, '__isset', array('name' => $name), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84556;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder84556;
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
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, '__unset', array('name' => $name), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84556;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder84556;
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
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, '__clone', array(), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        $this->valueHolder84556 = clone $this->valueHolder84556;
    }
    public function __sleep()
    {
        $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, '__sleep', array(), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
        return array('valueHolder84556');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer544fb = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer544fb;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer544fb && ($this->initializer544fb->__invoke($valueHolder84556, $this, 'initializeProxy', array(), $this->initializer544fb) || 1) && $this->valueHolder84556 = $valueHolder84556;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder84556;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder84556;
    }
}
