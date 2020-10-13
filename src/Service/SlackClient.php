<?php
/**
 * Created by  paginapersonal
 * User: Sebastian Hernandez
 * Date: 22/04/2020
 * Time: 9:01 PM
 */

namespace App\Service;


use App\Helper\LoggerTrait;
use Nexy\Slack\Client;

class SlackClient
{
    use LoggerTrait;
    /**
     * @var Client
     */
    private $slack;

    /**
     * SlackClient constructor.
     */
    public function __construct(Client $slack)
    {
        $this->slack = $slack;
    }

    /**
     * @param string $from
     * @param string $message
     * @throws \Http\Client\Exception
     */
    public function sendMessage(string $from, string $message)
    {
        $this->logInfo('Beaming a messaage to slack!', ['message' => $message]);
        $message = $this->slack->createMessage()
            ->from($from)
            ->withIcon(':ghost:')
            ->setText($message);
        $this->slack->sendMessage($message);
    }
}