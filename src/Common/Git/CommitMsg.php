<?php

namespace Toanna\SAFLaravelToolkit\Common\Git;

use PhpGitHooks\Infrastructure\Hook\CommitMsg as BaseCommitMsg;
use PhpGitHooks\Module\Git\Contract\Exception\InvalidCommitMessageException;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CommitMsg extends BaseCommitMsg
{
    const INVALID_MAX_LENGTH = "Maximum 50 characters long summary commit message!";
    const INVALID_MIN_LENGTH = "Minimum 50 characters long summary commit message!";
    const INVALID_ISSUE      = "Invalid issue!";
    const INVALID_MESSAGE    = "Capitalize the subject line";
    const INVALID_END_COMMIT = "Do not end the subject line with a period!";
    const VALID_COMMIT       = "Commit pattern: {issue_number} {message} \nExample: #68 Add IFileCreater";

    public function doRun(InputInterface $input, OutputInterface $output)
    {
        $this->validateMessage($this->getMessage($input));
    }

    protected function getMessage(InputInterface $input)
    {
        $message        = file_get_contents($input->getFirstArgument());
        $messageExplode = explode("\n", $message);
        return $messageExplode[0];
    }

    protected function validateMessage(string $message)
    {
        if (!$this->isValidMaxLength($message)) {
            $this->genericMessage(self::INVALID_MAX_LENGTH);
        }

        if (!$this->isValidMinLeng($message)) {
            $this->genericMessage(self::INVALID_MIN_LENGTH);
        }

        if (!$this->isValidIssue($message)) {
            $this->genericMessage(self::INVALID_ISSUE);
        }

        if (!$this->isValidMassage($message)) {
            $this->genericMessage(self::INVALID_MESSAGE);
        }

        if (!$this->isValidEndCommit($message)) {
            $this->genericMessage(self::INVALID_END_COMMIT);
        }

    }

    protected function isValidMaxLength($message)
    {
        return strlen($message) < 50;
    }

    protected function isValidMinLeng(string $message)
    {
        return strlen($message) > 10;
    }

    protected function isValidIssue(string $message)
    {
        $messageExplode = explode(" ", $message);
        if (!preg_match('/^#([0-9]+)$/', $messageExplode[0])) {
            return false;
        }
        return true;
    }

    protected function isValidMassage(string $message)
    {
        $messageExplode = explode(" ", $message);
        if (!isset($messageExplode[1])) {
            return false;
        }
        if (!preg_match('/^[A-Z]/', $messageExplode[1])) {
            return false;
        }
        return true;
    }

    protected function isValidEndCommit(string $message)
    {
        if (preg_match('/\.$/', $message)) {
            return false;
        }
        return true;
    }

    protected function genericMessage($errorConst)
    {
        throw new InvalidCommitMessageException(
            sprintf(
                "%s\n%s",
                $errorConst,
                self::VALID_COMMIT
            )
        );
    }
}
