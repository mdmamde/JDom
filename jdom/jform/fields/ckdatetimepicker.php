<?php
/**                               ______________________________________________
*                          o O   |                                              |
*                 (((((  o      <    Generated with Cook Self Service  V2.6.2   |
*                ( o o )         |______________________________________________|
* --------oOOO-----(_)-----OOOo---------------------------------- www.j-cook.pro --- +
* @version		0.0.1
* @package		Cook Self Service
* @subpackage	JDom
* @license		GNU General Public License
* @author		Jocelyn HUARD
*
* @added by		Girolamo Tomaselli - http://bygiro.com
* @version		0.0.1
*
*             .oooO  Oooo.
*             (   )  (   )
* -------------\ (----) /----------------------------------------------------------- +
*               \_)  (_/
*/

// no direct access
defined('_JEXEC') or die('Restricted access');


/**
* Form field for Jdom.
*
* @package	Jdom
* @subpackage	Form
*/
class JFormFieldCkdatetimepicker extends JdomClassFormField
{
	/**
	* The form field type.
	*
	* @var string
	*/
	public $type = 'ckdatetimepicker';

	/**
	* Method to get the field input markup.
	*
	* @access	public
	*
	* @return	string	The field input markup.
	*
	* @since	11.1
	*/
	public function getInput()
	{

		

		$this->input = JDom::_('html.form.input.datetimepicker', array_merge(array(
				'dataKey' => $this->getOption('name'),
				'formGroup' => $this->group,
				'formControl' => $this->formControl,
				'domClass' => $this->getOption('class'),
				'dataValue' => $this->value,
				'dateFormat' => $this->getOption('format'),
				'uiFormat' => $this->getOption('uiFormat'),
				'required' => $this->getOption('required'),
				'todayBtn' => $this->getOption('todayBtn'),
				'autoclose' => $this->getOption('autoclose'),
				'startView' => $this->getOption('startView'),
				'minView' => $this->getOption('minView'),
				'maxView' => $this->getOption('maxView'),
				'startDate' => $this->getOption('startDate'),
				'endDate' => $this->getOption('endDate'),
				'filter' => $this->getOption('filter'),
				'placeholder' => $this->getOption('placeholder'),
				'responsive' => $this->getOption('responsive'),
				'size' => $this->getOption('size'),
				'submitEventName' => ($this->getOption('submit') == 'true'?'onchange':null)
			), $this->jdomOptions));

		return parent::getInput();
	}

	public function getLabel()
	{
		return parent::getLabel();
	}


}