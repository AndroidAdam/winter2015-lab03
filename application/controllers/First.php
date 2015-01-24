<?php

/* 
 * 
 * "First" class which contains functions to load the first
 * and any specified quote from a seperate file
 *
 * @author Adam Jesse
 */

class First extends Application
{
    
     function index() 
    {
         
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->first();
        
        $who = $source['who'];
        $what = $source['what'];
        $mug = $source['mug'];
        
        $this->data['who'] = $who;
        $this->data['what'] = $what;
        $this->data['mug'] = $mug;
        
        $this->render();
     }
     
     /**
     * Loads and renders the first quote from Quotes.php
     */
     function zzz() 
     {
         
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->first();
        
        $who = $source['who'];
        $what = $source['what'];
        $mug = $source['mug'];
        
        $this->data['who'] = $who;
        $this->data['what'] = $what;
        $this->data['mug'] = $mug;
        
        $this->render(); 
     }
     
     /**
     * Loads and renders any desired quote from Quotes.php
     */
     function gimme($id) 
     {
         
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get($id);
        $who = $source['who'];
        
        $what = $source['what'];
        $mug = $source['mug'];
        
        $this->data['who'] = $who;
        $this->data['what'] = $what;
        $this->data['mug'] = $mug;
        
        $this->render(); 
     }
}