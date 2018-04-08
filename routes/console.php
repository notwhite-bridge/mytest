<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('create:controller {namespace} {name}',function(){

    $namespace = $this->argument('namespace');
    $name = $this->argument('name');
    $content = File::get('packages/Controller.txt');
    $nextContent = str_replace('{namespace}',$namespace,$content);
    $final = str_replace('{name}',$name,$nextContent);
    File::put("packages/Controllers/{$namespace}/{$name}.php",$final);
    $this->info('smile');
})->describe('创建自定义控制器');


