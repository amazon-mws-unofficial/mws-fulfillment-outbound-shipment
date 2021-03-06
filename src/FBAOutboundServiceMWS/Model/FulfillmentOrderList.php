<?php
/*******************************************************************************
 * Copyright 2009-2015 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License"); 
 *
 * You may not use this file except in compliance with the License. 
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR 
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the 
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  FBA Outbound Service MWS
 * @version  2010-10-01
 * Library Version: 2015-06-18
 * Generated: Fri Jun 19 13:22:06 GMT 2015
 */

/**
 *  @see FBAOutboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * FBAOutboundServiceMWS_Model_FulfillmentOrderList
 * 
 * Properties:
 * <ul>
 * 
 * <li>member: array</li>
 *
 * </ul>
 */

 class FBAOutboundServiceMWS_Model_FulfillmentOrderList extends FBAOutboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'member' => array('FieldValue' => array(), 'FieldType' => array('FBAOutboundServiceMWS_Model_FulfillmentOrder')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the member property.
     *
     * @return List<FulfillmentOrder> member.
     */
    public function getmember()
    {
        if ($this->_fields['member']['FieldValue'] == null)
        {
            $this->_fields['member']['FieldValue'] = array();
        }
        return $this->_fields['member']['FieldValue'];
    }

    /**
     * Set the value of the member property.
     *
     * @param array member
     * @return this instance
     */
    public function setmember($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['member']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear member.
     */
    public function unsetmember()
    {
        $this->_fields['member']['FieldValue'] = array();
    }

    /**
     * Check to see if member is set.
     *
     * @return true if member is set.
     */
    public function isSetmember()
    {
                return !empty($this->_fields['member']['FieldValue']);
            }

    /**
     * Add values for member, return this.
     *
     * @param member
     *             New values to add.
     *
     * @return This instance.
     */
    public function withmember()
    {
        foreach (func_get_args() as $member)
        {
            $this->_fields['member']['FieldValue'][] = $member;
        }
        return $this;
    }

}
