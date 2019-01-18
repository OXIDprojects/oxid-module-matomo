<?php
/**
 * [bla] matomo
 * Copyright (C) 2018  bestlife AG
 * info:  oxid@bestlife.ag
 *
 * This program is free software;
 * you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
 * either version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>
 *
 * @author      bestlife AG <oxid@bestlife.ag>
 * @author      Klaus Weidenbach
 * @author      Rafael Dabrowski
 * @author      Marat Bedoev
 * @link        http://www.bestlife.ag
 *
 * @license     GPLv3
 */

namespace Bla\Matomo\Application\Core;

use Bla\Matomo\Application\Files\Matomo;
use OxidEsales\Eshop\Core\Registry;

class UtilsView extends UtilsView_parent
{

	public function getSmarty ($blReload = false)
	{
		parent::getSmarty($blReload);
		self::$_oSmarty->register_function('matomo', [ $this, 'smarty_function_matomo' ]);
		return self::$_oSmarty;
	}

	public function smarty_function_matomo ( $params, &$smarty )
	{
		return Registry::get(Matomo::class)->imageTracking($params);
	}
}