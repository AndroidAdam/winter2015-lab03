<?php

class Bingo extends Application {
    
        $source = $this->quotes->first();
        
        $who = $source['who'];
        $what = $source['what'];
        $mug = $source['mug'];
        
        $this->data['who'] = $who;
        $this->data['what'] = $what;
        $this->data['mug'] = $mug;
        
        $this->render();
}