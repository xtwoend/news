<?php namespace Xtwoend\News\Relations;
    	
/**
 * Part of the package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    
 * @version    0.1
 * @author     Abdul Hafidz Anshari
 * @license    BSD License (3-clause)
 * @copyright  (c) 2014 
 */

trait PostRelations {	
	
	/**
	 * Model Post
	 */	
	protected static $category = 'Xtwoend\News\Categories\Category';

	/**
	 * 
	 * @params
	 */	
	public function category()
	{
		return $this->belongsTo(static::$category, 'post_category');
	}
	
}