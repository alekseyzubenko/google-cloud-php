<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A type of transformation that will scan unstructured text and
 * apply various `PrimitiveTransformation`s to each finding, where the
 * transformation is applied to only values that were identified as a specific
 * info_type.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.InfoTypeTransformations</code>
 */
class InfoTypeTransformations extends \Google\Protobuf\Internal\Message
{
    /**
     * Transformation for each infoType. Cannot specify more than one
     * for a given infoType. [required]
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.InfoTypeTransformations.InfoTypeTransformation transformations = 1;</code>
     */
    private $transformations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\InfoTypeTransformations\InfoTypeTransformation[]|\Google\Protobuf\Internal\RepeatedField $transformations
     *           Transformation for each infoType. Cannot specify more than one
     *           for a given infoType. [required]
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Transformation for each infoType. Cannot specify more than one
     * for a given infoType. [required]
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.InfoTypeTransformations.InfoTypeTransformation transformations = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTransformations()
    {
        return $this->transformations;
    }

    /**
     * Transformation for each infoType. Cannot specify more than one
     * for a given infoType. [required]
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.InfoTypeTransformations.InfoTypeTransformation transformations = 1;</code>
     * @param \Google\Cloud\Dlp\V2\InfoTypeTransformations\InfoTypeTransformation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTransformations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\InfoTypeTransformations\InfoTypeTransformation::class);
        $this->transformations = $arr;

        return $this;
    }

}
