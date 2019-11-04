<?php

namespace App\Closures;

class Notification
{

    public function __construct()
    {
        $this->platforms = ['Pchome', 'Yahoo', 'Ruten', 'Shopee'];
        $this->selected = [];
    }

    public function all(){
        $this->selected = $this->platforms;
        return $this;
    }

    public function attach($platforms)
    {
        if(!is_array($platforms)) $platforms = [$platforms];

        foreach($platforms as $platform){
            if(in_array($platform, $this->platforms) && !in_array($platform, $this->selected)) array_push($this->selected, $platform);
        }

        return $this;
    }

    public function detach($platforms)
    {
        if(!is_array($platforms)) $platforms = [$platforms];

        foreach($platforms as $platform){
            $index = array_search($platform, $this->selected);
            if($index !== false) unset($this->selected[$index]);
        }

        return $this;
    }

}
