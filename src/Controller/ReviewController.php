<?php namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class ReviewController extends AppController
{
   
    public function review($reviews)
    {
        $review = $this->Review->newEntity();
        if ($this->request->is('post')) {
            // Prior to 3.4.0 $this->request->data() was used.
            $review = $this->Review->patchEntity($review, $reviews);
            if ($this->Review->save($review)) {
                return $this->Flash->success(__('La recensione è stata inviata.', ['key' => 'message']));
            }
            $this->Flash->error(__('Recensione fallita.'));
        }
        $this->set('review', $review);
    }

    public function getReview()
    {
       
        
    }
    


 
    
}
?>