<?php

/**
 * "Bingo" class which contains two functions which further
 * load quotes from another file
 *
 * @author Adam Jesse
 */
class Bingo extends Application {
    
    /**
     * Loads and renders the fifth record from Quotes.php
     */
    function index()
    {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get(5);
        
        $who = $source['who'];
        $what = $source['what'];
        $mug = $source['mug'];
        
        $this->data['who'] = $who;
        $this->data['what'] = $what;
        $this->data['mug'] = $mug;
        
        $this->render();
    }
    
    /**
     * Loads and renders the sixth record from Quotes.php
     */
    function wisdom() 
    {
        
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get(6);
        
        $who = $source['who'];
        $what = $source['what'];
        $mug = $source['mug'];
        
        $this->data['who'] = $who;
        $this->data['what'] = $what;
        $this->data['mug'] = $mug;
        
        $this->render();
     }
}