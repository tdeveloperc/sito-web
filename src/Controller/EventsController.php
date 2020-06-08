<?php
    namespace App\Controller;
    use App\Controller\AppController;
use App\Model\Entity\Review;

class EventsController extends AppController
    {
    
        public function index()
        {
            $this->set('events', $this->Events->find('all'));
       
                
        }
        
        public function detail($id = Null)
        {
            
            $event = $this->Events->get($id);
            $this->set('event', $event);
            $controllerReview = new ReviewController();

            $resultsArray = $controllerReview->Review
            ->find()
            ->where(['id_event =' => $id])
            ->toList();
            
            $this->set('recensioni', $resultsArray);
            

            if ($this->request->is('post')) {
                
             
                $controllerReview->review($this->request->getData());
                
                return $this->redirect(['action' => 'detail', $id]);

            }
        }
        
        public function category($type)
        {
            $resultsArray = $this->Events
            ->find()
            ->where(['type =' => $type])
            ->toList();
            
            $this->set('events', $resultsArray);
        }
 
    }

?>