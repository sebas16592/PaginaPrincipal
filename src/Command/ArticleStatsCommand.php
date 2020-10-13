<?php

namespace App\Command;

use App\Service\SlackClient;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class ArticleStatsCommand extends Command
{
    protected static $defaultName = 'article:stats';
    /**
     *
     */
    private $slack;

    /**
     * ArticleStatsCommand constructor.
     * @param null|string $name
     * @param SlackClient $slack
     */
    public function __construct(SlackClient $slack, ?string $name = null)
    {
        parent::__construct($name);
        $this->slack = $slack;
    }

    protected function configure()
    {
        $this
            ->setDescription('Devuelve algunas estadisticas del articulo.')
            ->addArgument('slug', InputArgument::OPTIONAL, 'El slug del articulo')
            ->addOption('format', null, InputOption::VALUE_REQUIRED, 'El formato de salida', 'text')
        ;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $slug = $input->getArgument('slug');
        $this->slack->sendMessage('Sebastian', 'desde comando');
        $data = [
          'slug' => $slug,
          'hearts' => rand(10, 100)
        ];

        switch ($input->getOption('format')) {
            case 'text':
                $rows = [];
                foreach ($data as $key => $val) {
                    $rows[] = [$key, $val];
                }
                $io->table(['key', 'Value'], $rows);
                //$io->listing($data);
                break;
            case 'json':
                $io->write(json_encode($data));
                break;
            default:
                throw new \Exception('Formato no valudo.');
        }
    }
}
