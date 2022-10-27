<?php
namespace App\Http\Controllers;
   
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
   
class BotManController extends Controller
{
    public function index()
    {
        return view('chatbot/index');
    }
    public function handle()
    {
        $botman = app('botman');
   
        $botman->hears('{message}', function($botman, $message) {
   
            if ($message == 'Hi') {
                $this->askName($botman);
            }
            
            else{
                $botman->reply("comment nous pouvons vous aider");
            }
            if ($message == 'les frais des etudes') {
                $this->askName($botman);
                $botman->reply("3000dt par ans");
            }
            
            else{
                $botman->reply("3000dt par ans");
            }
            

            
        });
   
        $botman->listen();
    }
  

   
    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {
   
            $name = $answer->getText();
   
            $this->say('Nice to meet you '.$name);
        });
    
    }
   
}