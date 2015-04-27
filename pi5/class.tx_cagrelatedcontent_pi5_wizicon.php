<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2009 Jens Eipel <j.eipel@connecta.ag>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/




/**
 * Class that adds the wizard icon.
 *
 * @author	Jens Eipel <j.eipel@connecta.ag>
 * @package	TYPO3
 * @subpackage	tx_cagrelatedcontent
 */
class tx_cagrelatedcontent_pi5_wizicon {

					/**
					 * Processing the wizard items array
					 *
					 * @param	array		$wizardItems: The wizard items
					 * @return	Modified array with wizard items
					 */
					function proc($wizardItems)	{
						global $LANG;

						$LL = $this->includeLocalLang();

						$wizardItems['plugins_tx_cagrelatedcontent_pi5'] = array(
							'icon'=>t3lib_extMgm::extRelPath('cag_relatedcontent').'pi5/ce_wiz.gif',
							'title'=>$LANG->getLLL('pi5_title',$LL),
							'description'=>$LANG->getLLL('pi5_plus_wiz_description',$LL),
							'params'=>'&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=cag_relatedcontent_pi5'
						);

						return $wizardItems;
					}

					/**
					 * Reads the [extDir]/locallang.xml and returns the $LOCAL_LANG array found in that file.
					 *
					 * @return	The array with language labels
					 */
					function includeLocalLang()	{
						$llFile = t3lib_extMgm::extPath('cag_relatedcontent').'locallang.xml';
						$llParser = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Localization\\Parser\\LocallangXmlParser');
						$LOCAL_LANG = $llParser->getParsedData($llFile, $GLOBALS['LANG']->lang);
						
						return $LOCAL_LANG;
					}
				}



if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/cag_relatedcontent/pi5/class.tx_cagrelatedcontent_pi5_wizicon.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/cag_relatedcontent/pi5/class.tx_cagrelatedcontent_pi5_wizicon.php']);
}

?>
