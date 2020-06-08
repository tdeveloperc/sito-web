<?php
    namespace App\Controller;
    use App\Controller\AppController;

class FiltersController extends AppController
    {
    
        
        public function filter($nome = null, $city = null, $price = null)
        {

            if ($this->request->is('post')) {
                //$array = $this->request->getData();
                $nome = $this->request->getData('nome');
                $city = $this->request->getData('city');
                $rangePrezzo = $this->request->getData('price');
                 list($pricemin,$pricemax) = explode('-',$rangePrezzo);
                 $event = new EventsController();
                 $where = [];
                 if(!empty($nome)){
                   $where['title ='] = $nome;
                 }
                 if(!empty($rangePrezzo)){
                    $where['price > '] = $pricemin;
                    $where['price <='] = $pricemax;
                 }

                 if(!empty($city)){
                    $where['city ='] = $city;
                }
            
                if(empty($where)){
                    $where['price > '] = '0';
                }

                $resultsArray = $event->Events
                ->find()
                ->where($where)
                ->toList();
                
                $this->set('filter', $resultsArray);
            
            }
        

        }
        
      
       
        
    }

?>