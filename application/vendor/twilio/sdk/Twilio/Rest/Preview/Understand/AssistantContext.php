<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\Understand;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Options;
use Twilio\Rest\Preview\Understand\Assistant\FieldTypeList;
use Twilio\Rest\Preview\Understand\Assistant\IntentList;
use Twilio\Rest\Preview\Understand\Assistant\ModelBuildList;
use Twilio\Rest\Preview\Understand\Assistant\QueryList;
use Twilio\Serialize;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 * 
 * @property \Twilio\Rest\Preview\Understand\Assistant\FieldTypeList fieldTypes
 * @property \Twilio\Rest\Preview\Understand\Assistant\IntentList intents
 * @property \Twilio\Rest\Preview\Understand\Assistant\ModelBuildList modelBuilds
 * @property \Twilio\Rest\Preview\Understand\Assistant\QueryList queries
 * @method \Twilio\Rest\Preview\Understand\Assistant\FieldTypeContext fieldTypes(string $sid)
 * @method \Twilio\Rest\Preview\Understand\Assistant\IntentContext intents(string $sid)
 * @method \Twilio\Rest\Preview\Understand\Assistant\ModelBuildContext modelBuilds(string $sid)
 * @method \Twilio\Rest\Preview\Understand\Assistant\QueryContext queries(string $sid)
 */
class AssistantContext extends InstanceContext {
    protected $_fieldTypes = null;
    protected $_intents = null;
    protected $_modelBuilds = null;
    protected $_queries = null;

    /**
     * Initialize the AssistantContext
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $sid The sid
     * @return \Twilio\Rest\Preview\Understand\AssistantContext 
     */
    public function __construct(Version $version, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('sid' => $sid, );

        $this->uri = '/Assistants/' . rawurlencode($sid) . '';
    }

    /**
     * Fetch a AssistantInstance
     * 
     * @return AssistantInstance Fetched AssistantInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new AssistantInstance($this->version, $payload, $this->solution['sid']);
    }

    /**
     * Update the AssistantInstance
     * 
     * @param array|Options $options Optional Arguments
     * @return AssistantInstance Updated AssistantInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update($options = array()) {
        $options = new Values($options);

        $data = Values::of(array(
            'FriendlyName' => $options['friendlyName'],
            'LogQueries' => Serialize::booleanToString($options['logQueries']),
            'UniqueName' => $options['uniqueName'],
            'ResponseUrl' => $options['responseUrl'],
            'CallbackUrl' => $options['callbackUrl'],
            'CallbackEvents' => $options['callbackEvents'],
        ));

        $payload = $this->version->update(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new AssistantInstance($this->version, $payload, $this->solution['sid']);
    }

    /**
     * Deletes the AssistantInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() {
        return $this->version->delete('delete', $this->uri);
    }

    /**
     * Access the fieldTypes
     * 
     * @return \Twilio\Rest\Preview\Understand\Assistant\FieldTypeList 
     */
    protected function getFieldTypes() {
        if (!$this->_fieldTypes) {
            $this->_fieldTypes = new FieldTypeList($this->version, $this->solution['sid']);
        }

        return $this->_fieldTypes;
    }

    /**
     * Access the intents
     * 
     * @return \Twilio\Rest\Preview\Understand\Assistant\IntentList 
     */
    protected function getIntents() {
        if (!$this->_intents) {
            $this->_intents = new IntentList($this->version, $this->solution['sid']);
        }

        return $this->_intents;
    }

    /**
     * Access the modelBuilds
     * 
     * @return \Twilio\Rest\Preview\Understand\Assistant\ModelBuildList 
     */
    protected function getModelBuilds() {
        if (!$this->_modelBuilds) {
            $this->_modelBuilds = new ModelBuildList($this->version, $this->solution['sid']);
        }

        return $this->_modelBuilds;
    }

    /**
     * Access the queries
     * 
     * @return \Twilio\Rest\Preview\Understand\Assistant\QueryList 
     */
    protected function getQueries() {
        if (!$this->_queries) {
            $this->_queries = new QueryList($this->version, $this->solution['sid']);
        }

        return $this->_queries;
    }

    /**
     * Magic getter to lazy load subresources
     * 
     * @param string $name Subresource to return
     * @return \Twilio\ListResource The requested subresource
     * @throws \Twilio\Exceptions\TwilioException For unknown subresources
     */
    public function __get($name) {
        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown subresource ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     * 
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return \Twilio\InstanceContext The requested resource context
     * @throws \Twilio\Exceptions\TwilioException For unknown resource
     */
    public function __call($name, $arguments) {
        $property = $this->$name;
        if (method_exists($property, 'getContext')) {
            return call_user_func_array(array($property, 'getContext'), $arguments);
        }

        throw new TwilioException('Resource does not have a context');
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Preview.Understand.AssistantContext ' . implode(' ', $context) . ']';
    }
}