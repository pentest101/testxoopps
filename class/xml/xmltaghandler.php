<?php
// 
/*******************************************************************************
 * Location: <strong>xml/XmlTagHandler</strong><br>
 * <br>
 * XmlTagHandler<br>
 * <br>
 * Copyright &copy; 2001 eXtremePHP.  All rights reserved.<br>
 * <br>
 * @author Ken Egervari, Remi Michalski<br>
 *******************************************************************************/
class XmlTagHandler
{
    /****************************************************************************
     ****************************************************************************/
    public function __construct()
    {
    }

    /****************************************************************************
     ****************************************************************************/
    public function getName()
    {
        return '';
    }

    /****************************************************************************
     ***************************************************************************
     * @param $parser
     * @param $attributes
     */
    public function handleBeginElement($parser, &$attributes)
    {
    }

    /****************************************************************************
     ***************************************************************************
     * @param $parser
     */
    public function handleEndElement($parser)
    {
    }

    /****************************************************************************
     ***************************************************************************
     * @param $parser
     * @param $data
     */
    public function handleCharacterData($parser, &$data)
    {
    }
}
