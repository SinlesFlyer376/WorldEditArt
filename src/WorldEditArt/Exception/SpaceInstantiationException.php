<?php

/*
 * WorldEditArt
 *
 * Copyright (C) 2016 PEMapModder
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PEMapModder
 */

namespace WorldEditArt\Exception;

class SpaceInstantiationException extends WorldEditArtExplainableException{
	public function __construct(string $message, array $params = []){
		parent::__construct($message, $params);
	}
}
