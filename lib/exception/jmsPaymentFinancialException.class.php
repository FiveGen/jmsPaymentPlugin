<?php
/*
 * Copyright 2010 Johannes M. Schmitt
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * This exception is thrown whenever a financial transaction fails.
 * This is the most general exception; use one of the more specific
 * exceptions whenever possible as this allows the backend systems
 * to handle the exception and update persistent object more exactly.
 * 
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class jmsPaymentFinancialException extends jmsPaymentException
{
	
}