<?php

/**
 * "Guess" class which contains another function which
 * load quotes from another file
 *
 * @author Adam Jesse
 */

class Guess extends Application {
    
        /**
         * Loads and renders the fourth quote from Quotes.php
         */
        function index() 
        {
            $this->data['pagebody'] = 'justone';
            $source = $this->quotes->get(4);
        
            $who = $source['who'];
            $what = $source['what'];
            $mug = $source['mug'];
        
            $this->data['who'] = $who;
            $this->data['what'] = $what;
            $this->data['mug'] = $mug;
        
            $this->render();
            
        }
}