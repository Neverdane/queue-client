<?php

namespace ReputationVIP\QueueClient\Exception;

class NoticeException extends \ErrorException
{
    /**
     * NoticeException constructor.
     * @param string $message
     * @param int $code
     * @param int $severity
     * @param string $filename
     * @param int $lineno
     * @param \Exception $previous
     */
    public function __construct($message = "", $code = 0, $severity = 1, $filename = __FILE__, $lineno = __LINE__, $previous = null) {
        parent::__construct($message, $code, $severity, $filename, $lineno, $previous);
        $this->severity = E_NOTICE;
    }
}
