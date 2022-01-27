<?php
namespace App\Controllers;
class RunScriptController
{
    public functiion run()
    {
    
    //runScript function
    //1st parameter:filename under scripts folder STRING
    //2nd parameter: parameters STRING
    //3rd parameter: run as sudo BOOL
    
    $script=runScript("benkimim.py","",false);
    
    return $script;
    }
}
