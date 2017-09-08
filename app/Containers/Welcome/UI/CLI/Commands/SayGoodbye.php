<?php

namespace App\Containers\Welcome\UI\CLI\Commands;

use App\Ship\Parents\Commands\ConsoleCommand;

/**
 * Class SayGoodbye
 *
 * @package App\Containers\Welcome\UI\CLI\Commands
 */
class SayGoodbye extends ConsoleCommand
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'apiato:goodbye';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Say goodbye';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        echo "Good bye from Apiato\n";
    }
}
