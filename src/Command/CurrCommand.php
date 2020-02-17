<?php
namespace  App\Command;

use App\Controller\ApiCurr;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;

class CurrCommand extends Command{
    private $apiController;
    public function __construct(ApiCurr $apiController)
    {
        $this->apiController = $apiController;

        parent::__construct();
    }


    protected function configure()
    {
       $this
           ->setName("app:currCommand")
           ->setDescription("Kur bilgilerini DB ye kayıt ediyoruz.")
           ->setHelp("php bin/console app:help şeklinde çalıştırılabilir.");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

      $output->writeln("Başarılı bir şekilde kayıt edildi");

        $this->apiController->index();
        $output->write('Status: OK!');
    }
}