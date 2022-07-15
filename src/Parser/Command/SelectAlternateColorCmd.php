<?php
namespace ReceiptPrintHq\EscposTools\Parser\Command;

use ReceiptPrintHq\EscposTools\Parser\Command\CommandOneArg;
use ReceiptPrintHq\EscposTools\Parser\Command\InlineFormattingCmd;
use ReceiptPrintHq\EscposTools\Parser\Context\InlineFormatting;

class SelectAlternateColorCmd extends CommandOneArg implements InlineFormattingCmd
{

    public function applyToInlineFormatting(InlineFormatting $formatting)
    {
		$arg = $this -> getArg();
		if ($arg === 1) {
			$formatting -> setColor2(1);
		} else {
			$formatting -> setColor2(0);
		}

    }
}

