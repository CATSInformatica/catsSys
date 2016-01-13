<?php

namespace DoctrineORMModule\Proxy\__CG__\SchoolManagement\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Enrollment extends \SchoolManagement\Entity\Enrollment implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'SchoolManagement\\Entity\\Enrollment' . "\0" . 'enrollmentId', '' . "\0" . 'SchoolManagement\\Entity\\Enrollment' . "\0" . 'class', '' . "\0" . 'SchoolManagement\\Entity\\Enrollment' . "\0" . 'registration', '' . "\0" . 'SchoolManagement\\Entity\\Enrollment' . "\0" . 'enrollmentBeginDate', '' . "\0" . 'SchoolManagement\\Entity\\Enrollment' . "\0" . 'enrollmentEndDate', '' . "\0" . 'SchoolManagement\\Entity\\Enrollment' . "\0" . 'warnings');
        }

        return array('__isInitialized__', '' . "\0" . 'SchoolManagement\\Entity\\Enrollment' . "\0" . 'enrollmentId', '' . "\0" . 'SchoolManagement\\Entity\\Enrollment' . "\0" . 'class', '' . "\0" . 'SchoolManagement\\Entity\\Enrollment' . "\0" . 'registration', '' . "\0" . 'SchoolManagement\\Entity\\Enrollment' . "\0" . 'enrollmentBeginDate', '' . "\0" . 'SchoolManagement\\Entity\\Enrollment' . "\0" . 'enrollmentEndDate', '' . "\0" . 'SchoolManagement\\Entity\\Enrollment' . "\0" . 'warnings');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Enrollment $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getEnrollmentId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getEnrollmentId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnrollmentId', array());

        return parent::getEnrollmentId();
    }

    /**
     * {@inheritDoc}
     */
    public function getClass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClass', array());

        return parent::getClass();
    }

    /**
     * {@inheritDoc}
     */
    public function getRegistration()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegistration', array());

        return parent::getRegistration();
    }

    /**
     * {@inheritDoc}
     */
    public function getEnrollmentBeginDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnrollmentBeginDate', array());

        return parent::getEnrollmentBeginDate();
    }

    /**
     * {@inheritDoc}
     */
    public function getEnrollmentEndDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnrollmentEndDate', array());

        return parent::getEnrollmentEndDate();
    }

    /**
     * {@inheritDoc}
     */
    public function getWarnings()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWarnings', array());

        return parent::getWarnings();
    }

    /**
     * {@inheritDoc}
     */
    public function setClass(\SchoolManagement\Entity\StudentClass $class)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClass', array($class));

        return parent::setClass($class);
    }

    /**
     * {@inheritDoc}
     */
    public function setRegistration(\Recruitment\Entity\Registration $registration)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegistration', array($registration));

        return parent::setRegistration($registration);
    }

    /**
     * {@inheritDoc}
     */
    public function setEnrollmentBeginDate(\DateTime $enrollmentBeginDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnrollmentBeginDate', array($enrollmentBeginDate));

        return parent::setEnrollmentBeginDate($enrollmentBeginDate);
    }

    /**
     * {@inheritDoc}
     */
    public function setEnrollmentEndDate($enrollmentEndDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnrollmentEndDate', array($enrollmentEndDate));

        return parent::setEnrollmentEndDate($enrollmentEndDate);
    }

    /**
     * {@inheritDoc}
     */
    public function setWarnings($warnings)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWarnings', array($warnings));

        return parent::setWarnings($warnings);
    }

}
