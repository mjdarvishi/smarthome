<?php

namespace App\Console\Commands;

use App\Air;
use Storage;

use Illuminate\Console\Command;
use Symfony\Component\HttpFoundation\File\File;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this is my custom command for the first time';

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
          redirect(url('api/senario'));
//        $userId = $this->argument('user');
//        $this->info('this is your id'.$userId);
//        $myfile = fopen("1.txt", "a") or die("Unable to open file!");
//        $txt = 'this is your id'.$userId."\n";
//        fwrite($myfile, $txt);
//        fclose($myfile);

    }
}
