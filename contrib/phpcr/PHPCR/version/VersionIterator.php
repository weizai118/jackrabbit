<?php

/*
 * Copyright 2004-2005 The Apache Software Foundation or its licensors,
 *                     as applicable.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */


require_once 'PHPCR/RangeIterator.php';
require_once 'PHPCR/version/Version.php';
require_once 'PHPCR/NoSuchElementException.php';


/**
 * Allows easy iteration through a list of <code>Version</code> objects
 * with <code>nextNode</code> as well as a <code>skip</code> method inherited from
 * <code>RangeIterator</code>.
 *
 * @author Markus Nix <mnix@mayflower.de>
 * @package phpcr
 * @subpackage version
 */
interface VersionIterator extends RangeIterator
{
     /**
      * Returns the next <code>Version</code> in the iteration.
      *
      * @return the next <code>Version</code> in the iteration.
      * @throws NoSuchElementException if iteration has no more <code>Version</code>s.
     */
    public function nextVersion();
}

?>