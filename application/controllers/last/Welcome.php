<?php

/* 
 * "Welcome" class that loads and renders the last quote
 * from a seperate file
 * 
 * By: Adam Jesse
 */
class Welcome extends Application {
    
        function index() {
        
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->last();
        
        $who = $source['who'];
        $what = $source['what'];
        $mug = $source['mug'];
        
        $this->data['who'] = $who;
        $this->data['what'] = $what;
        $this->data['mug'] = $mug;
        
        $this->render();
     }
}
