<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1\IngestionDataSourceSettings\CloudStorage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for reading Cloud Storage data written via [Cloud Storage
 * subscriptions](https://cloud.google.com/pubsub/docs/cloudstorage). The
 * data and attributes fields of the originally exported Pub/Sub message
 * will be restored when publishing.
 *
 * Generated from protobuf message <code>google.pubsub.v1.IngestionDataSourceSettings.CloudStorage.PubSubAvroFormat</code>
 */
class PubSubAvroFormat extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

}


