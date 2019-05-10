<?php

/**
 * QuickBooks GeneralDetailReport object container
 *
 * @author Keith Palmer <keith@consolibyte.com>
 * @license LICENSE.txt
 *
 * @package QuickBooks
 * @subpackage Object
 */

/**
 *
 */
QuickBooks_Loader::load('/QuickBooks/QBXML/Object.php');

/**
 *
 */
class QuickBooks_QBXML_Object_GeneralDetailReport extends QuickBooks_QBXML_Object
{
	/**
	 * Create a new QuickBooks_Object_GeneralDetailReport object
	 *
	 * @param array $arr
	 */
	public function __construct($arr = array())
	{
		parent::__construct($arr);
	}


	/**
	 * Perform any needed clean-up of the object data members
	 *
	 * @return boolean
	 */
	protected function _cleanup()
	{
		return true;
	}

	/**
	 * Get an array representation of this Class object
	 *
	 * @param string $request
	 * @param boolean $nest
	 * @return array
	 */
	public function asArray($request, $nest = true)
	{
		$this->_cleanup();

		return parent::asArray($request, $nest);
	}

	/**
	 * Convert this object to a valid qbXML request
	 *
	 * @param string $request					The type of request to convert this to (examples: CustomerAddRq, CustomerModRq, CustomerQueryRq)
	 * @param boolean $todo_for_empty_elements	A constant, one of: QUICKBOOKS_XML_XML_COMPRESS, QUICKBOOKS_XML_XML_DROP, QUICKBOOKS_XML_XML_PRESERVE
	 * @param string $indent
	 * @param string $root
	 * @return string
	 */
	public function asQBXML($request, $todo_for_empty_elements = QuickBooks_XML::XML_DROP, $indent = "\t", $root = null)
	{
		$this->_cleanup();

		return parent::asQBXML($request, $todo_for_empty_elements, $indent, $root);
	}

	/**
	 * Tell what type of object this is
	 *
	 * @return string
	 */
	public function object()
	{
		return QUICKBOOKS_OBJECT_GENERALDETAILREPORT;
	}
}
