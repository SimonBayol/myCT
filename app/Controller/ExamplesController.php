<?php

class ExamplesController extends AppController {
	public function beforeFilter () {
		parent::beforeFilter(); // chiamo anche il callback beforeFilter dal parent per ottenere un'autorizzazione per l'utente loggato da tutte le viste $this->Auth->allow('index','view'); per tutti i Model 
	}
	
	public function index () {
		$data = [
            'User' => [
                'identity'  => 'Bayol Simon',
                'age'       => 31,
                'Address'   => [
                    'street' => '136 rue Garbiel Peri',
                    'city'   => 'Saint-Denis',
                    'zip'    => '93200',
                ],
                'Description'=> [
                    'size'      => 1.85,
                    'size_unity'=> 'meter',
                ]
            ]
        ];

        $_html = "<h3>Ceci est un text 3</h3>
<p>paragraph avec <a href=\"#\">lien</a></p>
Liste
<ul>
    <li>element 1</li>
    <li>element 2</li>
    <li>element 3</li>
</ul>";

        $this->set('sub_title', 'welcome in cake Twig');
        $this->set('testing_string', 'I am the content of a testing var');
        $this->set('_html', $_html);
        $this->set('data', $data);
	}
    public function test_url ($param1=''){
        $params = [];
        $d = new DateTime();
        for($i=0; $i<5; $i++){
            $dx = clone $d;
            $params[] = [
                'text' => "Dans $i jours nous seront le : ",
                'date' => $dx->modify("+ $i days")->format('Y-m-d H:i:s'),
            ];
        }
        $this->set('param1', $param1);
        $this->set('params', $params);
    }
}

?>
