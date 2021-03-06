<?php
/**
 * Jaxl (Jabber XMPP Library)
 *
 * Copyright (c) 2009-2012, Abhinav Singh <me@abhinavsingh.com>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 * * Redistributions of source code must retain the above copyright
 * notice, this list of conditions and the following disclaimer.
 *
 * * Redistributions in binary form must reproduce the above copyright
 * notice, this list of conditions and the following disclaimer in
 * the documentation and/or other materials provided with the
 * distribution.
 *
 * * Neither the name of Abhinav Singh nor the names of his
 * contributors may be used to endorse or promote products derived
 * from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRIC
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 */

// TODO: support for php unit and add more tests
error_reporting(E_ALL);
require_once "jaxl.php";

/**
 * 
 * @author abhinavsingh
 *
 */
class XMPPMsgTest extends PHPUnit_Framework_TestCase {
	
	function test_xmpp_msg() {
		$msg = new XMPPMsg(array('to'=>'2@w.c', 'from'=>'-0@q.p/~', 'type'=>'chat'), 'hi', 'thread1');

		echo $msg->to.PHP_EOL;
		echo $msg->to_node.PHP_EOL;
		echo $msg->from.PHP_EOL;
		echo $msg->to_string().PHP_EOL;
		
		$msg->to = '4@w.c/sp';
		$msg->body = 'hello world';
		$msg->subject = 'some subject';
		
		echo $msg->to.PHP_EOL;
		echo $msg->to_node.PHP_EOL;
		echo $msg->from.PHP_EOL;
		echo $msg->to_string().PHP_EOL;
	}
	
}
