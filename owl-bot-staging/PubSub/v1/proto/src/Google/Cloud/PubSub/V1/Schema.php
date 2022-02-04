<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/schema.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A schema resource.
 *
 * Generated from protobuf message <code>google.pubsub.v1.Schema</code>
 */
class Schema extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the schema.
     * Format is `projects/{project}/schemas/{schema}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * The type of the schema definition.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.Schema.Type type = 2;</code>
     */
    protected $type = 0;
    /**
     * The definition of the schema. This should contain a string representing
     * the full definition of the schema that is a valid schema definition of
     * the type specified in `type`.
     *
     * Generated from protobuf field <code>string definition = 3;</code>
     */
    protected $definition = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the schema.
     *           Format is `projects/{project}/schemas/{schema}`.
     *     @type int $type
     *           The type of the schema definition.
     *     @type string $definition
     *           The definition of the schema. This should contain a string representing
     *           the full definition of the schema that is a valid schema definition of
     *           the type specified in `type`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the schema.
     * Format is `projects/{project}/schemas/{schema}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the schema.
     * Format is `projects/{project}/schemas/{schema}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The type of the schema definition.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.Schema.Type type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the schema definition.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.Schema.Type type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\PubSub\V1\Schema\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The definition of the schema. This should contain a string representing
     * the full definition of the schema that is a valid schema definition of
     * the type specified in `type`.
     *
     * Generated from protobuf field <code>string definition = 3;</code>
     * @return string
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * The definition of the schema. This should contain a string representing
     * the full definition of the schema that is a valid schema definition of
     * the type specified in `type`.
     *
     * Generated from protobuf field <code>string definition = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDefinition($var)
    {
        GPBUtil::checkString($var, True);
        $this->definition = $var;

        return $this;
    }

}

