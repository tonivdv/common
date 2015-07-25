<?php
/*
 * This file is part of the prooph/common.
 * (c) 2014-2015 prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * Date: 7/26/15 - 12:08 AM
 */

namespace Prooph\Common\Messaging;

/**
 * Interface MessageFactory
 *
 * @package Prooph\Common\Messaging
 * @author Alexander Miertsch <kontakt@codeliner.ws>
 */
interface MessageFactory 
{
    /**
     * @param string $messageName
     * @param array $messageData
     * @return DomainMessage
     */
    public function createMessageFromArray($messageName, array $messageData);
} 