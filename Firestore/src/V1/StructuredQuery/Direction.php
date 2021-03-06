<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/query.proto

namespace Google\Cloud\Firestore\V1\StructuredQuery;

/**
 * A sort direction.
 *
 * Protobuf type <code>google.firestore.v1.StructuredQuery.Direction</code>
 */
class Direction
{
    /**
     * Unspecified.
     *
     * Generated from protobuf enum <code>DIRECTION_UNSPECIFIED = 0;</code>
     */
    const DIRECTION_UNSPECIFIED = 0;
    /**
     * Ascending.
     *
     * Generated from protobuf enum <code>ASCENDING = 1;</code>
     */
    const ASCENDING = 1;
    /**
     * Descending.
     *
     * Generated from protobuf enum <code>DESCENDING = 2;</code>
     */
    const DESCENDING = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Direction::class, \Google\Cloud\Firestore\V1\StructuredQuery_Direction::class);

