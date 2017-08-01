<?php 
namespace Migration;
use League\Csv\Reader;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ReadCSV extends Command
{
    protected function configure()
    {
        $this
        // the name of the command (the part after "bin/console")
        ->setName('app:create-user')

        // the short description shown while running "php bin/console list"
        ->setDescription('Creates a new user.')

        // the full command description shown when running the command with
        // the "--help" option
        ->setHelp('This command allows you to create a user...')
    ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // ...
		$output->writeln([
        '<info>User Creator</info>',
        '<error>============</error>',
        '',
    ]);
		if(file_exists('/home/hbwsl/MigrationTry/1.csv'))
		{
			$csv = Reader::createFromPath('/home/hbwsl/MigrationTry/1.csv');

			//get the first row, usually the CSV header
			$results = $csv->fetchAssoc();
			foreach ($results as $row) {
			//echo $row;
				print_r($row);
			}	
		}
    }
}
